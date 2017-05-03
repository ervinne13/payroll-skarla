<?php

namespace Tests\Unit;

use App\Models\HRIS\Holiday;
use App\Models\HRIS\WorkSchedule;
use App\Payroll\Enum\HolidayType;
use App\Payroll\Services\Payroll\StatefulPayrollDatesGenerator;
use DateTime;
use Tests\DatabaseTestCase;

class PayrollDateGenerationTest extends DatabaseTestCase {

    /**
     * @group Payroll
     */
    public function testHolidays() {

        $testDateFrom = "2017-04-26";
        $testDateTo   = "2017-05-10";

        $mondayToFridayWSCodes = ["MFMS1", "MFMS2", "MFMS3", "MFMS4"];
        $schedule              = [
            'MFMS1' => ["in" => "06:00:00", "out" => "15:00:00"],
            'MFMS2' => ["in" => "07:00:00", "out" => "16:00:00"],
            'MFMS3' => ["in" => "08:00:00", "out" => "17:00:00"],
            'MFMS4' => ["in" => "09:00:00", "out" => "18:00:00"]
        ];

        $regularHolidays = ["2017-05-01"];
        $specialHoliday  = ["2017-04-28"];

        $holidays = Holiday::ApplicableOnRange($testDateFrom, $testDateTo)->get();

        foreach ($mondayToFridayWSCodes AS $code) {
            /* @var $generator StatefulPayrollDatesGenerator */
            $generator    = $this->getPayrollDatesGenerator($code, $testDateFrom, $testDateTo);
            $payrollDates = $generator->getWithAppliedHolidays($holidays);

            foreach ($payrollDates AS $payrollDate) {
                //  weekends must be rest day
                if ($payrollDate->date->format("w") == 0 || $payrollDate->date->format("w") == 6) {
                    $this->assertTrue($payrollDate->isRestDay);
                } else {
                    $this->assertTrue($payrollDate->requiredTimeIn == $schedule[$code]["in"]);
                    $this->assertTrue($payrollDate->requiredTimeOut == $schedule[$code]["out"]);
                }

                if (in_array($payrollDate->date->format("Y-m-d"), $regularHolidays)) {
                    $this->assertEquals(HolidayType::REGULAR, $payrollDate->holidayType);
                }

                if (in_array($payrollDate->date->format("Y-m-d"), $specialHoliday)) {
                    $this->assertEquals(HolidayType::SPECIAL, $payrollDate->holidayType);
                }
            }
        }

        $this->assertTrue(true);
    }

    /**
     * @group Payroll
     */
    public function testHolidayWithNonApplicableHolidayByLocation() {

        $testDateFrom = "2017-04-26";
        $testDateTo   = "2017-05-10";

        $mondayToFridayWSCodes = ["MFMS1", "MFMS2", "MFMS3", "MFMS4"];
        $schedule              = [
            'MFMS1' => ["in" => "06:00:00", "out" => "15:00:00"],
            'MFMS2' => ["in" => "07:00:00", "out" => "16:00:00"],
            'MFMS3' => ["in" => "08:00:00", "out" => "17:00:00"],
            'MFMS4' => ["in" => "09:00:00", "out" => "18:00:00"]
        ];

        $regularHolidays = ["2017-05-01"];
        $specialHoliday  = ["2017-04-28"]; //should not be applicable
        //  should fall under region 4
        $holidays        = Holiday::ApplicableOnRange($testDateFrom, $testDateTo)->LocationCode("AERO_RB1")->get();

        foreach ($mondayToFridayWSCodes AS $code) {

            /* @var $generator StatefulPayrollDatesGenerator */
            $generator    = $this->getPayrollDatesGenerator($code, $testDateFrom, $testDateTo);
            $payrollDates = $generator->getWithAppliedHolidays($holidays);

            foreach ($payrollDates AS $payrollDate) {
                //  weekends must be rest day
                if ($payrollDate->date->format("w") == 0 || $payrollDate->date->format("w") == 6) {
                    $this->assertTrue($payrollDate->isRestDay);
                } else {
                    $this->assertTrue($payrollDate->requiredTimeIn == $schedule[$code]["in"]);
                    $this->assertTrue($payrollDate->requiredTimeOut == $schedule[$code]["out"]);
                }

                if (in_array($payrollDate->date->format("Y-m-d"), $regularHolidays)) {
                    $this->assertEquals(HolidayType::REGULAR, $payrollDate->holidayType);
                }

                $this->assertFalse(in_array($payrollDate->date->format("Y-m-d"), $specialHoliday) && $payrollDate->holidayType == HolidayType::SPECIAL);
            }
        }

        $this->assertTrue(true);
    }

