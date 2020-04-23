<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>document</title>
</head>
<body>
	<?php 
	include("vehiculos.php");
	$mazda=new Coche();
	$pegaso=new Camion();
	
	//echo "el mazda tiene " . $mazda->ruedas . " ruedas <br/>";
	echo "Pegaso tiene " . $pegaso->getRuedas() . " ruedas. <br/>";
	//$pegaso->frenar();
	//$pegaso->arrancar();

	echo " Mazda tiene: " . $mazda->getRuedas() . " ruedas.  <br/>";

	echo " Mazda tiene: " . $mazda->getMotor(). " cc.  <br/>";

	?>
</body>
</html>