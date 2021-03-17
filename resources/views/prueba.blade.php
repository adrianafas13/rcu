<!doctype html>

<html lang="en">
  <head>

    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Revista Científica Unimar</title>
    <link rel="icon" href="{{asset('img/unimar-logo.png')}}" type="image/png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    
  </head>

  <body>
    <div class="container-fluid">
      <div class="header">
        <div class="row">

          <div class="col">
            <div class="logotipo">
              <img src="{{asset('img/unimar-logo.png')}}" alt="logo" width="80px" height="auto">
            </div>
          </div>

          <div class="col">
            <ul id="iconos">

              <li class="nav-item">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-2x"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item">Iniciar Sesion</a>
                    <a class="dropdown-item">Registrarse</a>
                  </div>
                </div>
              </li>

            </ul>
          </div>

        </div>
      </div>

      <div class="topnav" id="myTopnav">
        <button class="dropdown">Lineas de Investigación
          <i class="fa fa-caret-down"></i>
        </button>

          <div class="dropdown-content">
            <a href="#">Administración</a>
            <a href="#">Arte</a>
            <a href="#">Idiomas</a>
            <a href="#">Informatica</a>
            <a href="#">Derecho</a>
            <a href="#">Gerencia</a>
            <a href="#">Historia</a>
            <a href="#">Salud</a>
          </div>

        </div>

        <a href="Artículos"></a>
        <a href="Autores"></a>
        <a href="Información"></a>

        <div class="search-container">
          <form type="get" action="#">
            <input type="text" name="query" placeholder="Serach...">
              <button type="submit">
                <i class="fa fa-search"></i>
              </button>
          </form>
        </div>

        <a href="#" class="icon"><i class="fa fa-bars"></i></a>

      </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>

</html>