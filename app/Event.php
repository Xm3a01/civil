<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['event_name', 'ar_event_name', 'event_start', 'event_end'];
}
