<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function restaurant()
    {
        return $this->belongsTo('Restaurant');
    }

    public function devices()
    {
        return $this->hasMany('Device');
    }
}
