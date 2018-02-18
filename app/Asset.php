<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'id_User');
    }

    public function categoryAsset()
    {
        return $this->belongsTo(CategoryAsset::class,'id_Category');
    }


}
