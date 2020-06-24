<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Scout</title>
  <link rel="stylesheet" href={{ asset("asset/css/bootstrap.min.css")}} >
  <link rel="stylesheet" href={{ asset("asset/css/project/base.css")}} >
  {{-- cargar jquery antes que bootstrap cuando instalas vueJs --}}
  {{-- <script src= {{ asset("asset/js/jquery-3.5.1.slim.min.js")}} ></script> --}}
  {{-- cargar vue --}}
  <script src= {{ asset("js/app.js")}} defer></script>
  <script src= {{ asset("asset/js/bootstrap.min.js")}} ></script>



 
</head>

<body>
  {{-- cargar Vue --}}
  <div id="app">
    <header>
      <div class="container">
        <h2 class="display-4">Grupo Scout</h2>
      </div>
      <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="{{ route('noticias') }}">Noticias</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('portada') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('staff') }}">Staff</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ramas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('ramas', 'lobatos') }}">Lobatos</a>
                  <a class="dropdown-item" href="{{ route('ramas', 'golondrinas') }}">Golondrina</a>
                </div>
              </li>

              @Auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <a class="dropdown-item" href="{{ route('noticias.form') }}">Post</a>
                    <a class="dropdown-item" href="{{ route('staff.form') }}">Staff</a>
                  </div>
                </li>
              @endauth
            </ul>
            
            <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('filtrar.noticias') }}">
              @csrf
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search" name="filtro">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>

            <ul class="navbar-nav ml-4">
              @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                {{-- regristo para usuarios --}}
                {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif --}}
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
            </ul>
          </div>
      </div>  
    </header>

    {{-- <div class="container content-yield"> --}}
      @yield('content')
    {{-- </div> --}}
    <footer>
      <div class="container-fluid">
        <div class="row py-3">
          <div class="offset-1 col-lg-4">
            <h3>Redes Sociales</h3>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">instagram</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">facebook</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">twitter</a>
              </li>
            </ul>
            <h3>Develop in 2020</h3>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/matias.diazr/" target="_blank">Developer Matias</a></li>
              <li class="nav-item">
                <a class="nav-link" href="">Designer ...</a></li>
            </ul>
          </div>
          <div class="col-lg-7">
            <h3>encuentranos</h3>
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe width="600" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=puente%20alto&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              </div>
              {{-- <style>.mapouter{position:relative;text-align:right;height:250px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:600px;}</style> --}}
            </div>
          </div>
        </div>
      </div>
    </footer>
    {{-- cargar vue --}}
  </div>
</body>

<script src={{ asset("asset/js/bootstrap.bundle.min.js")}}></script>
<script src={{ asset("asset/js/popper.min.js")}}></script>
</html>