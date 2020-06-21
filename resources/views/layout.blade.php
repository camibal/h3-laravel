<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
    <title>@yield('title')</title>
</head>
<body>
    <!-- header -->
    @include('includes/header')

    <!-- img logo -->
    @include('includes/logo-principal')

    <!-- contactanos -->
    @include('includes/contactanos')

    <!-- whatsapp -->
    @include('includes/whatsapp')

    <!-- content -->
    @yield('content')

    <!-- footer -->
    @include('includes/footer')

    <script src="js/index.js"></script>
</body>
</html>
