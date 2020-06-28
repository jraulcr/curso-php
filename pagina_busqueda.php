<?php

	$busqueda = $_GET["buscar"];

    require ("datosConexionBBDD.php");


        //$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
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
    $consulta = "SELECT * FROM ARTICULOS WHERE NOMBREARTICULO LIKE '%$busqueda%'";
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
    


?>