<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrycaptured extends Model
{
    protected $fillable = [
        'id',
        'cr_id',
        'reference_no',
        'record'
    
    ];
}



