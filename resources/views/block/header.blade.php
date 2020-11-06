{{--<link href="../../css/bootstrap.css">--}}
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

                    <a href="#"><img src="{{asset('images/logo.png')}}" class="navbar-brand img-logo"></a>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="mr-auto"></div>
                        <form class="form-inline my-0 my-lg-0" method="post" action="{{route('search')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        @if(Auth::check())
                                <button><span>{{Auth::user()->name}}/</span></button>
                                <a href="{{route('logout')}}"><span>Logout</span></a>
                        @else
                            <a href="{{route('getLogin')}}" class="btn-login"><span>Đăng nhập</span></a>
                        @endif

                    </div>

            </nav>
        </div>
    </div>

    <div class="row menu">
        <div class="col-sm-12">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('trangchu')}}" style="color: white">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('gioithieu')}}">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('tieuchi')}}">Tiêu chí</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dvdd')}}">Đơn vị đào tạo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('thongke')}}">Thống kê</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tin tức</a>
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
