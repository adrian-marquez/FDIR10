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
    <li><a href="registrar.php">New FDIR10</a></li>
    <li><a href="conocenosEng.php"> About Us</a></li>
    <li><a href="contactoEng.php">contact</a></li>
</ul>
</div>
</nav>

<section id="seccion">
<div id="wrapper">
	<div id="page"><div class="inner_copy"></div>
		<div id="content">
			
			<div class="post">
				<h1 class="title"><a ><font color="black"><a >Contact</a></h1>
				<p class="byline"><small> 
				<div class="entry">
					<p><strong></strong>
   <FORM action="mailto:Ardillasys@gmx.us" method="post" enctype="text/plain"><TABLE BORDER="0" CELLSPACING="0" CELLPADDING="4" WIDTH="90%"><TR><TD width="30%"><DIV align="right"><B>Name:</B></DIV></TD><TD width="70%"><INPUT type="text" name="name" size="20"></TD></TR><TR><TD><DIV align="right"><B>Email:</B></DIV></TD><TD><INPUT type="text" name="email" size="20"></TD></TR><TR><TD><DIV align="right"><B>Coment:</B></DIV></TD><TD><TEXTAREA name="comment" cols="30" wrap="virtual" rows="4"></TEXTAREA></TD></TR><TR><TD>&nbsp;</TD><TD><INPUT type="submit" name="Send" value="Send"><INPUT type="reset" name="Delete" value="Delete"></TD></TR></TABLE></FORM
   





   <a>Cd Juarez Chihuahua </a> </p>
   
   
					
				
				</div>
			</div>
			
			</div>
		</div>
		<div id="sidebar1" class="sidebar">

							<a>busqueda en google</a>
					
					<form method="get" action="http://www.google.com/search" target="_blank">
<input type="text" name="q" size="20" maxlength="255" onfocus="if(this.value=='') this.value='';" onblur="if(this.value=='') this.value='';" value=
"" style="color: #?--#ff0000--?; font-size: 12pt; border: 1px solid #888888; background-color: #ffffff" /> <input type="hidden" name="hl" value="es" /> <input name="btnG"
value="Buscar" type="submit" style="color: #ffffff; font-size: 11pt; border: 1px solid #888888; background-color: #000000" />
</form>
				
		</div>
		<div id="sidebar2" class="sidebar">


</section>
<aside id="columna">
<h3>Hola 
<?php 
echo $_SESSION['Mati'] 
?></h3>
<br />
<a href="cerrar.php">Cerrar sesion</a>
</aside>
        
    




<footer id="pie">
<small>Derechos Reservados Ardilla SYSTEMS &copy; 2013-2014</small>
</footer>
</div>
</body>
</html>