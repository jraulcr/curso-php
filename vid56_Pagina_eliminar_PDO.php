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
        $busqueda_cart = $_POST["c_art"];
     /*   $busqueda_seccion = $_POST["seccion"];
        $busqueda_nart = $_POST["n_art"];
        $busqueda_precio = $_POST["precio"];
        $busqueda_fecha = $_POST["fecha"];
        $busqueda_importado = $_POST["importado"];
        $busqueda_porig = $_POST["p_orig"];
      */

        try {   

            $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $base->exec("SET CHARACTER SET utf8");

           /* $sql = "SELECT NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE SECCION = :SECC AND PAISDEORIGEN = :PORIG";*/

         /*   $sql = "INSERT INTO PRODUCTOS (CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, FECHA, IMPORTADO, PAISDEORIGEN)"
                    . "VALUES (:c_art, :seccion, :n_art, :precio, :fecha, :importado, :p_orig) ";
            */

            $sql = "DELETE FROM PRODUCTOS WHERE CODIGOARTICULO=:c_art";
            
            $resultado = $base->prepare($sql);

           // $resultado->execute(array(":SECC" => $busqueda_sec, ":PORIG" => $busqueda_porig));
           // $resultado->execute(array(":c_art"=>$busqueda_cart, ":seccion"=>$busqueda_seccion, ":n_art"=>$busqueda_nart, ":precio"=>$busqueda_precio, ":fecha"=>$busqueda_fecha, ":importado"=>$busqueda_importado, ":p_orig"=>$busqueda_porig));
          
            $resultado->execute(array(":c_art"=>$busqueda_cart));
            
         /*   while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

                echo 'Nombre Articulo: <br/>';
                echo "<table><tr><td> ";
                echo $registro['NOMBREARTICULO'] . "</td><td>";
                echo $registro['SECCION'] . "</td><td>";
                echo $registro['PRECIO'] . "</td><td>";
                echo $registro['PAISDEORIGEN'] . "";
                echo "</td></tr></table>";
                echo "<br> ";
            }
          */

         echo "Registro eliminado";
                  
            $resultado->closeCursor();

        } catch (Exception $e) {

            die('Error: ' . $e->getMessage());
            
        } finally {

            $base = null;
        }
        ?>
    </body>
</html>
