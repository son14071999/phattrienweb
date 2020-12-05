<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daihan extends Model
{
    protected $table = "daihan";
    public function tieuchi(){
        return $this->belongsTo('App\tieuchi');
    }

    public function truong(){
        return $this->belongsTo('App\truong');
    }

    public function nganhan(){
        return $this->hasMany('App\nganhan', 'id');
    }


     public function nganhan1(){
        return $this->hasMany('App\nganhan', 'ma_tc');
    }

    public function tieuchidh(){
        return $this->belongsTo('App\tieuchi','ma_tc','id');
    }

    public $timestamps = false;
}
