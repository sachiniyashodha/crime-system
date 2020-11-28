<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wornted_person extends Model
{
    protected $fillable = [
        'person_id',
        'person_name',
        'image',
        'information',
        'details',
    ];
}
