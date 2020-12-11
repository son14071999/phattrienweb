@extends('admin.layout.admin_layout')
@section('title')
Thêm trường
@endsection
@section('content')
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Thêm trường </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ URL::to('/admin/index') }}">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Tính năng</a> </li>
          <li class="breadcrumb-item active"> <strong> Thêm trường </strong> </li>
           
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
      
        <div class="col-lg-12 mt-md-2  mb-md-2">
          <div class="widgets-container">
            <h5>Thêm trường</h5>
            <hr>
            @include('admin.error')
            <form action="{{ URL::to('/admin/school') }}" name="themtc" class="themtieuchi" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              
              <div class="form-group row">
                <label class="col-sm-2 control-label">Tên rút gọn</label>
                <div class="col-sm-10">
                  <input placeholder="Tên rút gọn" class="form-control" type="text" name="tenrutgon">
                </div>
              </div>
              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Tên trường</label>
                <div class="col-sm-10">
                  <input placeholder="Tên trường" class="form-control" type="text" name="tentruong">
                </div>
              </div>
    
             

              <hr>
              <button class="buttonxxx" id="themtc" name="themtaikhoan" style="color: white; text-align: center">Thêm  </button>

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



@endsection