<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title>Login</title>
    <style>
    body {
        overflow: hidden;
    }
    </style>
</head>

<body>

    <div>
        <ul class="breadcrumb">
            <li><a href="../../index.php">Home</a></li>
            <li class="active"> / login</li>
        </ul>
    </div>

    <br>
    <div class="container text-center">
        <h1>Inicio De Sesión</h1>
        <h5>Administrador</h5>
    </div>
    <br>
    <div class="container text-center">
        <form role="form" name="login" action="index.php" method="post">
            <input class="form-control" type="email" name="email" placeholder="Email" maxlength="" required>
            <br>
            <div class="input-group">
                <input ID="txtPassword" type="Password" Class="form-control" name="password" placeholder="Contraseña"
                    maxlength="" required>
                <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span
                        class="fa fa-eye-slash icon"></span> </button>
            </div>
            <br>
            <div class="form-button">
                <button id="submit" type="submit" class="btn btn-success">Acceder</button>
            </div>
        </form>

    </div>


</body>
<script src="../js/View.js"></script>
</html>