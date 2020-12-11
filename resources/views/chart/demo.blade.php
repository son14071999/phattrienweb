@extends('index')
<style>
    .container-chart {
        display: flex;
        margin: 0;
        padding: 0px;
        height: 480px;

    }

    .container-chart .click-school {
        width: 350px;
        padding: 70px 20px 0 10px;
        background-color:rgb(150, 146, 146);
        
    }

    .container-chart .click-school label {
        color: #fff;
        font-size: 19px;
        font-family: 'roboto';
    }
    .container-chart .click-school #lbl-truong {
        font-size: 25px;
        
    }

    .container-chart .click-school input {
        height: 15px;
        width: 15px;
        cursor: pointer;
        padding-right: 5px;
        
    }

    .container-chart .main-chart-tc {
        width: 100%;
    }

    .main-chart-tc form {
        display: flex;
        justify-content: center;
        padding: 20px 0 0 0 ;
        margin: 0;
    }

    .main-chart-tc form .form-group-chart {
        display: inline-block;
        padding: 0 15px;

    }

   

    .form-group-chart select {
        border: 1px solid #d5d2d2;
        border-radius: 5px;
        height: 30px;
        display: block;
        outline: none;
        cursor: pointer;
        -moz-appearance: none;
        /*for chrome*/
        -webkit-appearance: none;
        appearance: none;
       padding: 0 0.75rem;
    }

    .form-group-chart select:focus {
        border: 1px solid #38B445;

    }

    .form-group-chart label {
        position: relative;
        font-size: 12px;
        top: -24.5px;
        left: 15px;
        color: #555;
        pointer-events: none;

    }

    .form-group-chart select:focus+label {
        top: -40px;
        left: 10px;
        background: #fff;
        padding: 0 3px;
        font-size: 12px;
        color: #38B445;
    }

    #btn-click-chart {
        margin-left: 15px;
        cursor: pointer;
        outline: none;
        border: 1px solid #fff;
        height: 30px;
        width: 75px;
        border-radius: 5px;
        background-color: #3bbc3b;
        color: #fff;
    }

    #btn-click-chart:hover {
        background-color: #0aa13d;
    }

    .form-group-chart .lbllabel {
        position: relative;
        top: -40px;
        left: 10px;
        background: #fff;
        padding: 0 3px;
        font-size: 12px;
        color: #38B445;
    }

    .opti-hidden {
        display: none;
    }


   
</style>
@section('content')

<div class="container-chart">
    <div class="click-school">
        <label for="" id="lbl-truong">Chọn trường</label><br>
        @foreach($truong as $tr)
        <input type="checkbox" name="school[]" id="getvl-click-school" value="{{$tr->id}}"><label
            style="margin-left: 3px;" id="lbl-nameschool">{{$tr->ten}}</label><br>
        @endforeach
    </div>
    <div class="main-chart-tc">

        <form action="" method="POST">
            @csrf
            <div class="form-group-chart">

                <select name="tieuchi" id="tieuchi-tc">
                    <option value="-2" class="opt-hidden" ></option>
                    @foreach($tieuchi as $tc)
                    <option value="{{$tc->id}}">{{$tc->ten}}</option>
                    @endforeach
                </select>
                <label id="lbl-tc">Tiêu chí</label>
            </div>


            <div class="form-group-chart">

                <select name="nam" id="nam">
                    <option value="-2" class="opt-hidden3"></option>
                    @for ($i = 2020; $i < 2025; $i++) <option value="{{$i}}">{{$i}}</option>
                        @endfor
                </select>
                <label id="lbl-nam">Năm</label>
            </div>



            <button id="btn-click-chart">Chọn</button>
        </form>
        <p class="error-bd" style="padding-left: 220px; color: red;"></p>
        <div class="show-chart-tk">
            <canvas id="myChart" width="auto" height="160" style="padding-left: 20px;"></canvas>
        </div>
    </div>


</div>


