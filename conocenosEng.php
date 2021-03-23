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
       <li><a href="indexEng.php">Home</a></li>
    <li><a href="registrar.php">New FDIR10</a></li>
    <li><a href="conocenosEng.php"> About Us</a></li>
    <li><a href="contactoEng.php">contact</a></li>
</ul>
</div>
</nav>

<section id="seccion">
<h2>Welcome to Ardilla Systems</h2>
<br />
<figure>

</figure>
<br />

<?php
    if(isset($_SESSION['Mati'])){
?>
</section>
<aside id="columna">
<h3>Hello
<?php 
echo $_SESSION['Mati'] 
?></h3>
<br />
<a href="cerrar.php"Log Out</a>
</aside>
        <div class="post">
				<h1 class="title"><a ><font color="black">Mision </font></a></h1>
				<p class="byline"><small> 
				<div class="entry">
					<p><strong></strong> 
<?php } 

?>

Innovate software to facilitate users and they can see that you dare Tic'S 
  You can do many things, they can see us on honesty, responsibility, reliability 
  how software developers offer a quality service, feasible prices, also be in the computer business and 
  to implement ideas to the users what they will need.
   
 
   <h1 class="title"><a ><font color="black">Vision</font></a></h1>
   
   <p><strong></strong>We as a company is to develop software applications for mobile and 
    users to bring in their cell NOMost an application with the press of a button and 
    they have internet, they can access the application without bringing a computer 
    or Tablet as this would be more effective way for customer.


<footer id="pie">
<small>Derechos Reservados Ardilla SYSTEMS &copy; 2013-2014</small>
</footer>
</div>
</body>
</html>