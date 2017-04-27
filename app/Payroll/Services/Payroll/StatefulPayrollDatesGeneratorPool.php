<?php

namespace App\Payroll\Services\Payroll;

use App\Models\HRIS\WorkSchedule;
use DateTime;

/**
 * Resource pool of SPDG. Upon pulling an SPDG, pool will check for an instance's
 * existence and will create a new one on the fly if needed.
 * @author ervinne
 */
class StatefulPayrollDatesGeneratorPool {

    protected $pool;

    /** @var DateTime */
    protected $periodFrom;

    /** @var DateTime */
    protected $periodTo;

    /** @var array */
    protected $holidays;

    /**
     * @param DateTime $from
     * @param DateTime $to     
     */
    public function __construct($from, $to) {
        $this->periodFrom = $from;
        $this->periodTo   = $to;

        $this->holidays = Holiday::ApplicableOnRange($this->periodFrom, $this->periodTo)->get();
    }

    public function pull(WorkSchedule $workSchedule) {

        $ws_code = $workSchedule->code;
        if (array_key_exists($ws_code, $this->pool)) {
            return $this->pool[$ws_code];
        } else {
            return $this->createStatefulPayrollDatesGenerator($workSchedule);
        }
    }

    public function createStatefulPayrollDatesGenerator(WorkSchedule $workSchedule) {

        $spdg = new StatefulPayrollDatesGenerator($workSchedule, $this->periodFrom, $this->periodTo);
        $spdg->generatePayrollDates();
        $spdg->applyHolidays($this->holidays);

        return $spdg;
    }

}
