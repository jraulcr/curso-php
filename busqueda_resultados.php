<!DOCTYPE html>
<html lang="esn">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<?php

function ejecuta_consulta($labusqueda) {

	//$busqueda = $_GET["buscar"];

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
    $consulta = "SELECT * FROM ARTICULOS WHERE NOMBREARTICULO LIKE '%$labusqueda%'";
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

	//Solo funcionara en servidor. En localhost fallara
	$mibusqueda = $_GET['buscar'];

	//Le indicamos que la información la pasaremos en la misma página
	$mipag=$_SERVER['PHP_SELF'];

	//si la variable $mibuqueda !=null que ejecute la consulta
	if(mibusqueda!=null){
		ejecuta_consulta($mibusqueda);
	}else{
		echo (" <form action='" . $mipag . "' method='get'>
		<label>Buscar: <input type='text' name='buscar'/></label>
		<input type='submit' name='enviando' value='¡Dale!'>
		</form> ");
	}

	//

	?>

</body>
</html>