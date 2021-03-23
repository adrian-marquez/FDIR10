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
<div id="logo">

	</div>
	

	<img src="imagenes/logo01.png" title="creado por Oscar F."  >

<header id="cabecera"><h1>FDIR10</h1></header>

<nav>
<div id="menu">
<ul>
    <li><a href="indexEng.php">Home</a></li>
    <li><a href="registrar.php">New FDIR 10</a></li>
    <li><a href="conocenosEng.php"> About Us</a></li>
    <li><a href="contactoEng.php">contact</a></li>
	
	
	<a href="index.php">  <img src="imagenes/mex.png" id="Image" alt="ingles" align="top" border="0" style="width: 10 px; height: 20px;"  > </a>
</ul>
</div>
</nav>
<?php
    if(isset($_SESSION['Mati'])){
?>
<aside id="columna">
<h3>Hello
<?php 
echo $_SESSION['Mati'] 
?></h3>
<br />
<a href="cerrar.php">log out</a>
</aside>
        
    
<?php
 }
 else{
?>

<section id="seccion">
<br>
  <p align="right"> Please login.</p>
  
</section>
<aside id="columna">
<form method="get" action="login.php">
<input type="text" name="Mati" placeholder="Username" size="30" /><br />
<input type="password" name="pass" placeholder="Password" size="30" /><br /><br />

<input type="submit" value="     Login     " size="30" />

</form><br />

Register<a href="Registrarse.php">Here</a>

</aside>
<?php
}
?>
<section id="seccion">
<h2>Welcome</h2>
<br />
<figure>
<img src="imagenes/img03.jpg" title= "tomado por http://gkh2000.de/"  > 
</figure>
<br />


<p>The squirrel systems company engaged in the development of software to implement ideas into projects for either educational institutions or companies on a scale from small business to large enterprises. In order to help enterprises to provide quality service. If you are interested to know more about us follow the link below this..</p>
</section>


<footer id="pie">
<p align="right"><li><a href="MapsiteEng.php">Site Map</a></li></p>
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