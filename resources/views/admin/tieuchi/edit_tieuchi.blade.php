@extends('admin.layout.admin_layout')
@section('title')
Sửa Tiêu Chí
@endsection
@section('content')
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Sửa Tiêu Chí </h2>
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
            @include('admin.error')
            <hr>
            
            <form action="{{ URL::to('/admin/updatetc'.'/'.$tieuchi->id.'/'.$daihan->id) }}" class="themtieuchi" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{method_field('PUT')}}
              <div class="form-group row">
                <label class="col-sm-2 control-label">Tên Tiêu chí</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="tentc" value="{{$tieuchi->ten}}">
                </div>
              </div>

                <hr>
                <div class="form-group row">
                <label class="col-sm-2 control-label">Mô tả tiêu chí</label>
                <div class="col-sm-10">
                <textarea  class="form-control" type="text" name="motatieuchi" >{{$tieuchi->moTa}}</textarea>
                  
                </div>
              </div>
           
            

              

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Năm</label>
                <div class="col-sm-10">
                  <input placeholder="nam" class="form-control" type="number" name="nam" value="{{$daihan->nam}}">
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
              </div>

              <hr>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Hoàn Thành</label>
                <div class="col-sm-10">
                  <input placeholder="hoanthanh" class="form-control" type="number" name="hoanthanhnam{{$i+1}}" value="{{$nganhan[$i]->xong}}">
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
                  <div class="form-group row">
                      <label class="col-sm-2 control-label">Đơn vị quản lý</label>
                         <div class="col-sm-10">
                            <select  name="donvi"  class="custom-select">
                              
                            @foreach($donvi as $dv)
                              @if($dv->id == $tieuchi->ma_dv)

                              <option value="{{$dv->id}}" selected>{{$dv->ten}}</option>
                              @else
                              <option value="{{$dv->id}}" >{{$dv->ten}}</option>
                              @endif
                            @endforeach
                              
                            </select>
                      </div>
                    </div>
                    
                    
                   
             
             

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

@endsection