<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entry_text extends Model
{
    protected $fillable = [
        'entry_id',
        'reference_no',
        'branch_name',
        'date',
        'time',
        'fir_id',
        'police_entry',
        'other_details',
    ];
}
