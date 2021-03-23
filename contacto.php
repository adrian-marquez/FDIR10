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
    <li><a href="conocenos.php">Conocenos</a></li>
    <li><a href="contacto.php">Contacto</a></li>
</ul>
</div>
</nav>

<section id="seccion">
<div id="wrapper">
	<div id="page"><div class="inner_copy"></div>
		<div id="content">
			
			<div class="post">
				<h1 class="title"><a ><font color="black"><a >Contacto</a></h1>
				<p class="byline"><small> 
				<div class="entry">
					<p><strong></strong>
   <FORM action="mailto:Ardillasys@gmx.us" method="post" enctype="text/plain"><TABLE BORDER="0" CELLSPACING="0" CELLPADDING="4" WIDTH="90%"><TR><TD width="30%"><DIV align="left"><B>Nombre:</B></DIV></TD><TD width="70%"><INPUT type="text"align="left" name="name" size="20"></TD></TR><TR><TD><DIV align="left"><B>Email:</B></DIV></TD><TD><INPUT type="text" name="email" size="20" align="left"></TD></TR><TR><TD><DIV align="left"><B>Comentario:</B></DIV></TD><TD><TEXTAREA name="comment" cols="30" wrap="virtual" rows="4" align="le"></TEXTAREA></TD></TR><TR><TD>&nbsp;</TD><TD><INPUT type="submit" name="Enviar" value="Enviar"><INPUT type="reset" name="borrar" value="Borrar"></TD></TR></TABLE></FORM
   





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
</aside>
        
    
<?php
 }
?>



<footer id="pie">
<small>Derechos Reservados Ardilla SYSTEMS &copy; 2013-2014</small>
</footer>
</div>
</body>
</html>