<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
session_start();
use App\tieuchi;
use App\nganhan;
use App\daihan;
use App\truong;
use App\donvi;
use App\User;



class ManagerAdminTieuChiController extends Controller
{

    public function AuthLogin(){
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
        $this->AuthLogin();
        $id = 1;
        if(Auth::user() != null) {
            $id = Auth::user()->rule;
            $truong = Auth::user()->ma_truong;
        }
      
        if ($id == 0) {
            $tieuchi = daihan::select('tieuchi.id as id_tieuchi','daihan.id as id_daihan', 'nam', 'xong', 'tong', 'tieuchi.ten as tentieuchi','truong.ten as tentruong','ma_dv', 'donvi.ten as tendonvi', 'tieuchi.moTa as mota') 
            ->join('tieuchi', 'tieuchi.id','=','daihan.ma_tc')
            ->join('truong','truong.id','=','daihan.ma_truong')
            ->join('donvi','donvi.id', '=', 'tieuchi.ma_dv')
            ->where('daihan.ma_truong','=',$truong)
            ->orderByDesc('daihan.id')->get();
            return view("admin.tieuchi.all_tieuchi", compact("tieuchi"));
        }
       

        $tieuchi = daihan::select('tieuchi.id as id_tieuchi','daihan.id as id_daihan', 'nam', 'xong', 'tong', 'tieuchi.ten as tentieuchi','truong.ten as tentruong','ma_dv', 'donvi.ten as tendonvi', 'tieuchi.moTa as mota') 
            ->join('tieuchi', 'tieuchi.id','=','daihan.ma_tc')
            ->join('truong','truong.id','=','daihan.ma_truong')
            ->join('donvi','donvi.id', '=', 'tieuchi.ma_dv')
            ->orderByDesc('daihan.id')->get();
        return view("admin.tieuchi.all_tieuchi", compact("tieuchi"));
        
       
    }

    public function create_tieuchi(){
        $this->AuthLogin();
        $donvi = donvi::all();
       
       
        return view("admin.tieuchi.add_tieuchichung", compact("donvi"));
    }

    public function add_tieuchi(Request $request){
        $this->AuthLogin();

        $validateData = $request->validate([
            'tentieuchi' => 'required|min:2',
            'motatieuchi' => 'required|min:2',
            


        ],
        [
            'tentieuchi.required' => 'Vui lòng nhập tên tiêu chí',
            'motatieuchi.required' => 'Vui lòng nhập mô tả tiêu chí',
            'tentieuchi.min' => 'Tên tiêu chí phải có độ dài tối thiểu lớn hơn 2',
            'motatieuchi.min' => 'Mô tả tiêu chí phải có độ dài tối thiểu lớn hơn 2',
            

        ]
            
        );
        $tieuchi = new tieuchi();
        $tieuchi->ten = $request->tentieuchi;
        $tieuchi->moTa = $request->motatieuchi;
        $tieuchi->ma_dv = $request->donvi;
       
        $tieuchi->save();
        Session::put('massage',' thêm tiêu chí thành công!');
        return Redirect::to('/admin/list-tieuchi');
    }

    public function show_edit_tieuchi($id){
        $this->AuthLogin();
        $donvi = donvi::all();
        $tieuchi = tieuchi::find($id);
       
        return view("admin.tieuchi.edit_tieuchichung", compact("donvi", "tieuchi"));
    }

    public function update_tieuchi(Request $request, $id){
        $this->AuthLogin();

        $validateData = $request->validate([
            'tentieuchi' => 'required|min:2',
            'motatieuchi' => 'required|min:2',
            


        ],
        [
            'tentieuchi.required' => 'Vui lòng nhập tên tiêu chí',
            'motatieuchi.required' => 'Vui lòng nhập mô tả tiêu chí',
            'tentieuchi.min' => 'Tên tiêu chí phải có độ dài tối thiểu lớn hơn 2',
            'motatieuchi.min' => 'Mô tả tiêu chí phải có độ dài tối thiểu lớn hơn 2',
            

        ]
            
        );
        $tieuchi = tieuchi::find($id);
        $tieuchi->ten = $request->tentieuchi;
        $tieuchi->moTa = $request->motatieuchi;
        $tieuchi->ma_dv = $request->donvi;
       
        $tieuchi->save();
        Session::put('massage',' cập nhật tiêu chí thành công!');
        return Redirect::to('/admin/list-tieuchi');
    }

