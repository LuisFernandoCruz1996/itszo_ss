@extends('admin.template.main')

@section('title')
Alumnos de IGES semestre 8
@endsection

@section('title1')
<a href="{{route('seguimiento.indexigess8')}}" style="color: #1B396A;">Alumnos de IGES semestre 8: {{$alumnostotal}}</a>
@endsection

@section('title2')
<a href="{{route('seguimiento.indexigess8mujeres')}}" style="color: #1B396A;">Mujeres: {{$mujeres}}</a>
@endsection

@section('title3')
 <a href="{{route('seguimiento.indexigess8hombres')}}" style="color: #1B396A;">Hombres: {{$hombres}}</a>
@endsection

@section('content')
	<div class="row">
          <div class="col-12">
            <div class="card">
		<div class="card-body table-responsive p-0">
              <table class="table table-hover">
               
				<thead style="color: #716F70;">
					<tr>
						<th>Nombre(s):</th>
						<th>Apellido paterno:</th>
						<th>Apellido paterno:</th>
						<th>Número de control:</th>
						<th>Genero:</th>
						<th>Semestre:</th>
						<th>Correo:</th>
						<th>Seguimiento:</th>
					</tr>
				</thead>
                <tbody>
					@foreach($alumnos as $alumno)
						<tr>
							<td>{{$alumno->user->nombres}}</td>
							<td>{{$alumno->user->apellido_p}}</td>
							<td>{{$alumno->user->apellido_m}}</td>
							<td>{{$alumno->no_control}}</td>
							<td>{{$alumno->sexo}}</td>
							<td>{{$alumno->semestre}}</td>
							<td>{{$alumno->correo}}</td>
							<td><a href="{{route('seguimiento.alumno.perfil', $alumno->no_control)}}" style="color: #1B396A;">Ver perfil completo</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	{{ $alumnos->links()}}
</div>

</div>
          	    
@endsection