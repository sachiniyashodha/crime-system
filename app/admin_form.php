<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin_form extends Model
{
    protected $fillable = [
        'admin_id',
        'officer_id',
        'officer_name',
        'rank',
        'dob',
        'address',
        'contact_no',
        'gender',
    ];
}
