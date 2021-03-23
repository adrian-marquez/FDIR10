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
<background img src="imagenes/img03.jpg"
	<img src="imagenes/img03.jpg" title="tomado por http://gkh2000.de/" >
<div id="todo">
<div id="logo">
	
	</div>

	<img src="imagenes/logo02.png" title="creado por Oscar F."  >

	
<header id="cabecera"><h1>FDIR10</h1></header>

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

<section id="seccion">

<figure>
<img src="imagenes/img03.jpg" title="tomado por http://gkh2000.de/" > 
	  

<H6><p>Ultima Actualizacion 8/28/2014.</p> </H6>

</figure>
<br />


<p>La empresa de ardilla systems se dedica al desarrollo de software con el fin de implementar ideas en proyectos ya sea para instituciones educativas o empresas de una escala de pequeña empresa hasta grandes empresas. Con el fin de ayudar a las empresas con ofrecer un servicio de calidad. Si te interesa saber mas sobre nosotros sigue el vinculo que esta debajo.</p>
</section>
<?php
    if(isset($_SESSION['Mati'])){
?>
<aside id="columna">
<h3>Hola
<?php 
echo $_SESSION['Password'] 
?></h3>
<br />
<a href="cerrar.php">Cerrar sesion</a>
</aside>
        
    <?php
}
else{
?>

<section id="seccion">
<br>
  <p align="right">  Favor de ingresar tu nombre de usuario y password para accesar al sistema.</p>
  
</section>
<aside id="columna">
<form method="get" action="login.php">
<input type="text" name="Mati" placeholder="Nombre de usuario" size="30" /><br />
<input type="password" name="pass" placeholder="Password" size="30" /><br /><br />

<input type="submit" value="     Entrar     " size="30" />

</form><br />

Si no estas registrado entra <a href="Registrarse.php">AQUI</a>

</aside>
<?php
}
?>
<footer id="pie">
<p align="right"><li><a href="Mapsite.php">Mapa de sitio</a></li></p>
<div id="footer-content">

	<div id="footer"><div class="fleft"><p>
	
	<div>
<a>Jaime Adrian Mora Márquez-</a>
<a>Oscar Edmundo Flores Ramírez-</a>
<a>Ozman Aguilar Romero </a>

	<div class="fclear"></div></div>
<small>Derechos Reservados Ardilla SYSTEMS &copy; 2013-2014</small>
</footer>
</div>
</body>
</html>