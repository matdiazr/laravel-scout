@extends('base')

@section('content')
<div class="container">
  <div class="row my-4">
    <div class="col-lg-12">
      <iframe class="w-100" height="500" src="https://www.youtube.com/embed/DtRwgGGxYtU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>

<div class="container my-5">
  <h3 class="text-center display-4 my-5">Nuestros colores</h3>
  <div class="row nosotros-colores justify-content-around">
    <div class="pt-3 col-lg-3 w-50 contenedor-color text-center">
      <span class="color1 mb-4"></span>
      <p>color negro</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a libero a libero gravida eleifend sed id orci. Maecenas vitae egestas tortor, nec porta ligula. Fusce gravida ac turpis sit amet interdum. Aliquam erat volutpat. Praesent vitae lorem in tellus aliquam ultricies. Aliquam erat volutpat.</p>
    </div>
    <div class="pt-3 col-lg-3 contenedor-color text-center">
      <span class="color2 mb-4"></span>
      <p>color dorado</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a libero a libero gravida eleifend sed id orci. Maecenas vitae egestas tortor, nec porta ligula. Fusce gravida ac turpis sit amet interdum. Aliquam erat volutpat.</p>
    </div>
    <div class="pt-3 col-lg-3 contenedor-color text-center">
      <span class="color3 mb-4"></span>
      <p>color gris</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a libero a libero gravida eleifend sed id orci. Maecenas vitae egestas tortor, nec porta ligula</p>
    </div>
  </div>
</div>

<div class="container-fluid titulo-imagen-destacada">
  <h2 class="my-5 text-center">Los inicios</h2>
</div>

<div class="container my-5">
  <div class="row my-5 py-3 bg-white">
    <div class="col-lg-4">
      <img src="{{ asset('asset/imagen/imagen4.jpeg')}}" class="card-img-top" alt="...">
    </div>
    <div class="col-lg-8 d-flex align-items-center">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a libero a libero gravida eleifend sed id orci. Maecenas vitae egestas tortor, nec porta ligula. Fusce gravida ac turpis sit amet interdum. Aliquam erat volutpat. Praesent vitae lorem in tellus aliquam ultricies. Aliquam erat volutpat. Duis rhoncus tortor ut urna varius, eget iaculis nunc euismod. Aenean venenatis rhoncus felis non blandit. Proin in suscipit massa. Proin tincidunt odio ultrices rutrum aliquet. Ut sed dignissim erat. Proin egestas sem risus, quis porta arcu convallis sit amet. In hac habitasse platea dictumst. Suspendisse pretium mollis velit, ac dapibus enim aliquet eget.</p>
    </div>
  </div>
  <div class="row my-4 py-3 bg-white">
    <div class="col-lg-8 d-flex align-items-center">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a libero a libero gravida eleifend sed id orci. Maecenas vitae egestas tortor, nec porta ligula. Fusce gravida ac turpis sit amet interdum. Aliquam erat volutpat. Praesent vitae lorem in tellus aliquam ultricies. Aliquam erat volutpat. Duis rhoncus tortor ut urna varius, eget iaculis nunc euismod. Aenean venenatis rhoncus felis non blandit. Proin in suscipit massa. Proin tincidunt odio ultrices rutrum aliquet. Ut sed dignissim erat. Proin egestas sem risus, quis porta arcu convallis sit amet. In hac habitasse platea dictumst. Suspendisse pretium mollis velit, ac dapibus enim aliquet eget.</p>
    </div>
    <div class="col-lg-4">
      <img src="{{ asset('asset/imagen/imagen4.jpeg')}}" class="card-img-top" alt="...">
    </div>
  </div>
</div>
@endsection