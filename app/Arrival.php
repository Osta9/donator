<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arrival extends Model
{
    protected $fillable = [
        'date', 'donator_id', 'doctor_id', 'assistant_id', 'hemoglobin',
        'blood_sys', 'blood_dia', 'accepted', 'reason'
    ];

    protected $dates = ['date'];

    public function donator()
    {
        return $this->belongsTo('App\Donator');
    }

    public function dose()
    {
        return $this->hasOne('App\Dose');
    }
}
