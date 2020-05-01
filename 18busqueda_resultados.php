<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Busqueda resultados php</title>



        <?php

        function ejecuta_busqueda($mibusqueda) {

            // $busqueda = $_GET["buscar"];

            require ("datosConexionBBDD.php");

            $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

            //Si ha fallado la conexion con la BB.DD. p.e.: en vez de 'localhost' se escribe 'localhossst'
            if (mysqli_connect_errno()) {
                echo "<br>***Fallo al conectar la BB.DD***<br>";
                //Sale del codigo PHP
                exit();
            }

            //Especificar la base de datos en que queremos conectarnos
            mysqli_select_db($conexion, $db_nombre) or die('No se encuentra la BB.DD');

            //Utilizar los caracteres latinos
            mysqli_set_charset($conexion, "utf8");

            //Query
            /* $consulta = "SELECT * FROM DATOSPERSONALES"; */
            $consulta = "SELECT * FROM ARTICULOS WHERE nombrearticulo like '%$mibusqueda%'";
            //Resultset
            $resultados = mysqli_query($conexion, $consulta);

            while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {

                echo "<table><tr><td> ";
                echo $fila['SECCION'] . "</td><td>";
                echo $fila['NOMBREARTICULO'] . "</td><td>";
                echo $fila['PAISDEORIGEN'] . "";
                echo "</td></tr></table>";
                echo "<br> ";
            }

            mysqli_close($conexion);
        }
        ?>
    </head>
    <body>
        <?php
        //En localhost fallara. solo funiona en servidor y si tiene tambien cargado la BB.DD. en el servidor
        $mibusqueda = $_GET["buscar"];
        $mipag = $_SERVER["PHP_SELF"];

        if ($mibusqueda != null) {

            ejecuta_busqueda($mibusqueda);
            
        } else {


            echo ("
                    <form action='" . $mipag . "' method='get'>            
                        <label>Buscar: <input type='text' name='buscar'></label>
                        <input type='submit' name='enviando' value='¡Dale!'>            
                    </form>        
                 ");
        }
        ?>
    </body>
</html>
