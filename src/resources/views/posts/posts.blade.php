@extends('base')

@section('content')
<div class="container my-3">
  <div class="row">
    <div class="col-lg-12 justify-content-center my-3 menu-tipo">
      <ul class="nav justify-content-center nav-categoria">
        @foreach ($all_category as $category)
        <li class="nav-item filtro-categoria">
          <a class="nav-link @if($tipoNoticia == $category->nombre) active @endif" href="{{ route('filtrar.tipo', $category->nombre) }}">{{ $category->nombre }}</a>
        </li>
        @endforeach
      </ul>
    </div>  

    <div class="w-100 border mb-5"></div>

    @if ($respuesta)
        {{ $respuesta }}
    @endif

    @foreach ($all_posts as $post)
    <div class="col-lg-4 col-sm-6 col-12 mb-3">
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
            {{-- <a href="{{ route('noticias.detalle', $post) }}" class="btn btn-primary">Ver Más</a> --}}
          </div>
        </a>
      </div>
    </div>
    @endforeach
    <div class="w-100 border my-5"></div>
  </div>

  <div class="row justify-content-center mb-3">
    {{ $all_posts->links() }}
  </div>

</div>
@endsection