@extends('base')

@section('content')
<div class="row m-3">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
      
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src={{ asset("asset/imagen/imagen1.jpeg")}} class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src={{ asset("asset/imagen/imagen2.jpeg")}} class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src={{ asset("asset/imagen/imagen3.jpeg")}} class="d-block w-100 img-fluid" alt="...">
      </div>
    </div>
    
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="row m-3">
  <div class="col-lg-4 col-sm-6 col-12">
    <div class="card" style="width: 18rem;">
      <img src={{ asset("asset/imagen/imagen4.jpeg")}} class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-sm-6 col-12">
    <div class="card" style="width: 18rem;">
      <img src={{ asset("asset/imagen/imagen5.jpeg")}} class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-sm-6 col-12">
    <div class="card" style="width: 18rem;">
      <img src={{ asset("asset/imagen/imagen1.jpeg")}} class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
@endsection