<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donator extends Model
{
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'birth_date', 'address',
        'phone', 'blood_type'
    ];

    protected $dates = ['birth_date'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function arrivals()
    {
        return $this->hasMany('App\Arrival');
    }

}
