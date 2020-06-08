@extends('base')

@section('content')
<div class="container mt-3">
  <div class="row">

    @foreach ($all_posts as $post)
    <div class="col-lg-4 col-sm-6 col-12 mb-3">
      <div class="card" style="width: 18rem;">
        <a href="{{ route('noticias.detalle', $post) }}">
          <img src={{ asset("asset/imagen/imagen0.jpeg")}} class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $post->titulo }}</h5>
          {{-- <p class="card-text">{{ $post->bajada }}</p> --}}
            {{-- <a href="{{ route('noticias.detalle', $post) }}" class="btn btn-primary">Ver Más</a> --}}
          </div>
        </a>
      </div>
    </div>
    @endforeach

  </div>
</div>
@endsection