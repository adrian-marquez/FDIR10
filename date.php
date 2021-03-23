<?php
$host="localhost";
$user="root";
$passw="root";
$conexion=mysql_connect($host,$user,$passw) or die('Ha fallado la conexion'.mysql_error());
$db="proyecto";
$base=mysql_select_db($db,$conexion)or die('Error al Seleccionar la Base de Datos:'.mysql_error());

$consulta="SELECT * FROM alumnos WHERE IDMAT=10";
$comprobar=mysql_query($consulta,$conexion);
if($datos=mysql_fetch_row($comprobar))
{
echo "<script>alert('Usuario ya existente!')
history.back(1);
</script>";
}

else{
$name="SIRVECARAJO";
$sex="machin";
$edad=20;
$estado="marika";
$lugar="tangamandapio";
$fechiwis='2014-08-21';
$tiempiwis=4;
$direc="por santa maria ese 2423412";
$tel=1245634;
$serv="no";
$cual="que no";
$padece="oso";
$promedio=10;
$periodo=2011;
$periodo2=2014;
$plantel="el bachi";
$actual="actualis";
$sustento="yo morongas";
$cuantas=12;
$casa="mea";
$transp="nopo";
$trabaja="tu que crees";
$lugart="por ahi";
$puesto="el mero mero";
$direct="col col col";
$telt=1235246;
$turno="se";
$hr=10;
$hr2=11;
$diasl="lunes y martes";
$tegusta="no";
$cual2="ya dije que no";
$expec="muchis";
$consulta="INSERT INTO alumnos (NOMBREC,SEXO,EDAD,ESTADOCIVIL,LUGAR,fechanaci,TIEMPORES,DIRECCION,TELEFONO,CUENTASERV,CUAL,PADECEALG,PROMEDIOPL,PERIODO,PERIODOT,PLANTEL,VIVECON,PRINCIPALSUS,CUANTAS,CASADONDE,CUENTATRANS,TRABAJO,LUGART,PUESTO,DIRECCIONT,TELEFONOT,HORARIO,HORARIO2,TURNOT,DIASLAB,FORMAR,ACTIVIDAD,EXPECTATIVAS) VALUES ('$name','$sex','$edad','$estado','$lugar','$fechiwis','$tiempiwis','$direc','$tel','$serv','$cual','$padece','$promedio','$periodo','$periodo2','$plantel','$actual','$sustento','$cuantas','$casa','$transp','$trabaja','$lugart','$puesto','$direct','$telt','$hr','$hr2','$turno','$dias','$tegusta','$cual2','$expec')";
mysql_query($consulta,$conexion);
echo "<script>alert('REGISTRO EXITOSO')
history.back(1);
		</script>";
	
}

mysql_close();
?>