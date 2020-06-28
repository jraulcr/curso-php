<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>

        <?php
        
        $db_host="localhost";        
        $db_usuario="root";
        $db_contra="";
        $db_nombre="pruebas";
        
        $conexion= mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
        
        //Utilizar los caracteres latinos
        mysqli_set_charset($conexion, "utf8"); 
        $consulta="select * from datospersonales";
        //Resultset
        $resultados= mysqli_query($conexion, $consulta);
        
        while ($fila= mysqli_fetch_row($resultados)){      
            
        echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo $fila[2] . " ";
        echo $fila[3] . " ";

        echo "<br> ";       
        
        }
        mysqli_close($conexion);
        
        
        ?>



    </body>
</html>


