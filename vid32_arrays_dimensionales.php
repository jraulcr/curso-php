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
        $alimentos= array( "fruta"=>array("tropical"=>"kiwi",
                                          "citrico"=>"msndarina",
                                          "otros"=>"manzana"),
                           "leche"=>array("animal"=>"vaca",
                                          "vegetal"=>"coco"),
                           "carne"=>array("vacuno"=>"lomo",
                                          "porcino"=>"jamon") );
        
       // echo $alimentos["carne"]["vacuno"];
        
     /*  foreach ($alimentos as $clave_alim => $alim) {
           
           echo "$clave_alim<br>";
           while (list($clave, $valor)= each($alim)) {
               
               echo "$clave=$valor<br>";
               
           }
           echo "<br>";
       }*/
        
        echo var_dump($alimentos);
        
        ?>
    </body>
</html>
