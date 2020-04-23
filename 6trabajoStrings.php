<!doctype html>
<html lang="es">

    <head>
        <meta charset="utf-8">

        <style>
            .resaltar{
                color:#F00;
                font-weight: bold;
            }
        </style>

    </head>
    <body>

        <?php
        /* $nombre = "Juan";

          echo "<p class='resaltar'>Esto es un ejemplo de frase $nombre</p>";


          echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";
         */

        $variable1 = "Casa";
        $variable2 = "CASA";
        $variable3 = "Sofa";
//strcasecmp (Compara ignorando mayusculas y minusculas)
//strcmp (string compare compara contando mayosculas y minusculassin )

//$resultado=strcmp($variable1,$variable2);
$resultado=strcasecmp($variable1,$variable2);

echo "El resutado es: " . $resultado;

if ($resultado) {
	echo "No coinciden";
} else {
	echo "Coinciden";
}


?>

	
</body>

</html>