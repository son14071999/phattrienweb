<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nganhan extends Model
{
    protected $table='nganhan';
    public function daihan(){
        return $this->belongsTo('App\daihan');
    }
}
