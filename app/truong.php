<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class truong extends Model
{
    protected $table = 'truong';
    public function account(){
        return $this->hasMany('App\account', 'id');
    }

    public function daihan(){
        return $this->hasMany('App\account', 'id');
    }
}
