@extends('layout')

<!-- title -->
@section('title', 'Search')

<!-- content -->
@section('content')

<div class="size_content">
    <!-- h1 -->
    <h1 class="text-center text-bebas-neve mt-5">BIENVENIDO A SU TAQUILLA DE PAGOS</h1>

    <!-- return home -->
    <div class="w-100 h-100 d-flex justify-content-center">
        <a href="../" class="return_home text-decoration-none">Volver al inicio</a>
    </div>

    <!-- id user -->
    <div class="container d-flex justify-content-center mt-5">
        <div class="form-group w-50">
            <label for="identificacion" class="text-bebas-neve"><h6>Identificación del cliente</h6></label>
            <input type="text" class="form-control" name="identificacion" id="identificacion" aria-describedby="emailHelp"
            placeholder="Ingrese identificación" style="font-family: helvetica;">
        </div>
    </div>

    <!-- btn consult -->
    <div class="container d-flex justify-content-center p-4">
        <input type="submit" value="Consultar" class="btn btn_consult" name="btn2">
    </div>
</div>

@endsection