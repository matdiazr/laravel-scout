@extends('base')

@section('content')
<div class="container">
  <div class="row bg-white p-4">
    <div class="offset-lg-1 col-lg-7 mb-3">
      <img src={{ asset("asset/imagen/imagen0.jpeg")}} width="600" class="img-fluid" alt="...">
    </div>
    
    <div class="col-lg-4 ">
      <h2>Relacionadas:<br>{{ $post->tipo }}</h2>
      <div class="bg-secondary">
        card
      </div>
    </div>

    <div class="offset-lg-1 col-lg-7">
      <h2>{{ $post->titulo }}</h2>
      <h5>{{ $post->created_at }} / {{ $post->autor }}</h5>
      <div class="w-100 border my-3"></div>
      <h4>{{ $post->bajada }}</h4>
      <div class="w-100 border my-3"></div>
      <p>{{ $post->descripcion }}</p>
    </div>

  </div>
</div>
@endsection
