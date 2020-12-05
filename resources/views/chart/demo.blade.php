@extends('index')
@section('content')

<div class="container-chart" >
    <form action="{{route('postthongke')}} " method="POST">
        @csrf
        <div class="form-group-chart">
           
            <select name="tieuchi" id="tieuchi">
                <option value="-2" class="opt-hidden"></option>
                @foreach($tieuchi as $tc)
                <option value="{{$tc->id}}">{{$tc->ten}}</option>
                @endforeach
            </select>
            <label id="lbl-tc">Tiêu chí</label>
        </div>
        <div class="form-group-chart">
            
            <select name="truonga" id="truonga">
            <option value="-2" class="opt-hidden1"></option>
                <option value="-1" >all</option>
                @foreach($truong as $tr)

                <option value="{{$tr->id}}">{{$tr->ten}}</option>
                @endforeach
            </select>
            <label id="lbl-truonga">Trường 1</label>
        </div>
        <div class="form-group-chart">
            
            <select name="truongb" id="truongb">
            <option value="-2" class="opt-hidden2"></option>
                <option value="-1" >all</option>
                @foreach($truong as $tr)

                <option value="{{$tr->id}}">{{$tr->ten}}</option>
                @endforeach
            </select>
            <label id="lbl-truongb">Trường 2</label>
        </div>
        
        <div class="form-group-chart">
            
            <select name="nam" id="nam">
                <option value="" class="opt-hidden3"></option>
                @for ($i = 2020; $i < 2030; $i++) <option value="{{$i}}">{{$i}}</option>
                    @endfor
            </select>
            <label id="lbl-nam">Năm</label>
        </div>

        <div class="form-group-chart">
            
            <input type="text"  name="nhieunam" id="nhieunam">
            <label id="lbl-nhieunam">2020-2029</label>
        </div>
        
        <button id="chon">Chọn</button>
    </form>

</div>


@endsection