<?php

namespace App\Models\MasterFiles;

use App\Models\Searchable;
use App\Models\SGModel;

class Region extends SGModel {

    use Searchable;

    public $incrementing         = false;
    protected $table             = "public.region";
    protected $primaryKey        = "code";
    protected $fillable          = ['code', "display_name"];
    protected $searchableColumns = ['code', "display_name"];

}
