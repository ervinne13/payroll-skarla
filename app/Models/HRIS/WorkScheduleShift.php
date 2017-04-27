<?php

namespace App\Models\HRIS;

use App\Models\SGModel;

class WorkScheduleShift extends SGModel {

    public $incrementing  = false;
    protected $table      = "hris.work_schedule_shift";
    protected $primaryKey = ["work_schedule_code", "shift_code", "week_day"];
    protected $fillable   = ["work_schedule_code", "shift_code", "week_day"];

    /**
     * Eager loaded relationships
     * @var array 
     */
    protected $with = [
        "shift"
    ];
    
    public function shift() {
        return $this->belongsTo(Shift::class, "shift_code");
    }

}
