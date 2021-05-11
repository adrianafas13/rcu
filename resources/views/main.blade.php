@extends('layouts.generallayout')
<!------------------------- principal header ------------------------->
@section('content')

<div class="container-fluid">
  <div class="row">
    <!------------------------- carousel ------------------------->
    <div class="col-md-8" id="carousel">
      <div id="carouselControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <!------------------------- carousel item ------------------------->
          <div class="carousel-item active">
            <img src="img/imagen1.png" class="d-block w-100" alt="img1" height="505px">
            <div class="carousel-caption d-md-block ">
              <h5><b>Prueba</b></h5>
              <p>Esta es una prueba</p>
            </div>
          </div>
          <!------------------------- carousel item ------------------------->
          <div class="carousel-item">
            <img src="img/imagen2.png" class="d-block w-100" alt="img2" height="505px">
            <div class="carousel-caption d-md-block ">
              <h5><b>Prueba 2</b></h5>
              <p>Esta es una prueba 2</p>
            </div>
          </div>
          <!------------------------- carousel item ------------------------->
          <div class="carousel-item">
            <img src="img/imagen3.png" class="d-block w-100" alt="img3" height="505px">
            <div class="carousel-caption d-md-block">
              <h5><b>Prueba 3</b></h5>
              <p>Esta es una prueba 3</p>
            </div>
          </div>
        </div>
        <!------------------------- carousel control ------------------------->
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!------------------------- barra lateral ------------------------->
    <div class="col-md-4" id="popular">
      <div class="list-group">
        <!------------------------- titulo barra lateral ------------------------->
        <div class="list-group-item list-group-item-action" id="popular_header_barside">
          <div class="d-flex w-100 justify-content-between">
            <h5><b>Populares</b></h5>
            <i class="fas fa-fire-alt"></i>
          </div>
        </div>
        <!------------------------- cuerpo barra lateral ------------------------->
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1"><b>List group item heading</b></h6>
            <small>3 days ago</small>
          </div>
          <p class="mb-1"><i>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</i></p>
        </a>

        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1"><b>List group item heading</b></h6>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1"><i>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</i></p>
        </a>

        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1"><b>List group item heading</b></h6>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1"><i>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</i></p>
        </a>

        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1"><b>List group item heading</b></h6>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1"><i>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</i></p>
        </a>

        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1"><b>List group item heading</b></h6>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1"><i>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</i></p>
        </a>

      </div>
    </div>

  </div>

  <!------------------------- nombre de la edición ------------------------->
  <hr>
    <div class="edition_title">
      <h4><b>EDICIÓN MARZO 2021</b></h4>
    </div>
  <hr>
    
  <!------------------------- nombre de la edición ------------------------->
  <div class="row">
    <!------------------------- row artículo ------------------------->
    <div class="col-md-6" id="article">
      <!------------------------- enlace del artículo ------------------------->
      <div class="article-container">
        <img src="img/imagen1.png" alt="img1" style="width:100%; height: 350px;">
        <a href="#" class="badge badge-success" id="tag">Success</a>
        <div class="article-text overlay-text">
          <h6><b>Titulo del Articulo 1</b></h6>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </div>
      </div>

    </div>
    <!------------------------- row artículo ------------------------->
    <div class="col-md-6" id="article">
      <!------------------------- enlace del artículo ------------------------->
      <div class="article-container">
        <img src="img/imagen2.png" alt="img2" style="width:100%; height: 350px;">
        <a href="#" class="badge badge-danger" id="tag">Danger</a>
        <div class="article-text overlay-text">
          <h6>Titulo del Articulo 2</h6>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </div>
      </div>

    </div>

  </div>

</div>
@endsection
<!------------------------- principal footer ------------------------->