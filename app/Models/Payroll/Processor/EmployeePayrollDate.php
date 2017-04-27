<?php

namespace App\Models\Payroll\Processor;

/**
 * Description of EmployeePayrollDate
 *
 * @author ervinne
 */
class EmployeePayrollDate extends PayrollDate {

    public function createFromPayrollDate(PayrollDate $payrollDate) {
        $this->date            = $payrollDate->date;
        $this->holidayType     = $payrollDate->holidayType;
        $this->isRestDay       = $payrollDate->isRestDay;
        $this->requiredTimeIn  = $payrollDate->requiredTimeIn;
        $this->requiredTimeOut = $payrollDate->requiredTimeOut;
        $this->breaktTimeOut1  = $payrollDate->breaktTimeOut1;
        $this->breaktTimeIn1   = $payrollDate->breaktTimeIn1;
    }

}
