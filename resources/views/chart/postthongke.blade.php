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
<canvas id="myChart" width="400" height="150"></canvas>
<p style="text-align:center; font-size: 2em" id="tenbd"></p>
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

    

    
    let ctx = document.getElementById("myChart");
    
    

   
        

        
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,

                datasets: [{
                    label: 'tong cong',
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
                    label: 'tong',
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
                    label: 'xong',
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
                    text: 'Biểu đồ: Thống kê kế hoạch hoàn thành chỉ tiêu' + '{{$tentc}}' +' nam ' + '{{$nam}}'
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
        document.querySelector('#tenbd').innerHTML = "Biểu đồ: Thống kê kế hoạch hoàn thành chỉ tiêu";
      
  

    // let select = document.querySelector('#nam');
    // document.querySelector('#tieuchi').addEventListener('change', function () {

    //     $.ajax({
    //         url: "{{route('thongke1')}}",
    //         type: 'GET',
    //         dataType: 'json',
    //         data: {
    //             a: this.value,

    //         }
    //     }).done(function (ketqua) {

    //         // select.innerHTML = "";
    //         // for (let i = 0; i < ketqua.length; i++) {
    //         //     let opt = document.createElement('option');
    //         //     opt.text = ketqua[i];
    //         //     opt.value = ketqua[i];
    //         //     select.add(opt);

    //         // }
    //             console.log(ketqua)
    //         //console.log(select.options[0].value)


    //     });


    // });





</script>
@endsection