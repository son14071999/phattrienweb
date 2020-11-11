<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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



class ManagerAdminTieuChiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tieuchi = daihan::select('tieuchi.id as id_tieuchi','daihan.id as id_daihan', 'nam', 'xong', 'tong', 'tieuchi.ten as tentieuchi','truong.ten as tentruong','ma_dv', 'donvi.ten as tendonvi') 
        ->join('tieuchi', 'tieuchi.id','=','daihan.ma_tc')
        ->join('truong','truong.id','=','daihan.ma_truong')
        ->join('donvi','donvi.id', '=', 'tieuchi.ma_dv')
        ->get();
        return view("admin.tieuchi.all_tieuchi", compact("tieuchi"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donvi = donvi::all();
        $truong = DB::table('truong')->get();
       
        return view("admin.tieuchi.add_tieuchi", compact("donvi", "truong"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tieuchi = new tieuchi();
        $daihan = new daihan();
        
        $tieuchi->ten = $request->tentieuchi;
        $tieuchi->moTa = $request->motatieuchi;
        $tieuchi->ma_dv = $request->donvi;
        $tieuchi->save();
        
        $daihan->ma_tc = $tieuchi->id;
        $nam = $request->nam;
        $daihan->nam = $nam;
        $daihan->xong = $request->hoanthanh;
        $daihan->tong = $request->muctieu;
        $daihan->ma_truong = $request->truong;
        $daihan->save();
        for ($i = 1; $i<=5 ;$i++){
            $nganhan = new nganhan();
            $nganhan->ma_tc = $daihan->id;
            $hoanthanhnam = 'hoanthanhnam'.$i;
            $muctieunam = 'muctieunam'.$i;
            $nganhan->xong = $request->$hoanthanhnam;
            $nganhan->tong = $request->$muctieunam;
            $nganhan->nam = $nam + $i - 1;
            $nganhan->save();

        }
       
        Session::put('massage',' add  tieuchi success!');
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
        
        
    }

    public function showTC($id, $id1){

      $tieuchi = tieuchi::find($id);
      $daihan = daihan::find($id1);
      $nganhan = daihan::find($id1)->nganhan;
      $donvi = donvi::all();
      $truong = DB::table('truong')->get();
      
      return view('admin.tieuchi.edit_tieuchi', compact("tieuchi", "daihan", "nganhan","truong","donvi"));
      
    }

    public function updateTC(Request $request, $id, $id1)
    {
        $tieuchi = tieuchi::find($id);
        $daihan = daihan::find($id1);
        $ngh = daihan::find($id1)->nganhan;
        $tieuchi->ten = $request->tentieuchi;
        $tieuchi->moTa = $request->motatieuchi;
        $tieuchi->ma_dv = $request->donvi;
        $tieuchi->save();
        
        $nam = $request->nam;
        $daihan->nam = $nam;
        $daihan->xong = $request->hoanthanh;
        $daihan->tong = $request->muctieu;
        $daihan->ma_truong = $request->truong;
        $daihan->save();
        for ($i = 1; $i<=5 ;$i++){
            $nganhan = nganhan::find($ngh[$i-1]->id);
            $nganhan->ma_tc = $daihan->id;
            $hoanthanhnam = 'hoanthanhnam'.$i;
            $muctieunam = 'muctieunam'.$i;
            $nganhan->xong = $request->$hoanthanhnam;
            $nganhan->tong = $request->$muctieunam;
            $nganhan->nam = $nam + $i - 1;
             $nganhan->save();
           

        }
       
        Session::put('massage',' update  tieuchi success!');
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
        //
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
        //
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
