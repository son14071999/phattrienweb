<?php

namespace App\Http\Controllers;
use App\nganhan;
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


    function getSearch(Request $request)
    {
        $search = $request->search;
        $nganhan = nganhan::all();
        for($i=0; $i<count($nganhan); $i++)
        {
            $nganhan[$i]->tieuchi = daihan::where('id',$nganhan[$i]->ma_tc)->get()[0];
            $nganhan[$i]->truong = truong::where('id',$nganhan[$i]->tieuchi->ma_truong)->get()[0]->ten;
            $nganhan[$i]->tieuchi = tieuchi::where('id',$nganhan[$i]->tieuchi->ma_tc)->get()[0];
            $nganhan[$i]->mota = $nganhan[$i]->tieuchi->moTa;
            $nganhan[$i]->donvi = donvi::where('id',$nganhan[$i]->tieuchi->id)->get()[0]->ten;
            $nganhan[$i]->tieuchi = $nganhan[$i]->tieuchi->ten;
        }
        $nh1 = array();
        foreach ($nganhan as $nh)
        {
            $tc = strpos($nh->tieuchi,$search);
            $tr = strpos($nh->truong, $search);
            $dv = strpos($nh->donvi, $search);
            $ht = strpos($nh->xong, $search);
            $t = strpos($nh->tong, $search);
            $n = strpos($nh->nam, $search);
            $mt = strpos($nh->mota, $search);
            if(!($tc=='' && $t == '' && $dv =='' && $ht=='' && $n == '' && $tr == '' && $mt == ''))
            {
                $nh->tieuchi = str_replace($search, '<mark style="background: yellow">'.$search.'</mark>', $nh->tieuchi);
                $nh->truong = str_replace($search, '<mark style="background: yellow">'.$search.'</mark>', $nh->truong);
                $nh->donvi = str_replace($search, '<mark style="background: yellow">'.$search.'</mark>', $nh->donvi);
                $nh->xong = str_replace($search, '<mark style="background: yellow">'.$search.'</mark>', $nh->xong);
                $nh->tong = str_replace($search, '<mark style="background: yellow">'.$search.'</mark>', $nh->tong);
                $nh->nam = str_replace($search, '<mark style="background: yellow">'.$search.'</mark>', $nh->nam);
                $nh->mota = str_replace($search, '<mark style="background: yellow">'.$search.'</mark>', $nh->mota);
                array_push($nh1, $nh);
            }
        }
        $nganhan = $nh1;
        return view('search', compact('nganhan', 'search'));
    }

    function getThongke(){
        $nganhan = nganhan::all();
        $hoanThanh = array();
        $nam = array();
        $tong = array();
        foreach ($nganhan as $nh)
        {
            if(in_array($nh->nam, $nam)==false){
                array_push($nam, $nh->nam);
                array_push($hoanThanh, 0);
                array_push($tong, 0);
            }
        }
        sort($nam);
        foreach ($nganhan as $nh)
        {
            $index = array_search($nh->nam, $nam);
            $hoanThanh[$index] = $hoanThanh[$index] + $nh->xong;
            $tong[$index] = $tong[$index] + $nh->tong;
        }
        return view('chart', compact('nam','hoanThanh','tong'));
    }


}
