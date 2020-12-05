<?php

namespace App\Http\Controllers;
use App\nganhan;
use Illuminate\Http\Request;
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

        return view('tieuchi',compact('daihan','tieuchi', 'truong','donvi','select_tr','select_tc','select_dv'));
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
        return view('chart', compact('arr','nam','hoanThanh','tong'));
    }


    public function demoThongKe(){
        $truong  = DB::table('truong')->get();
        $tieuchi = tieuchi::all();
        return view('chart.demo', compact('truong', 'tieuchi'));
    }

    public function postThongKe(Request $request){
        $truong  = DB::table('truong')->get();
        $tieuchi = tieuchi::all();
        $truonga = $request->truonga;
        $truongb = $request->truongb;
        $tongdaihan = array();
        $tongnganhan = array();
        $hoanthanhnganhan = array();
        $truongduocchon = array();
        $nam = $request->nam;
        $trongnhieunam = $request->nhieunam;
        if(empty($trongnhieunam)){
            $trongnhieunam = "";
        }
        $idtieuchicantim  = $request->tieuchi;
        $daihanall = tieuchi::find($idtieuchicantim)->daihan1234;
       
        
        $tentc = tieuchi::find($idtieuchicantim)->ten;
        // $tieuchidaihan = $daihanall->where('ma_truong','hus')->first();
        // $tieuchinganhantheonam = $tieuchidaihan->nganhan1->where('nam','=',$nam)->first();
        // return $tieuchinganhantheonam;

        if($trongnhieunam != ""){
            $arrNhieuNam = preg_split("/\-/",$trongnhieunam);
            $nam1 = (int) $arrNhieuNam[0];
            $nam2 = (int) $arrNhieuNam[1];
            if (($nam1 < 2000) || ($nam2 < 2000) || $nam2 < $nam1) {
                return "nhap lai dung theo khoang trong goi y";
            } else {
                if(($truonga==$truongb) && ($truonga==-1||$truongb==-1)){
                    $idtruongduocchon = array();
                    foreach($truong as $tr){
                        array_push($truongduocchon, $tr->ten);
                        array_push($idtruongduocchon, $tr->id);
                    }
                    
                    foreach($idtruongduocchon as $id){
                        $tieuchidaihan = $daihanall->where('ma_truong',$id)->first();
                        array_push($tongdaihan,  $tieuchidaihan->tong);
                        
                        $tongctnganhantheonam = 0;
                        $xongctnganhantheonam = 0;
                        for($i = $nam1; $i<=$nam2; $i++){
                            $tieuchinganhantheonam = $tieuchidaihan->nganhan1->where('nam','=',$i)->first();
                            if(empty($tieuchinganhantheonam)) {
                                return "khong co du lieu nhap nam khac hoac xem xet lai hoac nhap dung nam trong khoang goi y(khoang 5 nam), ";
                            }
                            $tongctnganhantheonam += $tieuchinganhantheonam->tong;
                            $xongctnganhantheonam += $tieuchinganhantheonam->xong;
                        }
                        
                        
                        array_push($tongnganhan, $tongctnganhantheonam);
                        array_push($hoanthanhnganhan, $xongctnganhantheonam);
                    }
                   
                    return view('chart.postthongke', compact('truongduocchon','truong','tieuchi','tongdaihan','tongnganhan','hoanthanhnganhan', 'tentc','nam','trongnhieunam'));
                }
                elseif ($truongb==$truonga) {
                    array_push($tongdaihan,$daihanall->where('ma_truong','=',$truonga)->first()->tong) ;
                    $tongctnganhantheonam = 0;
                    $xongctnganhantheonam = 0;
                    for($i = $nam1; $i<=$nam2; $i++){
                        $nganhantruonga =  $daihanall->where('ma_truong','=',$truonga)->first()->nganhan1->where('nam','=',$i)->first();
                        if(empty($nganhantruonga)) {
                            return "khong co du lieu nhap nam khac hoac xem xet lai hoac nhap dung nam trong khoang goi y(khoang 5 nam), ";
                        }
                        $tongctnganhantheonam += $nganhantruonga->tong;
                        $xongctnganhantheonam += $nganhantruonga->xong;
                    }
                    //$nganhantruonga =  $daihanall->where('ma_truong','=',$truonga)->first()->nganhan1->where('nam','=',$nam)->first();
                    array_push($tongnganhan, $tongctnganhantheonam);
                    array_push($hoanthanhnganhan, $xongctnganhantheonam);
                   
                    
                    array_push($truongduocchon, DB::table('truong')->where('truong.id','=', $truonga)->first()->ten);
               
                    
                    return view('chart.postthongke', compact('truongduocchon','truong','tieuchi','tongdaihan','tongnganhan','hoanthanhnganhan', 'tentc','nam', 'trongnhieunam'));
                    
                }
                array_push($tongdaihan,$daihanall->where('ma_truong','=',$truonga)->first()->tong) ;
                array_push($tongdaihan,$daihanall->where('ma_truong','=',$truongb)->first()->tong) ;
                $tongctnganhantheonamtruonga = 0;
                $xongctnganhantheonamtruonga = 0;
                $tongctnganhantheonamtruongb = 0;
                $xongctnganhantheonamtruongb = 0;
                for($i = $nam1; $i<=$nam2; $i++){
                    $nganhantruonga =  $daihanall->where('ma_truong','=',$truonga)->first()->nganhan1->where('nam','=',$i)->first();
                    $nganhantruongb =  $daihanall->where('ma_truong','=',$truongb)->first()->nganhan1->where('nam','=',$i)->first();
                    if(empty($nganhantruonga) || empty($nganhantruongb)) {
                        return "khong co du lieu nhap nam khac hoac xem xet lai hoac nhap dung nam trong khoang goi y(khoang 5 nam), ";
                    }
                    $tongctnganhantheonamtruonga += $nganhantruonga->tong;
                    $xongctnganhantheonamtruonga += $nganhantruonga->xong;
                    $tongctnganhantheonamtruongb += $nganhantruongb->tong;
                    $xongctnganhantheonamtruongb += $nganhantruongb->xong;
                }
                    //$nganhantruonga =  $daihanall->where('ma_truong','=',$truonga)->first()->nganhan1->where('nam','=',$nam)->first();
                

                // $nganhantruonga =  $daihanall->where('ma_truong','=',$truonga)->first()->nganhan1->where('nam','=',$nam)->first();
                // $nganhantruongb =  $daihanall->where('ma_truong','=',$truongb)->first()->nganhan1->where('nam','=',$nam)->first();
                array_push($tongnganhan, $tongctnganhantheonamtruonga);
                array_push($tongnganhan, $tongctnganhantheonamtruongb);
                array_push($hoanthanhnganhan, $xongctnganhantheonamtruonga);
                array_push($hoanthanhnganhan, $xongctnganhantheonamtruongb);
                //foreach(DB::table('truong')->where('truong.id','=', $truonga)->get() as $tr) {
                    array_push($truongduocchon, DB::table('truong')->where('truong.id','=', $truonga)->first()->ten);
            // }
                //foreach(DB::table('truong')->where('truong.id','=', $truongb)->get() as $tr) {
                    array_push($truongduocchon, DB::table('truong')->where('truong.id','=', $truongb)->first()->ten);
                //}
                // array_push($truongduocchon, $truonga);
                // array_push($truongduocchon, $truongb);
                
                
                return view('chart.postthongke', compact('truongduocchon','truong','tieuchi','tongdaihan','tongnganhan','hoanthanhnganhan', 'tentc','nam','trongnhieunam')); 



            }
            
        } else {

            if(($truonga==$truongb) && ($truonga==-1||$truongb==-1)){
                $idtruongduocchon = array();
                foreach($truong as $tr){
                    array_push($truongduocchon, $tr->ten);
                    array_push($idtruongduocchon, $tr->id);
                }
                
                foreach($idtruongduocchon as $id){
                    $tieuchidaihan = $daihanall->where('ma_truong',$id)->first();
                   
                    $tieuchinganhantheonam = $tieuchidaihan->nganhan1->where('nam','=',$nam)->first();
                    if(empty($tieuchinganhantheonam)) {
                        return "khong co du lieu nhap nam khac hoac xem xet lai cac truong";
                    }
                   
                    array_push($tongdaihan,  $tieuchidaihan->tong);
                    array_push($tongnganhan, $tieuchinganhantheonam->tong);
                    array_push($hoanthanhnganhan, $tieuchinganhantheonam->xong);

                   
                    
                }
               
                return view('chart.postthongke', compact('truongduocchon','truong','tieuchi','tongdaihan','tongnganhan','hoanthanhnganhan', 'tentc','nam', 'trongnhieunam'));
            }
            elseif ($truongb==$truonga) {
                array_push($tongdaihan,$daihanall->where('ma_truong','=',$truonga)->first()->tong) ;
                $nganhantruonga =  $daihanall->where('ma_truong','=',$truonga)->first()->nganhan1->where('nam','=',$nam)->first();
                array_push($tongnganhan, $nganhantruonga->tong);
               
                array_push($hoanthanhnganhan, $nganhantruonga->xong);
               
                
                    array_push($truongduocchon, DB::table('truong')->where('truong.id','=', $truonga)->first()->ten);
           
                
                return view('chart.postthongke', compact('truongduocchon','truong','tieuchi','tongdaihan','tongnganhan','hoanthanhnganhan', 'tentc','nam','trongnhieunam'));
                
            } 

    
            
            
                // if($dh->ma_truong==$truonga || $dh->ma_truong==$truongb) {
                //     array_push($tongdaihan, $dh->xong);
                // }
            array_push($tongdaihan,$daihanall->where('ma_truong','=',$truonga)->first()->tong) ;
            array_push($tongdaihan,$daihanall->where('ma_truong','=',$truongb)->first()->tong) ;
            $nganhantruonga =  $daihanall->where('ma_truong','=',$truonga)->first()->nganhan1->where('nam','=',$nam)->first();
            $nganhantruongb =  $daihanall->where('ma_truong','=',$truongb)->first()->nganhan1->where('nam','=',$nam)->first();
            if(empty($nganhantruonga) || empty($nganhantruongb)) {
                return "khong co du lieu nhap nam khac hoac xem xet lai hoac nhap nam khac ";
            }
            array_push($tongnganhan, $nganhantruonga->tong);
            array_push($tongnganhan, $nganhantruongb->tong);
            array_push($hoanthanhnganhan, $nganhantruonga->xong);
            array_push($hoanthanhnganhan, $nganhantruongb->xong);
            //foreach(DB::table('truong')->where('truong.id','=', $truonga)->get() as $tr) {
                array_push($truongduocchon, DB::table('truong')->where('truong.id','=', $truonga)->first()->ten);
           // }
            //foreach(DB::table('truong')->where('truong.id','=', $truongb)->get() as $tr) {
                array_push($truongduocchon, DB::table('truong')->where('truong.id','=', $truongb)->first()->ten);
            //}
            // array_push($truongduocchon, $truonga);
            // array_push($truongduocchon, $truongb);
            
            
            return view('chart.postthongke', compact('truongduocchon','truong','tieuchi','tongdaihan','tongnganhan','hoanthanhnganhan', 'tentc','nam','trongnhieunam'));

        }
       
        
        
       
        
        
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

    public function gettruongthongke(Request $request){
       
        $tieuchi  = tieuchi::find($request->id)->daihan1234;
        $truong = array();
        foreach($tieuchi as $tc) {
            array_push($truong, $tc->ma_truong);
        }
        $truong  = array_unique($truong);
        
        

        return $truong ;
    }

    public function  test1234(){
        return view('chart.test1');

    }



   
   
}



