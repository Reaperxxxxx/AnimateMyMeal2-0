<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function instances()
    {
        return $this->hasMany(Instance_Device::class);
    }

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
    public function orderLists()
    {
        return $this->hasMany(OrderList::class);
    }
}
