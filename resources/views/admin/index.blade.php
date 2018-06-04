@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
	<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
				<h3 class="card-title">
				<a href="{{ url('/admin/jefecarrera/create')}}" class="btn btn-outline-success" style="size: 1px; text-align: left;">Registrar nuevo jefe de carrera</a></h3>
                <div class="card-tools">
                  <h3 class="card-title">
				<a href="{{ url('/admin/users/create')}}" class="btn btn-outline-success" style="size: 1px; text-align: left;">Registrar usuario de tipo otro</a></h3>
                </div>
              </div>
		<div class="card-body table-responsive p-0">
              <table class="table table-hover">
               
				<thead>
					<tr>
						<th>Nombre(s)</th>
						<th>Apellido paterno</th>
						<th>Apellido paterno</th>
						<th>Numero de identificación</th>
						<th>Tipo de usuario</th>
						<th>Carrera</th>
						<th>Acciones</th>
					</tr>
				</thead>
                <tbody>
					@foreach($users as $user)
						<tr>
							<td>{{$user->nombres}}</td>
							<td>{{$user->apellido_p}}</td>
							<td>{{$user->apellido_m}}</td>
							<td>{{$user->no_identificacion}}</td>
							<td>
								@if($user->rol == "Otro")
									<span class="alert alert-danger" style="padding: 1px">{{$user->rol}}</span>
								@else
									<span class="alert alert-primary" style="padding: 1px">{{$user->rol}}</span>
								@endif
							</td>
							<td>@if($user->carrera == "otro")
									<span class="alert alert-danger" style="padding: 1px">{{$user->carrera}}</span>
								@else
									<span class="alert alert-primary" style="padding: 1px">{{$user->carrera}}</span>
								@endif</td>
							<td>
								<a href="{{route('users.edit', $user->id)}}" class="btn btn-warning"></a>
								<a href="{{route('admin.users.destroy', $user->id)}}" onclick="return confirm('¿Seguro decea eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-wrech" aria-hidden="true"></span></a
							></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
@endsection

@section('paginate')
          {{ $users->links()}}	    
@endsection