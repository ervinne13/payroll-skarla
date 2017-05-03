<?php

namespace App\Payroll\Enum;

/**
 * Description of SalaryUOM
 *
 * @author ervinne
 */
abstract class TimeBasedPaymentUOM {

    const MONTHLY      = "MON";
    const SEMI_MONTHLY = "SMON";
    const DAILY        = "DAY";
    const HOURLY       = "HR";
    const MINUTE       = "MIN";
    const EXACT_AMOUNT = "EA";

}
