<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos/estilo.css" />
<title>Inicio</title>
</head>
<body>
<div id="todo">

<header id="cabecera"><h1>Universidad Tecnologica de Ciudad Juarez</h1></header>

<nav>
<div id="menu">
<ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="registrar.php">Registrarse</a></li>
    <li><a href="nosotros.php">Conocenos</a></li>
    <li><a href="contacto.php">Contacto</a></li>
</ul>
</div>
</nav>

<section id="seccion">
<h2>Sesion Finalizada</h2>
<br />
<figure>
<img src="imagenes/logoutcj.png" />
</figure>
<br />
<h1> <font  color="black" > Gracias por visitarnos!! </font> </h1>

<small>Derechos Reservados &copy; 2014</small>
</footer>
</div>
</body>
</html>