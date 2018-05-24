<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'city', 'address', 'info', 'date'
    ];

    protected $dates = ['date'];
}
