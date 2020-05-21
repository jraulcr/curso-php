<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	define("AUTOR", "Juan", true);

        //define("AUTOR", "Maria");
        
        echo "El autor es: " . AUTOR . "<br>";
        
	echo "La linea de esta instrucción es: " . __LINE__ . "<br>";

	echo "Estamos trabajando con este fichero: " . __FILE__ . "<br>";

				

		//echo "El autor es: " . AUTOR;

	?>
</body>
</html>