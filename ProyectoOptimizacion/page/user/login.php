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
</nav>

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