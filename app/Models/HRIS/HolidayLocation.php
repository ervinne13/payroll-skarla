<?php

namespace App\Models\HRIS;

use App\Models\SGModel;

class HolidayLocation extends SGModel {

    public $incrementing  = false;
    protected $table      = "hris.holiday_location";
    protected $primaryKey = ['holiday_code', "location_code"];
    protected $fillable   = ['holiday_code', "location_code"];

}
