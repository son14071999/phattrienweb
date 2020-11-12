<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
session_start();
class ControllerAccount extends Controller
{
    function getLogin(Request $request)
    {
        return view('login');
    }

    function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:5|max:20'
        ],[
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'bạn chưa nhập password',
            'password.min'=>'password không được nhỏ hơn 5 kí tự',
            'password.max'=>'password không được lớn hơn 20 kí tự'
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            $request->session()->put('admin', 12312);
            return redirect()->route('index');
        }
        else{
            return redirect()->back()->with('thongbao','đăng nhập không thành công');
        }

    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->forget('admin');
        return redirect()->route('index');
    }
}

