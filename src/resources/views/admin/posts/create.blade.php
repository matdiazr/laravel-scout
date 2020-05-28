@extends('base')

@section('content')
<div>
  @if (session('respuesta'))
    <div class="aler alert-success">
      <h2>{{ session('respuesta') }}</h2>
    </div>  
  @endif

  <form action="" method="POST">
    @csrf
    <input type="text" name="titulo" placeholder="titulo" class="form-control m-2" id="">
    <input type="text" name="bajada" placeholder="bajada" class="form-control m-2" id="">
    <input type="text" name="descripcion" placeholder="descripcion" class="form-control m-2" id="">
    <button class="btn btn-primary btn-block m-2" type="submit">Agregar</button>
  </form>
</div>

<div class="mb-3">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">TITULO</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($all_posts as $post)
      <tr>
        <th scope="row">{{ $post->id }}</th>
        <td>{{ $post->titulo }}</td>
        <td>actualizar</td>
        <td>borrar</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection