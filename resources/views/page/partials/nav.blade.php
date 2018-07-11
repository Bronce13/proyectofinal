<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" id="uwu" href="{{ route('home') }}">Mundo Garagato <img class="cato" src="http://40.media.tumblr.com/c8e0d31bf999c61b6f17232396b78eb8/tumblr_mskwmcLDW21rgpyeqo1_500.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarColor02">
  
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>


        <li class="nav-item">
        <a class="nav-link" href="{{ route('info') }}">Acerca de Nosotros </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('articulos.index') }}">Articulos<i class="fa fa-heart"></i> </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="{{ route('tags.index') }}">Tags</a>
      </li>
      

    <li class="nav-item">
        <a class="nav-link" href="{{ route('categorias.index') }}">Categorias<i class="fa fa-heart"></i> </a>
      </li>

      
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
      <button type="button" class="btn btn-primary"><i class="fa fa-user"></i></button>
        <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                  
                      <a class="dropdown-item" href="{{ route('auth.login')}}">Iniciar Sesión</a>
                          <a class="dropdown-item" href="{{ route('users.create') }}">Registrarse</a>
                          <a class="dropdown-item" href="{{ route('auth.logout')}}">Salir</a>
                          
                          
              </div>
        </div>
    </div>

  </ul>
 
</div>

  </div>
</nav>