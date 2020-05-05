<?php
include_once '../../db.php';
include_once 'crud2.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel = " stylesheet " href = " https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css " >
    <title>Administrador</title>
</head>

<body>
    <div>
        <a href="index.php">NUEVO PRODUCTO</a>
        <a href="user.php">NUEVO USER</a>
        <a href="loginAdmi.php">SALIR</a>
    </div>


    <!--Nombre Empresa-->
    <br>
    <div class="container text-center">
        <h1>Hamburguesa "El paso"</h1>
    </div>
    <br>

    <div class="container-fluid">
        <div>
            <h2 class="text-center">Nuevo User</h2>
        </div>


        <form method="post">

            <div class="form-group">
                <label class="control-label">Usuario:</label>
                <div class="col">
                    <input type="text" class="form-control" name="userrs" placeholder="Name"
                        value="<?php if (isset($_GET['editar'])) echo $getROW['username'];  ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Email:</label>
                <div class="col">
                    <input type="email" class="form-control" name="emailc" placeholder="exaple@mail.com" value="<?php
                                                                                                              if (isset($_GET['editar']))
                                                                                                                echo $getROW['email'];
                                                                                                              ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Contraseña:</label>
                <div class="col">
                    <input type="password" class="form-control" name="passwordr" placeholder="*********"
                        value="<?php if (isset($_GET['editar'])) echo $getROW['password'];  ?>" />
                </div>
            </div>

            <div class="form-group">
                <?php
        if (isset($_GET['editar'])) {
        ?>
                <div class="col-12">
                    <button type="submit" class="btn btn-success" name="actualizar">Actualizar</button>
                </div>
                <?php
        } else {
        ?>
                <div class="col-12">
                    <button type="submit" class="btn btn-success" name="guardar">Guardar</button>
                </div>
                <?php
        }
        ?>
            </div>
        </form>
    </div>


    <!--Table-->
    <div class="container-fluid">
        <table class="table table-hover table-bordered shadow p-3 mb-5 bg-white rounded">
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>email</th>
                <th>Contraseña</th>
            </tr>

            <?php

   $res = $MySQLiconn->query("SELECT * FROM user_admin");
   while($row=$res->fetch_array())
   {
    ?>
            <tr>
                <td> <?php echo $row['id_admin']; ?> </td>
                <td> <?php echo $row['username']; ?> </td>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['password']; ?> </td>
                <td>
                    <a href="?editar=<?php
                              echo $row['id_admin'];
                              ?>" onclick="return confirm('¿Deseas Editarlo ?'); ">

                        <span>Editar</span>

                    </a>

                    <a href="?eliminar=<?php echo $row['id_admin']; ?>"
                        onclick="return confirm('¿Seguro deseas eliminarlo?'); ">
                        <span>trash</span>
                    </a>
                </td>
            </tr>
            <?php
   }
   ?>
        </table>
    </div>


</body>

</html>