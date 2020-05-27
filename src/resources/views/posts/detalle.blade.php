@extends('base')

@section('content')
<h1>{{ $post->titulo }}</h1>
<p>{{ $post->descripcion }}</p>
@endsection
