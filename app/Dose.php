<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dose extends Model
{
    protected $fillable = [
        'arrival_id', 'processed', 'donated'
    ];

    public function arrival()
    {
        return $this->belongsTo('App\Arrival');
    }

    public function donator()
    {
        return $this->arrival->donator();
    }
}
