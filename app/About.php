<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'profile',
        'ar_profile',
        'address',
        'ar_address',
        'tel',
        'email'
    ];
}
