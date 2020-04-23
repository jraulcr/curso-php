<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
</head>
<body>
<?php

$nombre="Juan";

function datosNombre() {

	global $nombre;

	$nombre="El nombre es " . $nombre;
} 

datosNombre();

echo $nombre;

?>
	
</body>

</html>