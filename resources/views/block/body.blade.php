
{{--<div id = "slider">--}}
{{--    <figure>--}}
{{--        <img src="{{asset('images/dai_hoc_quoc_gia_ha_noi_1.png')}}" class="slide-bar">--}}
{{--        <img src="{{asset('images/dai_hoc_quoc_gia_ha_noi_2.jpg')}}" class="slide-bar">--}}
{{--        <img src="{{asset('images/dai_hoc_quoc_gia_ha_noi_3.png')}}" class="slide-bar">--}}
{{--        <img src="{{asset('images/dai_hoc_quoc_gia_ha_noi_4.png')}}" class="slide-bar">--}}
{{--        <img src="{{asset('images/dai_hoc_quoc_gia_ha_noi_5.png')}}" class="slide-bar">--}}
{{--    </figure>--}}
{{--</div>--}}

<!--Carousel Wrapper-->
<div id="carousel-example-1z-slider" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z-slider" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z-slider" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z-slider" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('images/dai_hoc_quoc_gia_ha_noi_1.png')}}"
                 alt="First slide">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/dai_hoc_quoc_gia_ha_noi_2.jpg')}}"
                 alt="Second slide">
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/dai_hoc_quoc_gia_ha_noi_3.png')}}"
                 alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/dai_hoc_quoc_gia_ha_noi_4.png')}}"
                 alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('images/dai_hoc_quoc_gia_ha_noi_5.png')}}"
                 alt="Third slide">
        </div>
        <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z-slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z-slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>


