<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>pagina_busqueda php</title>
    </head>
    <body>
      <?php

        $pais = $_GET["buscar"];
      
        require ("datosConexionBBDD.php");

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
        
        //Si ha fallado la conexion con la BB.DD. p.e.: en vez de 'localhost' se escribe 'localhossst'
        if(mysqli_connect_errno()){
            echo "<br>***Fallo al conectar la BB.DD***<br>";
            //Sale del codigo PHP
            exit();
        }

        //Especificar la base de datos en que queremos conectarnos
        mysqli_select_db($conexion, $db_nombre) or die ('No se encuentra la BB.DD');
        
        //Utilizar los caracteres latinos
        mysqli_set_charset($conexion, "utf8");         
      
         //Query
        $sql="SELECT CODIGOARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE PAISDEORIGEN = ?";
        
        //Preparamos la consulta con la funcion 'mysqli_prepare' cuyo dos parametros que pide son la 'conexion' y la query 'SQL'
        $resultado = mysqli_prepare($conexion, $sql);
    
        //Unimos los parametros a la sentencia sql que devolvera 'true' o 'false'
        //Requiere tres parametros: el objeto 'mysqly_stmt' que devuelve el 'mysqli_prepare', el tipo de dato que devolverá 's' si es string o 'i' si es integer o 'd' si es decimal, y la variable
        $ok = mysqli_stmt_bind_param($resultado, "s", $pais);
    
        //Ejecutar la consulta con la funcion 'mysqli_stmt_execute' que devolvera 'true' o 'false
        // necesita el objeto 'mysqly_stmt'
        $ok = mysqli_stmt_execute($resultado);
        
        if($ok==false){
            echo "Error al ejecutar la consulta";
        } else {
            //Asociar variables al resultado de la consulta
            $ok = mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);
            echo "articulos encontrados: <br><br>";
            
            //Asociar variables al resultado de la consulta con la funcion 'mysqli_stmt_fetch' que devolvera 'true' o 'false'
            while (mysqli_stmt_fetch($resultado)){
               echo $codigo . " ". $seccion . " ". $precio . " ". $pais . "<br>"; 
            }
             mysqli_stmt_close($resultado);
        }        
        ?>
    </body>
</html>
