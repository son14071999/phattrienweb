<!DOCTYPE html>
<html lang="en">

<head>
    <title>Academics &mdash; Website by Colorlib</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssHeader.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssContent.css')}}">
    <link rel="stylesheet" href="{{asset('css/cssFooter.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/cssBody.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/cssDonvitructhuoc.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/cssTintuc.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bodyChitieu.css')}}" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        .container-chart {
            
            margin-left: 3rem;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .container-chart form{
            
            display: flex;
        }
        .form-group-chart {
            display: inline-block;
            padding-left: 1.5rem ;
        } 
        .form-group-chart select{
            border:  1px solid #d5d2d2;
            border-radius: 5px;
            height: 30px;
            display: block;
            outline: none;
            cursor: pointer;
            -moz-appearance: none;
            /*for chrome*/
            -webkit-appearance:none;
            appearance: none;
            padding-left : 1rem;
        }

        .form-group-chart select:focus{
            border: 1px solid #1f52f9;

        }
        .form-group-chart input:focus{
            border: 1px solid #1f52f9;

        }
        .form-group-chart #tieuchi{
            width: 200px;
        }
        .form-group-chart #nam{
            width: 90px;
        }
        .form-group-chart input{
            border:  1px solid #d5d2d2;
            border-radius: 5px;
            width: 100px;
            display: block;
            padding-left: 10px ;
            outline: none;
            height: 30px;

        }

        .form-group-chart label {
            position: relative;
            font-size: 12px;
            top :-28px;
            left: 12px;
            color:#555;
            pointer-events:none;

        }
        .form-group-chart select:focus + label{
            top: -43px;
            left: 15px;
            background: #fff;
            padding: 0 5px;
            font-size: 12px;
            color: #1f52f9;
        }
        .form-group-chart input:focus + label{
            top: -43px;
            left: 15px;
            background: #fff;
            padding: 0 5px;
            font-size: 12px;
            color: #1f52f9;
        }
        #chon{
            margin-left: 2rem;
            cursor: pointer;
            outline: none;
            border: 1px solid #fff;
            height: 30px;
            width: 100px;
            border-radius: 20px;
            background-color: #3bbc3b;
            color: #fff;
        }

        #chon:hover{
            background-color: #0aa13d;
        }

        .form-group-chart .lbllabel {
            position: relative;
            top: -43px;
            left: 15px;
            background: #fff;
            padding: 0 5px;
            font-size: 12px;
            color: #1f52f9;
        }


        .ot-hidden{
            display: none;
        }
    </style>


</head>
<div class="container-fluid bg-secondary">
    @include('block.header')
{{--    @include('block.body')--}}

    @yield('slibar')
    @yield('donvitructhuoc')
    @yield('bodychitieu')
    @yield('tintuc')
        <div id="content">
            @yield('content')
        </div>
{{--    @include('block.donvitructhuoc')--}}

    @include('block.footer')
</div>




{{--    @include('block.slider')--}}

{{--                @yield('sidebar')--}}


{{--                @yield('content')--}}




{{--    @include('block.footer')--}}




<!-- loader -->

