
@extends('page.template')

@section('tittle', 'Iniciar Sesión')
 @section('content')





<div class="container-fluid" id="dd">
<body class="text-center">
    <form class="form-signin" method="post" action="{{ route('auth.login') }}">
          {{csrf_field()}}

      <img class="mb-4" src="https://i.pinimg.com/736x/81/d8/d5/81d8d5905bc879a44311287651da1eaf--cat-silhouette-pottery-painting.jpg" id="nel" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
      <label for="inputUser" class="sr-only">Username</label>
      <input name="user" type="text" id="inputUser" class="form-control" placeholder="Username" required autofocus>
      
      <label for="inputEmail" class="sr-only">Email address</label>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    </div>







      @endsection