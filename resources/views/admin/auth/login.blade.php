<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Servicio social ITSZO| Iniciar sesion</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('plugins/dist/css/adminlte.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/iCheck/square/blue.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  	<a href="{{route('welcome')}}">
    	<img src="{{asset('plugins/images/logotecnm.png')}}" alt="Tecnm" style="height: 80px; ">
    	<img src="{{asset('plugins/images/logoitszoverde.png')}}" alt="ITSZO" style="height: 80px; ">
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicia sesion para continuar</p>

    {!! Form::open(['route' => 'login', 'method' => 'POST'])!!}
		<div class="form-group has-feedback">
			{!! Form::text('no_identificacion', null, ['class'=>'form-control', 'placeholder' => 'Usuario']) !!}

			<span class="fa fa-user form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			{!! Form::password('password', ['class'=>'form-control', 'placeholder' => 'Contraseña']) !!}
			<span class="fa fa-lock form-control-feedback"></span>
		</div>
		<div class="form-group">
			{!! Form::submit('Acceder', ['class' => 'btn btn-primary btn-block btn-flat']) !!}
		</div>
	{!! Form::close() !!}

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
