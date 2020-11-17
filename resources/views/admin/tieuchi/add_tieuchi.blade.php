@extends('admin.layout.admin_layout')
@section('title')
Thêm Tiêu Chí
@endsection
@section('content')
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Thêm Tiêu Chí </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ URL::to('/admin/index') }}">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Tính năng</a> </li>
          <li class="breadcrumb-item active"> <strong> Thêm Tiêu Chí </strong> </li>
           
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
      
        <div class="col-lg-12 mt-md-2  mb-md-2">
          <div class="widgets-container">
            <h5>Thêm tiêu chí</h5>
            <hr>
            @include('admin.error')
            <form action="{{ URL::to('/admin/tieuchi') }}" name="themtc" class="themtieuchi" method="POST" enctype="multipart/form-data" onsubmit = "return(validate());">
              {{ csrf_field() }}
              <div class="form-group row">
                <label class="col-sm-2 control-label">Tên Tiêu chí</label>
                <div class="col-sm-10">
                  <input placeholder="Tên tiêu chí" class="form-control" type="text" name="tentieuchi">
                </div>
              </div>

                <hr>
                <div class="form-group row">
                <label class="col-sm-2 control-label">Mô tả tiêu chí</label>
                <div class="col-sm-10">
                <textarea placeholder="mô tả tiêu chí" class="form-control" type="text" name="motatieuchi" ></textarea>
                  
                </div>
              </div>
           
            

              

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Năm</label>
                <div class="col-sm-10">
                  <input placeholder="nam" class="form-control" type="number" name="nam" value="0">
                </div>
              </div>
            

             <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Mục tiêu</label>
                <div class="col-sm-10">
                  <input placeholder="muctieu" class="form-control" type="number" name="muctieu" value="0">
                </div>
              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Hoàn Thành</label>
                <div class="col-sm-10">
                  <input placeholder="hoanthanh" class="form-control" type="number" name="hoanthanh" value="0">
                </div>
              </div>

              @for($i=0; $i<5; $i++)

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Mục tiêu năm {{$i+1}}</label>
                <div class="col-sm-10">
                  <input placeholder="muctieu" class="form-control" type="number" name="muctieunam{{$i+1}}" value="0">
                </div>
                <span id="muctieuloi{{$i+1}}" style="margin-left: 190px; color: red;"></span>
              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Hoàn Thành</label>
                <div class="col-sm-10">
                  <input placeholder="hoanthanh" class="form-control" type="number" name="hoanthanhnam{{$i+1}}" value="0">
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
                              
                              <option value="{{$sch->id}}" >{{$sch->ten}}</option>
                            @endforeach
                              
                            </select>
                      </div>
                    </div>
                @endif

                    <hr>
                  <div class="form-group row">
                      <label class="col-sm-2 control-label">Đơn vị quản lý</label>
                         <div class="col-sm-10">
                            <select  name="donvi"  class="custom-select">
                              
                            @foreach($donvi as $dv)
                              
                              <option value="{{$dv->id}}" >{{$dv->ten}}</option>
                            @endforeach
                              
                            </select>
                      </div>
                    </div>
                    
                    
                   
             
             

              <hr>
              <button class="buttonxxx" id="themtc" name="themtaikhoan" style="color: white; text-align: center">Thêm Tiêu Chí </button>

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
        document.getElementById('muctieuloi1').innerHTML = "muc tieu nam 1 khong the lon hon muc tieu tong";
        return false;
        
     }
      if( hoanthanhnam1 > hoanthanh) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "hoan thanh nam 1 khong the lon hon hoan thanh tong";
        document.themtc.hoanthanhnam1.focus();
        return false;
     }
     if (muctieunam2 > (muctieu - muctieunam1)) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "muc tieu nam 2 khong the lon hon " + (muctieu - muctieunam1);
        return false;
     } 
     if (hoanthanhnam2 > (hoanthanh - hoanthanhnam1)) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "hoan thanh nam 2 khong the lon hon " + (hoanthanh - hoanthanhnam1);
        return false;
     } 

     if (muctieunam3 > (muctieu - muctieunam1 - muctieunam2)) {
      document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "muc tieu nam 3 khong the lon hon " + (muctieu - muctieunam1 - muctieunam2);
        return false;
     } 

     if (hoanthanhnam3 > (hoanthanh - hoanthanhnam1 - hoanthanhnam2)) {
        document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "";
        document.getElementById('hoanthanhloi3').innerHTML = "hoan thanh nam 3 khong the lon hon " + (hoanthanh - hoanthanhnam1 - hoanthanhnam2);
        return false;
     } 

     if (muctieunam4 > (muctieu - muctieunam1 - muctieunam2 - muctieunam3)) {
      document.getElementById('muctieuloi1').innerHTML = ""
        document.getElementById('hoanthanhloi1').innerHTML = "";
        document.getElementById('muctieuloi2').innerHTML = "";
        document.getElementById('hoanthanhloi2').innerHTML = "";
        document.getElementById('muctieuloi3').innerHTML = "";
        document.getElementById('hoanthanhloi3').innerHTML = "";
        document.getElementById('muctieuloi4').innerHTML = "muc tieu nam 4 khong the lon hon " + (muctieu - muctieunam1 - muctieunam2 -muctieunam3);
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
        document.getElementById('hoanthanhloi4').innerHTML = "hoan thanh nam 4 khong the lon hon " + (hoanthanh - hoanthanhnam1 - hoanthanhnam2 - hoanthanhnam3);
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
        document.getElementById('muctieuloi5').innerHTML = "muc tieu nam 5 khong the lon hon " + (muctieu - muctieunam1 - muctieunam2 -muctieunam3 -muctieunam4);
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
        document.getElementById('hoanthanhloi5').innerHTML = "hoan thanh nam 5 khong the lon hon " + (hoanthanh - hoanthanhnam1 - hoanthanhnam2 - hoanthanhnam3 - hoanthanhnam4);
        return false;
     } 

     
     
      
      
      return( true );
   }
</script>

@endsection