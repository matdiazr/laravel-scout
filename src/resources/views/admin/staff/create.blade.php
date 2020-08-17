@extends('base')

@section('content')
<div class="container">
  <h2 class="m-4">Formulario: Staff</h2>

  @if (session('respuesta'))
    <div class="alert alert-success m-2">
      <p class="pl-2">{{ session('respuesta') }}</p>
    </div>  
  @endif

  <form action="" method="POST" enctype="multipart/form-data">
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
    <select name="curso" class="custom-select custom-select-md m-2" id="">
      <option value="ninguno">ninguno</option>
      <option value="basico">Básico</option>
      <option value="medio">Medio</option>
      <option value="avanzado">Avanzado</option>
      <option value="formador">Formador</option>
    </select>
    <select name="rama" class="custom-select custom-select-md m-2"  id="">
      <option value="indefinido">indefinido</option>
      <option value="lobatos">Lobatos</option>
      <option value="golondrinas">Golondrinas</option>
      <option value="tropa">Tropa</option>
      <option value="compañia">Compañia</option>
      <option value="pioneros">Pioneros</option>
      <option value="caminantes">Caminantes</option>
    </select>
    <input type="text" name="descripcion" placeholder="descripcion" class="form-control m-2" value="{{ old('descripcion') }}">
    <div class="custom-file m-2">
      <input type="file" class="custom-file-input" id="avatar" name="avatar">
      <label class="custom-file-label" for="customFile" data-browse="Elegir">Seleccionar Imagen</label>
    </div>
    <button class="btn btn-primary btn-block m-2" type="submit">Agregar</button>
  </form>
</div>

<div class="container my-5">
  <table class="table bg-white">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">MODIFICAR</th>
        <th scope="col">BORRAR</th>
        <th scope="col">ESTADO</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($all_staff as $staff)
      <tr>
        <th scope="row">{{ $staff->id }}</th>
        <td>{{ $staff->nombre }}</td>
        <td><a href="{{ route('staff.edit', $staff) }}" class="btn btn-warning btn-sm">Editar</a></td>
        <td>
          <form action="{{ route('staff.delete', $staff) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
        </form>
      </td>
      <td>
       <form action="{{ route('staff.toggle', $staff->id)}}" method="POST">
        @method('PUT')
        @csrf

        @if($staff->estado)
          <button type="submit" class="btn btn-success btn-sm">ACTIVO</button>
        @else
          <button type="submit" class="btn btn-danger btn-sm">INACTIVO</button>  
        @endif
      </td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="row justify-content-end">
<a href="{{ route('staff.exportar', true) }}" class="btn m-3 btn-success">Exportar Staffs</a>
<a href="{{ route('staff.exportar', false) }}" class="btn m-3 btn-success">Exportar Historico</a>
</div>
<div class="row justify-content-center">
  {{ $all_staff->links()}}
</div>
</div>
@endsection