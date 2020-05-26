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
        dameDatos();
        ?>

        <?php
        echo "Este es el primer mensaje<br>";
       
        //include("otra_pag.php");

        function dameDatos() {
            echo "Este es el mensaje interior de una funcion.<br>";
        }

        dameDatos();
        dameDatos();
        dameDatos();

        echo "Esto es el segundo mensaje<br>";
        ?>

    </body>
</html>