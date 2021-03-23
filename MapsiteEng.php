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
      <li><a href="IndexEng.php">Home</a></li>
    
</ul>
</div>
</nav>
<h1> <font  color="black"> SiteMap</font></h1>
<P> <font color="black"> if you have trouble finding what you want in ArdillaSystems.com, see the site map.</font> </P>
<section id="seccion">
<div id="wrapper">
	<div id="page"><div class="inner_copy"></div>
		<div id="content">
			<div>
			<a>Sites</a>
<li><a href="IndexEng.php">Home</a></li>
<div></div>
    <li><a href="registrar.php">Sign In</a></li>
	<div></div>
    <li><a href="conocenosEng.php"> About Us</a></li>
	<div></div>
    <li><a href="contactoEng.php">contact</a></li>
<div></div>
   <a>Cd Juarez Chihuahua </a> </p>
   
   
					
				
		</div>
				
				<a>Google search</a>
					<div>
					<form method="get" action="http://www.google.com/search" target="_blank">
<input type="text" name="q" size="20" maxlength="255" onfocus="if(this.value=='') this.value='';" onblur="if(this.value=='') this.value='';" value=
"" style="color: #?--#ff0000--?; font-size: 12pt; border: 1px solid #888888; background-color: #ffffff" /> <input type="hidden" name="hl" value="es" /> <input name="btnG"
value="Buscar" type="submit" style="color: #ffffff; font-size: 11pt; border: 1px solid #888888; background-color: #000000" />
</div>
</form>
</section>
<aside id="columna">
<h3>Hello
<?php 
echo $_SESSION['Mati'] 
?></h3>
<br />
<a href="cerrar.php">log out</a>
</aside>
        
    


<section id="seccion">

</section>
<aside id="columna">
<form method="get" action="login.php">
<input type="text" name="Mati" placeholder="Name of user" size="30" /><br />
<input type="password" name="pass" placeholder="Password" size="30" /><br /><br />
If you forgot your password <a href="recupera.php">Here</a><br />
<input type="submit" value="     Enter    " size="30" />
</form><br />
If you are not registered<a href="Registrarse.php">Here</a>
</aside>

<footer id="pie">
<small>Derechos Reservados Ardilla SYSTEMS &copy; 2013-2014</small>
</footer>
</div>
</body>
</html>