    public function list_tieuchi(){
        $tieuchi = tieuchi::orderBy('id', 'DESC')->get();
        return view("admin.tieuchi.list_tieuchi", compact('tieuchi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthLogin();
        $donvi = donvi::all();
        $tieuchi = tieuchi::all();
        $truong = DB::table('truong')->get();
       
        return view("admin.tieuchi.add_tieuchi", compact("donvi", "truong","tieuchi"));
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
            
           
            'hoanthanh' => 'required|numeric|min:0',
            'muctieu' => 'required|numeric|min:0',
            'hoanthanhnam1' => 'required|numeric|min:0',
            'muctieunam1' => 'required|numeric|min:0',
            'hoanthanhnam2' => 'required|numeric|min:0',
            'muctieunam2' => 'required|numeric|min:0',
            'hoanthanhnam3' => 'required|numeric|min:0',
            'muctieunam3' => 'required|numeric|min:0',
            'hoanthanhnam4' => 'required|numeric|min:0',
            'muctieunam4' => 'required|numeric|min:0',
            'hoanthanhnam5' => 'required|numeric|min:0',
            'muctieunam5' => 'required|numeric|min:0',


        ],
        [
            
            
            'hoanthanh.min' => 'Hoàn thành tối thiểu là 0',
            'muctieu.min' => 'Mục tiêu tối thiểu là 0',
            'hoanthanhnam1.min' => 'Hoàn thành năm 1 tối thiểu là 0',
            'muctieunam1.min' => 'Mục tiêu năm 1 tối thiểu là 0',
            'hoanthanhnam2.min' => 'Hoàn thành năm 2 tối thiểu là 0',
            'muctieunam2.min' => 'Mục tiêu năm 2 tối thiểu là 0',
            'hoanthanhnam3.min' => 'Hoàn thành năm 3 tối thiểu là 0',
            'muctieunam3.min' => 'Mục tiêu năm 3 tối thiểu là 0',
            'hoanthanhnam4.min' => 'Hoàn thành năm 4 tối thiểu là 0',
            'muctieunam4.min' => 'Mục tiêu năm 4 tối thiểu là 0',
            'hoanthanhnam5.min' => 'Hoàn thành năm 5 tối thiểu là 0',
            'muctieunam5.min' => 'Mục tiêu năm 5 tối thiểu là 0',

        ]
            
        );


        $id = Auth::user()->rule;
        $truong = Auth::user()->ma_truong;
       
        $daihan = new daihan();
        
        
        $daihan->ma_tc = $request->tieuchi;
        $nam = $request->nam;
        // $nam = 2025;
        $daihan->nam = $nam;
        $daihan->xong = $request->hoanthanh;
        $daihan->tong = $request->muctieu;
        if($id == 1) {
            $daihan->ma_truong = $request->truong;
        } else {
            $daihan->ma_truong = $truong;
        }
        
        $daihan->save();
        for ($i = 5; $i>0 ;$i--){
            $nganhan = new nganhan();
            $nganhan->ma_tc = $daihan->id;
            $hoanthanhnam = 'hoanthanhnam'.(6-$i);
            $muctieunam = 'muctieunam'.(6-$i);
            $nganhan->xong = $request->$hoanthanhnam;
            $nganhan->tong = $request->$muctieunam;
            $nganhan->nam = $nam  - $i;
            $nganhan->save();

        }
       
        Session::put('massage',' thêm chỉ số tiêu chí thành công!');
        return Redirect::to('/admin/tieuchi');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->AuthLogin();
        //show tieu chi ngan han
        $daihan = daihan::find($id);
        $nganhan = $daihan->nganhan1;
        $tentc = $daihan->tieuchidh->ten;
        
        
        return view("admin.tieuchi.all_tieuchi_nganhan", compact("nganhan","tentc"));
        
        
    }

    public function showTC($id, $id1) {
    //edit tieu chi
      $this->AuthLogin();
      $tieuchi = tieuchi::find($id);
      $tieuchiall = tieuchi::all();
      $daihan = daihan::find($id1);
      $nganhan = daihan::find($id1)->nganhan1;
      $donvi = donvi::all();
      $truong = DB::table('truong')->get();
      
      return view('admin.tieuchi.edit_tieuchi', compact("tieuchi", "daihan", "nganhan","truong","donvi", 'tieuchiall'));
      
    }

