<?php

namespace App\Payroll\Services\Payroll;

use App\Payroll\Enum\TimeBasedPaymentUOM;

/**
 * Description of TimeBasedSalaryConverter
 *
 * @author ervinne
 */
class TimeBasedSalaryConverter {

    protected $salaryUOMSequence = [TimeBasedPaymentUOM::MONTHLY, TimeBasedPaymentUOM::SEMI_MONTHLY, TimeBasedPaymentUOM::DAILY, TimeBasedPaymentUOM::HOURLY, TimeBasedPaymentUOM::MINUTE];
    protected $salaryUOMDividers = [];

    public function __construct($workingDayCount, $requiredHrsPerDay) {
        $this->salaryUOMDividers = [1, 2, $workingDayCount, $requiredHrsPerDay, 60];
    }

    public function convertToAll($baseSalary, $salaryUOM) {
        $index          = 0;
        $currentDivider = 0;

        $convertedSalaries = [];

        foreach ($this->salaryUOMSequence AS $uom) {

            $currentDivider = $this->salaryUOMDividers[$index] * $currentDivider;

            if ($uom === $salaryUOM) {
                $currentDivider = 1;
            }

            if ($currentDivider > 0) {
                $convertedSalaries[$uom] = $baseSalary / $currentDivider;
            } else {
                $convertedSalaries[$uom] = 0;
            }

            $index ++;
        }

        return $convertedSalaries;
    }

}
