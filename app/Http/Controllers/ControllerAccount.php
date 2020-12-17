<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\account;
use Mail;
use App\Mail\MailNotify;
use App\Jobs\SendEmail;
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

    function viewforgetpass(){
        return view('forget_pass');
    }

    function forgetpass(Request $request){
        $account = account::where('email', $request->email)->first();
        
        $code = rand(100000,1000000);
            if(empty($account)){
                return 0;
            } else {
                $data = [
                    'title' => 'Code to change password ',
                    'body' => $code 
                ];
                Mail::to($request->email)->send(new MailNotify($data));
                return $code;
            }
            
            
        
       
      
    }

    function checkemail(){
        $code = rand(100000,1000000);
        $data = [
            'title' => 'Code to change password ',
            'body' => $code
        ];
        Mail::to('long17000547@gmail.com')->send(new MailNotify($data));
        return "Basic Email Sent. Check your inbox.";

    }

    function changePass(Request $request){
        $account = account::where('email', $request->email)->first();
        $code = rand(100000,1000000);
        $data = [
            'title' => 'Password new',
            'body' => $code
        ];
        $account->password = Hash::make($code);
        $account->save();
        Mail::to($request->email)->send(new MailNotify($data));
        return 1;
    }
       
}

