
@extends('index')
@section('content')


    <div>Kết quả tìm kiếm cho:"<b>{{$search}}</b>"</div>
    <table class="responstable">
        <thead>
        <tr>
            <th>stt</th>
            <th>Tiêu chí</th>
            <th>Mô tả</th>
            <th>Năm</th>
            <th>Hoàn thành</th>
            <th>Tổng</th>
            <th>Đơn vị</th>
            <th>Trường</th>
        </tr>
        </thead>
        <tbody>
        @for($i=0;$i<count($nganhan);$i++)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{!! $nganhan[$i]-> tieuchi !!}</td>
                <td>{!! $nganhan[$i]->mota !!}</td>
                <td>{!! $nganhan[$i]->nam !!}</td>
                <td>{!! $nganhan[$i]->xong !!}</td>
                <td>{!! $nganhan[$i]->tong !!}</td>
                <td>{!! $nganhan[$i]->donvi !!}</td>
                <td>{!! $nganhan[$i]->truong !!}</td>
            </tr>
        @endfor

        </tbody>
    </table>
@endsection
