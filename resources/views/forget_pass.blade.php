<html>

<head>
    <link rel="stylesheet" href="{{asset('css/cssLogin.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Sign in</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        .code-cd {
            display: none;
        }
    </style>
</head>

<body>
    <div class="main">
        <img class="image-icon" src="{{asset('images/icon_login.png')}}"><br>
        {{-- <p class="sign" align="center">Đăng nhập</p>--}}
        <form class="form1" method="post">
            @if(Session::has('thongbao'))
            <p style="color: red" align="center">{{Session::get('thongbao')}}</p>
            @endif
            <p class="forgetpass-error" style="color: red" align="center"></p>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input class="un" type="text" name="email" placeholder="Email" value="{{old('email')}}" id="email">
            <input class="un code-cd" type="text" name="code" placeholder="nhập code được gửi qua email"
                value="{{old('email')}}" id="code">
            <br><br>
            <button class="submit forrrget" align="center" type="submit">Đăng nhập</button>
            <a href="{{route('getLogin')}}"><h4 style="color: red" align="center"><i><u>Quay lại trang đăng nhập?</u></i></h4></a>

        </form>
    </div>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let btn = document.querySelector('.forrrget');
        let email = document.querySelector('#email');
        let code = document.querySelector("#code");
        let error = document.querySelector('.forgetpass-error');
        let rs = 0;
       
        btn.addEventListener('click', function (e) {
            
            e.preventDefault();
            if (code.value == "") {
                $.ajax({
                    url: "{{route('postForgetPass')}}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        email: email.value,


                    }
                }).done(function (ketqua) {
                    console.log(ketqua)
                    if (ketqua == 0) {
                        error.innerText = 'vui lòng nhập đúng gmail!';
                        code.classList.add('code-cd');
                    } else {
                        
                        error.innerText = "";
                        code.classList.remove('code-cd');
                        rs = ketqua;

                        email.setAttribute('disabled',true);



                    }
                });
            } else {
                if(rs == code.value){
                    $.ajax({
                    url: "{{route('changePass')}}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        email: email.value,


                    }
                }).done(function (ketqua) {
                    let x = 5;
                    function rePlay(){
                        error.innerText = "";
                        error.innerText = 'Đổi pass thành công về đăng nhập sau ' + x-- + 's';
                        setTimeout(rePlay, 1000)
                        if(x==0) {
                            window.location = "{{route('getLogin')}}";
                        }
                    }
                    rePlay();
                    
                    //window.location = "{{route('getLogin')}}";
                });
                    
                } else{
                    error.innerText = 'vui lòng kiểm tra lại code!';
                }
            }



        });
    </script>

</body>

</html>