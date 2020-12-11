@extends('admin.layout.admin_layout')
@section('title')
Sửa Tiêu Chí
@endsection
@section('content')
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Sửa Tiêu Chí {{$tieuchi->ten}} </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ URL::to('/admin/index') }}">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Tính năng</a> </li>
          <li class="breadcrumb-item active"> <strong> Sửa Tiêu Chí </strong> </li>
           
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
      
        <div class="col-lg-12 mt-md-2  mb-md-2">
          <div class="widgets-container">
            <h5>Sửa tiêu chí</h5>
            <hr>
            @include('admin.error')
            <form action="{{ URL::to('/admin/update-tieuchi/'.$tieuchi->id) }}" name="themtc" class="themtieuchi" method="POST" enctype="multipart/form-data" >
              {{ csrf_field() }}
              <div class="form-group row">
                <label class="col-sm-2 control-label">Tên Tiêu chí</label>
                <div class="col-sm-10">
                  <input placeholder="Tên tiêu chí" class="form-control" type="text" name="tentieuchi" value="{{$tieuchi->ten}}">
                </div>
              </div>

                <hr>
                <div class="form-group row">
                <label class="col-sm-2 control-label">Mô tả tiêu chí</label>
                <div class="col-sm-10">
                <textarea placeholder="mô tả tiêu chí" class="form-control" type="text" name="motatieuchi"  >{{$tieuchi->moTa}}</textarea>
                  
                </div>
              </div>
           

                    <hr>
                  <div class="form-group row">
                      <label class="col-sm-2 control-label">Đơn vị quản lý</label>
                         <div class="col-sm-10">
                            <select  name="donvi"  class="custom-select">
                              
                            @foreach($donvi as $dv)
                              @if($tieuchi->ma_dv == $dv->id)
                              <option value="{{$dv->id}}" selected>{{$dv->ten}}</option>
                              @endif
                              <option value="{{$dv->id}}" >{{$dv->ten}}</option>
                            @endforeach
                              
                            </select>
                      </div>
                    </div>
                    
                    
                   
             
             

              <hr>
              <button class="buttonxxx" id="themtc" name="themtaikhoan" style="color: white; text-align: center">Cập Nhật Tiêu Chí </button>

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