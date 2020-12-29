@extends('admin.layout.admin_layout')
@section('title')
Đổi mật khẩu
@endsection
@section('content')
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Đổi mật khẩu </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ URL::to('/admin/tieuchi') }}">Trang chủ</a> </li>
            <li class="breadcrumb-item"> <a>Tính năng</a> </li>
          <li class="breadcrumb-item active"> <strong> Đổi mật khẩu </strong> </li>
          <li class="breadcrumb-item active"> <strong>
                    <?php
                                $massage = Session::get('massage');
                                if(!empty($massage)){
                                    echo '<span class="text-align"><h50 text-align="center" color="red">'.$massage.'</h50></span>';
                                    Session::put('massage', null);
                                }
                            ?>
            </strong></li>
           
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
      
        <div class="col-lg-12 mt-md-2  mb-md-2">
          <div class="widgets-container">
            <h5>Đổi mật khẩu</h5>
            <hr>
            @include('admin.error')
            <form action="{{ URL::to('/admin/account/change-pass'.'/'.$account->id) }}" class="themtieuchi" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
             
             

           
              <div class="form-group row">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input placeholder="password" class="form-control" type="password" name="pass" >
                </div>
              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Password new</label>
                <div class="col-sm-10">
                  <input placeholder="password" class="form-control" type="password" name="passnew" >
                </div>
              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Re-password new</label>
                <div class="col-sm-10">
                  <input placeholder="password" class="form-control" type="password" name="repassnew" >
                </div>
              </div>

              
          
           
              

                  
                    
                    
                   
             
             

              <hr>
              <button class="buttonxxx" name="themtaikhoan" style="color: white; text-align: center">Change </button>

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