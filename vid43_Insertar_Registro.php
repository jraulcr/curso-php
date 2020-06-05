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
        $cod = $_GET["c_art"];
        $sec = $_GET["seccion"];
        $fec = $_GET["fecha"];
        $imp = $_GET["importado"];
        $nom = $_GET["n_art"];
        $por = $_GET["p_orig"];
        $pre = $_GET["precio"];

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
        $consulta = "INSERT INTO PRODUCTOS (CODIGOARTICULO, SECCION, FECHA, IMPORTADO, NOMBREARTICULO, PAISDEORIGEN, PRECIO) "
                . "values ('$cod', '$sec', '$fec', '$imp', '$nom', '$por', '$pre')";
        //Resultset
        $resultados = mysqli_query($conexion, $consulta);

        //Verificamos si los registros se han registrado correctamente
        if ($resultados == false) {
            echo ("Error en la consulta");
        } else {
            echo ("Registro guardado<br><br>");
            echo "<table><tr><td> ";
            echo "$cod</td><td>";
            echo "$sec</td><td>";
            echo "$fec</td><td>";
            echo "$imp</td><td>";
            echo "$nom</td><td>";
            echo "$por</td><td>";
            echo "$pre";
            echo "</td></tr></table>";
            echo "<br> ";
        }

        mysqli_close($conexion);
        ?>
    </body>
</html>
