<?php

namespace App\Models\Payroll\Processor;

use App\Models\HRIS\Holiday;
use App\Models\HRIS\Shift;
use App\Payroll\Enum\HolidayType;
use DateTime;

/**
 * Description of PayrollDate
 *
 * Time Format: ISO 8601
 * 
 * @author ervinne
 */
class PayrollDate {

    /** @var DateTime  */
    public $date;

    /** @var HolidayType */
    public $holidayType     = NULL;
    public $isRestDay       = FALSE;
    public $requiredTimeIn  = NULL;
    public $requiredTimeOut = NULL;
    public $breaktTimeOut1  = NULL;
    public $breaktTimeIn1   = NULL;

    public static function CreateFromDateShiftAndHoliday(DateTime $date, Shift $shift, Holiday $holiday = NULL) {

        $payrollDate       = new PayrollDate();
        $payrollDate->date = $date;

        //  equal in and out is considered day off
        $payrollDate->isRestDay = $shift->scheduled_in === $shift->scheduled_out;
        if ($shift->scheduled_in !== $shift->scheduled_out) {
            $payrollDate->requiredTimeIn  = $shift->scheduled_in;
            $payrollDate->requiredTimeOut = $shift->scheduled_out;
            $payrollDate->breaktTimeOut1  = NULL; //TODO: support break time out
            $payrollDate->breaktTimeIn1   = NULL; //TODO: support break time out
        }

        if ($holiday) {
            $payrollDate->holidayType = $holiday->holiday_type_code;
        }

        return $payrollDate;
    }

    public function toString() {
        $date = $this->date->format("m/d/Y");
        if ($this->isRestDay) {
            return "{$date}: Rest Day";
        } else if ($this->holidayType) {
            return "{$date}: Holiday ({$this->holidayType})";
        } else {
            return "{$date}: {$this->requiredTimeIn} -> {$this->requiredTimeOut}";
        }
    }

}
