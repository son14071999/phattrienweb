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


     public function daihan1234(){
        return $this->hasMany('App\daihan', 'ma_tc','id');
    }

    public function donvi1(){
        return $this->belongsTo('App\donvi', 'ma_dv');
    }

    public $timestamps = false;
}
