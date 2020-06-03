@extends('base')

@section('content')
<form action="" class="col-lg-12">
 <div class="row">

       <div class="col-lg-6">
         <label class="col-lg-12" for="nombre">Nombre :</label>
         <input class="col-lg-12 mb-2" type="text" name="nombre" value="{{ $staff->nombre}}">
         <label class="col-lg-12" for="nombre">Rama :</label>
         <input class="col-lg-12 mb-2" type="text" name="nombre" value="{{ $staff->rama}}">
         <label class="col-lg-12" for="nombre">Curso :</label>
         <input class="col-lg-12 mb-2" type="text" name="nombre" value="{{ $staff->curso}}">
         <label class="col-lg-12" for="nombre">Edad :</label>
         <input class="col-lg-12 mb-2" type="text" name="nombre" value="{{ $staff->edad}}">
       </div>
       <div class="col-lg-6">
         <label class="col-lg-12" for="nombre">Descripcion :</label>
         <textarea class="col-lg-12" name="" id="" cols="30" rows="10">{{ $staff->descripcion}}</textarea>
       </div>
       <div class="col-lg-12 mt-3">
         <button class="btn btn-outline-secondary btn-lg btn-block">Actualizar</button>
       </div>
      </div>
    </form>
@endsection