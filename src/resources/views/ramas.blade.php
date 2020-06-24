@extends('base')

@section('content')
  <h2>las ramas del escultimos(proximamente en VueJ contenido reactivo)</h2>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ramas', 'lobatos') }}">Lobatos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ramas', 'golondrinas') }}">Golondrinas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ramas', 'scouts') }}">Scouts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ramas', 'guias') }}">Guias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ramas', 'pioneros') }}">Pioneros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ramas', 'caminantes') }}">Caminantes</a>
        </li>
      </ul>
  </nav>

    @if (!empty($name))
      <h2>Sección sin diseño</h2>
      <h1>Rama:{{ $name }}</h1>
    @endif

  <div class="container">
    @switch($name)
        @case('lobatos')
            <create-categoria />
            @break
        @case('golondrinas')
            
            @break
        @default
            
    @endswitch
  </div>
@endsection