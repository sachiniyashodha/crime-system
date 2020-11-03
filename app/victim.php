<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class victim extends Model
{
    protected $fillable = [
        'victim_id',
        'victim_fullname',
        'address',
        'city',
        'contact_no',
        'condition',
        'gender',
        'details',
    ];
}
