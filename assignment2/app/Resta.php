<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resta extends Model
{
    protected $fillable = ['name'];
    function menus(){
        return $this -> hasMany('App\Menu');
    }
}
