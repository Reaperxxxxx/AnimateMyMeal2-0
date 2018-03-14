<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{

/*
    public function categoryAsset()
    {
        return $this->belongsTo(CategoryAsset::class,'id_Category');
    }
*/
    public function restaurantassets()
    {
        return $this->hasMany(RestaurantAnimation::class);
    }


}
