<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Khill\Lavacharts\Configs\Animation;

class RestaurantAnimation extends Model
{
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function animation()
    {
        return $this->belongsTo(Asset::class);
    }

}
