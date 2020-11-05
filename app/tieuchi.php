<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tieuchi extends Model
{
    protected $table = 'tieuchi';
    public function daihan(){
        return $this->hasMany('App\daihan', 'id');
    }
    public function donvi(){
        return $this->belongsTo('App\donvi');
    }
}
