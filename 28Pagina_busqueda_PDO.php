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

        $busqueda =$_GET["buscar"];
        
        try {

            $base = new PDO('mysql:host=localhost; dbname=pruebas02', 'root', '');
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $base->exec("SET CHARACTER SET utf8");
            
            $sql = "SELECT NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM ARTICULOS WHERE NOMBREARTICULO = ?";
            
            $resultado=$base->prepare($sql);
            
            $resultado->execute(array($busqueda));
            
            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                
                echo 'Nombre Articulo: <br/>';
                echo "<table><tr><td> ";
                echo $registro['NOMBREARTICULO'] . "</td><td>";
                echo $registro['SECCION'] . "</td><td>";
                echo $registro['PRECIO'] . "</td><td>";
                echo $registro['PAISDEORIGEN'] . "";                
                echo "</td></tr></table>";  
                echo "<br> ";
            }
            
            $resultado->closeCursor();
            
            //echo "¡Conexión OK!";
            
        } catch (Exception $e) {

            die('Error: ' . $e->getMessage());
            
        } finally {
            
            $base = null;
            
        }
                ?>
    </body>
</html>
