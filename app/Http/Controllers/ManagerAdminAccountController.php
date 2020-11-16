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

class ManagerAdminAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $account = new account();
        $account->name = $request->name;
        $account->rule = 0;
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
