<?php

namespace App\Models;

class SGDocumentModel extends SGModel {

    use HasDocDate;

    public $incrementing  = false;
    protected $primaryKey = "document_number";

}
