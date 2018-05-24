<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    public function donators()
    {
        return $this->hasMany('App\Donators');
    }
}