<!-- <p style="text-align:center; font-size: 2em" id="tenbd"></p> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let btn = document.querySelector('#btn-click-chart');
    let checkValue = null;

    let clickSchool = document.querySelectorAll('#getvl-click-school');    
    let labelNameSchool = document.querySelectorAll('#lbl-nameschool');    

    let tieuchi = document.querySelector('#tieuchi-tc')
    let nam = document.querySelector('#nam');
    let error = document.querySelector('.error-bd');
    tieuchi.addEventListener('click', function(){
        document.querySelector('.opt-hidden').classList.add('opti-hidden');
    });
    nam.addEventListener('click', function() {
        if(document.querySelector('.opt-hidden3')) {
            document.querySelector('.opt-hidden3').classList.add('opti-hidden');
        }
        
    });
    

    tieuchi.addEventListener('change', function(){
        document.querySelector('#lbl-tc').classList.add('lbllabel');
       
        $.ajax({
            url: "{{route('getnamthongke')}}",
            type: 'POST',
            dataType: 'json',
            data: {
                id: this.value,

            }
        }).done(function (ketqua) {
            document.querySelector('#lbl-nam').classList.remove('lbllabel');
            if (ketqua[0] == ketqua[ketqua.length - 1]) {
                   
                   nam.innerHTML = "";
                   let opt = document.createElement('option');
                   opt.classList.add('opt-hidden3');
                   opt.text = "";
                    opt.value = -2;
                    nam.add(opt);
                   for (let i = ketqua[0]-5; i < ketqua[0]; i++) {
                       let opt = document.createElement('option');
                       opt.text = i;
                       opt.value = i;
                       nam.add(opt);

                   }
                  

               } else {
                   
                   nam.innerHTML = "";
                   let opt = document.createElement('option');
                   opt.classList.add('opt-hidden3');
                   opt.text = "";
                    opt.value = -2;
                    nam.add(opt);
                   for (let i = ketqua[0]-5; i < ketqua[ketqua.length-1]; i++) {
                       
                       let opt = document.createElement('option');
                       opt.text = i;
                       opt.value = i;
                       nam.add(opt);

                   }
                  
               }
        });
        
    });

    nam.addEventListener('change', function(){
        document.querySelector('#lbl-nam').classList.add('lbllabel');
    });


    btn.addEventListener('click', function (e) {
        e.preventDefault();

        if (document.getElementById("myChart")) {
            document.getElementById("myChart").remove();
        }
        let showChart = document.querySelector('.show-chart-tk');
        let char123 = document.createElement('div');
        char123.innerHTML = `<canvas id="myChart" width="400" height="160" style="padding-left: 20px;"></canvas>`;
        showChart.appendChild(char123);
        let ctx = document.getElementById("myChart");
        error.innerHTML = "";
        let strError = "";
        let arrSchool = [];
        let arrNameSchool = [];

        for (let i = 0; i < clickSchool.length; i++) {
            if (clickSchool[i].checked) {
                arrSchool.push(clickSchool[i].value);
                if(labelNameSchool[i].innerHTML == "khoa học xã hội và nhân văn") {
                    arrNameSchool.push('khxh & nv');
                } else {
                    arrNameSchool.push(labelNameSchool[i].innerHTML);
                }
                
            }
        }

        //console.log(arrNameSchool)
        

        if (arrSchool.length === 0) {
            strError += "Vui lòng chọn trường";
            error.innerHTML = strError;
            return;
        }
        if ((tieuchi.value == -2) && (nam.value == -2)) {
            strError += "Vui lòng chọn tiêu chí, chọn năm  ";
            error.innerHTML = strError;
            return;


        }



        if (tieuchi.value == -2) {
            strError += "Vui lòng chọn tiêu chí";
            error.innerHTML = strError;
            return;
        }

        if ((nam.value == -2)) {
            strError += 'Vui lòng chọn năm';
            error.innerHTML = strError;
            return;

        }

        let namClick = nam.value;
        let tieuchiClick = tieuchi.value;
        let tentieuchi = tieuchi.options[tieuchi.selectedIndex].text;


        // console.log(nhieunamClick, namClick)
        // console.log(tieuchi.options[tieuchi.selectedIndex].text)



        // console.log(arrSchool)

        $.ajax({
            url: "{{route('test1234')}}",
            type: 'POST',
            dataType: 'json',
            data: {
                truong: arrSchool,
                nam: namClick,
                tieuchi: tieuchiClick,

            }
        }).done(function (ketqua) {
            //console.log(ketqua)
            label = arrNameSchool;
            aDatasets1 = ketqua[0];
            aDatasets2 = ketqua[1]
            aDatasets3 = ketqua[2]
            aDatasets4 = ketqua[3]







            let myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: label,

                    datasets: [{
                        label: 'Tổng cộng 5 năm',
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
                        label: 'Tích lũy cho đến năm hiện tại',
                        fill: false,
                        data: aDatasets4,
                        backgroundColor: '#64FE2E',
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(255,99,132,1)',

                        ],
                        borderWidth: 1
                    },

                    {
                        label: 'Mục tiêu trong năm',
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
                        label: 'Thực tế trong năm',
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
                        text: 'Biểu đồ: Thống kê kế hoạch hoàn thành chỉ tiêu : ' + tentieuchi + ' năm ' + namClick
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

        });





    });

</script>


@endsection