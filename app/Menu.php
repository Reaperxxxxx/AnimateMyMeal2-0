<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Meal;


class Menu extends Model
{
    public function category()
    {
        return $this->belongsTo(Meal::class,'id_meal');
    }


}
