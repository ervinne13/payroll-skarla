<?php

namespace App\Models\MasterFiles;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

    public $incrementing  = false;
    protected $table      = "public.location";
    protected $primaryKey = "code";
    protected $fillable   = ["code", "display_name", "company_code", "city_code", "cost_profit_center_code"];

    public function company() {
        return $this->belongsTo(Company::class, "company_code");
    }

    public function costProfitCenter() {
        return $this->belongsTo(CostProfitCenter::class, "cost_profit_center_code");
    }

    public function scopeCityCode($query, $cityCode) {
        return $query->where("city_code", $cityCode);
    }

    public function scopeRegionCode($query, $regionCode) {
        return $query
                        ->select($this->table . ".*")
                        ->leftJoin('public.city', 'public.city.code', '=', 'public.location.city_code')
                        ->where("public.city.region_code", $regionCode);
    }

}
