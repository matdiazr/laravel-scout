@php
$instagram = new \InstagramScraper\Instagram();
$medias = $instagram->getMedias('fotos_pietro', 3);
@endphp

@extends('base')

@section('content')
<div class="container">
  <div class="my-4 row">

    <div class="col-lg-6">
      <div id="carouselHome" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
          <li data-target="#carouselHome" data-slide-to="1"></li>
          <li data-target="#carouselHome" data-slide-to="2"></li>
        </ol>
          
        <div class="carousel-inner">
          @foreach ($medias as $item)
          <div class="carousel-item @if($loop->first) active @endif">
            <img src="<?php echo $item->getImageHighResolutionUrl() ?>" height="400" class="d-block mx-auto" alt="...">
          </div>
          @endforeach
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
      <h2 class="pt-3 text-center">ultimas actividades</h2>
    </div>

    <div class="col-lg-6">
      <div class="jumbotron bg-white pt-3">
        <h2>horario de actividades</h2>
        <p class="lead">Todo los sabados de 15:00 PM hasta las 18:00 PM</p>
        <a class="btn btn-primary btn-lg" href="{{ route('nosotros') }}" role="button">Más sobre nosotros</a>
      </div>
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
    <div class="row m-5">
    @foreach ($last_posts as $post)
      <div class="col-lg-4 col-sm-6 col-12 my-2">
        <div class="card" style="width: 18rem;">
          <a href="{{ route('noticias.detalle', $post) }}">
            <img src={{ asset("asset/imagen/post/$post->portada")}} class="card-img-top" alt="...">
            <div class="card-body">
              <ul class="nav p-0">
                @foreach ($post->categoria as $tipo)
                <li class="nav-item">
                  <p class="card-categoria"> {{ $tipo->nombre }}@if($loop->last)@else / @endif</p>
                </li>
                @endforeach
              </ul>
              <p class="card-text">{{ date('d-m-Y', strtotime($post->created_at ))}}</p>
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