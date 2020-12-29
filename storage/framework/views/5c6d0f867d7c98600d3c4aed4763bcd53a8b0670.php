<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $__env->yieldContent('title'); ?></title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <style type="text/css">
  .box{
    width:600px;
    margin:0 auto;
  }
</style>

  <link href="<?php echo e(asset('admin/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">

  <link href="<?php echo e(asset('admin/assets/css/font-awesome.min.css')); ?>" rel="stylesheet">

  <link href="<?php echo e(asset('admin/assets/css/main.css')); ?>" rel="stylesheet">
  <!-- theme css -->
  <link href="<?php echo e(asset('admin/assets/css/theme.css')); ?>" rel="stylesheet">


</head>

<body class="page-header-fixed page-sidebar-menu-border  page-sidebar-fixed ">
  <div class="page-header navbar aqua-bg fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
      <!-- BEGIN LOGO -->
      <div class="page-logo">
        <p style="margin: 7px"></p>
        <span style="color: red ; font-size: 23px; margin-left: 20px"><a href="<?php echo e(route('index')); ?>" style="color: white">Về trang chủ</a></span>

      </div>

      <div class="top-menu">



        <ul class="nav navbar-nav pull-right hidden-sm-down">


          <!-- START USER LOGIN DROPDOWN -->
          <li class="dropdown dropdown-user">
            <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">



            <img src="<?php echo e(asset('admin/assets/images/hinhanhbandau.jpg')); ?>" alt="" style="border-radius:50%">

             <!-- <span class="username username-hide-on-mobile"> {} Auth::user()->name </span>              -->
             <span class="username username-hide-on-mobile">
             <?php if(Auth::user()): ?>
              <?php echo e(Auth::user()->name); ?>

              <?php endif; ?>
              </span>
             <i class="fa fa-angle-down"></i> </a>
            <ul class="dropdown-menu dropdown-menu-default">


              <li>

                <a href="<?php echo e(route('logout')); ?>"> <i class="icon-key"></i> Đăng xuất </a>
              </li>
              <li>

              <a href="<?php echo e(URL::to('/admin/account/change-pass/'.Auth::user()->id)); ?>"> <i class="icon-key"></i> Đổi mật khẩu </a>
            </li>
            </ul>
          </li>
          <!-- END USER LOGIN DROPDOWN -->
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
  </div>




    <!-- Start page sidebar wrapper -->
    <div class="page-sidebar-wrapper">
      <div class="page-sidebar sidebar-light">
        <ul class="page-sidebar-menu  page-header-fixed ">


            <a class="nav-link nav-toggle" href="<?php echo e(URL::to('/trangchu-admin')); ?>"> <i class="fa fa-th-large"></i> <span class="title" style="font-size: 15px; margin: 5px">Quản lý</span> <span class="arrow"></span> </a>
            <li class="nav-item">
            <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-file-o"></i> <span class="title">Tiêu chí</span> <span class="arrow"></span> </a>
            <ul class="sub-menu">
            <?php if(Auth::user()->rule == 1): ?>
            <li class="nav-item">
                <a class="nav-link nav-toggle" href="<?php echo e(URL::to('/admin/create-tieuchi')); ?>"> <span class="title">Thêm tiêu chí</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-toggle" href="<?php echo e(URL::to('/admin/list-tieuchi')); ?>"> <span class="title">Danh sách tiêu chí</span> </a>
              </li>
              <?php endif; ?>
              <li class="nav-item">
                <a class="nav-link nav-toggle" href="<?php echo e(URL::to('/admin/tieuchi/create')); ?>"> <span class="title">Thêm chỉ số tiêu chí</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-toggle" href="<?php echo e(URL::to('/admin/tieuchi')); ?>"> <span class="title">Danh sách dài hạn</span> </a>
              </li>
            </ul>
          </li>
          <?php if(Auth::user()->rule == 1): ?>
          <li class="nav-item">
            <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-book"></i> <span class="title">Tài khoản</span> <span class="arrow"></span> </a>
            <ul class="sub-menu">
            <li class="nav-item">
                <a class="nav-link nav-toggle" href="<?php echo e(URL::to('/admin/account/create')); ?>"> <span class="title">Thêm tài khoản</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-toggle" href="<?php echo e(URL::to('/admin/account')); ?>"> <span class="title">Danh sách tài khoản</span> </a>
              </li>
            </ul>
          </li>
          <?php endif; ?>
          <?php if(Auth::user()->rule == 1): ?>
          <li class="nav-item">
            <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-graduation-cap"></i> <span class="title">Ban quản lý</span> <span class="arrow"></span> </a>
            <ul class="sub-menu">
            <li class="nav-item">
                <a class="nav-link nav-toggle" href="<?php echo e(URL::to('/admin/daotao/create')); ?>"> <span class="title">Thêm ban quản lý</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-toggle" href="<?php echo e(URL::to('/admin/daotao')); ?>"> <span class="title">Danh sách ban quản lý</span> </a>
              </li>
            </ul>
          </li>
          <?php endif; ?>

          <li class="nav-item">
            <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-home"></i> <span class="title">Trường</span> <span class="arrow"></span> </a>
            <ul class="sub-menu">
            <?php if(Auth::user()->rule != 1): ?>
            <li class="nav-item">
                <a class="nav-link nav-toggle" href="<?php echo e(URL::to('/admin/school/'.Auth::user()->ma_truong.'/edit')); ?>"> <span class="title">Cập nhật trường</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-toggle" href="<?php echo e(URL::to('/admin/school')); ?>"> <span class="title">Danh sách trường</span> </a>
              </li>
              <?php endif; ?>
            <?php if(Auth::user()->rule == 1): ?>
            <li class="nav-item">
                <a class="nav-link nav-toggle" href="<?php echo e(URL::to('/admin/school/create')); ?>"> <span class="title">Thêm trường</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-toggle" href="<?php echo e(URL::to('/admin/school')); ?>"> <span class="title">Danh sách trường</span> </a>
              </li>

              <?php endif; ?>
            </ul>
          </li>

        </ul>
      </div>
    </div>

   <?php echo $__env->yieldContent('content'); ?>




  <!-- Go top -->
  <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
  <!-- Go top -->

  <script src="<?php echo e(asset('admin/assets/js/jquery.min.js')); ?>"></script>
  <!-- bootstrap js -->

  <script src="<?php echo e(asset('admin/assets/js/bootstrap.min.js')); ?>"></script>

  <!-- main js -->
  <script src="<?php echo e(asset('admin/assets/js/main.js')); ?>"></script>







</body>

</html>
<?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/admin/layout/admin_layout.blade.php ENDPATH**/ ?>