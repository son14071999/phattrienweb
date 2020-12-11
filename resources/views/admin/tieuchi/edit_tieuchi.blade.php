@extends('admin.layout.admin_layout')
@section('title')
Sửa Chỉ Số Tiêu Chí
@endsection
@section('content')
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Sửa Chỉ Số Tiêu Chí {{$tieuchi->ten}} năm {{$daihan->nam}}  </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ URL::to('/admin/index') }}">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Tính năng</a> </li>
          <li class="breadcrumb-item active"> <strong> Sửa Chỉ Số Tiêu Chí </strong> </li>
           
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
      
        <div class="col-lg-12 mt-md-2  mb-md-2">
          <div class="widgets-container">
            <h5>Sửa Chỉ Số Tiêu Chí </h5>
            @include('admin.error')
            <hr>
            
            <form action="{{ URL::to('/admin/updatetc'.'/'.$tieuchi->id.'/'.$daihan->id) }}" name="themtc" class="themtieuchi" method="POST" enctype="multipart/form-data" onsubmit = "return(validate());">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              
              <div class="form-group row">
                      <label class="col-sm-2 control-label">Tiêu chí</label>
                         <div class="col-sm-10">
                            <select  name="tieuchi"  class="custom-select">
                              
                            @foreach($tieuchiall as $tc)
                              @if($tc->id == $tieuchi->id)

                              <option value="{{$tc->id}}" selected disabled>{{$tc->ten}}</option>
                              @else
                              <option value="{{$tc->id}}" disabled>{{$tc->ten}}</option>
                              @endif
                            @endforeach
                              
                            </select>
                      </div>
                    </div>
            

              

                    <hr>
              <div class="form-group row">
                      <label class="col-sm-2 control-label">Năm</label>
                         <div class="col-sm-10">
                            <select  name="nam"  class="custom-select">
                              
                            @for($i=2000; $i<2200; $i=$i+5)
                              @if($daihan->nam == $i)
                              <option value="{{$i}}" selected>{{$i}}</option>
                              @else
                              <option value="{{$i}}" >{{$i}}</option>
                              @endif
                            @endfor
                              
                            </select>
                      </div>
                    </div>
            

             <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Mục tiêu</label>
                <div class="col-sm-10">
                  <input placeholder="muctieu" class="form-control" type="number" name="muctieu" value="{{$daihan->tong}}">
                </div>

              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Hoàn Thành</label>
                <div class="col-sm-10">
                  <input placeholder="hoanthanh" class="form-control" type="number" name="hoanthanh" value="{{$daihan->xong}}">
                </div>
                
              </div>

              @for($i=0; $i<5; $i++)

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Mục tiêu năm {{$i+1}}</label>
                <div class="col-sm-10">
                  <input placeholder="muctieu" class="form-control" type="number" name="muctieunam{{$i+1}}" value="{{$nganhan[$i]->tong}}">
                </div>
                <span id="muctieuloi{{$i+1}}" style="margin-left: 190px; color: red;"></span>
              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Hoàn Thành</label>
                <div class="col-sm-10">
                  <input placeholder="hoanthanh" class="form-control" type="number" name="hoanthanhnam{{$i+1}}" value="{{$nganhan[$i]->xong}}">
                </div>
                <span id="hoanthanhloi{{$i+1}}" style="margin-left: 190px; color: red;"></span>
              </div>


              @endfor
             

              @if(Auth::user()->rule == 1)
              <hr>
                
                  <div class="form-group row">
                      <label class="col-sm-2 control-label">Trường</label>
                         <div class="col-sm-10">
                            <select  name="truong"  class="custom-select">
                           
                            @foreach($truong as $sch)
                              @if($sch->id == $daihan->ma_truong)
                              <option value="{{$sch->id}}" selected >{{$sch->ten}}</option>
                              @else
                              <option value="{{$sch->id}}" >{{$sch->ten}}</option>
                              @endif
                            @endforeach
                              
                            </select>
                      </div>
                    </div>
                  @endif


                 
                    
                   
             
             

              <hr>
              <button class="buttonxxx" name="themtaikhoan" style="color: white; text-align: center">Update Tiêu Chí </button>

            </form>
          </div>
        </div>
       
      </div>
    </div> 
    
     <div class="footer">
              <div class="pull-right">
                
              </div>
              <div> <strong>Copyright</strong> Admin &copy; 2020 </div>
            </div>
  </div>
</div>

