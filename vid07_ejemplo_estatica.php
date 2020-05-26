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

        function incrementaVariable() {

            static $contador = 0;
            $contador++;

            echo $contador . "<br>";
        }

        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        ?>


    </body>

</html>