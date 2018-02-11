<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category ;


class Meal extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Promotion()
    {
        return $this->belongsTo(Promotion::class,'id_promotion');
    }
}
