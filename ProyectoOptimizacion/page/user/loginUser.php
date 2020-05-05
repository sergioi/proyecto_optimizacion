<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vendedor</title>
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
      <a class="navbar-brand" href="../../index.php">EL PASO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../../index.php">Inicio</a></li>
        </ul>
    </div>
  </div>

    <style>
        body {
            overflow: hidden;
        }
    </style>
</head>

<body>

    <br>
    <div class="container text-center">
        <h1>Login sesion</h1>
        <h5>Vendedor</h5>
    </div>
    <br>
    <div class="container text-center">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <form role="form" name="login" action="" method="post">
                        <div>
                            <input class="form-control" type="text" name="user" placeholder="Usuario" required>
                        </div>
                        <br>
                        <div>
                            <input class="form-control" type="password" name="pass" placeholder="Contraseña"
                                required>
                        </div>
                        <br>
                        <div class="form-button">
                            <button id="submit" type="submit" class="btn btn" id="submit"><a href="index.php">sesion</a></button>
                        </div>
                    </form>
                    <div class="page-links">
                        <a href="../indexlogin.php" class="active">Iniciar con otro usuario</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>