    public function updateTC(Request $request, $id_tc, $id1)
    {
        $this->AuthLogin();

        $validateData = $request->validate([
           
            'hoanthanh' => 'required|numeric|min:0',
            'muctieu' => 'required|numeric|min:0',
            'hoanthanhnam1' => 'required|numeric|min:0',
            'muctieunam1' => 'required|numeric|min:0',
            'hoanthanhnam2' => 'required|numeric|min:0',
            'muctieunam2' => 'required|numeric|min:0',
            'hoanthanhnam3' => 'required|numeric|min:0',
            'muctieunam3' => 'required|numeric|min:0',
            'hoanthanhnam4' => 'required|numeric|min:0',
            'muctieunam4' => 'required|numeric|min:0',
            'hoanthanhnam5' => 'required|numeric|min:0',
            'muctieunam5' => 'required|numeric|min:0',


        ],
        [
            
           
            'hoanthanh.min' => 'Hoàn thành tối thiểu là 0',
            'muctieu.min' => 'Mục tiêu tối thiểu là 0',
            'hoanthanhnam1.min' => 'Hoàn thành năm 1 tối thiểu là 0',
            'muctieunam1.min' => 'Mục tiêu năm 1 tối thiểu là 0',
            'hoanthanhnam2.min' => 'Hoàn thành năm 2 tối thiểu là 0',
            'muctieunam2.min' => 'Mục tiêu năm 2 tối thiểu là 0',
            'hoanthanhnam3.min' => 'Hoàn thành năm 3 tối thiểu là 0',
            'muctieunam3.min' => 'Mục tiêu năm 3 tối thiểu là 0',
            'hoanthanhnam4.min' => 'Hoàn thành năm 4 tối thiểu là 0',
            'muctieunam4.min' => 'Mục tiêu năm 4 tối thiểu là 0',
            'hoanthanhnam5.min' => 'Hoàn thành năm 5 tối thiểu là 0',
            'muctieunam5.min' => 'Mục tiêu năm 5 tối thiểu là 0',

        ]
            
        );


        $id = Auth::user()->rule;
        $truong = Auth::user()->ma_truong;
        $tieuchi = tieuchi::find($id_tc);
        $daihan = daihan::find($id1);
        $ngh = daihan::find($id1)->nganhan1;
        
       
        
        $nam = $request->nam;
        $daihan->nam = $nam;
        $daihan->xong = $request->hoanthanh;
        $daihan->tong = $request->muctieu;
        if($id == 1) {
            $daihan->ma_truong = $request->truong;
        } else {
            $daihan->ma_truong = $truong;
        }
        $daihan->save();
        for ($i = 5; $i>0 ;$i--){
            $nganhan = nganhan::find($ngh[5-$i]->id);
            $nganhan->ma_tc = $daihan->id;
            $hoanthanhnam = 'hoanthanhnam'.(5 - $i + 1);
            $muctieunam = 'muctieunam'.(5 - $i + 1);
            $nganhan->xong = $request->$hoanthanhnam;
            $nganhan->tong = $request->$muctieunam;
            $nganhan->nam = $nam - $i;
             $nganhan->save();
           

        }
       
        Session::put('massage',' cập nhật chỉ số tiêu chí thành công!');
        return Redirect::to('/admin/tieuchi');
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
        $nganhan = nganhan::find($id);
        $id = $nganhan->id;
        $nam = $nganhan ->nam;
        $hoanthanh = $nganhan->xong;
        $tentc = $nganhan->tcdaihan->tieuchidh->ten;
        
       return view("admin.tieuchi.edit_tieuchi_nganhan",compact("id","hoanthanh","nam", "tentc"));
       
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
           
            'hoanthanh' => 'required|numeric|min:0',
        


        ],
        [
            
            'hoanthanh.min' => 'Hoàn thành tối thiểu là 0',
        
        ]
            
        );
        $nganhan = nganhan::find($id);
        $id = $nganhan->tcdaihan->id;
        $daihan = $nganhan->tcdaihan;
        $hoanthanhmuctieu = $daihan->xong;
        $daihan->xong = $hoanthanhmuctieu - $nganhan->xong + $request->hoanthanh;
        $daihan->save();
        $nganhan->xong = $request->hoanthanh;
        $nganhan->save();
        Session::put('massage',' cập nhật tiêu chí thành công!');
        return Redirect::to('/admin/tieuchi'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }

    public function delete_tieuchi($id) {
        $this->AuthLogin();
    	$tieuchi = tieuchi::find($id);
    	
    	$tieuchi->delete();
    	Session::put('massage',' xóa tiêu chí thành công!');
        return Redirect::to('/admin/list-tieuchi');
    }
}