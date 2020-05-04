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

      $busqueda = $_GET["buscar"];
      
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
        /*$consulta = "SELECT * FROM DATOSPERSONALES";*/
        $consulta = "SELECT * FROM ARTICULOS WHERE nombrearticulo like '%$busqueda%'";
        //Resultset
        $resultados = mysqli_query($conexion, $consulta);  
        
            echo "<form action='Actualizar.php' method='get'> ";

        while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){  
                    
            echo "<input type='text' name='c_art' value='".$fila['CODIGOARTICULO']. "'><br/> ";
            echo "<input type='text' name='n_art' value='".$fila['NOMBREARTICULO']. "'><br/> ";
            echo "<input type='text' name='seccion' value='".$fila['SECCION']. "'><br/> ";
            echo "<input type='text' name='importado' value='".$fila['IMPORTADO']. "'><br/> ";
            echo "<input type='text' name='precio' value='".$fila['PRECIO']. "'><br/> ";
            echo "<input type='text' name='fecha' value='".$fila['FECHA']. "'><br/> ";
            echo "<input type='text' name='p_orig' value='".$fila['PAISDEORIGEN']. "'><br/> ";

          }   
            
            echo "<input type='submit' name='enviando' value='Actualizar'/>";

            echo "</form> ";
        mysqli_close($conexion);
        
        ?>
    </body>
</html>
