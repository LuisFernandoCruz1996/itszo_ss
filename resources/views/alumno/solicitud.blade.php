@extends('templates.main')

@section('title', 'Solicitud')

@section('content')
<section class="content">

  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
      	<div class="text-center">
      		<h2 class="card-title"><b>ANEXO XVIII. SOLICITUD DE SERVICIO SOCIAL </b></h2>
        </div>
        <h3 class="profile-username text-center">{{$useralumno->nombres}} {{$useralumno->apellido_p}} {{$useralumno->apellido_m}}</h3>
        <p class="text-muted text-center">Datos del programa de servicio social</p>
        <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
                <b>Dependencia oficial: </b> <a class="float-right">{{$solicitud->dependencia_of}}</a>
            </li>
            <li class="list-group-item">
                <b>Titular de la dependencia: </b> <a class="float-right">{{$solicitud->titular_dep}}</a>
            </li>
            <li class="list-group-item">
                <b>Puesto de la dependencia: </b> <a class="float-right">{{$solicitud->puesto_dep}}</a>
            </li>
            <li class="list-group-item">
                <b>Nombre del programa: </b> <a class="float-right">{{$solicitud->nombre_programa}}</a>
            </li>
            <li class="list-group-item">
                <b>Modalidad: </b> <a class="float-right">{{$solicitud->modalidad}}</a>
            </li>
            <li class="list-group-item">
                <b>Fecha de inicio: </b> <a class="float-right">{{$solicitud->fecha_inicio}}</a>
            </li>
            <li class="list-group-item">
                <b>Fecha de terminación: </b> <a class="float-right">{{$solicitud->fecha_terminacion}}</a>
            </li>
            <li class="list-group-item">
                <b>Programa de actividad: </b> <a class="float-right">{{$solicitud->programa_actividad}}</a>
            </li>
            <li class="list-group-item">
                <p class="text-muted text-center">Tipo de programa</p></a>
                <a class="float-center">{{$solicitud->tip_pro}}</a>
            </li>
        </ul>
        <a  href="{{route('solicitud.edit', $solicitud->id)}}" class="btn btn-primary btn-block"><b>Editar</b></a>
      </div>
    </div>
  </div>
</section>

@endsection