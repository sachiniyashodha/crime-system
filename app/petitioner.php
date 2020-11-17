<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petitioner extends Model
{
    protected $fillable = [
        'petitioner_id',
        'petitioner_fullname',
        'address',
        'city',
        'contact_no',
        'gender',
        'canplan',
        'details',
        'officer_id',
        'officer_name',
        'date_of_hair',
        'created_at',
        'updated_at'
    ];
}
