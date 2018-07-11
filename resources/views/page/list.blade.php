@extends('page.template')

@section('tittle', 'Lista de Usuarios')
 @section('content')


<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Email</th>
		<th>Tipo</th>
		<th>Acción</th>
	</thead>
	<tbody>
		@foreach($users as user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>
					@if($user->type == "admin")
					<span class="label label-danger">{{ $user->type }}</span>
					@else
					<span class="label label-danger">{{ $user->type }}</span>
					@endif
					</td>
				<td><a  href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
		@endforeach
	</tbody>
</table>

{!! $users->render() !!}





 @endsection
