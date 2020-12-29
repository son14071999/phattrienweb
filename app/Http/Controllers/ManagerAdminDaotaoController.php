<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\donvi;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
session_start();
use Illuminate\Support\Facades\Auth;

class ManagerAdminDaotaoController extends Controller
{
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
        $donvi = donvi::all();
        return view('admin.education.all_donvi', compact('donvi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthLogin();
        return view('admin.education.add_daotao');
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
        $validatedData = $request->validate([
            'tendonvi' => 'required|min:3',
            
        ]);
        $donvi = new donvi();
        $donvi->ten = $request->tendonvi;
        $donvi->save();
        Session::put('massage',' thêm ban quản lý thành công!');
        return Redirect::to('/admin/daotao');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $donvi = donvi::find($id);
        return view('admin.education.edit_donvi', compact('donvi'));
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
        $donvi = donvi::find($id);
        $donvi->ten = $request->tendonvi;
        $donvi->save();
        Session::put('massage',' cập nhật ban quản lý thành công!');
        return Redirect::to('/admin/daotao');
        
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
    public function destroy_donvi($id)
    {
        $this->AuthLogin();
        $donvi = donvi::find($id);
       
        $donvi->delete();
        Session::put('massage',' xóa ban quản lý thành công!');
        return Redirect::to('/admin/daotao');
    }
}
