<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Base</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <header>
    <div>
      <h1>Grupo Scout</h1>
      <h2>Pietro bonilli</h2>
    </div>
    <div>
      <nav>
        <ul>
          <li>
            <a href="posts">Noticias</a>
          </li>
          <li>Quienes somos</li>
          <li>Equipo de dirigentes</li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="container">
    @yield('content')
  </div>
  <footer>
    <h2>Developer: Matias</h2>
  </footer>
</body>

<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
</html>