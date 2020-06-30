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
        
        $id="";
        $contenido="";
        $tipo="";
        
        require ("datosConexionBBDD.php");

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

        if (mysqli_connect_errno()) {
            echo "Fallo al conectar la BB.DD";
            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die('No se encuentra la BB.DD');

        mysqli_set_charset($conexion, "utf8");

        $consulta = "SELECT * FROM ARCHIVOS WHERE ID=4";//Como ejemplo visualizamos solo el de Id=4
        $resultado = mysqli_query($conexion, $consulta);

        while ($fila = mysqli_fetch_array($resultado)) {
            $Id  = $fila["Id"];
            $contenido  = $fila["Contenido"];
            $tipo  = $fila["Tipo"];
        }        
        
        echo "Id: " . $Id . "<br/><br/>";
        
        echo "Tipo: " . $tipo . "<br/><br/>";
        
        echo "<img src='data:image/jpeg; base64," . base64_encode($contenido) . "' alt='' width='20%'>";
        
        ?>
      
    </body>
</html>
