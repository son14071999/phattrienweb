<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $table = "account";
    public function truong(){
        return $this->belongsTo('App\truong');
    }

    public $timestamps = false;
}
