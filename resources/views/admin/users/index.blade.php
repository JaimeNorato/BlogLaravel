@extends('admin.template.main')

@section('title','Lista de usuarios')
	
@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a><br><br>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>@if($user->type == "admin")
							<samp class="label label-danger">{{ $user->type }}</samp>
						@else
							<samp class="label label-primary">{{ $user->type }}</samp>
						@endif

					</td>
					<td><a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
						<a href="{{ route('admin.users.destroy',$user->id) }}" onclick="return confirm('¿Desea eliminar al usuario {{ $user->name }} ?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}
@endsection()