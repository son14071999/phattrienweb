<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerAdminController extends Controller
{
    //
    public function index(){
        return view("admin.trangchu_admin");
    }
}
