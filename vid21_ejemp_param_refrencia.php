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
    </head>
    <body>
        <?php

        function incrementa(&$valor1) {
            $valor1++;
            return $valor1;
        }

        $numero = 5;
        echo incrementa($numero) . "<br/>";
        echo $numero;
        ?>
        <?php

        function cambia_mayus($param) {
            $param = strtolower($param);
            $param = ucwords($param);
            return $param;
        }

        $cadena = "hOlA mUnDo<br>";
        echo cambia_mayus($cadena);
        echo $cadena;
        ?>
    </body>
</html>
