<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crime_case extends Model
{
    protected $fillable = [
        'case_id',
        'officer_id',
        'fir_number',
    ];
}
