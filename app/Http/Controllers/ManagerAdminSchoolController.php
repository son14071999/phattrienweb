<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\truong;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
session_start();
use Illuminate\Support\Facades\Auth;

class ManagerAdminSchoolController extends Controller
{
    public function AuthLogin(){
        $admin_id= Session::get('admin');

        if($admin_id && Auth::user()->rule==1){
             return redirect('/admin/index');
        }else{
            return redirect('/login')->send();
        }
    }
    public function AuthLogin1(){
        $admin_id= Session::get('admin');

        if($admin_id){
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
        $this->AuthLogin1();
        $truong = DB::table('truong')->get();
        return view('admin.school.all_school', compact('truong'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthLogin();
        return view('admin.school.add_school');
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
            'tentruong' => 'required|min:2',
            
        ]);
        $truong = new truong();
        $truong->id = $request->tenrutgon;
        $truong->ten = $request->tentruong;
        $truong->logo = "";
        $truong->save();
        Session::put('massage',' thêm trường thành công!');
        return Redirect::to('/admin/school');
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
        $this->AuthLogin1();
        $school = DB::table('truong')->where('id',$id)->get();
        $id = $school[0]->id;
        $ten = $school[0]->ten;
       
        return view('admin.school.edit_school', compact('id','ten'));
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
        $this->AuthLogin1();
        $validatedData = $request->validate([
            'tentruong' => 'required|min:2',
            
        ]);
        $truong = truong::find($id);
        
        $truong->id = $request->tenrutgon;
        $truong->ten = $request->tentruong;
        $truong->logo = "";
      
        $truong->save();
        Session::put('massage',' cập nhật trường thành công!');
        return Redirect::to('/admin/school');
        
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
    public function destroy_school($id)
    {
        $this->AuthLogin();
        $school = truong::find($id);
       
        $school->delete();
        Session::put('massage',' xóa trường thành công!');
        return Redirect::to('/admin/school');
    }
}
