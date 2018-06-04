@extends('admin.template.main')

@section('title', 'Iniciar sesion')

@section('content')
	{!! Form::open(['route' => 'admin.login', 'method' => 'POST'])!!}
		<div class="form-group">
			{!! Form::label('no_identificacion', 'Usuario') !!}
			{!! Form::text('no_identificacion', null, ['class'=>'form-control', 'placeholder' => 'Usuario']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class'=>'form-control', 'placeholder' => '********']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Acceder', ['class' => 'btn btn-info']) !!}
		</div>
	{!! Form::close() !!}
@endsection
