
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
  <title>Roll And Rolls | Delivery</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about">Acerca de</a>
            <a href="#event">Promo del dia</a>
            <a href="#menu-list">Menu</a>
            <a href="#contact">Horarios y contactos</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">
              <center><img src="img/logo.png" class="img-responsive"></center>
            </h1>

            <h2>El mejor sushi puesto en casa.</h2>
            <p>¡Especializado en cocina Japonesa!!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!--VA LO DE LAS OTRAS PAGINAS -->
 
  @yield('contenido')
  <!--VA LO DE LAS OTRAS PAGINAS -->
  
  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Roll and Rolls</h4>
            <address>San Pablo 2002<br>Santiago Centro</address>
            <div class="social-list">
              <a href="https://www.instagram.com/rollandrolls.sushi/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href="https://www.facebook.com/Roll-and-rolls-109373283965522/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              © Tema de Roll And Rolls. Todos los Derechos Reservados.
              <div class="credits">
                
                Diseñado y Programado por: <a href="gustavoperezportafolio.com">Gustavo Perez</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mixitup.min.js"></script>
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

  <script src="{{ mix('js/app.js') }}" defer></script>
  
  @yield('menuvista')

</body>

</html>
