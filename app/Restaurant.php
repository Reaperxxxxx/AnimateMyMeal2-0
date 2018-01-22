<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Restaurant extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','id_User');
    }

    public function clients()
    {
        return $this->belongsToMany('User');
    }

    public function devices()
    {
        return $this->hasMany('Device\Device');
    }

    public function categories()
    {
        return $this->hasMany('Category');
    }

    public function employees()
    {
        return $this->hasMany('Employee');
    }

    public function str()
    {
        return 'working' ;
    }
}
