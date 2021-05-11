<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Revista Científica Unimar</title>
    <link rel="icon" href="{{asset('img/unimar-logo.png')}}" type="image/png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">  
  </head>

  <body>
    <div class=".container-xl">
      <!------------------------- navbar ------------------------->
      <nav class="navbar navbar-expand-md sticky-top">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
          <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>
        </button>
        
        <div class="collapse navbar-collapse" id="collapse_target">     
          <!------------------------- logo ------------------------->
          <ul class="navbar-nav">
            <div class="logotipo">
              <img src="{{asset('img/Fb-white.png')}}" alt="logo" width="60px" height="auto">
            </div>
          </ul>
          <!------------------------- botones ------------------------->
          <ul class="navbar-nav ml-auto">
            <li class="navbar-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
                Lineas de Investigación
                <span class="caret" ></span>
              </a>
              <div class="dropdown-menu" id="lineas" arial-labelledby="dropdown_target">
                <a class="dropdown-item">Administración</a>
                <a class="dropdown-item">Arte</a>
                <a class="dropdown-item">Idiomas</a>
                <a class="dropdown-item">informatica</a>
                <a class="dropdown-item">Derecho</a>
                <a class="dropdown-item">Gerencia</a>
                <a class="dropdown-item">Salud</a>
                <a class="dropdown-item">Historia</a>
                <a class="dropdown-item">Turismo</a>
              </div>
            </li>
            <li class="navbar-item">
              <a class="nav-link" href="#">Autores</a>
            </li>
            <li class="navbar-item">
              <a class="nav-link" href="#">Ediciones</a>
            </li>
            <li class="navbar-item">
              <a class="nav-link" href="#">Informacion</a>
            </li>
            <!------------------------- icono de busqueda ------------------------->
            <li class="nav-item dropdown" id="icons">
              <button class="btn dropdown-toggle" type="button" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-search fa-fw"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownSearch">
                <form class="px-4 py-3">
                  <input class="input" type="text" placeholder="Search...">
                  <button type="button" class="btn btn-success">Buscar</button>
                </form>
              </div>   
            </li>
            <!------------------------- icono de idiomas ------------------------->
            <li class="nav-item dropdown" id="icons">
              <button class="btn dropdown-toggle" type="button" id="dropdownLanguajeButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-globe fa-fw"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownLanguajeButton">
                <a class="dropdown-item" href="#">español</a>
                <a class="dropdown-item" href="#">ingles</a>
                <a class="dropdown-item" >italiano</a>
              </div>   
            </li>
            <!------------------------- icono de usuario ------------------------->
            <li class="nav-item dropdown" id="icons">
              <button class="btn dropdown-toggle" type="button" id="dropdownsingin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownsingin">
                <a class="dropdown-item" href="#">
                  Iniciar Sesion
                  
                </a>
                
                <a class="dropdown-item">Registrarse</a>
              </div>
            </li> 

          </ul>

        </div>

      </nav>
      <!------------------------- contenido ------------------------->
      <main>
          @yield('content')
      </main>
      
    <!------------------------- footer ------------------------->
      <div class="footer">
        <div class="row">
          <!------------------------- logo de unimar ------------------------->
          <div class="col-sm">
            <div class="unimar-link">
              <a href="http://www.unimar.edu.ve/unimarportal/index.php">
                <img src="{{ asset('img/white.png') }}" alt="logo blanco" width="150px" height="auto">
              </a>
            </div>
          </div>

          <!------------------------- informacion de contacto ------------------------->
          <div class="col-sm">
            <div class="info-contact">
              <p><b>Información de Contacto</p></b>
              <p>Telefono: 0295 - 2870101<br>
              Correo: revista.cientifica@unimar.edu.ve<br>
              Departamento de Postgrado</p>
              <p><b>2021 &copy Universidad de Margarita</b></p>
            </div>
          </div>

          <!------------------------- redes sociales ------------------------->
          <div class="col-sm">
            <ul id="social-media">
              <p><b>Redes Sociales</p></b>
              <!------------------------- logo facebook ------------------------->
              <li class="nav-item">
                <a href=#facebook>
                  <img src="{{ asset('img/fb-white.png') }}" alt="logo blanco" width="40px" height="auto">
                </a>
              </li>
              <!------------------------- logo twitter ------------------------->
              <li class="nav-item">
                <a href=#twitter>
                  <img src="{{ asset('img/tw-white.png') }}" alt="logo blanco" width="40px" height="auto">
                </a>
              </li>
              <!------------------------- logo instagram ------------------------->
              <li class="nav-item">
                <a href=#instagram>
                  <img src="{{ asset('img/ig-white.png') }}" alt="logo blanco" width="40px" height="auto">
                </a>
              </li>

            </ul>

          </div>

        </div>

      </div>
    <!------------------------- scripts ------------------------->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>

</html>