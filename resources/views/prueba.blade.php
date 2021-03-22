
@extends('layouts.generallayout')

@section('content')
<div class="container-fluid">
  <br>
  <div class="row">

    <div class="col-md-8">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/imagen1.png" class="d-block w-100" alt="img1" height="530px">
          </div>
          <div class="carousel-item">
            <img src="img/imagen2.png" class="d-block w-100" alt="img2" height="530px">
          </div>
          <div class="carousel-item">
            <img src="img/imagen3.png" class="d-block w-100" alt="img3" height="530px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="list-group">
        <div class="list-group-item list-group-item-action" style="background-color:#4CAF50; color:#fff;">
          <div class="d-flex w-100 justify-content-between">
            <h5>Populares</h5>
          </div>
        </div>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">List group item heading</h6>
            <small>3 days ago</small>
          </div>
          <p class="mb-1" style="font-size: 14px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
         
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">List group item heading</h6>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1" style="font-size: 14px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
         
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">List group item heading</h6>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1" style="font-size: 14px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
          
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">List group item heading</h6>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1" style="font-size: 14px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
          
        </a>
        <a href="#" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h6 class="mb-1">List group item heading</h6>
            <small class="text-muted">3 days ago</small>
          </div>
          <p class="mb-1" style="font-size: 14px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
          
        </a>
      </div>
    </div>

  </div>
  <br>
    <hr>
      <h4 style="text-align:center">Edicion Marzo 2021</h4>
    <hr>

    <div class="row">

      <div class="col-md-6">
      <img src="img/imagen1.png" class="d-block w-100" alt="img1" height="300px">
      </div>

      <div class="col-md-6">
      <img src="img/imagen2.png" class="d-block w-100" alt="img1" height="300px">
      </div>

    </div>

    <br>

    <nav aria-label="Page navigation example" style="align-content: center">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  <br>
</div>
@endsection
