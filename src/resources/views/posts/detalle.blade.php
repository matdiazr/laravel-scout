@extends('base')

@section('content')
<div class="bg-white p-4">
  <div class="mb-3">
    <img src={{ asset("asset/imagen/imagen5.jpeg")}} class="img-fluid" alt="...">
  </div>

  <div>
    <h3>{{ $post->titulo }}</h3>
    <h4>{{ $post->bajada }}</h4>
    <div class="w-100 border"></div>
    <p>{{ $post->descripcion }}</p>
  </div>

</div>
@endsection
