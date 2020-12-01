@extends('index')
@section('content')

<div class="container-chart" style="display: flex;">
    <form action="{{route('postthongke')}} " method="POST">
        @csrf
        <div class="form-group">
            <label>Truong A</label>
            <select name="truonga" id="truonga">
                <option value="-1" selected>all</option>
                @foreach($truong as $tr)

                <option value="{{$tr->id}}">{{$tr->ten}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Truong b</label>
            <select name="truongb" id="truonga">
                <option value="-1" selected>all</option>
                @foreach($truong as $tr)

                <option value="{{$tr->id}}">{{$tr->ten}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>tieu chi</label>
            <select name="tieuchi" id="tieuchi">
                @foreach($tieuchi as $tc)
                <option value="{{$tc->id}}">{{$tc->ten}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>nam</label>
            <select name="nam" id="nam">
        
                @for ($i = 2020; $i < 2036; $i++) <option value="{{$i}}">{{$i}}</option>
                    @endfor
            </select>
        </div>
        <button id="chon">chon</button>
    </form>

</div>

@endsection