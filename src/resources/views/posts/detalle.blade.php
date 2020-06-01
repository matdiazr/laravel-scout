@extends('base')

@section('content')
<div class="row bg-white p-4">
  <div class="col-lg-12 mb-3 ">
    <img src={{ asset("asset/imagen/imagen0.jpeg")}}  class="mx-auto img-fluid" alt="...">
  </div>

  <div class="col-lg-8">
    <h3>{{ $post->titulo }}</h3>
    <h4>{{ $post->bajada }}</h4>
    <div class="w-100 border"></div>
    <p>{{ $post->descripcion }}</p>
  </div>

</div>
@endsection
