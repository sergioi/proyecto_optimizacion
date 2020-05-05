<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Galería</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="gallery-grid.css">


</head>
<body>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <div class="container-fluid">
        <div class="navbar-header">
            
            <a class="navbar-brand" href="../index.php">EL PASO</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php">Inicio</a></li>
            </ul>
        </div>
    </div>

    

<div class="container gallery-container" style="100px" >

    <h1>Galería</h1>

    
    <div class="tz-gallery">

        <div class="row">

             <div class="col-sm-6 col-md-6">
                <a class="lightbox" href="imagenes/elpaso.jpg" >
                    <img src="imagenes/elpaso.jpg" alt="Bridge"  style="float:left;width:400px;height:300px;">
                </a>
            </div>
           
            <div class="col-sm-6 col-md-6">
                <a class="lightbox" href="imagenes/especiales.jpg" >
                    <img src="imagenes/especiales.jpg" alt="Bridge"  style="float:left;width:400px;height:300px;">
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <a class="lightbox" href="imagenes/hamburguesas-casera.jpg"  >
                    <img src="imagenes/hamburguesas-casera.jpg" alt="Tunnel" style="float:left;width:400px;height:300px;">
                </a>
            </div>
            <div class="col-sm-6 col-md-6">
                <a class="lightbox" href="imagenes/hotdog.jpg" >
                    <img src="imagenes/hotdog.jpg" alt="Coast" style="float:left;width:400px;height:300px;">
                </a>
            </div>
            <div class="col-sm-6 col-md-6">
                <a class="lightbox" href="imagenes/hotdog1.jpg" >
                    <img src="imagenes/hotdog1.jpg" alt="Rails" style="float:left;width:400px;height:300px;">
                </a>
            </div>
            <div class="col-sm-6 col-md-6">
                <a class="lightbox" href="imagenes/burgerama-j.jpg" >
                    <img src="imagenes/burgerama-j.jpg" alt="Traffic" style="float:left;width:400px;height:300px;">
                </a>
            </div>
            <div class="col-sm-6 col-md-6">
                <a class="lightbox" href="imagenes/papas.png" >
                    <img src="imagenes/papas.png" alt="Rocks" style="float:left;width:300px;height:300px;">
                </a>
            </div>

            <div class="col-sm-6 col-md-6">
                <a class="lightbox" href="imagenes/burguer.jpeg" >
                    <img src="imagenes/burguer.jpeg" alt="Rails" style="float:left;width:400px;height:300px; ">
                </a>
            </div>
           
            
        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

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