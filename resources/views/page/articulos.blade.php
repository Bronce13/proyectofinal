@extends('page.template')
@section('tittle', 'Crear Articulo')
@section('content')

<div class="container-fluid" id="di">
	<h1 id="owo">Crear Articulo</h1>
	<body class="text-center">
    <form class="form-signin" method="post" action="{{ route('articulos.store') }}" files="true" >
          {{csrf_field()}}

<label for="inputName" class="sr-only" id="esto" >Título del articulo</label>
      <input name="titulo" type="text" id="inputName" class="form-control" placeholder="Titulo" required autofocus>

      <label  for="categoria_id" class="sr-only">Categorias</label>
    <select name="categoria_id" class="form-control" id="categoria_id" required="" placeholder="Seleccione una categoria" required="">
      <option>Seleccione una categoria</option>

    	<label  for="content" class="sr-only"></label>
    	<textarea name="content" id="content" class="form-control" cols="50" rows="10" placeholder="Escribe tu articulo aquí"></textarea>
      

      <label  for="tag_id" class="sr-only">Tags</label>
    <select name="tag_id" class="form-control" id="tag_id" required="" placeholder="Seleccione un tag" required="">
      <option>Seleccione un tag</option>
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Editar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    	 
      
      
      
  </form>
  </div>


@endsection