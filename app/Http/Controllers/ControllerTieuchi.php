<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\tieuchi;
use App\donvi;
use App\daihan;
use App\truong;

class ControllerTieuchi extends Controller
{
    function __construct()
    {
//        view()->share('tieuchi', $tieuchi);
//        view()->share('donvi', $donvi);

    }

    function general($tc, $tr, $d){
        $truong = truong::all();
        $tieuchi = tieuchi::all();
        $donvi = donvi::all();
        $daihan = daihan::all();

        for($i=0;$i<count($daihan);$i++)
        {
            $daihan[$i]->ma_tc = tieuchi::where('id',$daihan[$i]->ma_tc)->get()[0];
            $daihan[$i]->ma_truong = truong::where('id',$daihan[$i]->ma_truong)->get()[0]->ten;
            $daihan[$i]->don_vi = donvi::where('id',$daihan[$i]->ma_tc->id)->get()[0]->ten;
            $daihan[$i]->ma_tc = $daihan[$i]->ma_tc->ten;
        }
        if($tc!='all')
        {
            $a = array();
            foreach ($daihan as $dh){
                if($dh->ma_tc==$tc){
                    array_push($a, $dh);
                }
            }
            $daihan = $a;
        }
        if($tr!='all')
        {
            $a = array();
            foreach ($daihan as $dh){
                if($dh->ma_truong==$tr){
                    array_push($a, $dh);
                }
            }
            $daihan = $a;
        }
        if($d!='all')
        {
            $a = array();
            foreach ($daihan as $dh){
                if($dh->don_vi==$d){
                    array_push($a, $dh);
                }
            }
            $daihan = $a;
        }


        return [$truong, $tieuchi, $donvi, $daihan];
    }

    function getTieuchi(){
        $select_tc = 'all';
        $select_tr = 'all';
        $select_dv = 'all';
        $g = $this->general($select_tc, $select_tr, $select_dv);
        $truong = $g[0];
        $tieuchi = $g[1];
        $donvi = $g[2];
        $daihan = $g[3];

        return view('tieuchi',compact('daihan','tieuchi', 'truong','dv','donvi','select_tr','select_tc','select_dv'));
    }

    function getLoc(Request $request){
        $select_tc = $request->tieuchi;
        $select_tr = $request->truong;
        $select_dv = $request->donvi;
        $g = $this->general($select_tc, $select_tr, $select_dv);
        $truong = $g[0];
        $tieuchi = $g[1];
        $donvi = $g[2];
        $daihan = $g[3];

        return view('tieuchi',compact('daihan','tieuchi', 'truong','dv','donvi','select_tr','select_tc','select_dv'));
    }

    function getThongke(){
        return 'chưa có j';
    }
}
