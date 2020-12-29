@extends('admin.layout.admin_layout')
@section('title')
Thêm tài khoản
@endsection
@section('content')
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Thêm tài khoản </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ URL::to('/admin/tieuchi') }}">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Tính năng</a> </li>
          <li class="breadcrumb-item active"> <strong> Thêm tài khoản </strong> </li>
           
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
      
        <div class="col-lg-12 mt-md-2  mb-md-2">
          <div class="widgets-container">
            <h5>Thêm tài khoản</h5>
            
            @include('admin.error')
        <hr>
            <form action="{{ URL::to('/admin/account') }}" class="themtieuchi" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group row">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <input placeholder="username" class="form-control" type="text" name="name">
                </div>
              </div>

                
           
            

              

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input placeholder="password" class="form-control" type="text" name="pass">
                </div>
              </div>
              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input placeholder="email" class="form-control" type="email" name="email">
                </div>
              </div>
              <hr>
            
              <div class="form-group">
                  <label>
                  <input name="role" type="checkbox" style="margin: 0px; width: 20px; height: 20px; " >
                     <span style="margin-left:5px;">Role</span> </label>
                </div>
               
            

          
             
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
              

                  
                    
                    
                   
             
             

              <hr>
              <button class="buttonxxx" name="themtaikhoan" style="color: white; text-align: center">Thêm Tài Khoản </button>

            </form>
            <hr>
             
          </div>
        </div>
        
       
      </div>
    </div> 
   
</div>

@endsection