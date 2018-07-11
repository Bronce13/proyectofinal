
@extends('page.template')

@section('tittle', 'Registro')
 @section('content')

 

<div class="container-fluid" id="dd">
<body class="text-center">
    <form class="form-signin" method="post" action="{{ route('users.store') }}">
          {{csrf_field()}}

      <img class="mb-4" src="https://i.pinimg.com/736x/81/d8/d5/81d8d5905bc879a44311287651da1eaf--cat-silhouette-pottery-painting.jpg" id="nel" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Por favor regístrate</h1>
      <label for="inputName" class="sr-only">Nombre</label>
      <input name="name" type="text" id="inputName" class="form-control" placeholder="Ingresa tu nombre" required autofocus>

      <label for="inputLastName" class="sr-only">Apellido</label>
      <input name="last name" type="text" id="inputLastName" class="form-control" placeholder="Ingresa tu apellido" required autofocus>
      <label for="inputUser" class="sr-only">Username</label>
      <input name="user" type="text" id="inputUser" class="form-control" placeholder="Username" required autofocus>
      
      <label for="inputEmail" class="sr-only">Email address</label>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="exampleFormControlSelect1" class="sr-only">Tipo de Usuario</label>
    <select name="type" class="form-control" id="exampleFormControlSelect1" required="">
      <option>Seleccione un nivel</option>
      <option>Miembro</option>
      <option>Administrador</option>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
      <div class="checkbox mb-3">
      </div>
       <label for="inputPassword" class="sr-only">Confirmar Contraseña</label>
      <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="Confirma tu contraseña" required>
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      
    </form>
    </div>
    @endsection
  </body>