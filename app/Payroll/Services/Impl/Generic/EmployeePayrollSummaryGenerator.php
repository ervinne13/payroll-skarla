<?php

namespace App\Payroll\Services\Impl\Generic;

use App\Models\HRIS\Employee;
use App\Models\Payroll\EmployeePayrollSummary;
use App\Models\Payroll\Processor\PayrollDate;
use App\Models\Timekeeping\Chronolog;
use App\Payroll\Enum\HolidayType;
use App\Payroll\Enum\TimeBasedPaymentUOM;
use App\Payroll\Services\Payroll\PayrollSummaryGenerator;
use App\Payroll\Services\Payroll\TimeBasedSalaryConverter;
use DateTime;
use Exception;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Description of EmployeePayrollSummaryGenerator
 *
 * TODO: Validate tightly coupled TimeBasedSalaryConverter 
 * 
 * @author ervinne
 */
class EmployeePayrollSummaryGenerator implements PayrollSummaryGenerator {

    use DatabaseTransactions;

    const ISO_DATETIME = "Y-m-d H:i:s";

    public function generatePayrollSummary(Employee $employee, $payrollDates) {

        // <editor-fold defaultstate="collapsed" desc="Validation">
        if (count($payrollDates) < 1) {
            throw new Exception("Payroll dates empty.");
        }
        // </editor-fold>

        $payrollSummary                = new EmployeePayrollSummary();
        $payrollSummary->employee_code = $employee->code;

        $payrollSummary->working_day_count     = 0;
        $payrollSummary->present_day_count     = 0;
        $payrollSummary->absent_day_count      = 0;
        $payrollSummary->half_day_absent_count = 0;
        $payrollSummary->minutes_late          = 0;

        $from = $payrollDates[0]->date;
        $to   = $payrollDates[count($payrollDates) - 1]->date;

        $chronoLogs        = $employee->chronoLog()->DateRange($from, $to)->get();
        $indexedChronoLogs = $this->indexChronoLogs($chronoLogs);

        foreach ($payrollDates AS $payrollDate) {
            /* @var $payrollDate PayrollDate */
            $this->processPayrollDateToSummary($payrollSummary, $payrollDate, $employee, $indexedChronoLogs);
        }

        $this->assignRates($payrollSummary, $employee);

        return $payrollSummary;
    }

    /**
     * Requires the following fields from $employeeSummary be filled up:
     *  working_day_count
     * @param EmployeePayrollSummary $payrollSummary
     * @param Employee $employee
     * @return type
     */
    protected function assignRates(EmployeePayrollSummary &$payrollSummary, Employee $employee) {

        $basicRate    = $employee->basic_salary;
        $basicRateUOM = $employee->basic_salary_uom;

        $requiredHoursDaily = $employee->policy->required_hours_daily;

        $timebasedSalaryConverter = new TimeBasedSalaryConverter($payrollSummary->working_day_count, $requiredHoursDaily);
        $generatedRates           = $timebasedSalaryConverter->convertToAll($basicRate, $basicRateUOM);

        $payrollSummary->monthly_rate      = $generatedRates[TimeBasedPaymentUOM::MONTHLY];
        $payrollSummary->semi_monthly_rate = $generatedRates[TimeBasedPaymentUOM::SEMI_MONTHLY];
        $payrollSummary->daily_rate        = $generatedRates[TimeBasedPaymentUOM::DAILY];
        $payrollSummary->hourly_rate       = $generatedRates[TimeBasedPaymentUOM::HOURLY];
        $payrollSummary->minute_rate       = $generatedRates[TimeBasedPaymentUOM::MINUTE];

        return $generatedRates;
    }

    protected function processPayrollDateToSummary(EmployeePayrollSummary &$payrollSummary, PayrollDate $payrollDate, Employee $employee, $indexedChronoLogs) {
        if ($payrollDate->isRestDay) {
            //  nothing to do here
            return;
        }

        $dateIndex = $payrollDate->date->format("Y-m-d");

        //  regular holidays are not working days
        if ($payrollDate->holidayType !== HolidayType::REGULAR) {
            $payrollSummary->working_day_count ++;
        }

        if (array_key_exists($dateIndex, $indexedChronoLogs)) {
            $payrollSummary->present_day_count ++;

            //  employee is present, compute lates & undertimes
            $requiredHoursDaily = $employee->policy->required_hours_daily;
            $latesAndUndertime  = $this->getLatesAndUnderTime($employee, $payrollDate, $indexedChronoLogs[$dateIndex], $dateIndex);

            $halfDayMinutes = (($requiredHoursDaily / 2) * 60);

//            echo "\n{$dateIndex} - {$latesAndUndertime} >= {$halfDayMinutes}\n";

            if ($latesAndUndertime >= $halfDayMinutes) {
                $payrollSummary->half_day_absent_count ++;

                //  if the employee did half day overtime and is still late/did undertime
                $payrollSummary->minutes_late += $this->getHalfDayAbsentLatesAndUnderTime($indexedChronoLogs[$dateIndex], $requiredHoursDaily, $dateIndex);
            } else {
                $payrollSummary->minutes_late += $latesAndUndertime;
            }
        } else if ($payrollDate->holidayType !== HolidayType::REGULAR) {
            //  only count absences for non regular holiday
            //  special holiday is still no work no pay, but multipliers will apply
            $payrollSummary->absent_day_count ++;
        }

        return $payrollSummary;
    }

