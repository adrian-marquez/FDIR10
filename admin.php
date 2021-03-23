<?php
session_start();
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
<?php
    if(isset($_SESSION['Mati'])){
?>
<nav>
<div id="menu">
<ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="registrar.php">Registra FDIR 10</a></li>
    <li><a href="nosotros.php">Conocenos</a></li>
    <li><a href="contacto.php">Contacto</a></li>
</ul>
</div>
</nav>

<section id="seccion">

<br />
<br />
<h3>Bienvenido <?php 
echo $_SESSION['Mati'] 
?></h3>

<center><h1><a href="registrar.php">Nuevo registro fdir10</a></h1></center>
</br><br>
<center><h1><a href="lista.php">Ver lista de registros fdir10</a></h1></center>
</br><br>
</br><br>
</section>

<aside id="columna">
<h3>Hola 
<?php 
echo $_SESSION['Mati'] 
?></h3>
<br />
<a href="cerrar.php">Cerrar sesion</a>
</aside>
       
    
<?php } 
else{
?>
<section id="seccion">

</br><br>
<center><h1><a href="listaAdmin.php">Ver lista de registros fdir10</a></h1></center>
<br />
<br />

</section>


</aside>
<?php } ?>
<footer id="pie">
<small>Derechos Reservados &copy; 2014</small>
</footer>
</div>
</body>
</html>