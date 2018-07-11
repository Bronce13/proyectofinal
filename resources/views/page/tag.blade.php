@extends('page.template')
@section('tittle', 'Categorias')
@section('content')

<a href="{{ route('tags.create') }}" class="btn btn-info">Crear nuevo tag</a>

<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Acción</th>
	</thead>
	<tbody>
		@foreach($tags as $tag)
			<tr>
				<td>{{ $tag->id }}</td>
				<td>{{ $tag->name }}</td>

				<td>
					<a  href="{{ route ('tags.destroy', $tag->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

{!! $tags->render() !!}

@endsection