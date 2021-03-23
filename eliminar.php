<?

$host="localhost";
$user="root";
$passw="root";
$conexion=mysql_connect($host,$user,$passw) or die('Ha fallado la conexion'.mysql_error());
$db="proyecto";
$base=mysql_select_db($db,$conexion)or die('Error al Seleccionar la Base de Datos:'.mysql_error());
require("conexion.php");


$mati=$_REQUEST['mati'];

$consulta="DELETE FROM alumnos WHERE Matricula='$Mati'";
mysql_query($consulta,$conexion);
mysql_close();
?>



