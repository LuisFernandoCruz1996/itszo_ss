<!DOCTYPE html>
<html>
<head>
	<title>Acceso restringido</title>
</head>
<link rel="stylesheet" href="{{asset('plugins\bootstrap\css\bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('plugins/dist/css/adminlte.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/iCheck/square/blue.css')}}">
<body>

<div class="login-box">
  <div class="login-logo">
  	<a href="{{route('welcome')}}">
    	<img src="{{asset('plugins/images/logotecnm.png')}}" alt="Tecnm" style="height: 80px; ">
    	<img src="{{asset('plugins/images/logoitszoverde.png')}}" alt="ITSZO" style="height: 80px; ">
    </a>
  </div>
  <div class="card">
  	<div class="panel-title text-center">
			Acceso Restringido
		</div>
    <div class="card-body card-body text-center">
    	<img src="{{asset('plugins/images/error401.png')}}" alt="Tecnm" style="height: 80px; ">
      	<strong class="text-center">
      		<p class="text-center">Usted no tiene acceso a esta zona</p>
      		<p>
				<a href="{{route('admin.index')}}">¿Decea volver al inicio?</a>
			</p>
		</strong>
    </div>
  </div>
</div>

</body>
</html>