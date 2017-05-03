<?php

namespace Tests\Unit;

use App\Models\HRIS\Employee;
use App\Models\Payroll\Processor\PayrollDate;
use App\Models\Timekeeping\Chronolog;
use App\Payroll\Enum\HolidayType;
use App\Payroll\Services\Impl\Generic\EmployeePayrollSummaryGenerator;
use DateInterval;
use DatePeriod;
use DateTime;
use Tests\DatabaseTestCase;

//ROT, RDOT, HOT, SHOT, RDHOT, RDSHOT, and (night) differential counterparts postfixed by _D (ex. ROT_D)
class PayrollSummaryGeneratorTest extends DatabaseTestCase {

    const EMPLOYEE_CODE     = '20170120001';
    const DATE_FROM         = "2017-04-26";
    const DATE_TO           = "2017-05-10";
    const WORKING_DAY_COUNT = 10;   //  excluding may 1

    public function testGeneratedRates() {


        // <editor-fold defaultstate="collapsed" desc="Stubs & Mocks">
        $payrollDates = $this->getPayrollDatesStub();
        $jesusNoel    = Employee::EmployeeNumber(self::EMPLOYEE_CODE)->with('chronoLog')->first();
        // </editor-fold>        

        $payrollSummaryGenerator = new EmployeePayrollSummaryGenerator();
        $payrollSummary          = $payrollSummaryGenerator->generatePayrollSummary($jesusNoel, $payrollDates);

        //  rates
        $this->assertEquals($jesusNoel->basic_salary, $payrollSummary->monthly_rate);
        $this->assertEquals($jesusNoel->basic_salary / 2, $payrollSummary->semi_monthly_rate);
        $this->assertEquals($jesusNoel->basic_salary / (2 * self::WORKING_DAY_COUNT), $payrollSummary->daily_rate);
        $this->assertEquals($jesusNoel->basic_salary / (2 * self::WORKING_DAY_COUNT * 8), $payrollSummary->hourly_rate);
        $this->assertEquals($jesusNoel->basic_salary / (2 * self::WORKING_DAY_COUNT * 8 * 60), $payrollSummary->minute_rate);
    }

