<!DOCTYPE html>
<html lang="en">

<head>
    <title>Academics &mdash; Website by Colorlib</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssHeader.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssContent.css')}}">
    <link rel="stylesheet" href="{{asset('css/cssFooter.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/cssBody.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/cssDonvitructhuoc.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/cssTintuc.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bodyChitieu.css')}}" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    

</head>
<div class="container-fluid bg-secondary">
    @include('block.header')
{{--    @include('block.body')--}}

    @yield('slibar')
    @yield('donvitructhuoc')
    @yield('bodychitieu')
    @yield('tintuc')
        <div id="content" style="min-height: 700px">
            @yield('content')
        </div>

    @include('block.footer')
</div>




</body>

</html>
