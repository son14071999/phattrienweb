@extends('index')
@section('content')
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form method="post" action="{{route('loctruong', $select_tr)}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <label for="Lựa chọn">Lựa chọn:</label>
                <select name="tieuchi" id="tieuchi">
                @foreach($option as $op)
                    @if($op==$select_op)
                        <option value="{{$op}}" selected>{{$op}}</option>
                    @else
                        <option value="{{$op}}">{{$op}}</option>
                    @endif
                @endforeach
                </select>

                <button type="submit">Lọc</button>

            </form>
        </div>


    </div>



    <table class="table table-hover">
        <thead>
        <tr>
            <th>stt</th>
            <th>Tiêu chí</th>
            <th>Năm</th>
            <th>Hoàn thành</th>
            <th>Tổng</th>
            <th>Đơn vị</th>
            <th>Trường</th>
            <th>Phần trăm</th>
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
                <td>{{$daihan[$i]->phantram*100}} %</td>

            </tr>
        @endfor

        </tbody>
    </table>
@endsection
