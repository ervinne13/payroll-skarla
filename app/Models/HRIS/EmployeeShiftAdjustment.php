<?php

namespace App\Models\HRIS;

use App\Models\SGModel;

class EmployeeShiftAdjustment extends SGModel {

    public $timestamps    = false;
    public $increments    = false;
    protected $table      = "hris.employee_shift_adjustment";
    protected $primaryKey = ["employee_code", "date_applicable"];
    protected $fillable   = ["employee_code", "date_applicable", "scheduled_in", "scheduled_out", "shift_differential_start", "shift_diffirential_end", "scheduled_break_in_1", "scheduled_break_out_1", "forced_break_minutes"];

}
