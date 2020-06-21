@extends('layout')

@section('title', 'About')

@section('content')    
    <!-- img nosotros -->
    <span class="d-flex justify-content-center">
        <img src="img/NOSOTROS-1200X350PX.png" width="65%" alt="">
    </span>

    <!-- section 1 -->
    <section class="container d-flex justify-content-center mt-5">
        <p class="text-center p-4 text-bebas-neve text-color-gray p-2">Somos una empresa dedicada a la Importación y Fabricación de Elementos de
            Fijación  en  acero. Comprometida  con  el  desarrollo  del  mercado  nacional  de
            aceros excediendo las expectativas de nuestros clientes en calidad, tiempos
            de entrega y costos, a través de un mejoramiento continuo y la interacción con
            los mercados globales.
        </p>
    </section>

     <!-- h1 -->
     <h1 class="mt-4 text-center text-bebas-neve text-color-blue-light p-3">Los valores que nos permiten hacer la diferencia son:</h1>

     <!-- section 2 -->
    <section class="d-flex justify-content-center mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 text-center">
                    <img src="img/3.png" width="40%" alt="">
                    <div class="row justify-content-center">
                        <h2 class="text-bebas-neve mt-3">NUESTRA GENTE</h2>
                    </div>
                    <div class="row">
                        <p class="text-color-gray text-justify p-4">Inspirados en mejorar cada día  a  través  de  un
                              trato  respetuoso  y  ético  con nuestros clientes y proveedores.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <img src="img/4.png" width="40%" alt="">
                    <div class="row justify-content-center">
                        <h2 class="text-bebas-neve mt-3">NUESTRA OFERTA</h2>
                    </div>
                    <div class="row">
                        <p class="text-color-gray text-justify p-4">Acceso    a    nuevos    mercados    y    productos,    anticipándonos    a    las    necesidades de la industria,
                             innovando y  adaptándonos  a  los  cambios  del  mercado</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <img src="img/5.png" width="40%" alt="">
                    <div class="row justify-content-center">
                        <h2 class="text-bebas-neve mt-3">NUESTRAS RELACIONES</h2>
                    </div>
                    <div class="row">
                        <p class="text-color-gray text-justify p-4">Construimos relaciones efectivascon nuestros clientes y proveedores,facilitando sinergias,
                             creando valory obteniendo beneficios mutuos para las partes.</p>
                    </div>
                </div>
            </div>
         </div>
    </section>

@endsection