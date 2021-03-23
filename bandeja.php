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
    <li><a href="conocenos.php">Conocenos</a></li>
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

</br><br>
</br><br>
</section>

<aside id="columna">
<h3>
<?php 
echo $_SESSION['Password'] 
?></h3>

<br />
<a href="cerrar.php">Cerrar sesion</a>
</aside>
       
    
<?php } 
else{
?>
<section id="seccion">
<h2>Porfavor inicia sesion</h2>
<br />
<br />

</section>
<aside id="columna">
<form method="get" action="login.php">
<input type="password" name="password" placeholder="Password" size="30" /><br /><br />
Si olvidaste tu contraseña entra <a href="recupera.php">AQUI</a><br />
<input type="submit" value="     Entrar     " size="30" />
</form><br />
Si no estas registrado entra <a href="Registrarse.php">AQUI</a>
</aside>
<?php } ?>
<footer id="pie">
<small>Derechos Reservados &copy; 2014</small>
</footer>
</div>
</body>
</html>