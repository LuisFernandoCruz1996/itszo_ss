@extends('templates.main')

@section('title', 'Editar solicitud de servicio social')

@section('content')
{!! Form::open(['route'=>['solicitud.update',$programa], 'method'=>'PUT']) !!}
	<div class="form-group" style="text-align: left;">
		{!!Form::label('dependencia_of', 'Dependencia oficial: ')!!}
		{!!Form::text('dependencia_of', $programa->dependencia_of,['class'=>'form-control', 'placeholder'=>'Dependencia oficial', 'required'])!!}

		{!!Form::label('titular_dep', 'Titular de la dependencia: ')!!}
		{!!Form::text('titular_dep', $programa->titular_dep,['class'=>'form-control', 'placeholder'=>'Titular de la dependencia', 'required'])!!}

		{!!Form::label('puesto_dep', 'Puesto de la dependencia: ')!!}
		{!!Form::text('puesto_dep', $programa->puesto_dep,['class'=>'form-control', 'placeholder'=>'Apellido materno', 'required'])!!}

		{!!Form::label('nombre_programa', 'Nombre del programa: ')!!}
		{!!Form::text('nombre_programa', $programa->nombre_programa,['class'=>'form-control', 'placeholder'=>'Nombre del programa', 'required'])!!}

		{!!Form::label('modalidad', 'Modalidad: ')!!}
		{{Form::select('modalidad', ['' => '', 'Interno' => 'Interno', 'Externo' => 'Externo'], $programa->modalidad, ['class'=>'form-control'])}}

		{!!Form::label('fecha_inicio', 'Fecha de inicio: ')!!}
		{!!Form::text('fecha_inicio', $programa->fecha_inicio,['class'=>'form-control', 'placeholder'=>'Fecha de inicio', 'required'])!!}

		{!!Form::label('fecha_terminacion', 'Fecha de terminacion: ')!!}
		{!!Form::text('fecha_terminacion', $programa->fecha_terminacion,['class'=>'form-control', 'placeholder'=>'Fecha de terminacion', 'required'])!!}

		{!!Form::label('programa_actividad', 'Programa de actividades: ')!!}
		{!!Form::text('programa_actividad', $programa->programa_actividad,['class'=>'form-control', 'placeholder'=>'Programa de actividades', 'required'])!!}

		{!!Form::label('tip_pro', 'Tipo de programa: ')!!}
		{{Form::select('tip_pro', ['' => '', 'EPA'=>'EPA','AC'=>'AC','DS'=>'DS','DC'=>'DC','ACULT'=>'ACUL','AALS'=>'AALS','AD'=>'AD','MA'=>'MA','Otro'=>'Otro'], $programa->tip_pro, ['class'=>'form-control'])}}

		{!!Form::submit('Editar usuario',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}
@endsection