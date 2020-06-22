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
            require ("datosConexionBBDD.php");

            $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

            //Si ha fallado la conexion con la BB.DD. p.e.: en vez de 'localhost' se escribe 'localhossst'
            if (mysqli_connect_errno()) {
                echo "<br>Fallo al conectar la BB.DD.<br>";
                //Sale del codigo PHP
                exit();
            }

            //Especificar la base de datos en que queremos conectarnos
            mysqli_select_db($conexion, $db_nombre) or die('No se encuentra la BB.DD');

            //Utilizar los caracteres latinos
            mysqli_set_charset($conexion, "utf8");

            //Query
            $consulta = "INSERT INTO PRODUCTOS (CODIGOARTICULO, SECCION, NOMBREARTICULO) values ('AR44', 'DEPORTES', 'RAQUETA BADMINTON')";
            //Resultset
            $resultados = mysqli_query($conexion, $consulta);

            mysqli_close($conexion);

        ?>
    </body>
</html>
