<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
session_start();
use App\User;
use App\account;
use App\truong;
use Illuminate\Support\Facades\Auth;

class ManagerAdminAccountController extends Controller
{

    // public function __construct()
    // {
       
    //         $this->middleware('auth')->except('show');// phai dang nhap moi duoc vao
        
       
    // }

    public function AuthLogin(){
        $admin_id= Session::get('admin');

        if($admin_id && Auth::user()->rule==1){
             return redirect('/admin/index');
        }else{
            return redirect('/login')->send();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AuthLogin();
        $account = User::select('account.id','account.name', 'account.email', 'truong.ten as tentruong') 
            ->join('truong','truong.id','=','account.ma_truong')
            ->get();
       
        return view('admin.account.all_account', compact('account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthLogin();
        $truong = DB::table('truong')->get();
        return view('admin.account.add_account', compact('truong'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->AuthLogin();
       
        $validateData = $request->validate([
            'name' => 'required|unique:account|min:3',
            'email' => 'required|unique:account|email',
            'pass' => 'required|min:3'


        ],
        [
            'name.required' => 'Vui lòng nhập username',
            'name.unique' => 'Username đã tồn tại',
            'name.min' => 'Tên phải có độ dài tối thiểu lớn hơn 3',
            'email.required' => 'Vui lòng nhập email',
            'email.unique' => 'Email đã tồn tại',
            'pass.required' => 'Vui lòng nhập password',
            'pass.min' => 'Password phải có độ dài tối thiểu lớn hơn 3',

        ]
            
        );
        $account = new account();
        $account->name = $request->name;
        $account->rule = $request->has('role')==true ? 1:0;
        $account->email = $request->email;
        $account->ma_truong = $request->truong;
        $account->password = bcrypt($request->pass);
        
        $account->save();
        Session::put('massage',' add  account success!');
        return Redirect::to('/admin/account');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->AuthLogin();
        $account  = User::find($id);
        $truong = DB::table("truong")->get();
        return view('admin.account.edit_account',compact('account','truong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->AuthLogin();
        $validateData = $request->validate([
            'name' => 'required||min:3',
            'email' => 'required|email',
            'pass' => 'required|min:3'


        ],
        [
            'name.required' => 'Vui lòng nhập username',
            
            'name.min' => 'Tên phải có độ dài tối thiểu lớn hơn 3',
            'email.required' => 'Vui lòng nhập email',
            'pass.required' => 'Vui lòng nhập password',
            'pass.min' => 'Password phải có độ dài tối thiểu lớn hơn 3',

        ]
            
        );
        $account = account::find($id);
        $account->name = $request->name;
        $account->email = $request->email;
        $account->ma_truong = $request->truong;
        $account->password = bcrypt($request->pass);

        $account->save();
        Session::put('massage',' update  account success!');
        return Redirect::to('/admin/account');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
