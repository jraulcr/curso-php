<?php 

echo $_REQUEST['nombre'] . " tiene " . $_REQUEST['edad'] . " años.";
echo "<br/>";

if ($_REQUEST['edad'] >=18) {

	echo "Eres mayor de edad";
	
} else {
	echo "No es mayor de edad";
}

?>

<p><a href="formulario1a.php" title="volver">Volver</a></p>
