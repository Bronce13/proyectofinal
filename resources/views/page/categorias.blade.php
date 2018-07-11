@extends('page.template')
@section('tittle', 'Categorias')
@section('content')

<div class="container-fluid" id="dd">
  <h1 id="owo">Crear nueva Categoria</h1>
	<body class="text-center">
    <form class="form-signin" method="post" action="{{ route('categorias.store') }}">
          {{csrf_field()}}

<label for="inputName" class="sr-only">Nombre</label>
      <input name="name" type="text" id="inputName" class="form-control" placeholder="Crea una nueva categoria" required autofocus>

      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Crear</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      
  </form>
  </div>





@endsection