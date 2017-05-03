<?php

namespace Tests\Unit;

use App\Payroll\Enum\TimeBasedPaymentUOM;
use App\Payroll\Services\Payroll\TimeBasedSalaryConverter;
use Tests\TestCase;

class TimeBasedSalaryConverterTest extends TestCase {

    public function testMonthlyWager() {
        $salaryUOM = TimeBasedPaymentUOM::MONTHLY;
        $wage                = 30000;
        $workingDays         = 11;
        $requiredHrsOfWork   = 8;

        $converter = new TimeBasedSalaryConverter($workingDays, $requiredHrsOfWork);
        $salaries  = $converter->convertToAll($wage, $salaryUOM);

        $this->assertEquals(30000, $salaries[TimeBasedPaymentUOM::MONTHLY]);
        $this->assertEquals(30000 / 2, $salaries[TimeBasedPaymentUOM::SEMI_MONTHLY]);
        $this->assertEquals((30000 / 2) / $workingDays, $salaries[TimeBasedPaymentUOM::DAILY]);
        $this->assertEquals(((30000 / 2) / $workingDays) / $requiredHrsOfWork, $salaries[TimeBasedPaymentUOM::HOURLY]);
        $this->assertEquals((((30000 / 2) / $workingDays) / $requiredHrsOfWork) / 60, $salaries[TimeBasedPaymentUOM::MINUTE]);
    }

    public function testDailyWager() {
        $salaryUOM = TimeBasedPaymentUOM::DAILY;
        $wage                = 525;
        $workingDays         = 11;
        $requiredHrsOfWork   = 8;

        $converter = new TimeBasedSalaryConverter($workingDays, $requiredHrsOfWork);
        $salaries  = $converter->convertToAll($wage, $salaryUOM);

        $this->assertEquals(0, $salaries[TimeBasedPaymentUOM::MONTHLY]);
        $this->assertEquals(0, $salaries[TimeBasedPaymentUOM::SEMI_MONTHLY]);
        $this->assertEquals(525, $salaries[TimeBasedPaymentUOM::DAILY]);
        $this->assertEquals(525 / $requiredHrsOfWork, $salaries[TimeBasedPaymentUOM::HOURLY]);
        $this->assertEquals((525 / $requiredHrsOfWork) / 60, $salaries[TimeBasedPaymentUOM::MINUTE]);
    }

    public function testPartTimeDailyWager() {
        $salaryUOM = TimeBasedPaymentUOM::DAILY;
        $wage                = 525;
        $workingDays         = 11;
        $requiredHrsOfWork   = 8;

        $converter = new TimeBasedSalaryConverter($workingDays, $requiredHrsOfWork);
        $salaries  = $converter->convertToAll($wage, $salaryUOM);

        $this->assertEquals(0, $salaries[TimeBasedPaymentUOM::MONTHLY]);
        $this->assertEquals(0, $salaries[TimeBasedPaymentUOM::SEMI_MONTHLY]);
        $this->assertEquals(525, $salaries[TimeBasedPaymentUOM::DAILY]);
        $this->assertEquals(525 / $requiredHrsOfWork, $salaries[TimeBasedPaymentUOM::HOURLY]);
        $this->assertEquals((525 / $requiredHrsOfWork) / 60, $salaries[TimeBasedPaymentUOM::MINUTE]);
    }

}