    public function testPerfectAttendance() {

        // <editor-fold defaultstate="collapsed" desc="Stubs & Mocks">
        $payrollDates = $this->getPayrollDatesStub();
        $jesusNoel    = Employee::EmployeeNumber(self::EMPLOYEE_CODE)->with('chronoLog')->first();
        // </editor-fold>        

        $payrollSummaryGenerator = new EmployeePayrollSummaryGenerator();
        $payrollSummary          = $payrollSummaryGenerator->generatePayrollSummary($jesusNoel, $payrollDates);

//        echo json_encode($payrollSummary);
        //  tardiness
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary->working_day_count);
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary->present_day_count);
        $this->assertEquals(0, $payrollSummary->absent_day_count);
        $this->assertEquals(0, $payrollSummary->half_day_absent_count);
        $this->assertEquals(0, $payrollSummary->minutes_late);
    }

    public function testAbsence() {

        // <editor-fold defaultstate="collapsed" desc="Stubs & Mocks">
        $payrollDates = $this->getPayrollDatesStub();
        $jesusNoel    = Employee::EmployeeNumber(self::EMPLOYEE_CODE)->with('chronoLog')->first();

        //  absent on april 28
        Chronolog::EmployeeCode($jesusNoel->code)->entryDate('2017-04-28')->delete();

        // </editor-fold>               

        $payrollSummaryGenerator = new EmployeePayrollSummaryGenerator();
        $payrollSummary          = $payrollSummaryGenerator->generatePayrollSummary($jesusNoel, $payrollDates);

        //  tardiness
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary->working_day_count);
        $this->assertEquals(self::WORKING_DAY_COUNT - 1, $payrollSummary->present_day_count);
        $this->assertEquals(1, $payrollSummary->absent_day_count);
        $this->assertEquals(0, $payrollSummary->half_day_absent_count);
        $this->assertEquals(0, $payrollSummary->minutes_late);

        //  ====================================================================
        //  2 days absent
        //  absent on april 27
        Chronolog::EmployeeCode($jesusNoel->code)->entryDate('2017-04-27')->delete();

        // </editor-fold>               

        $payrollSummary2Absences = $payrollSummaryGenerator->generatePayrollSummary($jesusNoel, $payrollDates);

        //  tardiness
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary2Absences->working_day_count);
        $this->assertEquals(self::WORKING_DAY_COUNT - 2, $payrollSummary2Absences->present_day_count);
        $this->assertEquals(2, $payrollSummary2Absences->absent_day_count);
        $this->assertEquals(0, $payrollSummary2Absences->half_day_absent_count);
        $this->assertEquals(0, $payrollSummary2Absences->minutes_late);
    }

    public function testHalfDayAbsences() {

        // <editor-fold defaultstate="collapsed" desc="Stubs & Mocks">
        $payrollDates = $this->getPayrollDatesStub();
        $jesusNoel    = Employee::EmployeeNumber(self::EMPLOYEE_CODE)->with('chronoLog')->first();

        $this->mockDistributedHalfDayAbsences();
        // </editor-fold>               

        $payrollSummaryGenerator = new EmployeePayrollSummaryGenerator();
        $payrollSummary          = $payrollSummaryGenerator->generatePayrollSummary($jesusNoel, $payrollDates);

        //  tardiness
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary->working_day_count);
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary->present_day_count);
        $this->assertEquals(0, $payrollSummary->absent_day_count);
        $this->assertEquals(3, $payrollSummary->half_day_absent_count);
        $this->assertEquals(16, $payrollSummary->minutes_late);
    }

    public function testDistributedLates() {

        // <editor-fold defaultstate="collapsed" desc="Stubs & Mocks">
        $payrollDates = $this->getPayrollDatesStub();
        $jesusNoel    = Employee::EmployeeNumber(self::EMPLOYEE_CODE)->with('chronoLog')->first();

        $this->mockDistributedLates();
        // </editor-fold>               

        $payrollSummaryGenerator = new EmployeePayrollSummaryGenerator();
        $payrollSummary          = $payrollSummaryGenerator->generatePayrollSummary($jesusNoel, $payrollDates);

        //  tardiness
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary->working_day_count);
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary->present_day_count);
        $this->assertEquals(0, $payrollSummary->absent_day_count);
        $this->assertEquals(0, $payrollSummary->half_day_absent_count);
        $this->assertEquals(53, $payrollSummary->minutes_late);
    }

    public function testDistributedLatesOver1Hour() {

        // <editor-fold defaultstate="collapsed" desc="Stubs & Mocks">
        $payrollDates = $this->getPayrollDatesStub();
        $jesusNoel    = Employee::EmployeeNumber(self::EMPLOYEE_CODE)->with('chronoLog')->first();

        $this->mockDistributedLatesOver1Hour();
        // </editor-fold>               

        $payrollSummaryGenerator = new EmployeePayrollSummaryGenerator();
        $payrollSummary          = $payrollSummaryGenerator->generatePayrollSummary($jesusNoel, $payrollDates);

        //  tardiness
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary->working_day_count);
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary->present_day_count);
        $this->assertEquals(0, $payrollSummary->absent_day_count);
        $this->assertEquals(0, $payrollSummary->half_day_absent_count);
        $this->assertEquals(173, $payrollSummary->minutes_late);
    }

    public function testDistributedUndertimes() {

        // <editor-fold defaultstate="collapsed" desc="Stubs & Mocks">
        $payrollDates = $this->getPayrollDatesStub();
        $jesusNoel    = Employee::EmployeeNumber(self::EMPLOYEE_CODE)->with('chronoLog')->first();

        $this->mockDistributedUndertimes();
        // </editor-fold>               

        $payrollSummaryGenerator = new EmployeePayrollSummaryGenerator();
        $payrollSummary          = $payrollSummaryGenerator->generatePayrollSummary($jesusNoel, $payrollDates);

        //  tardiness
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary->working_day_count);
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary->present_day_count);
        $this->assertEquals(0, $payrollSummary->absent_day_count);
        $this->assertEquals(0, $payrollSummary->half_day_absent_count);
        $this->assertEquals(58, $payrollSummary->minutes_late);
    }

    public function testDistributedLatesAndUndertimes() {

        // <editor-fold defaultstate="collapsed" desc="Stubs & Mocks">
        $payrollDates = $this->getPayrollDatesStub();
        $jesusNoel    = Employee::EmployeeNumber(self::EMPLOYEE_CODE)->with('chronoLog')->first();

        $this->mockDistributedLates();
        $this->mockDistributedUndertimes();
        // </editor-fold>               

        $payrollSummaryGenerator = new EmployeePayrollSummaryGenerator();
        $payrollSummary          = $payrollSummaryGenerator->generatePayrollSummary($jesusNoel, $payrollDates);

        //  tardiness
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary->working_day_count);
        $this->assertEquals(self::WORKING_DAY_COUNT, $payrollSummary->present_day_count);
        $this->assertEquals(0, $payrollSummary->absent_day_count);
        $this->assertEquals(0, $payrollSummary->half_day_absent_count);
        $this->assertEquals(111, $payrollSummary->minutes_late);
    }
    
    public function testGracePeriodEffectInLatesAndUndertimes() {

        // <editor-fold defaultstate="collapsed" desc="Stubs & Mocks">
        $jesusNoel = Employee::EmployeeNumber('20170120001')->with('chronoLog')->first();
        $dateIndex = "2017-06-13"; // any date will do

        $payrollDate                  = new PayrollDate();
        $payrollDate->requiredTimeIn  = "08:00:00";
        $payrollDate->requiredTimeOut = "17:00:00";

        $savedByGracePeriodChronoLog           = new Chronolog();
        $savedByGracePeriodChronoLog->time_in  = "08:05:00";
        $savedByGracePeriodChronoLog->time_out = "17:06:00";

        $gracePeriodVoidDueToIncompleteTime           = new Chronolog();
        $gracePeriodVoidDueToIncompleteTime->time_in  = "08:05:00";
        $gracePeriodVoidDueToIncompleteTime->time_out = "17:03:00";

        $outsideGracePeriodCompleteTime           = new Chronolog();
        $outsideGracePeriodCompleteTime->time_in  = "08:16:00";
        $outsideGracePeriodCompleteTime->time_out = "17:16:00";

        $outsideGracePeriodIncompleteTime           = new Chronolog();
        $outsideGracePeriodIncompleteTime->time_in  = "08:16:00";
        $outsideGracePeriodIncompleteTime->time_out = "17:05:00";

        $undertimeChronoLog           = new Chronolog();
        $undertimeChronoLog->time_in  = "07:55:00";
        $undertimeChronoLog->time_out = "16:56:00";

        // </editor-fold>

        $payrollSummaryGenerator = new EmployeePayrollSummaryGenerator();

        $this->assertEquals(0, $payrollSummaryGenerator->getLatesAndUnderTime($jesusNoel, $payrollDate, $savedByGracePeriodChronoLog, $dateIndex));
        $this->assertEquals(5, $payrollSummaryGenerator->getLatesAndUnderTime($jesusNoel, $payrollDate, $gracePeriodVoidDueToIncompleteTime, $dateIndex));
        $this->assertEquals(16, $payrollSummaryGenerator->getLatesAndUnderTime($jesusNoel, $payrollDate, $outsideGracePeriodCompleteTime, $dateIndex));
        $this->assertEquals(16, $payrollSummaryGenerator->getLatesAndUnderTime($jesusNoel, $payrollDate, $outsideGracePeriodIncompleteTime, $dateIndex));
        $this->assertEquals(4, $payrollSummaryGenerator->getLatesAndUnderTime($jesusNoel, $payrollDate, $undertimeChronoLog, $dateIndex));
    }

    public function testRegularOvertimes() {
        
    }

    public function testRestDayOvertimes() {
        
    }

    public function testHolidayOvertime() {
        
    }

    public function testRestDayHolidayOvertime() {
        
    }

    public function testSpecialHolidayOvertime() {
        
    }

    public function testSpecialRestDayHolidayOvertime() {
        
    }

    // <editor-fold defaultstate="collapsed" desc="Mocks & Stubs">

    private function mockDistributedHalfDayAbsences() {
        $apr26 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-04-26')->first();
        $apr27 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-04-27')->first();
        $apr28 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-04-28')->first();

        $apr26->time_in  = "08:16";
        $apr26->time_out = "12:00"; //  with late 16 mins
        $apr27->time_in  = "08:18";
        $apr27->time_out = "12:20"; //  with 2 mins allowance, considered 0
        $apr28->time_in  = "13:00";
        $apr28->time_out = "17:00"; //  exact half day, afternoon

        $apr26->save();
        $apr27->save();
        $apr28->save();
        //  total = 16 mins late + 3 half day absences
    }

    private function mockDistributedLates() {
        $apr26 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-04-26')->first();
        $apr27 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-04-27')->first();
        $apr28 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-04-28')->first();
        $may02 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-05-02')->first();

        $apr26->time_in  = "08:16";
        $apr27->time_in  = "08:18";
        $apr28->time_in  = "08:19";
        $may02->time_in  = "08:04";
        $may02->time_out = "17:07"; // saved by grace period

        $apr26->save();
        $apr27->save();
        $apr28->save();
        $may02->save();
        //  total = 53 mins
    }

    private function mockDistributedLatesOver1Hour() {
        $apr26 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-04-26')->first();
        $apr27 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-04-27')->first();
        $apr28 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-04-28')->first();
        $may02 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-05-02')->first();

        $apr26->time_in  = "09:16";
        $apr27->time_in  = "08:18";
        $apr28->time_in  = "09:19";
        $may02->time_in  = "08:04";
        $may02->time_out = "17:07"; // saved by grace period

        $apr26->save();
        $apr27->save();
        $apr28->save();
        $may02->save();
        //  total = 173 mins
    }

    private function mockDistributedUndertimes() {
        $apr26 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-04-26')->first();
        $apr27 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-04-27')->first();
        $apr28 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-04-28')->first();
        $may02 = Chronolog::EmployeeCode(self::EMPLOYEE_CODE)->entryDate('2017-05-02')->first();

        $apr26->time_out = "16:44";
        $apr27->time_out = "16:42";
        $apr28->time_out = "16:41";
        //   despite completing 8hrs (8:05 in this case), undertime of 5 mins will still be recorded
        $may02->time_out = "16:55";
        $may02->time_in  = "7:50";

        $apr26->save();
        $apr27->save();
        $apr28->save();
        $may02->save();
        //  total = 58 mins
    }

    private function getPayrollDatesStub() {
        $payrollDates = [];

//        $holidays = Holiday::AppliesToAllLocation()->applicableOnRange(self::DATE_FROM, self::DATE_TO)->get();

        $requiredIn  = "08:00:00";
        $requiredOut = "17:00:00";

        $dateFrom = new DateTime(self::DATE_FROM);
        $dateTo   = new DateTime(self::DATE_TO);

        $dateTo->modify("+1 day");  //  so it will also cover it's own date

        $interval = DateInterval::createFromDateString('1 day');
        $period   = new DatePeriod($dateFrom, $interval, $dateTo);

        //  1 = Sunday, up to 7 = Saturday
        foreach ($period AS $date) {
            //  to comply to 1 = sunday, add 1
            $dayofweek   = intval($date->format("w")) + 1;
            $payrollDate = new PayrollDate();

            $payrollDate->date            = $date;
            $payrollDate->requiredTimeIn  = $requiredIn;
            $payrollDate->requiredTimeOut = $requiredOut;

            $payrollDate->isRestDay = $dayofweek == 1 || $dayofweek == 7;

            if ($payrollDate->date->format("Y-m-d") === '2017-05-01') {
                $payrollDate->holidayType = HolidayType::REGULAR;
            }

            array_push($payrollDates, $payrollDate);
        }

        return $payrollDates;
    }

    // </editor-fold>
}
