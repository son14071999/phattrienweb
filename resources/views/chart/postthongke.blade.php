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

<canvas id="myChart" width="400" height="150" style="margin-top: 20px; margin-bottom: 2rem;"></canvas>
<!-- <p style="text-align:center; font-size: 2em" id="tenbd"></p> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<script type="text/javascript">
    label = []
    aDatasets1 = []
    aDatasets2 = []
    aDatasets3 = []
    @for($i=0; $i<count($truongduocchon); $i++)
       label.push('{{$truongduocchon[$i]}}')
       aDatasets1.push(parseInt('{{$tongdaihan[$i]}}'))
       aDatasets2.push(parseInt('{{$tongnganhan[$i]}}'))
       aDatasets3.push(parseInt('{{$hoanthanhnganhan[$i]}}'))


    @endfor
    console.log(aDatasets1)
    console.log(aDatasets2)
    console.log(aDatasets3)

    nam = '{{$nam}}';
    if('{{$trongnhieunam}}' !== ""){
        nam = '{{$trongnhieunam}}';
    }




    let ctx = document.getElementById("myChart");

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,

                datasets: [{
                    label: 'Tổng cộng',
                    fill: false,
                    data: aDatasets1,
                    backgroundColor: '#E91E63',
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(255,99,132,1)',

                    ],
                    borderWidth: 1
                },

                {
                    label: 'Tổng trong năm',
                    fill: false,
                    data: aDatasets2,
                    backgroundColor:
                        '#3F51B5'
                    ,
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(255,99,132,1)',

                    ],
                    borderWidth: 1
                },
                {
                    label: 'Hoàn thành',
                    fill: false,
                    data: aDatasets3,
                    backgroundColor:
                        '#2EFEF7'
                    ,
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(255,99,132,1)',

                    ],
                    borderWidth: 1
                },



                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Biểu đồ: Thống kê kế hoạch hoàn thành chỉ tiêu : ' + '{{$tentc}}' +' năm ' + nam
                },
                responsive: true,

                tooltips: {
                    callbacks: {
                        labelColor: function (tooltipItem, chart) {
                            return {
                                borderColor: 'rgb(255, 0, 20)',
                                backgroundColor: 'rgb(255,20, 0)'
                            }
                        }
                    }
                },
                legend: {
                    labels: {
                        // This more specific font property overrides the global property
                        fontColor: 'red',

                    }
                }
            }
        });


</script>


@endsection
