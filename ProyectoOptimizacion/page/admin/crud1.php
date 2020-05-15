<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardandoooooooooooooooooooo";
     $descipcion = $MySQLiconn->real_escape_string($_POST['desProd']);
     $productos = $MySQLiconn->real_escape_string($_POST['producto']);
     $precioCompra = $MySQLiconn->real_escape_string($_POST['preComp']);
     $precioVenta = $MySQLiconn->real_escape_string($_POST['preVen']);
     $stockActual = $MySQLiconn->real_escape_string($_POST['skoActual']);
     $stockMinimo = $MySQLiconn->real_escape_string($_POST['skoMini']);
     $stockMaximo = $MySQLiconn->real_escape_string($_POST['skoMax']);
     $estado = $MySQLiconn->real_escape_string($_POST['estProd']);
     $fechaVencimiento = $MySQLiconn->real_escape_string($_POST['fechVenc']);
     $ipcategoriass = $MySQLiconn->real_escape_string($_POST['catperte']);


  $SQL = $MySQLiconn->query("INSERT INTO producto (descripcion, producto, precioCompra, precioVenta, stockActual, stockMinimo, stockMaximo, estado, fechaVencimiento, idcategoria) VALUES('$descipcion','$producto','$precioCompra','$precioVenta','$stockActual','$stockMinimo','$stockMaximo','$estado','$fechaVencimiento','$ipcategoriass')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:index.php");
}

/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM producto WHERE idproducto=".$_GET['eliminar']);
 header("Location:index.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM producto WHERE idproducto=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query("UPDATE producto SET descripcion='".$_POST['desProd']."', precioCompra='".$_POST['preComp']."', precioVenta='".$_POST['preVen']."', stockActual='".$_POST['skoActual']."', stockMinimo='".$_POST['skoMini']."', stockMaximo='".$_POST['skoMax']."', estado='".$_POST['estProd']."',  fechaVencimiento='".$_POST['fechVenc']."' WHERE idproducto=".$_GET['editar']);
 header("Location:index.php");
}


?>