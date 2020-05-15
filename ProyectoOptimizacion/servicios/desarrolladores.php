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
    <title>Desarrolladores</title>

</head>

<body>
    
    <div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="..//index.php">EL PASO</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="..//index.php">Inicio</a></li>
                        <li><a href="..//indexlogin.php">Login</a></li>
                        <li><a href="formulario.php">Contáctanos</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <h3 class="text-center">Desarrolladores</h3>
    <br>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Sergio</a></li>
        <li><a data-toggle="tab" href="#menu1">Geovani</a></li>
        <li><a data-toggle="tab" href="#menu2">Guadalupe</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div>
                <img src="imagenes/sergio.jpg" style="width:50%">
            </div>
            <h2>Sergio Coatl Pérez</h2>
            <h5>Edad: 23 años</h5>
            <h5>Puesto: Lider</h5>
            <h5>Correo Electronico:</h5>
            <h5>coatlperez.sergio@itsva.edu.mx</h5>
            <h5>Hobies:</h5>
            <p>Programación enfocada a la intelegencia artificial, leer noticas de la OMS.</p>

        </div>

        <div id="menu1" class="tab-pane fade">
            <div>
                <img src="imagenes/geovani.jpg" style="width:50%">
            </div>
            <h2>Geovani Alberto Tuz Poot</h2>
            <h5>Edad: 22 años</h5>
            <h5>Puesto: Desarrollador, Diseñador</h5>
            <h5>Correo Electronico:</h5>
            <h5>tuz.pootgeovani.abert@itsva.edu.mx</h5>
            <h5>Hobies:</h5>
            <p>Programación enfocada al diseño web y android. Mantenimiento de software libre</p>


        </div>

        <div id="menu2" class="tab-pane fade">
            <div>
                <img src="imagenes/jesus.jpg" style="width:50%">
            </div>

            <h2>Guadalupe De Jesús May Kauil</h2>
            <h5>Edad: 20 años</h5>
            <h5>Puesto: Desarrollador, Diseñador</h5>
            <h5>Correo Electronico:</h5>
            <h5>may.kauilguadalupe@itsva.edu.mx</h5>
            <h5>Hobies:</h5>
            <p>Programación enfocada al diseño web y viajar.</p>

        </div>
    </div>

    </div>

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