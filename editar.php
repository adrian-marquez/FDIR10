<?php
$host="localhost";
$user="root";
$passw="root";
$conexion=mysql_connect($host,$user,$passw) or die('Ha fallado la conexion'.mysql_error());
$db="proyecto";
$base=mysql_select_db($db,$conexion)or die('Error al Seleccionar la Base de Datos:'.mysql_error());
require_once 'Zend/Pdf.php';
require("conexion.php");
session_start();
    if(isset($_SESSION['Mati'])){

require("exito.php");
$Mati=$_REQUEST['Mati'];
$name=$_REQUEST['nombrec'];
$sex=$_REQUEST['sexo'];
$edad=$_REQUEST['edad'];
$estado=$_REQUEST['civil'];
$lugar=$_REQUEST['lugarnac'];
$fechiwis=$_REQUEST['bday'];
$tiempiwis=$_REQUEST['tiempoj'];
$direc=$_REQUEST['direccion'];
$tel=$_REQUEST['telefono'];
$serv=$_REQUEST['servm'];
$cual=$_REQUEST['porque'];            
$pade=$_REQUEST['otra'];
$promedio=$_REQUEST['promedio'];
$periodo=$_REQUEST['periodoi'];
$periodo2=$_REQUEST['periodof'];   
$plantel=$_REQUEST['plantel'];
$actual=$_REQUEST['vivecon'];
$sustento=$_REQUEST['sustento'];
$cuantas=$_REQUEST['dependen'];
$casa=$_REQUEST['casah'];
$transp=$_REQUEST['transporte'];
$trabaja=$_REQUEST['trabajo'];      
$lugart=$_REQUEST['lugardetrab'];
$puesto=$_REQUEST['puesto'];
$direct=$_REQUEST['dirdetrabajo'];
$telt=$_REQUEST['teldetrabajo'];
$turno=$_REQUEST['turnotrabajo'];
$hr=$_REQUEST['trabaje'];
$hr2=$_REQUEST['traba'];
$diasl=$_REQUEST['diat'];
$tegusta=$_REQUEST['cultural'];
$cual2=$_REQUEST['actividad'];
$expec=$_REQUEST['expect'];
$date=date('j \of F Y');
$image = Zend_Pdf_Image::imageWithPath('imagen.jpg'); 

$consulta="UPDATE alumnos SET NOMBREC='$name', SEXO='$sex', EDAD='$edad', ESTADOCIVIL='$estado', LUGAR='$lugar', fechanaci='$fechiwis', TIEMPORES='$tiempiwis', DIRECCION='$direc', TELEFONO='$tel', CUENTASERV='$serv', CUAL='$porque', PADECEALG='$otra', PROMEDIOPL='$promedio', PERIODO='$periodo', PERIODOT='$periodo2', PLANTEL='$plantel', VIVECON='$actual', PRINCIPALSUS='$sustento', CUANTAS='$cuantas', CASADONDE='$casa', CUENTATRANS='$transp', TRABAJO='$trabaja', LUGART='$lugart', PUESTO='$puesto', DIRECCIONT='$direct', TELEFONOT='$telt', HORARIO='$hr', HORARIO2='$hr2', TURNOT='$turno', DIASLAB='$diasl', FORMAR='$tegusta', ACTIVIDAD='$cual2', EXPECTATIVAS='$expec'  WHERE Matricula = '$Mati'";


mysql_query($consulta,$conexion);

$pdf = Zend_Pdf::load('fdir.pdf');
$page = $pdf->pages[0];

$font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA);
$setFont = $page->setFont($font, 8);
$drawText = $page->drawText($date, 470, 615);
$drawText = $page->drawText($nombrec, 180, 605);
$drawText = $page->drawText($edad, 410, 605);
$drawText = $page->drawText($estado, 530, 605);
$drawText = $page->drawText($sexo, 327, 605);
$drawText = $page->drawText($lugarnac, 190, 585);
$drawText = $page->drawText($bday, 258, 585);
$drawText = $page->drawText($direccion, 190, 566);
$drawText = $page->drawText($telefono, 430, 566);
$drawText = $page->drawText($direccion, 190, 566);
$drawText = $page->drawText($servm, 230, 525);
$drawText = $page->drawText($porque, 240, 540);
$drawText = $page->drawText($otra, 80, 486);
$drawText = $page->drawText($promedio, 77, 418);
$drawText = $page->drawText($periodo, 142, 418);
$drawText = $page->drawText('a', 160, 418);
$drawText = $page->drawText($periodo2, 165, 418);
$drawText = $page->drawText($plantel, 280, 418);
$drawText = $page->drawText($actual, 470, 380);
$drawText = $page->drawText($sustento, 300, 367);
$drawText = $page->drawText($cuantas, 327, 355);
$drawText = $page->drawText($casa, 415, 340);
$drawText = $page->drawText($transp, 220, 328);
$drawText = $page->drawText($trabaja, 195, 293);
$drawText = $page->drawText($lugart, 174, 280);
$drawText = $page->drawText($puesto, 445, 280);
$drawText = $page->drawText($direct, 170, 265);
$drawText = $page->drawText($telt, 400, 265);
$drawText = $page->drawText($hr, 170, 250);
$drawText = $page->drawText($hr2, 230, 250);
$drawText = $page->drawText($turno, 310, 252);
$drawText = $page->drawText($tegusta, 410, 203);
$drawText = $page->drawText($cual2, 100, 171);
$drawText = $page->drawText($expec, 100, 132);
$page->drawImage($image, 568, 646, 490, 742);
$drawText = $page->drawText($tiempoj, 470, 585);
$drawText = $page->drawText('anos', 485, 585);





$save = $pdf->save('zend.pdf');

mysql_close();
}
?>