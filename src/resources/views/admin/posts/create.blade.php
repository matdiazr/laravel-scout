@extends('base')

@section('content')
<div class="container">
  <h2 class="mx-2 my-4">Formulario: Post</h2>
  <div class="row">

    @if (session('respuesta'))
      <div class="alert alert-success m-2">
        <p class="pl-2">{{ session('respuesta') }}</p>
      </div>  
    @endif

    <div class="col-lg-10">
      <form action="" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="titulo" class="form-control m-2" id="">
        <input type="text" name="bajada" placeholder="bajada" class="form-control m-2" id="">
        <select name="categoria" class="custom-select custom-select-md m-2">
          <option value="" disabled selected>Categoria</option>
          @foreach ($all_categoria as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nombre}}</option>
          @endforeach
        </select>
        <textarea name="descripcion" id="" cols="30" rows="10" class="col-lg-12 form-control m-2" placeholder="descripcion..."></textarea>
        <button class="btn btn-primary btn-block m-2" type="submit">Agregar</button>
      </form>
    </div>
    <div class="col-lg-2">
        <create-categoria />
    </div>
  </div>
</div>

<div class="container mb-3">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">TITULO</th>
        <th scope="col">MODIFICAR</th>
        <th scope="col">BORRAR</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($all_posts as $post)
      <tr>
        <th scope="row">{{ $post->id }}</th>
        <td>{{ $post->titulo }}</td>
        <td><a href="{{ route('post.edit', $post) }}" class="btn btn-warning btn-sm">Editar</a></td>
        <td>
        <form action="{{ route('post.delete', $post) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="row justify-content-center">
    {{ $all_posts->links() }}
  </div>
</div>
@endsection