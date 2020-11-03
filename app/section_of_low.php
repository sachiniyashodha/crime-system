<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section_of_low extends Model
{
    protected $fillable = [
        'section_id',
        'section_of_low',
        'sentence',
        'detail',
    ];
}
