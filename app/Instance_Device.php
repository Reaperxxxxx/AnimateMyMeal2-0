<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instance_Device extends Model
{
    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
