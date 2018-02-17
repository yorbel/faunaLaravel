<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/probandoLaravel/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="http://localhost/probandoLaravel/public/css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="http://localhost/probandoLaravel/public/">Fauna Extincion</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/probandoLaravel/public/Nosotros">Nosotros</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/probandoLaravel/public/Contacto">Contactos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/probandoLaravel/public/Problematicas/">Problematicas</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://localhost/probandoLaravel/public/Voluntarios/">Voluntarios</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="text-white" style="background-image: url('http://localhost/probandoLaravel/public/img/fondo.jpg');">
      <div class="container text-center ">
        @yield('presentacion')
      </div>
    </header>

      @yield('contenido')

    <!-- Footer -->
    <footer class="py-5 bg-secondary">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Fauna Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="http://localhost/probandoLaravel/public/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/probandoLaravel/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/probandoLaravel/public/js/problematicas.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://localhost/probandoLaravel/public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="http://localhost/probandoLaravel/public/js/scrolling-nav.js"></script>

  

  </body>

</html>
