<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class investigation extends Model
{
    protected $fillable = [
        'investigation_id',
        'case_id',
        'officer_fullname',
        'date_start',
        'date_end',
    ];
}
