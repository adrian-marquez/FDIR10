<?php
session_start();
include("conexion.php");
$Mati=$_REQUEST['Mati'];
$pass=$_REQUEST['pass'];
$consulta= "SELECT * FROM alumnos WHERE Matricula='$Mati' AND Password='$pass'";
$comprobar=mysql_query($consulta);
if($datos=mysql_fetch_row($comprobar))
{
	$_SESSION['Mati']=$datos[0];
    header("Location: bandeja.php");
}
else if ($mat=="admin" && $pass=="1234"){header("Location: Index.php");}
else {
    header("Location: admin.php");
 }
?>