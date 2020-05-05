<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title>Admistrador</title>
    <style>
    body {
        overflow: hidden;
    }
    </style>
</head>

<body>
    <div>
        <a href="../../index.php">Salir</a>
    </div>
    

    <br>
    <div class="container text-center">
        <h1>Inicio De Sesión</h1>
        <h5>Administrador</h5>
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
                            <input class="form-control" type="password" name="pass" placeholder="Contraseña" required>
                        </div>
                        <br>
                        <div class="form-button">
                            <button id="submit" type="submit" class="btn btn" id="submit"><a
                                    href="index.php">Iniciar Sesión</a></button>
                        </div>
                    </form>
                    <div class="page-links">
                        <a href="../../indexlogin.php" class="active">Iniciar sesión con otro usuario</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>