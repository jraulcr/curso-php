<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
	$dado1 = rand(1, 6);
	$dado2 = rand(1, 6);
	
	echo $dado1 . " " . $dado2;

	if ($dado1 == $dado2) {
		print "  <p>Ha sacado una pareja de $dado1.</p>\n";
	} else {
		print "  <p>No ha sacado pareja. El valor más alto es " . max($dado1, $dado2) . ".</p>\n";
	}
	?>
</body>
</html>