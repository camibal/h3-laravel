<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <title>Admin | Listado Facturas</title>
</head>
<body>
<div class="size_content">

 <!-- img logo -->
    <span class="d-flex justify-content-center mt-5">
        <a href="" class="text-center"><img src="../img/LOGO-H3-300X300PX.png" alt="" width="66%"></a>
    </span>
     <!-- h1 -->
    <h1 class="text-center text-bebas-neve mt-5">Listado de facturas</h1>

    <div class="row justify-content-center">
        <a href="../admin/" class="return_home text-decoration-none">Atras</a>
    </div>
        
      <!-- section -->  
    <div class="formulario mt-5">
        <label for="caja_busqueda">Buscar</label>
        <input type="text" name="caja_busqueda" id="caja_busqueda">
    </div>
    <div class="container scrollmenu mt-5">
        <table class="table table-bordered">
            <thead>
                <tr class="table">
                    <th scope="col">IDENTIFICACIÓN</th>
                    <th scope="col">FACTURA N°</th>
                    <th scope="col">CONCEPTO</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">VALOR A PAGAR</th>
                    <th scope="col">DESCARGAR PDF</th>
                    <th scope="col">ELIMINAR</th>
                </tr>
            </thead>
            @foreach($facturas as $facturas)
            <tbody>
                <tr class="table2">
                    <th scope="row">{{ $facturas->id_cliente }}</th>
                    <td>{{ $facturas->id_factura }}</td>
                    <td>{{ $facturas->concepto }}</td>
                    <td>{{ $facturas->fecha }}</td>
                    <td>{{ $facturas->valor_pagar }}</td>
                    <td>
                         <a href='download/{{$facturas->pdf}}'><i class="fas fa-file-pdf text-danger"></i></a>
                     </td>
                     <td>
                        <form method="POST" action="{{ route('list-fac-destroy', $facturas->id) }}">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Esta seguro de eliminar el registro?');">Eliminar</button>
                        </form>
                     </td>                    
                </tr>
            </tbody>
            @endforeach
        </table>     
    </div>
</div>  
<!-- footer -->
<footer>
    <div class="footer_principal d-flex justify-content-center align-items-center">
        <h5 class="text-center text_footer">H3 S.A.S. Políticas de privacidad | Términos & condiciones</h5>
    </div>
    <div class="footer_secundario"></div>
</footer>

    <script src="../js/index.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>