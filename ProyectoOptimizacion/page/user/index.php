<?php
include_once 'crud.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../boostrap/css/bootstrap.min.css">
    <title>Sistema de Ventas</title>
</head>

<body>

    <!--Nombre Empresa-->
    <br>
    <div class="container text-center">
        <h1>Hamburguesa "El paso"</h1>
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
                <td > <?php echo $row['producto']; ?> </td>
                <td id="tot"> $ <?php echo $row['precioVenta']; ?> <input type="number" name="dato" id="numberdato"> </td>
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