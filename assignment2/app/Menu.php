<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name','price'];

    function resta(){
        return $this ->belongsTo('App\Resta');
    }
    function purs(){
        return $this -> hasMany('App\Pur');
    }
}
