<?php
include_once '../db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../page/user/boostrap/css/bootstrap.min.css">
    <title>Sistema de Ventas</title>
</head>

<body>

    <!--Nombre Empresa-->
    <br>
    <div class="container text-center">
        <h1>Usuario</h1>
    </div>
    <br>
    <br>
    <div>
        <div>
            <h6>Nuevo usuario</h6>
            <input type="text">
            <input type="text">
        </div>
        <br>


        <h6>Lista de usuarios</h6>

    </div>

    <!--Table-->
    <div>
        <table class="table table-hover table-bordered shadow p-3 mb-5 bg-white rounded">
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Email</th>
            </tr>

            <?php

   $res = $MySQLiconn->query("SELECT * FROM user_admin");
   while($row=$res->fetch_array())
   {
    ?>
            <tr>

                <td> <?php echo $row['id_admin']; ?> </td>
                <td> <?php echo $row['username']; ?> </td>
                <td> $ <?php echo $row['email']; ?> </td>
            </tr>
            <?php
   }
   ?>
        </table>
    </div>

</html>