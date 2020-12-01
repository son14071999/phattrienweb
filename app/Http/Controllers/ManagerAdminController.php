<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
session_start();
class ManagerAdminController extends Controller
{
    public function AuthLogin(){
        $admin_id= Session::get('admin');
        if($admin_id){
             return redirect('/admin/index');
        }else{
            return redirect('/login')->send();
        }
    }

    public function index(){
        $this->AuthLogin();
        return view("admin.trangchu_admin");
    }
}
