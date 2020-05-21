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

        function calcular($calculo){
            if (!strcmp("Suma", $calculo)) {
                global $numero1;
                global $numero2;
                $resultado=$numero1 + $numero2;
                echo "<p class='resultado'>El resultado es: $resultado</p>";
            }
            if (!strcmp("Resta", $calculo)) {
                global $numero1;
                global $numero2;                
                $resultado=$numero1 - $numero2;
                echo "<p class='resultado'>El resultado es: $resultado</p>";
            }
            if (!strcmp("Multiplicación", $calculo)) {
                global $numero1;
                global $numero2;                
                $resultado=$numero1 * $numero2;
                echo "<p class='resultado'>El resultado es: $resultado</p>";
            }
            if (!strcmp("División", $calculo)) {
                global $numero1;
                global $numero2;                
                $resultado=$numero1 / $numero2;
                echo "<p class='resultado'>El resultado es: $resultado</p>";
            }
            if (!strcmp("Módulo", $calculo)) {
                global $numero1;
                global $numero2;                
                $resultado=$numero1 % $numero2;
                echo "<p class='resultado'>El resultado es: $resultado</p>";
            }  
            if (!strcmp("Incremento", $calculo)) {
                global $numero1;
                $numero1++;
                               
                $resultado=$numero1;
                echo "<p class='resultado'>El resultado es: $resultado</p>";
            }
            if (!strcmp("Decremento", $calculo)) {
                global $numero1;
                $numero1--;      
                
                $resultado=$numero1 ;
                echo "<p class='resultado'>El resultado es: $resultado</p>";
            }            
        }
        ?>
    </body>
</html>
