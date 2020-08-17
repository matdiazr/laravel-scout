@extends('base')

@section('content')
<div class="container">
  <h2 class="my-4 mx-2">Formulario: Post</h2>

  @if (session('respuesta'))
  <div class="alert alert-success m-2">
    <p class="pl-2">{{ session('respuesta') }}</p>
  </div>  
  @endif

  <form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="titulo" placeholder="titulo" class="form-control m-2" id="">
    <div class="custom-file m-2">
      <input type="file" class="custom-file-input" id="portada" name="portada">
      <label class="custom-file-label" for="customFile" data-browse="Elegir">Seleccionar Imagen</label>
    </div>
    <input type="text" name="bajada" placeholder="bajada" class="form-control m-2" id="">
    <div class="row">

      <div class="col-lg-11">
        <select id="categoria" name="categoria[]" class="custom-select custom-select-md m-2" multiple>
          <option value="" disabled selected>Categorias</option>
          @foreach ($all_categoria as $categoria)
          <option value="{{ $categoria->id }}">{{ $categoria->nombre}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-lg-1">
        <create-categoria />
      </div>
    </div>
    <textarea name="descripcion" id="" cols="30" rows="10" class="col-lg-12 form-control m-2" placeholder="descripcion..."></textarea>
    <button class="btn btn-primary btn-block m-2" type="submit">Agregar</button>
  </form>
</div>

<div class="container my-5">
  <table class="table bg-white m-2">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">TITULO</th>
        <th scope="col">MODIFICAR</th>
        <th scope="col">BORRAR</th>
        <th scope="col">ESTADO</th>
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
        <td>
          <form action="{{ route('post.toggle', $post->id)}}" method="POST">
            @method('PUT')
            @csrf

            @if($post->estado)
              <button type="submit" class="btn btn-success btn-sm">ACTIVO</button>
            @else
              <button type="submit" class="btn btn-danger btn-sm">INACTIVO</button>  
            @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="row justify-content-center mt-5">
    {{ $all_posts->links() }}
  </div>
</div>
@endsection