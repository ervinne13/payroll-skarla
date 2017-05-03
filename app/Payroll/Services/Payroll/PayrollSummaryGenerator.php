<?php

namespace App\Payroll\Services\Payroll;

use App\Models\HRIS\Employee;

/**
 *
 * @author ervinne
 */
interface PayrollSummaryGenerator {

    /**
     * 
     * @param Employee $employee
     * @param array $payrollDates A list of App\Models\Payroll\Processor\PayrollDate objects     
     * @return EmployeePayrollSummary
     */
    public function generatePayrollSummary(Employee $employee, $payrollDates);
}
