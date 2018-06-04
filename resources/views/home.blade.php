<!DOCTYPE html>
<html>
<head>
	<title>Inicio | Servicio Social</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/sticky-footer-navbar.css')}}">
</head>
<body background="{{asset('plugins/images/banneritszo.jpg')}}" style="background-repeat: no-repeat; background-position: 0% 50%; background-size: contain;">
	<!--Inicio Navbar-->
<header>
	@include('templates.nav')
</header>
<!--Fin Navbar-->
<!--Nombre centrado-->
<!--h1 align="center" style="color: #1d8348;"><big>SERVICIO SOCIAL</big></h1>
<!-- Inicio de contenido-->

<main role="main" class="container">
	<div class="row">
          <div class="col-md-4 col-md-offset-3">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->

        </div>
</main>
<!--Fin de contenido-->

<!--Inicio de footer-->
<footer class="footer" style="background-color: #e0e0e0">
    <strong>TecNM. </strong>Instituto Tecnológico Superior Zacatecas Occidente.
    <div class="float-right d-none d-sm-inline-block">
      <b>Servicio Social.</b> 
    </div>
</footer>
<!--JavaScript-->
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('plugins/jquery/jquery.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>