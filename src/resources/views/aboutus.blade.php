@extends('base')

@section('content')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-12">
      <iframe class="w-100" height="600" src="https://www.youtube.com/embed/DtRwgGGxYtU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>

  <div class="my-3">
    <h3 class="text-center">Nuestros colores</h3>
    <div class="row  nosotros-colores">
      <div class="col-lg-4">
        <div class="color1"></div>
        <p>color negro</p>
      </div>
      <div class="col-lg-4">
        <span class="color2"></span>
        <p>color dorado</p>
      </div>
      <div class="col-lg-4">
        <span class="color3"></span>
        <p>color gris</p>
      </div>
    </div>
  </div>

  <div class="row my-3">
    <div class="col-lg-4">
      <img src={{ asset("asset/imagen/imagen4.jpeg")}} class="card-img-top" alt="...">
    </div>
    <div class="col-lg-8">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a libero a libero gravida eleifend sed id orci. Maecenas vitae egestas tortor, nec porta ligula. Fusce gravida ac turpis sit amet interdum. Aliquam erat volutpat. Praesent vitae lorem in tellus aliquam ultricies. Aliquam erat volutpat. Duis rhoncus tortor ut urna varius, eget iaculis nunc euismod. Aenean venenatis rhoncus felis non blandit. Proin in suscipit massa. Proin tincidunt odio ultrices rutrum aliquet. Ut sed dignissim erat. Proin egestas sem risus, quis porta arcu convallis sit amet. In hac habitasse platea dictumst. Suspendisse pretium mollis velit, ac dapibus enim aliquet eget.</p>
    </div>
    <div class="col-lg-8">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a libero a libero gravida eleifend sed id orci. Maecenas vitae egestas tortor, nec porta ligula. Fusce gravida ac turpis sit amet interdum. Aliquam erat volutpat. Praesent vitae lorem in tellus aliquam ultricies. Aliquam erat volutpat. Duis rhoncus tortor ut urna varius, eget iaculis nunc euismod. Aenean venenatis rhoncus felis non blandit. Proin in suscipit massa. Proin tincidunt odio ultrices rutrum aliquet. Ut sed dignissim erat. Proin egestas sem risus, quis porta arcu convallis sit amet. In hac habitasse platea dictumst. Suspendisse pretium mollis velit, ac dapibus enim aliquet eget.</p>
    </div>
    <div class="col-lg-4">
      <img src={{ asset("asset/imagen/imagen4.jpeg")}} class="card-img-top" alt="...">
    </div>
  </div>

</div>
@endsection