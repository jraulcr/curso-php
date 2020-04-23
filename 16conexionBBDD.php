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
        $db_host = "localhost";
        $db_nombre = "pruebas";
        $db_usuario = "root";
        $db_contra = "";

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

        $consulta = "SELECT * FROM DATOSPERSONALES";

        $resultados = mysqli_query($conexion, $consulta);
        //Resultset

        $fila = mysqli_fetch_row($resultados);

        echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo $fila[2] . " ";
        echo $fila[3] . " ";
        ?>
    </body>
</html>
