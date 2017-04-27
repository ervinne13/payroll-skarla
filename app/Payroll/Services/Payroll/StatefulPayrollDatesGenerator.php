<?php

namespace App\Payroll\Services\Payroll;

use App\Models\HRIS\Holiday;
use App\Models\HRIS\WorkSchedule;
use App\Models\HRIS\WorkScheduleShift;
use App\Models\Payroll\Processor\PayrollDate;
use DateInterval;
use DatePeriod;
use DateTime;

/**
 *
 * Collection object for payroll dates. This contains methods for overwriting
 * payroll dates and applying leaves ideal for containing common data 
 * (payroll dates applicable to the period) while making them adjust according to
 * each employee.
 * 
 * @author ervinne
 */
class StatefulPayrollDatesGenerator {

    protected $generatedPayrollDates = [];

    /** @var WorkSchedule */
    protected $applicableWorkSchedule = NULL;

    /** @var array An array key value pair dates and holiday types (App\Payroll\Enum\HolidayType) */
    protected $holidays = [];

    /** @var DateTime */
    protected $periodFrom;

    /** @var DateTime */
    protected $periodTo;

    /**
     * @param WorkSchedule $workSchedules the applicable work schedule for this payroll date generator
     * @param DateTime $from
     * @param DateTime $to     
     */
    public function __construct(WorkSchedule $workSchedules, DateTime $from, DateTime $to) {
        $this->applicableWorkSchedule = $workSchedules;

        $this->periodFrom = $from;
        $this->periodTo   = $to;
    }

    public function generatePayrollDates() {

        $interval = DateInterval::createFromDateString('1 day');
        $period   = new DatePeriod($this->periodFrom, $interval, $this->periodTo);

        //  TODO: make a map of holidays as well
        $mappedShifts = $this->getMappedShifts();

        //  1 = Sunday, up to 7 = Saturday
        foreach ($period AS $payrollDate) {
            //  to comply to 1 = sunday, add 1
            $dayofweek       = intval($payrollDate->format("w")) + 1;
            $applicableShift = $mappedShifts[$dayofweek];

            array_push($this->generatedPayrollDates, PayrollDate::CreateFromDateShiftAndHoliday($payrollDate, $applicableShift));
        }

        return $this->generatedPayrollDates;
    }

    /**
     * Will return a key value pair of shifts where key = day of week (1 = Sunday)
     * and the value = Shift object
     */
    private function getMappedShifts() {
        $workScheduleShifts = $this->applicableWorkSchedule->workScheduleShifts;
        $map                = [];

        foreach ($workScheduleShifts AS $workScheduleShift) {
            /* @var $payrollDate WorkScheduleShift */
            $map[$workScheduleShift->week_day] = $workScheduleShift->shift;
        }

        return $map;
    }

    /**
     * 
     * @param Array $holidays An array of App\Models\HRIS\Holiday objects
     */
    public function getWithAppliedHolidays($holidays) {

        $payrollDates = $this->generatedPayrollDates;

        foreach ($holidays AS $holiday) {
            /* @var $holiday Holiday */
            for ($i = 0; $i < count($payrollDates); $i ++) {
                /* @var $this->generatedPayrollDates[$i] PayrollDate */
                if ($payrollDates[$i]->date->format("Y-m-d") == $holiday->date) {
                    $payrollDates[$i]->holidayType = $holiday->holiday_type_code;
                }
            }
        }

        return $payrollDates;
    }

    /**
     * 
     * @param Array $payrollDates An array of App\Models\Payroll\Processor\EmployeePayrollDate objects
     */
    public function applyOverwrites($payrollDates) {
        
    }

    public function applyLeaves() {
        
    }

    public function getGeneratedPayrollDates() {
        return $this->generatedPayrollDates;
    }

}
