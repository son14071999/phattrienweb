@extends('admin.layout.admin_layout')
@section('title')
Cập nhật tiến độ công việc
@endsection
@section('content')
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Cập nhật hoàn thành công việc của tiêu chí : {{$tentc}} năm {{$nam}}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ URL::to('/admin/tieuchi') }}">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Tính năng</a> </li>
          <li class="breadcrumb-item active"> <strong> Cập nhật Tiêu Chí </strong> </li>
           
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
      
        <div class="col-lg-12 mt-md-2  mb-md-2">
          <div class="widgets-container">
            <h5>Sửa tiêu chí</h5>
            @include('admin.error')
            <hr>
            <form action="{{ URL::to('/admin/tieuchi'.'/'.$id) }}" class="capnhattc" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              <div class="form-group row">
                <label class="col-sm-2 control-label">Hoàn thành</label>
                <div class="col-sm-10">
                  <input placeholder="hoàn thành" class="form-control" type="number" name="hoanthanh" value="{{$hoanthanh}}">
                </div>
              </div>
              



              <hr>
              <button class="buttonxxx" name="themtaikhoan" style="color: white; text-align: center">Update </button>

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