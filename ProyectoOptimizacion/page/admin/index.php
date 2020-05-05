<?php
include_once '../../db.php';
include_once 'crud1.php';

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
    </div>

    <!--Nombre Empresa-->
    <br>
    <div class="container text-center">
        <h1>Hamburguesa "El paso"</h1>
    </div>
    <br>

    <div class="container-fluid">
        <div>
            <h2 class="text-center">Nuevo producto</h2>
        </div>


        <form method="post">
            <div class="form-group">
                <label class="control-label">Producto:</label>
                <div class="control-label">
                    <input type="text" class="form-control text-uppercase" name="producto"
                        placeholder="Nombre de producto:"
                        value="<?php if (isset($_GET['editar'])) echo $getROW['producto'];  ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Descripcion:</label>
                <div class="control-label">
                    <input type="text" class="form-control text-uppercase" name="desProd" placeholder="Descripcion"
                        value="<?php
                                                                                                              if (isset($_GET['editar']))
                                                                                                                echo $getROW['descripcion'];
                                                                                                              ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Precio de compra:</label>
                <div class="col">
                    <input type="number" step="0.001" class="form-control text-uppercase" name="preComp"
                        placeholder="Precio de compra(decimal):"
                        value="<?php if (isset($_GET['editar'])) echo $getROW['precioCompra'];  ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Precio de venta:</label>
                <div class="col">
                    <input type="number" step="0.01" class="form-control text-uppercase" name="preVen"
                        placeholder="Precio de venta(decimal):"
                        value="<?php if (isset($_GET['editar'])) echo $getROW['precioVenta'];  ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Stock stockActual:</label>
                <div class="col">
                    <input type="number" class="form-control text-uppercase" name="skoActual"
                        placeholder="Stock stockActual(entero):"
                        value="<?php if (isset($_GET['editar'])) echo $getROW['stockActual'];  ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Stock Minimo:</label>
                <div class="col">
                    <input type="number" class="form-control text-uppercase" name="skoMini"
                        placeholder="Stock Minimo(entero):"
                        value="<?php if (isset($_GET['editar'])) echo $getROW['stockMinimo'];  ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Stock Maximo:</label>
                <div class="col">
                    <input type="number" class="form-control text-uppercase" name="skoMax"
                        placeholder="Stock Maximo(entero):"
                        value="<?php if (isset($_GET['editar'])) echo $getROW['stockMaximo'];  ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Estado:</label>
                <div class="col">
                    <input type="text" class="form-control text-uppercase" name="estProd" placeholder="Estado(M O B):"
                        value="<?php if (isset($_GET['editar'])) echo $getROW['estado'];  ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Fecha de vencimiento:</label>
                <div class="col">
                    <input type="date" class="form-control text-uppercase" name="fechVenc" placeholder="2019-02-01:"
                        value="<?php if (isset($_GET['editar'])) echo $getROW['fechaVencimiento'];  ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Categoria perteneciente:</label>
                <div class="col">
                    <input type="number" class="form-control text-uppercase" name="catperte"
                        placeholder="categoria a la que pertenece:"
                        value="<?php if (isset($_GET['editar'])) echo $getROW['idcategoria'];  ?>" />
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
                <th>Descripcion</th>
                <th>Producto</th>
                <th>Precio de compra</th>
                <th>Precio de venta</th>
                <th>Stock actual</th>
                <th>Stock Minimo</th>
                <th>Stock Maximo</th>
                <th>Estado</th>
                <th>Fecha de vencimiento</th>
                <th>Categoria perteneciente</th>
                <th>Acciones</th>
            </tr>

            <?php

   $res = $MySQLiconn->query("SELECT * FROM producto");
   while($row=$res->fetch_array())
   {
    ?>
            <tr>
                <td> <?php echo $row['idproducto']; ?> </td>
                <td> <?php echo $row['descripcion']; ?> </td>
                <td> <?php echo $row['producto']; ?></td>
                <td> $ <?php echo $row['precioCompra']; ?> </td>
                <td> $ <?php echo $row['precioVenta']; ?> </td>
                <td> <?php echo $row['stockActual']; ?> </td>
                <td> <?php echo $row['stockMinimo']; ?> </td>
                <td> <?php echo $row['stockMaximo']; ?> </td>
                <td> <?php echo $row['estado']; ?> </td>
                <td> <?php echo $row['fechaVencimiento']; ?> </td>
                <td> <?php echo $row['idcategoria']; ?> </td>
                <td>
                    <a href="?editar=<?php
                              echo $row['idproducto'];
                              ?>" onclick="return confirm('¿Deseas Editarlo ?'); ">

                        <span>Editar</span>

                    </a>

                    <a href="?eliminar=<?php echo $row['idproducto']; ?>"
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