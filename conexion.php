<?php
$host="localhost";
$user="root";
$passw="root";
$con=mysql_connect($host,$user,$passw) or die('Ha fallado la conexion:');
$db="proyecto";
$base=mysql_select_db($db,$con) or die ('Error al seleccionar la base de datos:');
?>