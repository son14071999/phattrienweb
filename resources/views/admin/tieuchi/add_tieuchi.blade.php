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
            <form action="{{ URL::to('/admin/tieuchi') }}" class="themtieuchi" method="POST" enctype="multipart/form-data">
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
              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Hoàn Thành</label>
                <div class="col-sm-10">
                  <input placeholder="hoanthanh" class="form-control" type="number" name="hoanthanhnam{{$i+1}}" value="0">
                </div>
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
              <button class="buttonxxx" name="themtaikhoan" style="color: white; text-align: center">Thêm Tiêu Chí </button>

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