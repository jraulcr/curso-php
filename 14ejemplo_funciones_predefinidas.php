<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 

	function frase_mayus($fraseArg, $conversion=true){

		$frase = strtolower($fraseArg);

		if ($conversion==true) {

			$resultado=ucwords($frase);

		} else {
			$resultado=strtoupper($frase);
		}

		return $resultado;
	}


	echo (frase_mayus("Esto es una prueba.", false));

/*
	function suma($num1, $num2){

		$resultado=$num1+$num2;

		return $resultado;

	}

		echo (suma(5, 4));
*/

/*
	$palabra = "JUAN";
	$palabra2 = "juan";

	echo (strtolower($palabra));

	echo (strtoupper($palabra2));
*/
	?>
</body>
</html>