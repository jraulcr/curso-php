<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>
            .resaltar{
                color:#F00;
                font-weight: bold;
            }
        </style>

    </head>
    <body>

        <?php
        echo '<p class="resaltar">Esto es un ejemplo de frase</p>';

        $nombre = "Juan";
        echo "Hola $nombre <br>";

        echo "<p class='resaltar'>Esto es un ejemplo de frase $nombre</p>";


        echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";


        $variable1 = "Casa";
        $variable2 = "CASA";
        $variable3 = "Sofa";

        //strcasecmp (Compara ignorando mayusculas y minusculas)
        //strcmp (string compare compara contando mayosculas y minusculassin )
        //$resultado=strcmp($variable1,$variable2);

        $resultado = strcasecmp($variable1, $variable2);

        echo "El resutado es: " . $resultado;

        if ($resultado) {
            echo " No coinciden";
        } else {
            echo " Coinciden";
        }
        ?>


    </body>

</html>