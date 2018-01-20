<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function restaurant()
    {
        return $this->belongsTo('Restaurant');
    }

    public function meals()
    {
        return $this->hasMany('Meal');
    }
}
