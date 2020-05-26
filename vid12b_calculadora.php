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
        if (isset($_POST["button"])) {
            $numero1 = $_POST["num1"];
            $numero2 = $_POST["num2"];
            $operacion = $_POST["operacion"];
            calcular($operacion);
        }
        
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
        }
        ?>
    </body>
</html>
