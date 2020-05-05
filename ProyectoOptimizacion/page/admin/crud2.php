<?php

include_once '../../db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
     echo "Guardandoooooooooooooooooooo";
     $User = $MySQLiconn->real_escape_string($_POST['userrs']);
     $Mail = $MySQLiconn->real_escape_string($_POST['emailc']);
     $Passw = $MySQLiconn->real_escape_string($_POST['passwordr']);


  $SQL = $MySQLiconn->query("INSERT INTO user_admin ( username , email, password )VALUES('$User', '$Mail', '$Passw')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:user.php");
}
/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM user_admin  WHERE id_admin=".$_GET['eliminar']);
 header("Location:user.php");
}
/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM user_admin  WHERE id_admin=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query("UPDATE user_admin SET username='".$_POST['userrs']."', email='".$_POST['emailc']."',  password='".$_POST['passwordr']."' WHERE id_admin=".$_GET['editar']);
 header("Location:user.php");
}


?>