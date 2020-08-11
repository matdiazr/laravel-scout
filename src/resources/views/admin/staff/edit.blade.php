@extends('base')

@section('content')
<div class="container my-3">
  @if (session('respuesta'))
    <div class="alert alert-success m-2">
      <p class="pl-2">{{ session('respuesta') }}</p>
    </div>  
  @endif

  <form action="{{ route('staff.update', $staff->id)}}" method="POST" class="col-lg-12">
    @method('PUT')
    @csrf

    <div class="row">
      <div class="col-lg-6">
        <label class="col-lg-12" for="nombre">Nombre :</label>
        <input class="col-lg-12 mb-2 form-control" type="text" name="nombre" value="{{ $staff->nombre}}">
        <label class="col-lg-12" for="edad">Edad :</label>
        <input class="col-lg-12 mb-2 form-control" type="text" name="edad" value="{{ $staff->edad}}">
        <label class="col-lg-12" for="curso">Curso :</label>
        <select name="curso" class="custom-select custom-select mb-2" id="">
          @foreach ($all_cursos as $curso)
            <option @if ($curso->id == $staff->curso->id) selected @endif value="{{ $curso->id }}">{{ $curso->nombre }}</option>
          @endforeach
        </select>
        <label class="col-lg-12" for="rama">Rama :</label>
        <select name="rama" class="custom-select custom-select mb-2" id="">
          @foreach ($all_ramas as $rama)
            <option @if ($rama->id == $staff->rama->id) selected @endif value="{{ $rama->id }}">{{ $rama->nombre }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-lg-6">
        <label class="col-lg-12" for="descripcion">Descripcion :</label>
        <textarea class="col-lg-12 form-control" name="descripcion" id="" cols="30" rows="10">{{ $staff->descripcion}}</textarea>
      </div>
      <div class="col-lg-12 mt-3">
        <button class="btn btn-outline-secondary btn-lg btn-block">Actualizar</button>
      </div>
    </div>
  </form>
</div>
@endsection