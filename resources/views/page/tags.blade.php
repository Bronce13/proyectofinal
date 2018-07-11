@extends('page.template')
@section('tittle', 'Crear tag')
@section('content')


<div class="container-fluid" id="dd">
	<h1 id="owo">Crear nuevo Tag</h1>
	<body class="text-center">
    <form class="form-signin" method="post" action="{{ route('tags.store') }}">
          {{csrf_field()}}

<label for="inputName" class="sr-only" id="esto" >Nombre de Tag</label>
      <input name="name" type="text" id="inputName" class="form-control" placeholder="Crea una nuevo tag" required autofocus>

      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Crear</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      
  </form>
  </div>


@endsection
