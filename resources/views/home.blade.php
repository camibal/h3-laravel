@extends('layout')

<!-- title -->
@section('title', 'home')

<!-- content -->
@section('content')
    <!-- h1 -->
    <h1 class="text-center mt_container p-3">¡Los que Hacemos el trabajo pesado<br>tambien podemos vernos bien.! </h1>

    <!-- img animation -->
    <div class="container mt_container">
        <div class="row">
            <!-- img tornillo -->
            <div class="col-12 col-md-3 text-center mb-5">
                <img src="img/index/Tornillosolo.png" width="70%" alt="">
                <div class="row justify-content-center">
                    <div class="col-3">
                        <img src="img/mas.png" class="mas_menos" width="42vw" alt="">
                    </div>
                    <div class="col-3">
                        <img src="img/menos.png" class="mas_menos" width="42vw" alt="">
                    </div>
                </div>
            </div>

            <!-- img tuerca -->
            <div class="col-12 col-md-3 text-center mb-5">
                <img src="img/index/Tuerca.png" width="70%" alt="">
                <div class="row justify-content-center">
                    <div class="col-3">
                        <img src="img/mas.png" width="42vw" class="mas_menos"  alt="">
                    </div>
                    <div class="col-3">
                        <img src="img/menos.png" width="42vw" class="mas_menos"  alt="">
                    </div>
                </div>
            </div>

            <!-- img arandela -->
            <div class="col-12 col-md-3 text-center mb-5">
                <img src="img/index/Arandela.png" width="70%" alt="">
                <div class="row justify-content-center">
                    <div class="col-3">
                        <img src="img/mas.png" width="42vw" class="mas_menos"  alt="">
                    </div>
                    <div class="col-3">
                        <img src="img/menos.png" width="42vw" class="mas_menos"  alt="">
                    </div>
                </div>
            </div>

            <!-- img tornillo grueso -->
            <div class="col-12 col-md-3 text-center mb-5">
                <img src="img/index/Tsencillo.png" width="70%" alt="">
                <div class="row justify-content-center">
                    <div class="col-3">
                        <img src="img/mas.png" width="42vw" class="mas_menos"  alt="">
                    </div>
                    <div class="col-3">
                        <img src="img/menos.png" width="42vw" class="mas_menos"  alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection