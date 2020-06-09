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

            //Si ha fallado la conexión con la BB.DD. p.e.: en vez de 'localhost' se escribe 'localhossst'
            if (mysqli_connect_errno()) {
                echo "<br>Fallo al conectar la BB.DD.<br>";
                //Sale del codigo PHP finalizando el proceso de conexión
                exit();
            }

            //Especificar la base de datos en que queremos conectarnos por defecto que se utilizará para realizar las consultas.
            //En caso contrario con 'die' mostramos imprimiendo el error especificado y finaliza el programa.
            mysqli_select_db($conexion, $db_nombre) or die('No se encuentra la BB.DD');

            //Utilizar los caracteres latinos
            mysqli_set_charset($conexion, "utf8");

            //Query
            $consulta = "INSERT INTO PRODUCTOS (CODIGOARTICULO, SECCION, NOMBREARTICULO) VALUES ('AR44', 'DEPORTES', 'RAQUETA BADMINTON')";
            //Resultset. Enviar la consulta 
            $resultados = mysqli_query($conexion, $consulta);
            
            //Cerramos la conexión previamente abierta de la bb.dd.
            mysqli_close($conexion);

        ?>
    </body>
</html>
