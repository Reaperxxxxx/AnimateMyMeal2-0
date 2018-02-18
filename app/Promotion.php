<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
}
