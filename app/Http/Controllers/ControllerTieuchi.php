<?php

namespace App\Http\Controllers;
use App\nganhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
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
        $daihan1 = daihan::paginate(10);

        for($i=0;$i<count($daihan);$i++)
        {
            $daihan[$i]->ma_tc = tieuchi::where('id',$daihan[$i]->ma_tc)->get()[0];
            $daihan[$i]->ma_truong = truong::where('id',$daihan[$i]->ma_truong)->get()[0]->ten;
            $daihan[$i]->don_vi = donvi::where('id',$daihan[$i]->ma_tc->ma_dv)->get()[0]->ten;
            $daihan[$i]->ma_tc = $daihan[$i]->ma_tc->ten;
            
        }
        foreach($daihan1 as $dh){
            $dh->ma_tc = tieuchi::where('id',$dh->ma_tc)->get()[0];
            $dh->ma_truong = truong::where('id',$dh->ma_truong)->get()[0]->ten;
            $dh->don_vi = donvi::where('id',$dh->ma_tc->ma_dv)->get()[0]->ten;
            $dh->ma_tc = $dh->ma_tc->ten;
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


        return [$truong, $tieuchi, $donvi, $daihan, $daihan1];
    }

    function getTieuchi(){
        $select_tc = 'all';
        $select_tr = 'all';
        $select_dv = 'all';
        $g = $this->general($select_tc, $select_tr, $select_dv);
        $truong = $g[0];
        $tieuchi = $g[1];
        $donvi = $g[2];
        $daihan1 = $g[4];
        $daihan = [];
        $hoanThanh = ["Có khả năng", "Khó có khả năng"];
        $select_ht = "all";
        foreach ($daihan1 as $k)
        {
            $v = round(($k->xong/$k->tong)*100, 2);
            $k->phantram = $v;
            array_push($daihan, $k);
        }

        return view('tieuchi',compact('daihan1','daihan','tieuchi', 'truong','donvi','select_tr','select_tc','select_dv', 'hoanThanh','select_ht'));
    }

    function getLoc(Request $request){
        $select_tc = $request->tieuchi;
        $select_tr = $request->truong;
        $select_dv = $request->donvi;
        $select_ht = $request->hoanthanh;
        if($select_tc == "all" && $select_tr == "all" && $select_dv == "all" && $select_ht == "all") {
            return Redirect::to('/tieu-chi');
        }
        $g = $this->general($select_tc, $select_tr, $select_dv);
        $truong = $g[0];
        $tieuchi = $g[1];
        $donvi = $g[2];
        $daihan1 = $g[3];
        
        $nam = 2021;
        $daihan = [];
        for($i=0; $i<count($daihan1); $i++ )
        {
            $v = round(($daihan1[$i]->xong/$daihan1[$i]->tong)*100, 2);
            $daihan1[$i]->phantram = $v;
            if ($select_ht == "all"){
                array_push($daihan,$daihan1[$i]);
            }
            else{
                if((int)$daihan1[$i]->nam<=$nam+4 and (int)$daihan1[$i]->nam >= $nam){
                    $ht_xong = 0;
                    $ht_tong = 0;
                    $conLai_tt = 0;
                    $conLai_dk = 0;
                    $nganhan = nganhan::where("ma_tc", $daihan1[$i]->id)->get();
                    foreach ($nganhan as $ng){
                        if((int)$ng->nam <= $nam){
                            $ht_xong = $ht_xong + (int)$ng->xong;
                        }
                        else{
                            $conLai_dk = $conLai_dk  + (int)$ng->tong;
                        }
                        $ht_tong = $ht_tong + (int)$ng->tong;
                    }
                    $conLai_tt = $ht_tong-$ht_xong;
                    if($conLai_dk!=0){
                        $thuong = $conLai_tt/$conLai_dk;
                    }
                    else{
                        $thuong = 0;
                    }
                    if($select_ht=="Có khả năng" and $thuong <= 1.15){
                        $daihan1[$i]->thuong  = $thuong;
                        $daihan1[$i]->conLai_dk = $conLai_dk;
                        $daihan1[$i]->conLai_tt = $conLai_tt;
                        array_push($daihan, $daihan1[$i]);
                    }
                    if($select_ht=="Khó có khả năng" and $thuong >= 1.3){
                        $daihan1[$i]->thuong  = $thuong;
                        $daihan1[$i]->conLai_dk = $conLai_dk;
                        $daihan1[$i]->conLai_tt = $conLai_tt;
                        array_push($daihan, $daihan1[$i]);
                    }
                }
            }


        }

        $hoanThanh = ["Có khả năng", "Khó có khả năng"];
        if($select_ht=="all"){
            return view('loctieuchi',compact('daihan','tieuchi', 'truong','donvi','select_tr','select_tc','select_dv', 'hoanThanh','select_ht'));
        }
        else{
            return view('tieuchi1',compact('daihan','tieuchi', 'truong','donvi','select_tr','select_tc','select_dv', 'hoanThanh','select_ht'));
        }
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
            $nganhan[$i]->donvi = donvi::where('id',$nganhan[$i]->tieuchi->ma_dv)->get()[0]->ten;
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
            if(is_integer($tc) or is_integer($tr) or is_integer($dv) or is_integer($ht) or is_integer($t) or is_integer($n) or is_integer($mt))
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
        return view('chart', compact('arr','nam','hoanThanh','tong'));
    }


    public function demoThongKe(){
        $truong  = DB::table('truong')->get();
        $tieuchi = tieuchi::all();
        return view('chart.demo', compact('truong', 'tieuchi'));
    }

    public function getnamthongke(Request $request){
        $tieuchi  = tieuchi::find($request->id)->daihan1234;
        $nam = array();
        foreach($tieuchi as $tc) {
            array_push($nam, $tc->nam);
        }
        sort($nam);

        return $nam ;
    }



    public function test1234(Request $request){//thong ke theo truong
       $arr = array();

       $truong = $request->truong;
       $nam = $request->nam;
       $sodunam = (int) $nam%10;
       $idtieuchi = $request->tieuchi;
       $muctieu5nam = array();

       $muctieunamduocchon = array();
       $thuctenamduocchon = array();
       $tichluydennamchon = array();
       $daihan = daihan::where('ma_tc', $idtieuchi)->get();
       foreach($truong as $tr){
            $tongtichluy = 0;
            $daihan1 = daihan::where('ma_tc', $idtieuchi)->where('ma_truong', $tr)->first();
            $nganhan = $daihan1->nganhan1;
            array_push($muctieunamduocchon, $nganhan->where('nam', $nam)->first()->tong);
            array_push($thuctenamduocchon, $nganhan->where('nam', $nam)->first()->xong);
            array_push($muctieu5nam, $daihan1->tong);
            if($sodunam >= 5) {
                $sodunam = $sodunam - 5;
            }

            for($i = 0; $i <= $sodunam; $i++){
                 $tongtichluy += $nganhan[$i]->xong;
            }
            array_push($tichluydennamchon, $tongtichluy);

       }

       array_push($arr, $muctieu5nam);
       array_push($arr, $muctieunamduocchon);
       array_push($arr, $thuctenamduocchon);
       array_push($arr, $tichluydennamchon);
       return $arr;

    }

    public function ThongKeTheoBanPhuTrach(){
        $banquanly  = donvi::all();
        $nam1 = daihan::select(DB::raw('MAX(nam) as max'))->first();
        $nam2 = daihan::select(DB::raw('MIN(nam) as min'))->first();
        $nammax = $nam1->max;
        $nammin = $nam2->min;
        
        return view('chart.thongkebanphutrach', compact('banquanly', 'nammax', 'nammin'));
    }

    public function PostThongKeTheoBanPhuTrach(Request $request) {
        $nam = $request->nam;
        $banquanly = $request->banquanly;
        $tentieuchi = array();
        $tieuchi = tieuchi::where('ma_dv',$banquanly)->get();
       
        $sodunam = (int)$nam%10;
        if($sodunam > 4){
            $sodunam = $sodunam - 5;
        }
       
        $daihancuanam = array();
        $nganhancuanam = array();
        $arrtongtichluy = array();
        $arrTenTruongCanTim = array();
        $arr = array();
        foreach($tieuchi as $tc){
            $nganhan = array();
            $arrtongtl = array();
            $truongcantim = array();
            
            array_push($tentieuchi, (string)($tc->ten));
           
            $daihan = daihan::where('ma_tc',$tc->id)->orderBy('ma_truong')->get();
            array_push($daihancuanam, $daihan);
            foreach($daihan as $dh) {
                $tongtichluy = 0;
                $ngh = daihan::find($dh->id)->nganhan1;
                array_push($truongcantim, daihan::find($dh->id)->truongdh);
                array_push($nganhan, $ngh->where('nam',$nam)->first());

                for($i=0; $i <= $sodunam; $i++){
                    $tongtichluy += $ngh[$i]->xong;
                }
                array_push($arrtongtl, $tongtichluy);

            }
            array_push($arrtongtichluy, $arrtongtl);
            $arrTenTruongCanTim = $truongcantim;
            array_push($nganhancuanam, $nganhan);
            
        }
        array_push($arr, $tentieuchi);
        array_push($arr, $daihancuanam);
        array_push($arr, $nganhancuanam);
        array_push($arr, $arrtongtichluy);
        array_push($arr, $arrTenTruongCanTim);
      
        return $arr;

    }

    public function  test1(Request $request){
        $daihan = daihan::where('ma_tc',25)->where('ma_truong', 'ussh')->first()->nganhan1;
        return $daihan;
    }

    public function truong(Request $request){
        $option = ["all","Hoàn thành","Chưa hoàn thành"];
        $select_op = "all";
        $select_tc = "all";
        $select_tr = $request->truong;
        $select_dv = "all";
        $g = $this->general($select_tc, $select_tr, $select_dv);


        $daihan = [];
        foreach ($g[3] as $k)
        {
            $v = round(($k->xong/$k->tong)*100, 2);
            if ($select_op=="all")
            {
                $k->phantram = $v;
                array_push($daihan, $k);
            }
            if ($select_op=="Hoàn thành" and $v >= 80)
            {
                $k->phantram = $v;
                array_push($daihan, $k);
            }
            if ($select_op=="Chưa hoàn thành" and $v < 80)
            {
                $k->phantram = $v;
                array_push($daihan, $k);
            }
        }
        return view('truong',compact('daihan','option','select_op','select_tr'));
    }

    public function getLoctruong(Request $request){
        $option = ["all","Hoàn thành","Chưa hoàn thành"];
        $select_op = $request->tieuchi;
        $select_tc = "all";
        $select_tr = $request->truong;
        $select_dv = "all";
        $g = $this->general($select_tc, $select_tr, $select_dv);
        $daihan = [];
        foreach ($g[3] as $k)
        {
            $v = $k->xong/$k->tong;
            if ($select_op=="all")
            {
                $k->phantram = $v;
                array_push($daihan, $k);
            }
            if ($select_op=="Hoàn thành" and $v >= 0.8)
            {
                $k->phantram = $v;
                array_push($daihan, $k);
            }
            if ($select_op=="Chưa hoàn thành" and $v < 0.8)
            {
                $k->phantram = $v;
                array_push($daihan, $k);
            }
        }

//        $daihan = $g[3];

        return view('truong',compact('daihan','option','select_op','select_tr'));
    }



}



