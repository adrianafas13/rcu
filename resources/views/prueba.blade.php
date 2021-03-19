<style>
.container-fuid{
    height: 100%;
}

/*-----------------Header------------------*/
.header{
    background-color: rgb(255, 255, 255);
    margin: 10px 15px 10px;
}
    .header .logotipo{
        box-align: left;
        padding: 5px;
    }
    .header ul#iconos li{
        display: inline;
        float: right;
        padding: 20px 5px;
    }
    .header ul#iconos li button{
        background-color: white;
        color: #303030;
        border: none;
    }
        .header ul#iconos li button:hover{
            color:#1fbe6b;
            background-color: white;
        }

/*-----------------NAVBAR------------------*/
.topnav {
    background-color: #0d4d98;
    width: 100%;
    overflow: hidden;  
  }
  .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  .topnav .active {
    background-color: #4CAF50;
    color: white;
  }
  .topnav .icon {
    display: none;
  }
  .topnav .dropdown {
    float: left;
    overflow: hidden;
  }
    .topnav .dropdown .dropbtn {
      font-size: 17px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }
    .topnav .dropdown-content {
      display: none;
      position: fixed;
      background-color: #f9f9f9;
      min-width: 225px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .topnav .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: center;
    }
    .topnav a:hover, .dropdown:hover .dropbtn {
      background-color: #303030;
      color: white;
    }
    .topnav .dropdown-content a:hover {
      background-color: #ddd;
      color: black;
    }
    .topnav .dropdown:hover .dropdown-content {
      display: block;
    }
  /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
  @media screen and (max-width: 600px) {
    .topnav a:not(:first-child), .dropdown .dropbtn {
     display: none;
    }
    .topnav a.icon {
      float: right;
      display: block;
    }
  }
  /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
  @media screen and (max-width: 600px) {
    .topnav.responsive {
      position: relative;
    }
    .topnav.responsive a.icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
    .topnav.responsive .dropdown {
      float: none;
    }
    .topnav.responsive .dropdown-content {
      position: relative;
    }
    .topnav.responsive .dropdown .dropbtn {
      display: block;
      width: 100%;
      text-align: left;
    }
  }
  
      .topnav .search-container {
      float: right;
      background-color:white;
      border-radius:55px;
      width:285px;
      height:38px;
      margin-right: 16px;
      margin-top: 7px;
      }
  
          .topnav input[type=text] {
              padding: 7px 25px;
              margin:auto;
              background:transparent;
              border:none;
              
          }
  
          .topnav .search-container button {
              float: right;
              padding: 9px 13px;
              background: #1fbe6b;
              color:#fff;
              font-size: 14px;
              border-radius:20px;
              border: none;
              cursor: pointer;
          }
  
              .topnav .search-container button:hover {
                  background: #303030;
                  color: #fff;
              }
  
      @media screen and (max-width: 600px) {
          .topnav .search-container {
          float: none;
      }
  
      .topnav a, .topnav input[type=text], .topnav .search-container button {
          float: none;
          display: block;
          text-align: left;
          width: 100%;
          margin: 0;
          padding: 8px;
      }
  }

  /*-----------------FOOTER------------------------*/
.footer{
  margin-top:auto; 
    padding:10px 0px;
    background-color: #0d4d98;
    text-align:center;
    color:#fff;
}
    .footer ul#social-media li{
        display:inline;
        float: center;
        padding: 20px 10px;
    }
</style>


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
        <h4>hola</h4>
    </main>
    
    <div class="container-fluid">
      <div class="footer">
        <div class="row">

          <!-- unimar link -->
          <div class="col-sm">
            <div class="unimar-link">
              <a href="http://www.unimar.edu.ve/unimarportal/index.php">
                <img src="{{ asset('img/white.png') }}" alt="logo blanco" width="160px" height="auto">
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