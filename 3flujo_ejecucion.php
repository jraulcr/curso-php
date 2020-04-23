<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
</head>
<body>
<?php
dameDatos();
?>


<?php
echo "Este es el primer mensaje<br/>";

//include("otra_pag.php");

function dameDatos(){
	echo "Este es el mensaje interior de una funcion.<br/>";
}

dameDatos();

echo "Esto es el segundo mensaje<br/>";
?>
	
</body>

</html>