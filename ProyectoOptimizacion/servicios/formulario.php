<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Formulario</title>
</head>

<body>
    <h3 class="text-center">Formulario</h3>
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
                <li><a href="../index.php">Inicio</a></li>
            </ul>
        </div>
    </div>



    <section id="se2">
        <figure>
            <img src="imagenes/elpaso.jpg" alt="hamburguesa-sencilla" class="mx-auto d-block center-block"
                style="width:10%">

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

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3743.32324809666!2d-88.25716437576098!3d20.245424451151983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f50fc19fcbb73cf%3A0x9c3ebfc32da84211!2sFelipe%20Carrillo%20Puerto%20-%20Valladolid%2C%20Tepich%2C%20Q.R.!5e0!3m2!1ses-419!2smx!4v1588705972113!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
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