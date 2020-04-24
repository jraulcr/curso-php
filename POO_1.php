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
        include './15a_clases.php';
        $mazda =  new Coche();
        $pegaso =  new Camion();
        
        echo "El Mazda tiene " . $mazda->ruedas . " ruedas<br>";
        echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas";
        ?>
    </body>
</html>
