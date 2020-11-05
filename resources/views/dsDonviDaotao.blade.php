@extends('index')
@section('content')
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            @foreach($truong as $t)
                <div>
                    <img src="{{asset('images/'.$t->logo)}}">
                    <p><a href="" class="name_school" style="font-size: 3em; color: #3346ee">{{$t->ten}}</a></p>
                </div>
            @endforeach
        </div>
        <div class="col-sm-2"></div>


    </div>



@endsection
