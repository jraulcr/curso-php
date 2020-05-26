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
            .resultado {
                color:#F00;
                font-weight: bold;
                font-size: 32px;
            }
        </style>
    </head>
    <body>
        <?php
        $nombre = "Juan";
        $edad = 18;

        //print "El nombre del usuario es " . $nombre . ";
        print "El nombre del usuario es  $nombre";
        //echo "El nombre del usuario es " . $nombre . " Y la edad es de: " . $edad;

        echo "<br/>";

        echo "El nombre del usuario es $nombre. Y la edad es de: $edad <br>";
        
        echo $nombre, $edad;
        ?>

    </body>

</html>