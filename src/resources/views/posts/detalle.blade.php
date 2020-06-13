@extends('base')

@section('content')
<div class="container">
  <div class="row bg-white p-4">
    <div class="offset-lg-2 col-lg-8 mb-3">
      <img src={{ asset("asset/imagen/imagen0.jpeg")}} width="600" class="img-fluid" alt="...">
    </div>

    <div class="offset-lg-2 col-lg-8">
      <h3>{{ $post->titulo }}</h3>
      <h5>{{ $post->created_at }}</h5>
      <div class="w-100 border my-3"></div>
      <h4>{{ $post->bajada }}</h4>
      <div class="w-100 border my-3"></div>
      <p>{{ $post->descripcion }}</p>
    </div>
  </div>
</div>
@endsection