    /**
     * @group Payroll
     */
    public function testHolidayWithExtraApplicableHolidayByLocation() {

        $testDateFrom = "2017-04-26";
        $testDateTo   = "2017-05-10";

        $mondayToFridayWSCodes = ["MFMS1", "MFMS2", "MFMS3", "MFMS4"];
        $schedule              = [
            'MFMS1' => ["in" => "06:00:00", "out" => "15:00:00"],
            'MFMS2' => ["in" => "07:00:00", "out" => "16:00:00"],
            'MFMS3' => ["in" => "08:00:00", "out" => "17:00:00"],
            'MFMS4' => ["in" => "09:00:00", "out" => "18:00:00"]
        ];

        $regularHolidays = ["2017-05-01"];
        $specialHoliday  = ["2017-04-28"]; //should not be applicable

        $holidays = Holiday::ApplicableOnRange($testDateFrom, $testDateTo)->LocationCode("AERO_HO")->get();

        foreach ($mondayToFridayWSCodes AS $code) {
            //  manila area, should fall under NCR
            /* @var $generator StatefulPayrollDatesGenerator */
            $generator    = $this->getPayrollDatesGenerator($code, $testDateFrom, $testDateTo);
            $payrollDates = $generator->getWithAppliedHolidays($holidays);

            foreach ($payrollDates AS $payrollDate) {
                //  weekends must be rest day
                if ($payrollDate->date->format("w") == 0 || $payrollDate->date->format("w") == 6) {
                    $this->assertTrue($payrollDate->isRestDay);
                } else {
                    $this->assertTrue($payrollDate->requiredTimeIn == $schedule[$code]["in"]);
                    $this->assertTrue($payrollDate->requiredTimeOut == $schedule[$code]["out"]);
                }

                if (in_array($payrollDate->date->format("Y-m-d"), $regularHolidays)) {
                    $this->assertEquals(HolidayType::REGULAR, $payrollDate->holidayType);
                }

                if (in_array($payrollDate->date->format("Y-m-d"), $specialHoliday)) {
                    $this->assertEquals(HolidayType::SPECIAL, $payrollDate->holidayType);
                }
            }
        }

        $this->assertTrue(true);
    }

    /**
     * @group Payroll
     */
    public function testMorningShift() {

        $testDateFrom = "2017-04-26";
        $testDateTo   = "2017-05-10";

        $mondayToFridayWSCodes = ["MFMS1", "MFMS2", "MFMS3", "MFMS4"];
        $schedule              = [
            'MFMS1' => ["in" => "06:00:00", "out" => "15:00:00"],
            'MFMS2' => ["in" => "07:00:00", "out" => "16:00:00"],
            'MFMS3' => ["in" => "08:00:00", "out" => "17:00:00"],
            'MFMS4' => ["in" => "09:00:00", "out" => "18:00:00"]
        ];

        foreach ($mondayToFridayWSCodes AS $code) {
            $payrollDates = $this->getPayrollDatesGenerator($code, $testDateFrom, $testDateTo)->getGeneratedPayrollDates();

            foreach ($payrollDates AS $payrollDate) {
                //  weekends must be rest day
                if ($payrollDate->date->format("w") == 0 || $payrollDate->date->format("w") == 6) {
                    $this->assertTrue($payrollDate->isRestDay);
                } else {
                    $this->assertTrue($payrollDate->requiredTimeIn == $schedule[$code]["in"]);
                    $this->assertTrue($payrollDate->requiredTimeOut == $schedule[$code]["out"]);
                }
            }
        }

        $this->assertTrue(true);
    }

    /**
     * @group Payroll
     */
    public function testMidShift() {

        $testDateFrom = "2017-04-26";
        $testDateTo   = "2017-05-10";

        $mondayToFridayWSCodes = ["MFMDS1", "MFMDS2", "MFMDS3", "MFMDS4"];
        $schedule              = [
            'MFMDS1' => ["in" => "12:00:00", "out" => "21:00:00"],
            'MFMDS2' => ["in" => "13:00:00", "out" => "22:00:00"],
            'MFMDS3' => ["in" => "14:00:00", "out" => "23:00:00"],
            'MFMDS4' => ["in" => "15:00:00", "out" => "00:00:00"],
        ];

        foreach ($mondayToFridayWSCodes AS $code) {
            $payrollDates = $this->getPayrollDatesGenerator($code, $testDateFrom, $testDateTo)->getGeneratedPayrollDates();

            foreach ($payrollDates AS $payrollDate) {
                //  weekends must be rest day
                if ($payrollDate->date->format("w") == 0 || $payrollDate->date->format("w") == 6) {
                    $this->assertTrue($payrollDate->isRestDay);
                } else {
                    $this->assertTrue($payrollDate->requiredTimeIn == $schedule[$code]["in"]);
                    $this->assertTrue($payrollDate->requiredTimeOut == $schedule[$code]["out"]);
                }
            }
        }

        $this->assertTrue(true);
    }

    /**
     * @group Payroll
     */
    public function testNightShift() {

        $testDateFrom = "2017-04-26";
        $testDateTo   = "2017-05-10";

        $mondayToFridayWSCodes = ["MFNS1", "MFNS2", "MFNS3", "MFNS4"];
        $schedule              = [
            'MFNS1' => ["in" => "16:00:00", "out" => "01:00:00"],
            'MFNS2' => ["in" => "17:00:00", "out" => "02:00:00"],
            'MFNS3' => ["in" => "18:00:00", "out" => "03:00:00"],
            'MFNS4' => ["in" => "19:00:00", "out" => "04:00:00"],
        ];

        foreach ($mondayToFridayWSCodes AS $code) {
            $payrollDates = $this->getPayrollDatesGenerator($code, $testDateFrom, $testDateTo)->getGeneratedPayrollDates();

            foreach ($payrollDates AS $payrollDate) {
                //  weekends must be rest day
                if ($payrollDate->date->format("w") == 0 || $payrollDate->date->format("w") == 6) {
                    $this->assertTrue($payrollDate->isRestDay);
                } else {
                    $this->assertTrue($payrollDate->requiredTimeIn == $schedule[$code]["in"]);
                    $this->assertTrue($payrollDate->requiredTimeOut == $schedule[$code]["out"]);
                }
            }
        }

        $this->assertTrue(true);
    }

    private function getPayrollDatesGenerator($workScheduleCode, $fromString, $toString) {
        $workSchedule = WorkSchedule::with('workScheduleShifts')->find($workScheduleCode);

        $from = new DateTime($fromString);
        $to   = new DateTime($toString);

        $spdg = new StatefulPayrollDatesGenerator($workSchedule, $from, $to);
        $spdg->generatePayrollDates();

        return $spdg;
    }

}
