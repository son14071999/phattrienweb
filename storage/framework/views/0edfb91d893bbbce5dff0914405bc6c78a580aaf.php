
<div class="row header-1">
    <div class="col-md-11 col-sm-9"></div>
    <div class="col-md-1 col-sm-3">
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-google"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
    </div>
</div>



<div id="menu">
    <div class="row">
        <div class="col-sm-12 header-2">
            <nav class="navbar navbar-expand-lg">

                    <a href="<?php echo e(route("index")); ?>"><img src="<?php echo e(asset('images/logo.png')); ?>" class="navbar-brand img-logo"></a>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="mr-auto"></div>
                        <form class="form-inline my-0 my-lg-0" method="post" action="<?php echo e(route('search')); ?>">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <?php if(Auth::check()): ?>
                            <a href="<?php echo e(route('tieuchi.index')); ?>"><p class="account-success">Xin chào: <?php echo e(Auth::user()->name); ?></p></a>
                            <a href="<?php echo e(route('logout')); ?>" class="account-logout"><i class="fa fa-sign-out" aria-hidden="false"></i> <i>Đăng xuất</i></a>


                        <?php else: ?>
                            <a href="<?php echo e(route('getLogin')); ?>" class="btn-login">Đăng nhập</a>
                        <?php endif; ?>

                    </div>

            </nav>
        </div>
    </div>

    <div class="row menu">
        <div class="col-sm-12">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('index')); ?>" style="color: white">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('gioithieu')); ?>">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('tieuchi')); ?>">Tiêu chí</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Đơn vị đào tạo</a>
                    <div class="dropdown-content">
                        <a href="<?php echo e(route("truong", "khoa học tự nhiên")); ?>" class="dropdown-item" >khoa học tự nhiên</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo e(route("truong", "kinh tế")); ?>" class="dropdown-item">Kinh Tế</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo e(route("truong", "giáo dục")); ?>" class="dropdown-item">Giáo Dục</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo e(route("truong", "ngoại ngữ")); ?>" class="dropdown-item">Ngoại Ngữ</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo e(route("truong", "y dược")); ?>" class="dropdown-item">Y dược</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo e(route("truong", "khoa học xã hội và nhân văn")); ?>" class="dropdown-item">khoa học xã hội và nhân văn</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo e(route("truong", "việt-nhật")); ?>" class="dropdown-item">việt-nhật</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="">Thống kê</a>
                    <div class="dropdown-content">
                        <a href="<?php echo e(route('thongke')); ?>" class="dropdown-item" >Theo trường</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo e(route('banphutrach')); ?>" class="dropdown-item">Theo ban quản lý</a>
                        
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Liên hệ</a>
                </li>

            </ul>
        </div>

    </div>

</div>


<script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("menu");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
<?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/block/header.blade.php ENDPATH**/ ?>