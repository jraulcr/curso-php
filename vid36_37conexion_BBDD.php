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
        
        //$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

        //Si ha fallado la conexion con la BB.DD. p.e.: en vez de 'localhost' se escribe 'localhossst'
        if(mysqli_connect_errno()){
            echo "Fallo al conectar con la BBDD";
            
            exit();
        }
        
        //Especificar la base de datos en que queremos conectarnos
        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
        
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