<script>
    document.querySelector('#tieuchi').addEventListener('click', function(){
        document.querySelector('.opt-hidden').classList.add("ot-hidden");
    })
    document.querySelector('#truonga').addEventListener('click', function(){
        
        document.querySelector('.opt-hidden1').classList.add("ot-hidden");
    })
    document.querySelector('#truongb').addEventListener('click', function(){
        document.querySelector('.opt-hidden2').classList.add("ot-hidden");
    })
    document.querySelector('#nam').addEventListener('click', function(){
        document.querySelector('.opt-hidden3').classList.add("ot-hidden");
    })
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    arrID = ["hus", "ueb", "ued","ulis", "ump", "ussh"];
    arrName = ["khoa học tự nhiên", "Kinh Tế", "Giáo Dục", "Ngoại Ngữ", "Y dược", "khoa học xã hội và nhân văn"];
    let selectTieuChi = document.querySelector('#tieuchi');
    let selectNam = document.querySelector('#nam');
    let selectTruongA = document.querySelector('#truonga');
    let selectTruongB = document.querySelector('#truongb');
    document.querySelector('#nhieunam').addEventListener('change', function(){
        if(this.value !== ""){
            document.querySelector('#lbl-nhieunam').classList.add("lbllabel");
        } else {
            document.querySelector('#lbl-nhieunam').classList.remove("lbllabel");
        }
    });
    selectTruongA.addEventListener('change', function(){
        if(this.value !== -2){
            document.querySelector('#lbl-truonga').classList.add("lbllabel");
        } else {
            document.querySelector('#lbl-truonga').classList.remove("lbllabel");
        }
    })
    selectTruongB.addEventListener('change', function(){
        if(this.value !== -2){
            document.querySelector('#lbl-truongb').classList.add("lbllabel");
        } else {
            document.querySelector('#lbl-truongb').classList.remove("lbllabel");
        }
    })
    selectNam.addEventListener('change', function(){
        if(this.value !== -2){
            document.querySelector('#lbl-nam').classList.add("lbllabel");
        } else {
            document.querySelector('#lbl-nam').classList.remove("lbllabel");
        }
    })
    selectTieuChi.addEventListener('change', function () {
        if(this.value !== -2){
            document.querySelector('#lbl-tc').classList.add("lbllabel");
            document.querySelector('#lbl-nam').classList.add("lbllabel");
            document.querySelector('#lbl-truongb').classList.add("lbllabel");
            document.querySelector('#lbl-truonga').classList.add("lbllabel");
        } else {
            document.querySelector('#lbl-tc').classList.remove("lbllabel");
        }

        $.ajax({
            url: "{{route('getnamthongke')}}",
            type: 'POST',
            dataType: 'json',
            data: {
                id: this.value,

            }
        }).done(function (ketqua) {
            

            if (ketqua.length > 1) {
                if (ketqua[0] == ketqua[ketqua.length - 1]) {
                   
                    selectNam.innerHTML = "";
                    for (let i = ketqua[0]-5; i < ketqua[0]; i++) {
                        let opt = document.createElement('option');
                        opt.text = i;
                        opt.value = i;
                        selectNam.add(opt);

                    }
                    //document.querySelector('#nhieunam').setAttribute("placeholder",(ketqua[0]-5) +"-"+(ketqua[0]-1))
                    document.querySelector('#lbl-nhieunam').innerHTML=(ketqua[0]-5) +"-"+(ketqua[0]-1);

                } else {
                    
                    selectNam.innerHTML = "";
                    for (let i = ketqua[0]-5; i < ketqua[ketqua.length-1]; i++) {
                        
                        let opt = document.createElement('option');
                        opt.text = i;
                        opt.value = i;
                        selectNam.add(opt);

                    }
                    //document.querySelector('#nhieunam').setAttribute("placeholder",(ketqua[0]-5) +"-"+(ketqua[ketqua.length-1]-1))
                    document.querySelector('#lbl-nhieunam').innerHTML=(ketqua[0]-5) +"-"+(ketqua[ketqua.length-1]-1);
                }
            } else {
                selectNam.innerHTML = "";
                for (let i = ketqua[0]-5; i < ketqua[0]; i++) {
                    let opt = document.createElement('option');
                    opt.text = i;
                    opt.value = i;
                    selectNam.add(opt);

                }
                //document.querySelector('#nhieunam').setAttribute("placeholder",ketqua[0]-5 + "-" + ketqua[0])
                document.querySelector('#lbl-nhieunam').innerHTML=ketqua[0]-5 + "-" + ketqua[0];
                

            }
           
            //console.log(select.options[0].value)


        });


        $.ajax({
            url: "{{route('gettruongthongke')}}",
            type: 'POST',
            dataType: 'json',
            data: {
                id: this.value,

            }
        }).done(function (ketqua) {
            if(ketqua.length != arrID.length){
                selectTruongA.innerHTML = "";
                selectTruongB.innerHTML = "";
                
                for (let i = 0; i < ketqua.length; i++) {
                    let opt = document.createElement('option');
                    let opt1 = document.createElement('option');
                    opt.text = arrName[arrID.indexOf(ketqua[i])];
                    opt.value = ketqua[i];
                    opt1.text = arrName[arrID.indexOf(ketqua[i])];
                    opt1.value = ketqua[i];
                    selectTruongA.add(opt);
                    selectTruongB.add(opt1);
                   

                }
            } else {
                selectTruongA.innerHTML = "";
                selectTruongB.innerHTML = "";
                let opt = document.createElement('option');
                    let opt1 = document.createElement('option');
                    opt.text = "all";
                    opt.value = -1;
                    opt1.text = "all";
                    opt1.value = -1;
                    selectTruongA.add(opt);
                    selectTruongB.add(opt1);
                for (let i = 0; i < arrID.length; i++) {
                    let opt = document.createElement('option');
                    let opt1 = document.createElement('option');
                    opt.text = arrName[i];
                    opt.value = arrID[i];
                    opt1.text = arrName[i];
                    opt1.value = arrID[i];
                    selectTruongA.add(opt);
                    selectTruongB.add(opt1);
                   

                }
            }

        });



    });
</script>

</body>

</html>
