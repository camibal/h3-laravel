<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
    <title>Registro Usuario</title>
</head>
<body>
 <!-- img logo -->
       <span class="d-flex justify-content-center mt-5">
        <a href="" class="text-center"><img src="../img/LOGO-H3-300X300PX.png" alt="" width="66%"></a>
    </span>
 <div class="container">

   <div class="row justify-content-center">
        <!-- h1 -->
        <h1 class="text-center text-bebas-neve mt-5">@lang('REGISTRO')</h1>
   </div>

    <!-- form -->
    <form method="POST" action="{{ route('register-user ', $usuarios->id) }}">
    @csrf @method('PATCH')
        <div class="row justify-content-center">
            <a href="../admin/" class="return_home text-decoration-none">Atras</a>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <label for="exampleFormControlInput1">@lang('Nombre')</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="@lang('Nombre')..." value="{{ $usuarios->name }}">
                {!! $errors->first('name', '<small class="alert">:message</small>') !!}
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <label for="exampleFormControlInput1">@lang('Correo')</label>
                <input type="text" class="form-control" name="email" id="exampleFormControlInput1" placeholder="@lang('Correo')..." value="{{ $usuarios->email }}">
                {!! $errors->first('email', '<small class="alert">:message</small>') !!}
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">@lang('Tipo de identificaciòn')</label>
                    <select class="form-control" name="t-identificacion" id="exampleFormControlSelect1">
                        <option>CC</option>
                        <option>CE</option>
                        <option>PA</option>
                        <option>NIT</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="exampleFormControlInput1">@lang('identificaciòn')</label>
                <input type="number" class="form-control" name="identificacion" id="exampleFormControlInput1" placeholder="@lang('identificaciòn')..." value="{{ $usuarios->identificacion }}">
                {!! $errors->first('identificacion', '<small class="alert">:message</small>') !!}
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <button type="submit" class="btn btn_consult">@lang('Registrarme')</button>
        </div>
    </form>
    <div class="row justify-content-center mt-5">
        <a href="ya_registrado.php" class="text-decoration-none p-4">
                <span class="return_home">@lang('YA ESTOY REGISTRADO')</span>
        </a>
    </div>
</div>
<footer>
    <div class="footer_principal d-flex justify-content-center align-items-center">
        <h5 class="text-center text_footer">H3 S.A.S. Políticas de privacidad | Términos & condiciones</h5>
    </div>
    
    <div class="footer_secundario"></div>
</footer>

    <script src="../js/index.js"></script>
</body>
