@extends('base')

@section('content')
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
         <input class="col-lg-12 mb-2" type="text" name="nombre" value="{{ $staff->nombre}}">
         <label class="col-lg-12" for="nombre">Edad :</label>
         <input class="col-lg-12 mb-2" type="text" name="edad" value="{{ $staff->edad}}">
         <label class="col-lg-12" for="nombre">Curso :</label>
         <select name="curso" class="custom-select custom-select mb-2" id="">
           <option value="{{ $staff->curso }}">{{ $staff->curso }}</option>
           <option value="ninguno">Ninguno</option>
           <option value="basico">Básico</option>
           <option value="medio">Medio</option>
           <option value="avanzado">Avanzado</option>
           <option value="formador">Formador</option>
          </select>
          <label class="col-lg-12" for="nombre">Rama :</label>
          <select name="rama" class="custom-select custom-select mb-2" id="">
          <option value="{{ $staff->rama }}">{{ $staff->rama }}</option>
            <option value="indefinido">Indefinido</option>
            <option value="lobatos">Lobatos</option>
            <option value="golondrinas">Golondrinas</option>
            <option value="tropa">Tropa</option>
            <option value="compañia">Compañia</option>
            <option value="pioneros">Pioneros</option>
            <option value="caminantes">Caminantes</option>
           </select>
       </div>
       <div class="col-lg-6">
         <label class="col-lg-12" for="descripcion">Descripcion :</label>
         <textarea class="col-lg-12" name="descripcion" id="" cols="30" rows="10">{{ $staff->descripcion}}</textarea>
       </div>
       <div class="col-lg-12 mt-3">
         <button class="btn btn-outline-secondary btn-lg btn-block">Actualizar</button>
       </div>
      </div>
    </form>
@endsection