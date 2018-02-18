<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    public function meals(){
        return $this->belongsTo(Meal::class);
    }

    public function order(){

        return $this->belongsTo(Order::class,'order_id');
    }

}
