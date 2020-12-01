<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nganhan extends Model
{
    protected $table='nganhan';
    public function daihan(){
        return $this->belongsTo('App\daihan');
    }



    public function tcdaihan(){
        return $this->belongsTo('App\daihan','ma_tc');
    }
    public $timestamps = false;
}
