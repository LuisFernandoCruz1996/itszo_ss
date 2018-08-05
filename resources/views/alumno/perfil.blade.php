@extends('templates.main')

@section('title',$alumno->nombres)

@section('content')
<div class="card" style="padding-left: 20px; padding-right: 20px; border: none;">
    <h1 class="card-title text-center" style="color: #1B396A;">{{$alumnos->user->nombres}} {{$alumnos->user->apellido_p}} {{$alumnos->user->apellido_m}}</h1>
    <div class="card-deck">    
      <div class="card">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">
            <p class="text-muted text-center"><b>Datos personales</b></p>
          </h5>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item"><b><a class="font-weight-bold" style="color: #15593C;">Genero: </a>{{$alumnos->sexo}}</b></li>
            <li class="list-group-item"><b><a class="font-weight-bold" style="color: #15593C;">Teléfono: </a>{{$alumnos->telefono}}</b></li>
            <li class="list-group-item"><b><a class="font-weight-bold" style="color: #15593C;">Domicilio: </a>{{$alumnos->domicilio}}</b></li>
            <li class="list-group-item"><b><a class="font-weight-bold" style="color: #15593C;">Correo electronico: </a>{{$alumnos->correo}}</b></li>
          </ul>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">
            <p class="text-muted text-center"><b>Escolaridad</b></p>
          </h5>
          <ul class="list-group list-group-flush text-center" >
            <li class="list-group-item"><b><a class="font-weight-bold" style="color: #15593C;">Número de control: </a>{{$alumnos->id}}</b></li>
            <li class="list-group-item"><b><a class="font-weight-bold" style="color: #15593C;">Carrera: </a>{{$alumnos->carrera}}</li>
            <li class="list-group-item"><b><a class="font-weight-bold" style="color: #15593C;">Semestre: </a>{{$alumnos->semestre}}</b></li>
            <li class="list-group-item"><b><a class="font-weight-bold" style="color: #15593C;">Periodo: </a>{{$alumnos->periodo}}</b></li>
          </ul>
        </div>
      </div>
    </div>
    <div style="padding-top: 30px;">
        <a  href="{{route('perfil.editardatos', $alumno->id)}}" class="btn btn-primary btn-block" style="background-color: #1B396A;"><b>Editar</b></a>
    </div>
</div>
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap-carddeck.css')}}">

@endsection