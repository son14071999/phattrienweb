<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\truong;

class controllerTruong extends Controller
{
    //
    function __construct()
    {
        $truong = truong::all();
        view()->share('truong', $truong);
    }
    function getDanhsach(){
        return view('dsDonviDaotao');
    }
}
