<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pur extends Model
{
    protected $fillable = ['users_id','menu_id'];

    function menus(){
        return $this ->belongsTo('App\Menu');
    }
}
