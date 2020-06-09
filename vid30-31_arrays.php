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
        $semana[] = "Lunes";
        $semana[] = "Martes";
        $semana[] = "Miércoles";
        $semana[] = "Jueves";
        
        sort($semana);
        
        for ($i = 0; $i < count($semana); $i++) {
            echo $semana[$i] . " ";
            echo "<br><br>";
        }


        $semana[] = "Viernes";

        for ($i = 0; $i < count($semana); $i++) {
            echo $semana[$i] . " ";
        }


        // $semana=array("Lunes", "Martes", "Miércoles", "Jueves" );
        //  echo $semana[3];
        echo "<br><br>";

        $datos = array("Nombre" => "Juan", "Apellido" => "Crespo", "Edad" => 50);
        
        

        //$datos = "Pepe";

        $datos["Pais"] = "España";
                
        if (is_array($datos)) {
            echo "Es un array<br>";
        } else {
            echo "No lo es<br>";
        }

        foreach ($datos as $key => $value) {
            echo "A $key le corresponde $value <br>";
        }

        //echo $datos["Apellido"];
        ?>
    </body>
</html>
