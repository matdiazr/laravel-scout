@extends('base')

@section('content')
<h1>{{ $post->titulo }}</h1>
<h2>{{ $post->bajada }}</h2>
<p>{{ $post->descripcion }}</p>
@endsection
