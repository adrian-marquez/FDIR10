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

<header id="cabecera"><h1>Ardilla Systems</h1></header>

<nav>
<div id="menu">
<ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="registrar.php">Registrar FDIR10</a></li>
    
    <li><a href="contacto.php">Contacto</a></li>
</ul>
</div>
</nav>

<section id="seccion">


<?php
    if(isset($_SESSION['Mati'])){
?>
</section>
<aside id="columna">
<h3>Hola 
<?php 
echo $_SESSION['Mati'] 
?></h3>
<br />
<a href="cerrar.php">Cerrar sesion</a>

<?php
}
?>
</aside>
     			<div class="post">
				<h1 class="title"><a ><font color="black">Mision de la empresa</font></a></h1>
				<p class="byline"><small> 
				<div class="entry">
					<p><strong></strong> 
Innovar software para facilitar a los usuarios  y que ellos puedan ver que atreves de las TIC’S 
 se puede hacer muchas cosas ,ellos puedan ver en nosotros en la honestidad, responsabilidad ,la confiabilidad
 de como desarrolladores de software ofrecer un  servicio de calidad, precios factibles, también estar en el equipo de negocios y 
 poder implementar ideas a los usuarios de que es lo que van a necesitar.

   
   
   
   <h1 class="title"><a ><font color="black">Vision</font></a></h1>
   
   <p><strong></strong>Nosotros como empresa es desarrollar software en aplicaciones móviles para que ya 
   los usuarios puedan traer en su celular una aplicación que nomás con presionar un botón y 
   que tengan internet ,puedan acceder a la aplicación sin necesidad de traer una computadora
   o una Tablet ya que esto se haría de manera más eficaz para el cliente.



  


<footer id="pie">
<small>Derechos Reservados Ardilla SYSTEMS &copy; 2013-2014</small>
</footer>
</div>
</body>
</html>