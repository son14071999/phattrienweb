@extends('index')
@section('content')
    <div class="row">
{{--        <div class="col-sm-2"></div>--}}
        <div class="chitieu-select">
            <form method="post" action="{{route('loc')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <label for="tieuchi">Tiêu chí:</label>
                <select name="tieuchi" id="tieuchi" class="custom-select">
                    @if($select_tc=='all')
                        <option value="all" selected>Tổng</option>
                    @else
                        <option value="all">Tổng</option>
                    @endif
                    @foreach($tieuchi as $tc)
                        @if($tc->ten==$select_tc)
                            <option value="{{$tc->ten}}" selected>{{$tc->ten}}</option>
                        @else
                            <option value="{{$tc->ten}}">{{$tc->ten}}</option>
                        @endif
                    @endforeach
                </select>

                <label for="truong" class="lable-tieuchi">Trường:</label>
                <select name="truong" id="truong" class="custom-select">
                    @if($select_tr=='all')
                        <option value="all" selected>Tổng</option>
                    @else
                        <option value="all">Tổng</option>
                    @endif
                    @foreach($truong as $t)
                        @if($t->ten==$select_tr)
                            <option value="{{$t->ten}}" selected>{{$t->ten}}</option>
                        @else
                                <option value="{{$t->ten}}">{{$t->ten}}</option>
                        @endif
                    @endforeach
                </select>


                <label for="donvi" class="lable-tieuchi">Đơn vị:</label>
                <select name="donvi" id="donvi" class="custom-select">
                    @if($select_dv=='all')
                        <option value="all" selected>Tổng</option>
                    @else
                        <option value="all">Tổng</option>
                    @endif
                    @foreach($donvi as $d)
                        @if($d->ten==$select_dv)
                            <option value="{{$d->ten}}" selected>{{$d->ten}}</option>
                        @else
                            <option value="{{$d->ten}}">{{$d->ten}}</option>
                        @endif
                    @endforeach
                </select>
                <button type="submit" class="btn btn-success">Lọc</button>
            </form>
        </div>


    </div>



{{--    <table class="table table-hover">--}}
    <table class="responstable">
        <thead>
        <tr>
            <th><span>Stt</span></th>
            <th><span>Tiêu chí</span></th>
            <th><span>Năm</span></th>
            <th><span>Hoàn thành</span></th>
            <th><span>Tổng</span></th>
            <th><span>Đơn vị</span></th>
            <th><span>Trường</span></th>
            <th><span>Kết quả</span></th>
        </tr>
        </thead>
        <tbody>
        @for($i=0;$i<count($daihan);$i++)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $daihan[$i]-> ma_tc}}</td>
                <td>{{$daihan[$i]->nam}}</td>
                <td>{{$daihan[$i]->xong}}</td>
                <td>{{$daihan[$i]->tong}}</td>
                <td>{{$daihan[$i]->don_vi}}</td>
                <td>{{$daihan[$i]->ma_truong}}</td>
                @if($daihan[$i]->xong/$daihan[$i]->tong <=0.8)
                    <td><input type="checkbox" disabled></td>
                @else
                    <td><input type="checkbox" disabled checked style="background: #0c5460"></td>
                @endif
            </tr>
        @endfor

        </tbody>
    </table>
@endsection
