<?php
require './vid57_DevuelveProductos.php';

$pais=$_GET['buscar'];

$productos = new DevuelveProductos();
 
$array_productos = $productos->get_productos($pais);
?>


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
        foreach ($array_productos as $elemento) {
            echo "<table><tr><td> ";
            echo $elemento['CODIGOARTICULO'] . "</td><td>";
            echo $elemento['NOMBREARTICULO'] . "</td><td>";
            echo $elemento['SECCION'] . "</td><td>";
            echo $elemento['PRECIO'] . "</td><td>";
            echo $elemento['FECHA'] . "</td><td>";
            echo $elemento['IMPORTADO'] . "</td><td>";
            echo $elemento['PAISDEORIGEN'] . "";
            echo "</td></tr></table>";
            echo "<br> ";
        }
        ?>
    </body>
</html>
