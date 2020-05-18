@extends('base')

@section('content')
  <h2>las ramas del escultimos</h2>
    @if (!empty($name))
      <h2>Rama:{{ $name }}</h2>
    @endif
@endsection