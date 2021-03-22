<!doctype html>

<html lang="en">
  <head>

    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Revista Científica Unimar</title>
    <link rel="icon" href="{{asset('img/unimar-logo.png')}}" type="image/png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    
  </head>

  <body>
    <div class=".container-xl">
      <div class="header">
        <div class="row">

          <div class="col">
            <div class="logotipo">
              <img src="{{asset('img/unimar-logo.png')}}" alt="logo" width="80px" height="auto">
            </div>
          </div>

          <div class="col">
            <ul id="iconos">
              <!-- languaje icon -->
              <li class="nav-item">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-globe fa-2x"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">español</a>
                    <a class="dropdown-item" href="#">ingles</a>
                    <a class="dropdown-item" href="#">italiano</a>
                  </div>
                </div>     
              </li>
              <!-- login/singin icon -->
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

      
      <!-- navbar -->
      <div class="topnav" id="myTopnav">
                
        <div class="dropdown">
          <button class="dropbtn">Lineas de Investigación
            <i class="fa fa-caret-down"></i>
          </button>

          <div class="dropdown-content">
            <a href="#">administracion</a>
            <a href="#">arte</a>
            <a href="#">idiomas</a>
            <a href="#">informatica</a>
            <a href="#">derecho</a>
            <a href="#">gerencia</a>
            <a href="#">historia</a>
            <a href="#">salud</a>
          </div>
        </div>

        <a href="#">Autores</a>
        <a href="#">Ediciones</a>
        <a href="#">Informacion</a>
                    
        <!--search bar -->
        <div class="search-container">
          <form type="get" action=" # ">
            <input type="text" name="query" placeholder="Search..">
              <button type="submit">
                <i class="fa fa-search"></i>
              </button>
          </form>    
        </div>

        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
                    
      </div>
    </div>

    <main>
        @yield('content')
    </main>
    
    <div class=".container-xl">
      <div class="footer">
        <div class="row">

          <!-- unimar link -->
          <div class="col-sm">
            <div class="unimar-link">
              <a href="http://www.unimar.edu.ve/unimarportal/index.php">
                <img src="{{ asset('img/white.png') }}" alt="logo blanco" width="190px" height="auto">
              </a>
            </div>
          </div>

          <!-- contact info -->
          <div class="col-sm">
            <div class="info-contact">
              <p><b>Información de Contacto</p></b>
              <p>Telefono: 0295 - 2870101<br>
              Correo: revista.cientifica@unimar.edu.ve<br>
              Departamento de Postgrado</p>
              <p><b>2021 &copy Universidad de Margarita</b></p>
            </div>
          </div>

          <!-- social media -->
          <div class="col-sm">
            <ul id="social-media">
              <p><b>Redes Sociales</p></b>

              <li class="nav-item">
                <a href=#facebook>
                  <img src="{{ asset('img/fb-white.png') }}" alt="logo blanco" width="40px" height="auto">
                </a>
              </li>

              <li class="nav-item">
                <a href=#twitter>
                  <img src="{{ asset('img/tw-white.png') }}" alt="logo blanco" width="40px" height="auto">
                </a>
              </li>

              <li class="nav-item">
                <a href=#instagram>
                  <img src="{{ asset('img/ig-white.png') }}" alt="logo blanco" width="40px" height="auto">
                </a>
              </li>

            </ul>
          </div>
        </div>

    </div>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>

</html>