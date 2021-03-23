
<DOCTYPE html>
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
    <li><a href="index.php">Inicio</a></li>
    <li><a href="registrar.php">Registrar FDIR10</a></li>
    <li><a href="conocenos.php">Conocenos</a></li>
    <li><a href="contacto.php">Contacto</a></li>
	
	 
	<a href="indexEng.php">  <img src="imagenes/usa.png" id="Image" alt="ingles" align="top" border="0" style="width: 10 px; height: 20px;"  > </a>
	
	 
</ul>
</div>
</nav>
<?php
$host="localhost";
$user="root";
$passw="";
$conexion=mysql_connect($host,$user,$passw) or die('Ha fallado la conexion'.mysql_error());
$db="proyecto";
$base=mysql_select_db($db,$conexion)or die('Error al Seleccionar la Base de Datos:'.mysql_error());
require("conexion.php");

$result =mysql_query("SELECT NOMBREC, Matricula FROM alumnos");

echo "<table border='1'>
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
echo "</table>";

mysql_close($conexion);
?>
</html>