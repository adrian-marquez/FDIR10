
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="estilos/estilo.css" />
<body>
<div id="todo">
<div id="logo">
	
	</div>

	<img src="imagenes/logo02.png" title="creado por Oscar F."  >

	
<header id="cabecera"><h1>Ardilla systems</h1></header>

<nav>
<div id="menu">
<ul>
   
	
	 
	</div>
</nav></div>
</nav>
	
	 
</ul>
</div>
</nav>


<?php
$host="localhost";
$user="root";
$passw="root";
$conexion=mysql_connect($host,$user,$passw) or die('Ha fallado la conexion'.mysql_error());
$db="proyecto";
$base=mysql_select_db($db,$conexion)or die('Error al Seleccionar la Base de Datos:'.mysql_error());
require("conexion.php");

$result =mysql_query("SELECT NOMBREC, Matricula FROM alumnos");

echo "<table border='1' >
<tr>
<th>Matricula</th>
<th>Nombre</th>
</tr>";

while($row = mysql_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" .$row['Matricula'] . "</td>";
  echo "<td>" .$row['NOMBREC'] . "</td>";
  echo "</tr>";
}
echo "</table><br><br><br><br><br><br>";
mysql_close($conexion);

?>

<?php
echo "<form action='eliminar.php' method='POST' >
echo <input type='text' name='Mati'>
echo </form>";
?>





</html>