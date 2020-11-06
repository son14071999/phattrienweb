@extends('index')
@section('content')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        $a = [
            ['Year', 'Hoàn thành', 'Tổng chỉ tiêu'],
        ];
        @for($i=0; $i<count($nam); $i++)
            $b = {{$nam[$i]}};
            $b = $b.toString();
            $a.push([$b, parseInt({{$hoanThanh[$i]}}), parseInt({{$tong[$i]}})]);
        @endfor
        console.log($a);
        function drawChart() {
            var data = google.visualization.arrayToDataTable($a);
            var options = {
                axisX:{
                  title:"Năm",
                },
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }


    </script>
    <div id="curve_chart" style="width: 100%; min-height: 500px; height: auto"></div>
    <p style="text-align:center; font-size: 2em">Biểu đồ: Thống kê kế hoạch hoàn thành chỉ tiêu</p>


@endsection
