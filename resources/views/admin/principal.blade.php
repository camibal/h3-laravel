<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <title>Admin | Menù</title>
</head>
<body>
 <!-- img logo -->
       <span class="d-flex justify-content-center mt-5">
        <a href="" class="text-center"><img src="../img/LOGO-H3-300X300PX.png" alt="" width="66%"></a>
    </span>
       <!-- h1 -->
        <h1 class="text-center text-bebas-neve mt-5">Administrador</h1>

<div class="size_content container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3 d-flex justify-content-center text-center contenedor p-3">
                    <button type="button" class="btn btn-secondary btn-lg btn-block btn_principal" onclick="window.location='admin/register-user'">
                         <span><i class="fas fa-user-plus p-3" style="font-size: 6rem;"></i></span>
                         <span>Registro Usuarios</span>
                    </button>
                </div>
         
                <div class="col-12 col-md-3 d-flex justify-content-center text-center contenedor p-3">
                    <button type="button" class="btn btn-secondary btn-lg btn-block btn_principal" onclick="window.location='admin/register-fac'">
                        <span><i class="fas fa-address-card p-3" style="font-size: 6rem;"></i></span>
                        <span>Registro Facturas</span>
                    </button>
                </div>
       
                <div class="col-12 col-md-3 d-flex justify-content-center text-center contenedor p-3">
                    <button type="button" class="btn btn-secondary btn-lg btn-block btn_principal" onclick="window.location='admin/list-user'">
                        <span><i class="fas fa-clipboard-list p-3" style="font-size: 6rem;"></i></span>
                        <span>Listado Usuarios</span>
                    </button>
                </div>

                <div class="col-12 col-md-3 d-flex justify-content-center text-center contenedor p-3">
                    <button type="button" class="btn btn-secondary btn-lg btn-block btn_principal" onclick="window.location='admin/list-fac'">
                        <span><i class="fas fa-clipboard-list p-3" style="font-size: 6rem;"></i></span>
                        <span>Listado Facturas</span>
                    </button>
                </div>
         
                <a href="cerrar.php" class="text-decoration-none mt-5 p-5"><span class="return_home">Cerrar sesion</span></a>
            </div>
        </div>

<footer>
    <div class="footer_principal d-flex justify-content-center align-items-center">
        <h5 class="text-center text_footer">H3 S.A.S. Políticas de privacidad | Términos & condiciones</h5>
    </div>
    <div class="footer_secundario"></div>
</footer>

    <script src="../js/index.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>