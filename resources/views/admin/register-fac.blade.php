<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
    <title>Registro Facturas</title>
</head>
<body>
 <!-- img logo -->
       <span class="d-flex justify-content-center mt-5">
        <a href="../" class="text-center"><img src="../img/LOGO-H3-300X300PX.png" alt="" width="66%"></a>
    </span>
 <div class="container">

   <div class="row justify-content-center">
        <!-- h1 -->
        <h1 class="text-center text-bebas-neve mt-5">@lang('REGISTRO FACTURA')</h1>
   </div>
      <div class="row justify-content-center">
            <a href="../admin/" class="return_home text-decoration-none">Atras</a>
        </div>
    <!-- form -->
    <form method="POST" action="{{ route('register-fac.create') }}" enctype="multipart/form-data">
    @csrf
        <div class="row justify-content-center mt-3">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">@lang('Tipo de identificaciòn')</label>
                    <select class="form-control" name="t-identificacion" id="exampleFormControlSelect1">
                        <option>CC</option>
                        <option>CE</option>
                        <option>PA</option>
                        <option>NIT</option>
                    </select>
                </div>
         </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                    <label for="exampleFormControlInput1">@lang('identificaciòn')</label>
                    <input type="number" class="form-control" name="id_cliente" id="exampleFormControlInput1" placeholder="@lang('identificaciòn')..." value="{{ old('id_cliente') }}">
                    {!! $errors->first('id_cliente', '<small class="alert">:message</small>') !!}
            </div>
        </div>
  
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <label for="exampleFormControlInput1">@lang('Identificaciòn factura')</label>
                <input type="number" class="form-control" name="id_factura" id="exampleFormControlInput1" placeholder="@lang('Identificaciòn factura')..." value="{{ old('id_factura') }}">
                {!! $errors->first('id_factura', '<small class="alert">:message</small>') !!}
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <label for="exampleFormControlInput1">@lang('Concepto')</label>
                <input type="text" class="form-control" name="concepto" id="exampleFormControlInput1" placeholder="@lang('Concepto')..." value="{{ old('concepto') }}">
                {!! $errors->first('concepto', '<small class="alert">:message</small>') !!}
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <label for="exampleFormControlInput1">@lang('Fecha')</label>
                <input type="date" class="form-control" name="fecha" id="exampleFormControlInput1"value="{{ old('fecha') }}">
                {!! $errors->first('fecha', '<small class="alert">:message</small>') !!}
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <label for="exampleFormControlInput1">@lang('Valor a Pagar')</label>
                <input type="number" class="form-control" name="valor_pagar" id="exampleFormControlInput1"  placeholder="@lang('Valor a Pagar')..." value="{{ old('valor_pagar') }}">
                {!! $errors->first('valor_pagar', '<small class="alert">:message</small>') !!}
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="pdf">
                    <label class="custom-file-label" for="customFile">@lang('Adjuntar archivo')</label>
                </div>
                <small id="fileHelp" class="form-text text-muted">@lang('Archivos permitidos (.pdf)')</small>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <button type="submit" class="btn btn_consult">@lang('Confirmar')</button>
        </div>
    </form>
    <div class="row justify-content-center mt-5">
        <a href="ya_registrado.php" class="text-decoration-none p-4">
                <span class="return_home text-decoration-none">@lang('REGISTRAR NUEVO USUARIO')</span>
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
</html>