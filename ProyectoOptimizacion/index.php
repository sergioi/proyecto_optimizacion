<?php
include_once 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>El Paso</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
 
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
 


  </style>
</head>
<body>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">EL PASO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="page/user/loginUser.php">Vendedor</a></li>
        <li><a href="page/admin/loginAdmi.php">Administrador</a></li>
        <li><a href="#contact">Contáctanos</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Más
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#vision">Visión</a></li>
            <li><a href="#mision">Misión</a></li>
            <li><a href="#objetivos">Objetivos</a></li>
            <li><a href="servicios/desarrolladores.php">Desarrolladores</a></li>
            <li><a href="servicios/formulario.php">Formulario</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imagenes/elpaso.jpg" alt="El Paso" class="mx-auto d-block center-block" style="width:50%">
        <div class="carousel-caption">
          <h3>Empresa "El Paso"</h3>
          <p>Laborando desde el 2015.</p>
        </div>      
      </div>

      <div class="item">
        <img src="imagenes/hamburguesa-sencilla.jpg" alt="hamburguesa-sencilla" class="mx-auto d-block center-block" style="width:50%">
        <div class="carousel-caption">
          <h3>Hamburguesa Sencilla</h3>
          <p>Exquisito sabor a un súper precio.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="imagenes/hotdogs.jpg" alt="hotdogs"class="mx-auto d-block center-block" style="width:50%">
        <div class="carousel-caption">
          <h3>Hot-Dogs</h3>
          <p>Deiciosos y económicos, dale un gusto a tu paladar.</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  <div id="vision" class="container text-center">
  <h3>Visión</h3>
  <p>Ser una empresa, con varias sucursales distribuidas en diferentes ciudades que genera empleos para estudiantes y/o personas necesitadas</p>
  <br>
</div>

  <div id="mision" class="container text-center">
  <h3>Misión</h3>
  <p>Preparar alimentos de forma casera, rápida y economica para ayudar a la economia local de todo lo que esta a nuestro al rededor.</p>
  <br>
</div>


<div id="objetivos" class="container text-center">
  <h3>Objetivos</h3>
  <p>Incoporarse al sector publico como una empresa productora de alimentos consumidora de ingredientes locales.</p>
  <br>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contáctanos</h3>
  <div class="row">
    <div class="col-md-4">
      
      <p><span class="glyphicon glyphicon-map-marker"></span>Tepich, QROO, México</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +52 9842056301</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: elpaso@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Envíar</button>
        </div>
      </div>
    </div>
  </div>
  <br>

  <footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <div class="pie">
        <strong>SIGUENOS EN</strong>
        <p><img src="imagenes/facebook.jpg" alt="facebook" width="5%"> Facebook</p>
        </div>
</footer>

</body>
</html>