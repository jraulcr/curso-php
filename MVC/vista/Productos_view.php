<<<<<<< HEAD
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
        
        <table><tr><td>Nombre Articulo:</td></tr>
        
        
        <?php
         foreach ($matrizProductos as $registro) {
             
           //  echo $registro["NOMBREARTICULO"];
           

                echo "<tr><td>";
                echo $registro['NOMBREARTICULO'] . "</td><td>";
                echo $registro['SECCION'] . "</td><td>";
                echo $registro['PRECIO'] . "</td><td>";
                echo $registro['PAISDEORIGEN'] . "";
                echo "</td></tr>";
             
         }
        ?>
            
            </table>
    </body>
</html>
=======
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
        
        <table><tr><td>Nombre Articulo:</td></tr>
        
        
        <?php
         foreach ($matrizProductos as $registro) {
             
           //  echo $registro["NOMBREARTICULO"];
           

                echo "<tr><td>";
                echo $registro['NOMBREARTICULO'] . "</td><td>";
                echo $registro['SECCION'] . "</td><td>";
                echo $registro['PRECIO'] . "</td><td>";
                echo $registro['PAISDEORIGEN'] . "";
                echo "</td></tr>";
             
         }
        ?>
            
            </table>
    </body>
</html>
>>>>>>> c1b97b056abcdf8ef6a032c122be8adfbd9f1c80
