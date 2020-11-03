<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crime_file extends Model
{
    protected $fillable = [
        'fir_no',
        'accused_id',
        'victim_id',
        'petitioner_id',
        'place_of_incident',
        'date_of_incident',
        'time_of_incident',
        'date_filr',
        'accused_status',
    ];
}
