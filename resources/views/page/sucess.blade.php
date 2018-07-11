@extends('page.template')
@section('tittle', 'Categorias')
@section('content')

<a href="{{ route('categorias.create') }}" class="btn btn-info">Crear nueva categoría</a>

<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Acción</th>
	</thead>
	<tbody>
		@foreach($categorias as $categoria)
			<tr>
				<td>{{ $categoria->id }}</td>
				<td>{{ $categoria->name }}</td>

				<td>
					<a  href="{{ route ('categorias.destroy', $categoria->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

{!! $categorias->render() !!}



@endsection