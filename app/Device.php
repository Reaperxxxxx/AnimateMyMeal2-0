<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function instances()
    {
        return $this->hasMany(Instance_Device::class);
    }
}
