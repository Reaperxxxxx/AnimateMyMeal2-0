<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function instances()
    {
        return $this->hasMany('Instance_Device');
    }

    public function commande()
    {
        return $this->belongsTo('Commande');
    }
}
