<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Formulario</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="..//index.php">EL Paso</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="..//index.php">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>


    <div>
        <figure>
            <section id="se2">
                <img src="imagenes/elpaso.jpg" alt="hamburguesa-sencilla" class="mx-auto d-block center-block"
                    style="width:10%">
        </figure>
    </div>

    <div class="container">
        <legend>Datos Generales</legend>
        <form action="../index.php">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input required type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="numero">Numero</label>
                <input maxlength="9" required type="number" class="form-control" placeholder="985 986 8762">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input required type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <input trequired type="text" class="form-control" style="padding: 20px;">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="container">
        <h1 style="color:black;"> Mapa</h1>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3743.32324809666!2d-88.25716437576098!3d20.245424451151983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f50fc19fcbb73cf%3A0x9c3ebfc32da84211!2sFelipe%20Carrillo%20Puerto%20-%20Valladolid%2C%20Tepich%2C%20Q.R.!5e0!3m2!1ses-419!2smx!4v1588705972113!5m2!1ses-419!2smx"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0">
        </iframe>
    </div>
    <div>
        <footer class="text-center">
            <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>
            <div class="pie">
                <strong>SIGUENOS EN</strong>
                <p><img src="imagenes/facebook.jpg" alt="facebook" width="5%"> Facebook</p>
            </div>
        </footer>
    </div>
</body>

</html>