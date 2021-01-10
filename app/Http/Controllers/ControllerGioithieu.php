<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerGioithieu extends Controller
{
    function getGioiThieu(){
        return redirect()->route('gioithieu');
    }
}
