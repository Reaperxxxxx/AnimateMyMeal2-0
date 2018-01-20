<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function restaurant()
    {
        return $this->belongsTo('Restaurant');
    }

    public function employee()
    {
        return $this->belongsTo('Employee');
    }

    public function instances()
    {
        return $this->hasMany('Instance_Device');
    }
}
