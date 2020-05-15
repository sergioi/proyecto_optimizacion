<?php
include_once 'db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title>Sistema de Ventas</title>


</head>

<body>
    <div>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="index.php">EL Paso</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">salir</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div>
        <ul class="breadcrumb">
            <li class="active"><a href="index.php">Vendedor</a></li>
        </ul>
    </div>


    <!--Nombre Empresa-->
    <br>
    <div class="container text-center">
        <h1>Hamburguesas & Hot-Dogs "El Paso"</h1>
    </div>
    <br>

    <!--Table-->
    <div>
        <table class="table table-hover table-bordered shadow p-3 mb-5 bg-white rounded">
            <tr>
                <th>Disponible</th>
                <th>Producto</th>
                <th>Precio (individual) </th>
            </tr>

            <?php

   $res = $MySQLiconn->query("SELECT * FROM producto");
   while($row=$res->fetch_array())
   {
    ?>
            <tr>

                <td> <?php echo $row['stockActual']; ?> </td>
                <td> <?php echo $row['producto']; ?> </td>
                <td id="tot"> $ <?php echo $row['precioVenta']; ?> <input type="number" name="dato" id="numberdato">
                </td>
            </tr>
            <?php
   }
   ?>
        </table>
    </div>
    <!--Total-->
    <br>
    <div class="container text-right">
        <button class="btn btn-success" onclick="operac()">Calcular</button>
        Total: <input id="diner" type="text" value="50">
    </div>
    <br>
    <!--Boton-->
    <div class="container text-center">

        <button class="btn btn-success" onclick="efectivo()">Efectivo</button>
        <button class="btn btn-success" onclick="targeta()">Tarjeta</button>
    </div>
</body>
<script src="js/PagoScript.js"></script>
<script src="js/operacion.js"></script>

</html>