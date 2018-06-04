@extends('admin.template.main')

@section('title', 'Crear cuenta de alumno')

@section('content')
{!! Form::open(['route'=>'createacces', 'method'=>'POST']) !!}
<div class="col-md-24">	
	<div class="form-horizontal">
        <div class="card-header">
        </div>
			<div class="card-body">
				<div class="form-group">
					{!!Form::label('nombres', 'Nombre(s):')!!}
					{!!Form::text('nombres', null,['class'=>'form-control', 'placeholder'=>'Nombre(s)', 'required'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('apellido_p', 'Apellido paterno')!!}
					{!!Form::text('apellido_p', null,['class'=>'form-control', 'placeholder'=>'Apellido paterno', 'required'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('apellido_m', 'Apellido materno')!!}
					{!!Form::text('apellido_m', null,['class'=>'form-control', 'placeholder'=>'Apellido materno', 'required'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('no_identificacion', 'Numero de control')!!}
					{!!Form::text('no_identificacion', null,['class'=>'form-control', 'placeholder'=>'Numero de identificación', 'required'])!!}
				</div>
				<div class="form-group">
					{!!Form::label('password', 'Contraseña')!!}
					{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Contraseña', 'required'])!!}
				</div>
				<div class="card-footer">
					{!!Form::submit('Crear cuenta',['class'=>'btn btn-primary'])!!}
				</div>
			
		</div>
	</div>


@section('paginate')
          <a href="">Cancelar</a>   
@endsection

{!! Form::close() !!}


@endsection()


