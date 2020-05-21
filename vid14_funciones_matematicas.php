<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
</head>
<body>



	<?php
	$num1=rand(10,50);
	$num2=pow(5,3);
	$num3 = 5.75;
	$num4 = 5.759191992929;	

	echo "El numero aleatorio es: " . $num1 . "<br/>";
	echo "El numero exponencial es: " . $num2 . "<br/>";
	echo "El numero redondeado es: " . round($num3) . "<br/>";
	echo "El numero redondeado es: " . round($num4, 2) . "<br/>";	
	
//Casting implicito
	$num5 = "6";
	echo $num5+2 . "<br/>";

//Casting explicito
	$num6 ="10";
	echo (int)$num6;        




	
	?>
	
</body>

</html>