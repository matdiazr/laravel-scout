@extends('base')

@section('content')
<div>
  @if (session('respuesta'))
    <div class="aler alert-primary m-2">
      <p class="pl-2">{{ session('respuesta') }}</p>
    </div>  
  @endif

  <form action="" method="POST">
    @csrf
               
    @error('nombre')
    <div class="alert alert-danger alert-dismissible fade show m-2" role="alert">
      <p class="pl-2">el campo Nombre es requerido</p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>  
    @enderror

    <input type="text" name="nombre" placeholder="nombre" class="form-control m-2" value="{{ old('nombre') }}">
    <input type="text" name="edad" placeholder="edad" class="form-control m-2" value="{{ old('edad') }}">
    <input type="text" name="curso" placeholder="curso" class="form-control m-2" value="{{ old('curso') }}">
    <input type="text" name="descripcion" placeholder="descripcion" class="form-control m-2" value="{{ old('descripcion') }}">
    <button class="btn btn-primary btn-block m-2" type="submit">Agregar</button>
  </form>
</div>

<div class="mb-3">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">EDITAR</th>
        <th scope="col">BORRAR</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($all_staff as $staff)
      <tr>
        <th scope="row">{{ $staff->id }}</th>
        <td>{{ $staff->nombre }}</td>
        <td>actualizar</td>
        <td>borrar</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection