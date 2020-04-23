<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 

	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";


//print "<pre>"; print_r($_REQUEST); print "</pre>\n";

if (isset($_REQUEST["acepto"])) {
    print "<p>Desea recibir información</p>\n";
} else {
    print "<p>No desea recibir información</p>\n";
}

	?>	

	<form action="#" method="get" onsubmit="false">
		<p>Nombre: <input type="text" name="nombre"></p>
		<p>Apellidos: <input type="text" name="apellidos"></p>
		<p>
			<input type="text" name="cajatexto2" value="Cualquier cosa">
		</p>
	

		<p>
			  <p>Deseo recibir información: <input type="checkbox" name="acepto"></p>
		</p>
		<p>
			<input style="border:1px solid #000;" type="image" name="gnu" src="https://www.mclibre.org/consultar/php/img/gnu-head-sm.jpg" alt="Logotipo GNU">
		</p>	
		<!--<p>
			<button type="submit" name="boton1" value="enviado">Enviar</button>
		</p>-->
	</form>
</body>
</html>