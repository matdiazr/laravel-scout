@extends('base')

@section('content')
<div class="container">
  <div class="my-4 row justify-content-center">
    <div id="carouselHome" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
        <li data-target="#carouselHome" data-slide-to="1"></li>
        <li data-target="#carouselHome" data-slide-to="2"></li>
      </ol>
        
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src={{ asset("asset/imagen/imagen1.jpeg")}} class="d-block img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src={{ asset("asset/imagen/imagen2.jpeg")}} class="d-block img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src={{ asset("asset/imagen/imagen3.jpeg")}} class="d-block img-fluid" alt="...">
        </div>
      </div>
      
      <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

@if (count($last_posts) >= 1)
  <div class="container-fluid titulo-imagen-destacada">
    <div class="row my-5 justify-content-center">
        <h2 class="">noticias destacadas</h2>
    </div>
  </div>

  <div class="container">
    <div class="row m-3">
    @foreach ($last_posts as $post)
      <div class="col-lg-4 col-sm-6 col-12 my-2">
        <div class="card" style="width: 18rem;">
          <a href="{{ route('noticias.detalle', $post) }}">
            <img src={{ asset("asset/imagen/imagen$loop->index.jpeg")}} class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $post->titulo }}</h5>
          {{-- <p class="card-text">{{ $post->bajada }}</p> --}}
          {{-- <a href="{{ route('noticias.detalle', $post) }}" class="btn btn-primary">ver más</a> --}}
            </div>
          </a>
        </div>
      </div>
    @endforeach
    </div>
  </div>
@endif

@endsection