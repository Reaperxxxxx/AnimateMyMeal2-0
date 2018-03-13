<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Restaurant extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'id_User');
    }

    public function clients()
    {
        return $this->belongsToMany(User::class);
    }

    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class , 'id_restaurant');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function restaurantanimations()
    {
        return $this->hasMany(RestaurantAnimation::class);
    }


    public function str()
    {
        return 'working' ;
    }
}
