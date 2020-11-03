<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_login extends Model
{
    protected $fillable = [
        'login_id',
        'user_name',
        'pass_word',
        'frogot_pass',
    ];
}
