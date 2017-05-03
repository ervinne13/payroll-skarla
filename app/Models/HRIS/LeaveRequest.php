<?php

namespace App\Models\HRIS;

use App\Models\SGDocumentModel;

class LeaveRequest extends SGDocumentModel {

    protected $table    = "hris.leave_request";
    protected $fillable = [
        "employee_code",
        "leave_type_code",
        "is_half_day",
        "leave_date",
        "leave_date_end",
        "time_fror",
        "time_to",
        "leave_total_days"
    ];

    public function __construct(array $attributes = array()) {
        parent::__construct($attributes);
        $this->objectDisplayName = "Leave Request";
    }

}
