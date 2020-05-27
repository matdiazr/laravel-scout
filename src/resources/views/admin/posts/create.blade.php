@extends('base')

@section('content')
<form action="" method="POST">
  @csrf
  <input type="text" name="titulo" placeholder="titulo" class="form-control" id="">
  <input type="text" name="descripcion" placeholder="descripcion" class="form-control" id="">
  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection