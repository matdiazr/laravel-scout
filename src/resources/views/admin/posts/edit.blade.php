@extends('base')

@section('content')
<div class="container my-3">
  @if (session('respuesta'))
    <div class="alert alert-success m-2">
      <p class="pl-2">{{ session('respuesta') }}</p>
    </div>  
  @endif

  <form action="{{ route('post.update', $post->id)}}" method="POST" class="col-lg-12">
    @method('PUT')
    @csrf

    <div class="row">
      <div class="col-lg-6">
        <label class="col-lg-12" for="titulo">Titulo :</label>
        <input class="col-lg-12 mb-2 form-control" type="text" name="titulo" value="{{ $post->titulo}}">
        <label class="col-lg-12" for="bajada">Bajada :</label>
        <input class="col-lg-12 mb-2 form-control" type="text" name="bajada" value="{{ $post->bajada}}">
        <label class="col-lg-12" for="tipo">Tipo :</label>
        <select name="tipo" class="custom-select custom-select mb-2" id="">
          <option value="{{ $post->tipo }}">{{ $post->tipo }}</option>
          <option value="scout">Scout</option>
          <option value="campamento">Campamento</option>
          <option value="deporte">Deporte</option>
          <option value="salud">Salud</option>
          <option value="criminal">Criminal</option>
        </select>
      </div>
      <div class="col-lg-6">
        <label class="col-lg-12" for="descripcion">Descripcion :</label>
        <textarea class="col-lg-12 form-control" name="descripcion" id="" cols="30" rows="10">{{ $post->descripcion}}</textarea>
      </div>
      <div class="col-lg-12 mt-3">
        <button class="btn btn-outline-secondary btn-lg btn-block">Actualizar</button>
      </div>
    </div>
  </form>
</div>
@endsection