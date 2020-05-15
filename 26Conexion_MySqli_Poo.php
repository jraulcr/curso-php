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
        $db_usuario = "root";
        $db_contra = "";
        $db_nombre = "pruebas02";
        
        $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
        if ($conexion -> connect_errno) {
            echo "Falló la conexión " . $conexion -> connect_errno;
        }
        
        //mysqli_set_charset($conexion, "utf8");        
        $conexion ->set_charset("utf8");
        
        $sql = "SELECT * FROM ARTICULOS";
        
       // $resultados = mysqli_query($conexion, $sql);
        $resultados = $conexion -> query($sql);
        
        if($conexion -> errno){
            die($conexion -> errno);            
        }
        
        //while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
        while ($fila = $resultados -> fetch_assoc()){
                echo "<table><tr><td> ";
                echo $fila['CODIGOARTICULO'] . "</td><td>";
                echo $fila['IMPORTADO'] . "</td><td>";
                echo $fila['SECCION'] . "</td><td>";
                echo $fila['FECHA'] . "</td><td>";
                echo $fila['NOMBREARTICULO'] . "</td><td>";
                echo $fila['PAISDEORIGEN'] . "</td><td>";
                echo $fila['PRECIO'] . "";
                echo "</td></tr></table>";  
                echo "<br> ";
        }        
        //mysqli_close($conexion);
        $conexion->close();
        
        ?>
    </body>
</html>
