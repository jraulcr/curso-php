<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
</head>
<body>



<?php

function incrementaVariable(){

	static $contador=0;		
	$contador++;

	echo $contador . "<br/>";
}

incrementaVariable();
incrementaVariable();
incrementaVariable();
incrementaVariable();
?>

	
</body>

</html>