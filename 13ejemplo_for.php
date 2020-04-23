<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php

//Tabla de multiplicar del 9
	for ($i=0; $i <=10 ; $i++) { 

		echo "9 x $i = " . 9*$i . "<br/>";

	//	echo "<p>Hemos entrado en el bucle</p>";

	}
	echo "Hemos salido del bucle.<br/>";



	for ($i=10; $i >=-10 ; $i--) { 

		if ($i==0) {
			echo "División por 0 no es posible.<br/>";
			continue;
		}
		echo "9 / $i = " . 9/$i . "<br/>";


	}
	echo "Hemos salido del bucle.<br/>";


/*
	for ($i=10; $i >=0 ; $i--) { 

		if ($i==6) {
			echo "<p>Bucle interrumpido</p>";
			break;
		}

		echo "<p>Hemos entrado en el bucle</p>";

	}

	*/
	?>


</body>
</html>