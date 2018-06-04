@extends('admin.template.main')

@section('title', 'Lista de usuarios')
@section('accion')
<a href="{{ url('/admin/users/create')}}" class="btn btn-outline-success" >Registrar nuevo usuario</a>
@endsection

@section('content')

	<div style="text-align: center;">
		<table class="table table-striped">
			<thead>
				<th>Nombre(s)</th>
				<th>Apellido paterno</th>
				<th>Apellido paterno</th>
				<th>Numero de identificación</th>
				<th>Tipo de usuario</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{$user->nombres}}</td>
						<td>{{$user->apellido_p}}</td>
						<td>{{$user->apellido_m}}</td>
						<td>{{$user->no_identificacion}}</td>
						<td>
							@if($user->rol == "otro")
								<span class="alert alert-danger" style="padding: 1px">{{$user->rol}}</span>
							@else
								<span class="alert alert-primary" style="padding: 1px">{{$user->rol}}</span>
							@endif
						</td>
						<td>
							<a href="{{route('users.edit', $user->id)}}" class="btn btn-warning"></a>
							<a href="{{route('admin.users.destroy', $user->id)}}" onclick="return confirm('¿Seguro decea eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-wrech" aria-hidden="true"></span></a
						></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection

@section('paginate')
          {{ $users->links()}}	    
@endsection