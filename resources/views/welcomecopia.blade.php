<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body background="{{asset('plugins/images/banneritszo.jpg')}}"  style="background-repeat: no-repeat; background-position: 0% -60%; background-size: cover;">
    @include('alumno.template.nav')
    <h1 align="center" style="color: #1d8348;"><big>SERVICIO SOCIAL</big></h1>
    <section>
        @yield('content')
    </section>

    
    <script src="{{asset('plugins/jquery/jquery.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>