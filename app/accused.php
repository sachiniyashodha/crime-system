<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accused extends Model
{
    protected $fillable = [
        'accu_id',
        'accused_fullname',
        'dob',
        'address',
        'city',
        'contact_no',
        'gender',
        'status',
        'number_of_crime',
    ];
}
