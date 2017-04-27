<?php

namespace App\Models\MasterFiles;

use App\Models\Searchable;
use App\Models\SGModel;

class City extends SGModel {

    use Searchable;

    public $incrementing         = false;
    protected $table             = "public.city";
    protected $primaryKey        = "code";
    protected $fillable          = ['code', "display_name", "region_code"];
    protected $searchableColumns = ['code', "display_name", "region_code"];

}