    public function getHalfDayAbsentLatesAndUnderTime(ChronoLog $chronoLog, $requiredHoursDaily, $dateIndex) {

        $timeIn  = new DateTime("{$dateIndex} {$chronoLog->time_in}");
        $timeOut = new DateTime("{$dateIndex} {$chronoLog->time_out}");

        $minutesPresent       = intval((strtotime($timeOut->format(self::ISO_DATETIME)) - strtotime($timeIn->format(self::ISO_DATETIME))) / 60);
        $requiredMinutesDaily = ($requiredHoursDaily / 2) * 60;

        //  if the employee did not satisfy the minumum required minutes daily (half)
        if ($minutesPresent - $requiredMinutesDaily < 0) {
            return abs($minutesPresent - $requiredMinutesDaily);
        } else {
            //  employee not late or is early, early time in (or overtime) is not
            //  counted
            return 0;
        }
    }

    public function getLatesAndUnderTime(Employee $employee, PayrollDate $payrollDate, ChronoLog $chronoLog, $dateIndex) {

        $requiredIn    = new DateTime("{$dateIndex} {$payrollDate->requiredTimeIn}");
        $requiredOut   = new DateTime("{$dateIndex} {$payrollDate->requiredTimeOut}");
        $actualTimeIn  = new DateTime("{$dateIndex} {$chronoLog->time_in}");
        $actualTimeOut = new DateTime("{$dateIndex} {$chronoLog->time_out}");

        //  / 60 since strtotime results in milliseconds
        $lateInMinutes      = intval((strtotime($actualTimeIn->format(self::ISO_DATETIME)) - strtotime($requiredIn->format(self::ISO_DATETIME))) / 60);
        $undertimeInMinutes = intval((strtotime($requiredOut->format(self::ISO_DATETIME)) - strtotime($actualTimeOut->format(self::ISO_DATETIME))) / 60);

        //  check to see if grace period can negate lates
        if ($lateInMinutes > 0) {
            $gracePeriod = $employee->policy->grace_period_minutes;
            //  grace period is applicable if late is less than the grace period
            //  AND the employee did overtime more than or equal to the minutes
            //  late
            if ($lateInMinutes < $gracePeriod && abs($undertimeInMinutes) >= $lateInMinutes) {
                //  saved by grace period
                return 0;
            }
        }

        //  do not negate lates (and vice versa) by non approved overtime if 
        //  it's not applicable for grace period
        if ($undertimeInMinutes < 0) {
            $undertimeInMinutes = 0;
        }

        if ($lateInMinutes < 0) {
            $lateInMinutes = 0;
        }

        return $lateInMinutes + $undertimeInMinutes;
    }

    /**
     * Creates an array of EmployeeOvertimeSummary objects representing the overtime.
     * Up to two employee overtime, 1 for the real overtime, and another for any 
     * overtime falling under shift differential
     * 
     * @param Employee $employee
     * @param PayrollDate $payrollDate
     * @param \App\Payroll\Services\Impl\Generic\ChronoLog $chronoLog
     * @param type $dateIndex
     * @return Array 
     *  EmployeeOvertimeSummary objects representing the overtime. Up to two employee overtime, 1 for the real overtime, and another for any overtime falling under shift differential
     */
    public function getWorkingDayOvertimeEntries(Employee $employee, PayrollDate $payrollDate, ChronoLog $chronoLog, $dateIndex) {
        
        
        
    }

    /**
     * @todo Implement
     * @param Employee $employee
     * @param type $payrollDates
     */
    protected function applyLeaves(Employee $employee, $payrollDates) {
        
    }

    /**
     * @todo Implement
     * @param Employee $employee
     * @param type $payrollDates
     */
    protected function applyOverwrites(Employee $employee, $payrollDates) {
        
    }

    protected function indexChronoLogs($chronoLogs) {
        $indexedChronoLog = [];

        foreach ($chronoLogs AS $chronoLog) {
            /* @var $chronoLog Chronolog */
            $indexedChronoLog[$chronoLog->entry_date] = $chronoLog;
        }

        return $indexedChronoLog;
    }

}
