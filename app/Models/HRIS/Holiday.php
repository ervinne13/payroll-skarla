<?php

namespace App\Models\HRIS;

use App\Models\DateFilterable;
use App\Models\SGModel;

class Holiday extends SGModel {

    use DateFilterable;

    public $incrementing  = false;
    protected $table      = "hris.holiday";
    protected $primaryKey = "code";
    protected $dateField  = "date";
    protected $fillable   = [
        "code", "display_name", "is_repeating", "holiday_type_code", "date", "last_date_applicable"
    ];

    public function scopeApplicableOnRange($query, $from, $to) {
        return $query
                        ->where(function($query) use ($from, $to) {
                            $query->where('date', '>=', $from);
                            $query->where('date', '<=', $to);
                        })
                        ->orWhere(function($query) use ($from, $to) {
                            $query->where("is_repeating", true);
                            $query->where('last_date_applicable', '>=', $from);
                            $query->where('last_date_applicable', '<=', $to);
                        })
        ;
    }

    public function scopeAppliesToAllLocation($query) {
        return $query->where('applies_to_all_location', TRUE);
    }

    public function scopeLocationCode($query, $locationCode) {
        return $query
                        ->select($this->table . ".*")
                        ->leftJoin("hris.holiday_location", "hris.holiday_location.holiday_code", "=", "hris.holiday.code")
                        ->where('applies_to_all_location', TRUE)
                        ->orWhere(function($query) use ($locationCode) {
                            $query->where('applies_to_all_location', FALSE);
                            $query->where('hris.holiday_location.location_code', $locationCode);
                        })
        ;
    }

}
