<html>

<head>
    <link rel="stylesheet" href="{{asset('css/cssLogin.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Sign in</title>
</head>

<body>
<div class="main">
    <p class="sign" align="center">Sign in</p>
    <form class="form1" method="post" action="{{route('postLogin')}}">
        @if(Session::has('thongbao'))
            <p style="color: red" align="center">{{Session::get('thongbao')}}</p>
        @endif
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input class="un " type="text" align="center" name="email" placeholder="Email" value="{{old('email')}}">
        <input class="pass" type="password" align="center" name="password" placeholder="Password">
        <button class="submit" align="center" type="submit">Sign in</button>

    </form>
</div>

</body>

</html>
