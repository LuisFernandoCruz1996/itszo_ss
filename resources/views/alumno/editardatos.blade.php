@extends('templates.main')

@section('title', 'Editar datos personales')

@section('content')
{!! Form::open(['route'=>['perfil.update',$useralumno, $alumno], 'method'=>'PUT']) !!}
	<div class="form-group" style="text-align: left;">
		{!!Form::label('nombre', 'Nombre(s): ')!!}
		{!!Form::text('nombres', $useralumno->nombres,['class'=>'form-control', 'placeholder'=>'Nombre(s)', 'required'])!!}

		{!!Form::label('apellido_p', 'Apellido paterno: ')!!}
		{!!Form::text('apellido_p', $useralumno->apellido_p,['class'=>'form-control', 'placeholder'=>'Apellido paterno', 'required'])!!}

		{!!Form::label('apellido_m', 'Apllido materno: ')!!}
		{!!Form::text('apellido_m', $useralumno->apellido_m,['class'=>'form-control', 'placeholder'=>'Apellido materno', 'required'])!!}

		{!!Form::label('no_identificacion', 'Numero de identificación: ')!!}
		{!!Form::text('no_identificacion', $useralumno->no_identificacion,['class'=>'form-control', 'placeholder'=>'Numero de identificación', 'required'])!!}

		{!!Form::label('sexo', 'Genero: ')!!}
		{{Form::select('sexo', ['' => '', 'Masculino' => 'Masculino', 'Femenino' => 'Femenino'], $alumno->sexo, ['class'=>'form-control'])}}

		{!!Form::label('telefono', 'Numero de celular o de teléfono: ')!!}
		{!!Form::text('telefono', $alumno->telefono,['class'=>'form-control', 'placeholder'=>'Celular o telefono', 'required'])!!}

		{!!Form::label('domicilio', 'Domicilio: ')!!}
		{!!Form::text('domicilio', $alumno->domicilio,['class'=>'form-control', 'placeholder'=>'Domicilio', 'required'])!!}

		{!!Form::label('carrera', 'Carrera: ')!!}
		{{Form::select('carrera', ['' => '', 'IGE'=>'IGE','IND'=>'IND','ISC'=>'ISC','LA'=>'LA','TSM'=>'TSM','INFS'=>'INFS','IGES'=>'IGES'], $alumno->carrera, ['class'=>'form-control'])}}

		{!!Form::label('periodo', 'Periodo escolar: ')!!}
		{!!Form::text('periodo', $alumno->periodo,['class'=>'form-control', 'placeholder'=>'Periodo escolar', 'required'])!!}

		{!!Form::label('semestre', 'Semestre: ')!!}
		{{Form::select('semestre', ['' => '', '5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9'], $alumno->semestre, ['class'=>'form-control'])}}

		{!!Form::label('correo', 'Correo electronico: ')!!}
		{!!Form::text('correo', $alumno->correo,['class'=>'form-control', 'placeholder'=>'example@example.com', 'required'])!!}


		{!!Form::submit('Editar usuario',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}
@endsection