<script>
    function validate() {
      var hoanthanh = parseInt(document.themtc.hoanthanh.value);
      var muctieu = parseInt(document.themtc.muctieu.value);
      var hoanthanhnam1 = parseInt(document.themtc.hoanthanhnam1.value);
      var muctieunam1 = parseInt(document.themtc.muctieunam1.value);
      var hoanthanhnam2 = parseInt(document.themtc.hoanthanhnam2.value);
      var muctieunam2 = parseInt(document.themtc.muctieunam2.value);
      var hoanthanhnam3 = parseInt(document.themtc.hoanthanhnam3.value);
      var muctieunam3 = parseInt(document.themtc.muctieunam3.value);
      var hoanthanhnam4 = parseInt(document.themtc.hoanthanhnam4.value);
      var muctieunam4 = parseInt(document.themtc.muctieunam4.value);
      var hoanthanhnam5 = parseInt(document.themtc.hoanthanhnam5.value);
      var muctieunam5 = parseInt(document.themtc.muctieunam5.value);
    //  console.log(muctieu,muctieunam1,muctieunam2,muctieunam3,muctieunam4,muctieunam5)
    //  console.log(hoanthanh,hoanthanhnam1,hoanthanhnam2,hoanthanhnam3,hoanthanhnam4,hoanthanhnam5)
      var d = 0;
    
     
     if(muctieunam1 > muctieu) {
        document.getElementById('muctieuloi1').innerHTML = "mục tiêu năm 1 không thể lớn hơn mục tiêu tổng";
        return false;
        
     }
      if( hoanthanhnam1 > hoanthanh) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "hoàn thành năm 1 không thể lớn hơn hoàn thành tổng";
        document.themtc.hoanthanhnam1.focus();
        return false;
     }
     if (muctieunam2 > (muctieu - muctieunam1)) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "mục tiêu năm 2 không thể lớn hơn " + (muctieu - muctieunam1);
        return false;
     } 
     if (hoanthanhnam2 > (hoanthanh - hoanthanhnam1)) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "hoàn thành năm 2 không thể lớn hơn " + (hoanthanh - hoanthanhnam1);
        return false;
     } 

     if (muctieunam3 > (muctieu - muctieunam1 - muctieunam2)) {
      document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "mục tiêu năm 3 không thể lớn hơn " + (muctieu - muctieunam1 - muctieunam2);
        return false;
     } 

     if (hoanthanhnam3 > (hoanthanh - hoanthanhnam1 - hoanthanhnam2)) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "";
        document.getElementById('hoanthanhloi3').innerHTML = "hoàn thành năm 3 không thể lớn hơn " + (hoanthanh - hoanthanhnam1 - hoanthanhnam2);
        return false;
     } 

     if (muctieunam4 > (muctieu - muctieunam1 - muctieunam2 - muctieunam3)) {
      document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "";
        document.getElementById('hoanthanhloi3').innerHTML = "";
        document.getElementById('muctieuloi4').innerHTML = "mục tiêu năm 4 không thể lớn hơn " + (muctieu - muctieunam1 - muctieunam2 -muctieunam3);
        return false;
     } 

     if (hoanthanhnam4 > (hoanthanh - hoanthanhnam1 -hoanthanhnam2 - hoanthanhnam3)) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "";
        document.getElementById('hoanthanhloi3').innerHTML = "";
        document.getElementById('muctieuloi4').innerHTML = "";
        document.getElementById('hoanthanhloi4').innerHTML = "hoàn thành năm 4 không thể lớn hơn " + (hoanthanh - hoanthanhnam1 - hoanthanhnam2 - hoanthanhnam3);
        return false;
     } 

     if (muctieunam5 > (muctieu - muctieunam1 - muctieunam2 - muctieunam3 - muctieunam4)) {
      document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "";
        document.getElementById('hoanthanhloi3').innerHTML = "";
        document.getElementById('muctieuloi4').innerHTML = "";
        document.getElementById('hoanthanhloi4').innerHTML ="";
        document.getElementById('muctieuloi5').innerHTML = "mục tiêu năm 5 không thể lớn hơn " + (muctieu - muctieunam1 - muctieunam2 -muctieunam3 -muctieunam4);
        return false;
     } 

     if (hoanthanhnam5 > (hoanthanh - hoanthanhnam1 -hoanthanhnam2 - hoanthanhnam3 - hoanthanhnam4)) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "";
        document.getElementById('hoanthanhloi3').innerHTML = "";
        document.getElementById('muctieuloi4').innerHTML = "";
        document.getElementById('hoanthanhloi4').innerHTML ="";
        document.getElementById('muctieuloi5').innerHTML = "";
        document.getElementById('hoanthanhloi5').innerHTML = "hoàn thành năm 5 không thể lớn hơn " + (hoanthanh - hoanthanhnam1 - hoanthanhnam2 - hoanthanhnam3 - hoanthanhnam4);
        return false;
     } 

     
     
      
      
      return( true );
   }
</script>
@endsection