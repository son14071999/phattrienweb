<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 Ajax Request example - codechief.org </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        .container-chart form{
            display: flex;
        }
        .form-group-chart {
            position: relative;
            margin-right: 2rem;
            
        }
        .form-group-chart label{
            position: absolute;
        }
        .form-group-chart select {
            
            cursor: pointer;
        }


    </style>
</head>
<body>
  
<div class="container-chart">
    <form action=""  method="POST">
       
        <div class="form-group-chart">
            <label id="truong">Truong A</label>
            <select name="truonga" id="truonga">
                <option value="-1" selected>all</option>
                <option value="-1" selected>Truong dai hoc xa hoi nhan van</option>
                
            </select>
        </div>
        <div class="form-group-chart">
            <label id="truong">Truong b</label>
            <select name="truongb" id="truongb">
                <option value="-1" selected>all</option>
                <option value="-1" selected>Truong dai hoc xa hoi nhan van</option>
                
            </select>
        </div>
        <div class="form-group-chart">
            <label name="truong">tieu chi</label>
            <select name="tieuchi" id="tieuchi">
               
                <option value="1">Sinh vien truong</option>
              
            </select>
        </div>
        <div class="form-group-chart">
            <label>nam</label>
            <select name="nam" id="nam">

                <option value="1">2021</option>
                <option value="2">2020</option>
            </select>
        </div>

        <div class="form-group-chart">
            <label>Từ-Đến</label>
            <input type="text" placeholder="2020-2029" name="nhieunam" id="nhieunam">
        </div>
        <button id="chon">chon</button>
    </form>

</div>
  
</body>
</html>