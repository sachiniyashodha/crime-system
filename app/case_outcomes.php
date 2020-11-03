<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class case_outcomes extends Model
{
    protected $fillable = [
        'case_outcome_id',
        'case_id',
        'section_of_low_id',
        'deatails',
        'status',
    ];
}
