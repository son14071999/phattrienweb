<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTrangchu extends Controller
{
    function getTrangchu(){
        return redirect()->route('index');
    }
}
