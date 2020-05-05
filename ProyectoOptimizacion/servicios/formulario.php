<!DOCTYPE html>
<html lang="en">
<head>

<body>
<h3 class="text-center">Formulario</h3>  
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 

  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../index.php">EL PASO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./formulario.php">Formulario</a></li>
        </ul>
    </div>
  </div>
</nav>

<section id="se2">
    <figure>
    <img src="imagenes/elpaso.jpg" alt="hamburguesa-sencilla" class="mx-auto d-block center-block" style="width:10%">
        
    </figure>
    
    <h3>Escribenos</h3>
        <form>
            <fieldset style="text-align: left;">
            <legend>Datos generales:</legend>
            Nombres: <br>
            <input type="text" name="Nombres">
            <br>
           Telefono/Celular:<br>
            <input type="text" name="Telefono/Celular">
            <br>
            Correo electronico:<br>
            <input type="text" name="Correo">
            <br>
            <br>
            Tú mensaje: <br>
            <input type="text" name="Mensaje" style="padding: 20px;">
            <br>
            <input type="submit" value="Enviar">
            </fieldset>
            <h1 style="color:black;"> Mapa</h1>
            <iframe src="" width="400" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </form>
</section>
  

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