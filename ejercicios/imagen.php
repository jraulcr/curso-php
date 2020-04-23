<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	$ruta = "https://www.mclibre.org/consultar/php/img/gnu-head-sm.jpg";

	?>
	<img src=" <?php echo $ruta; ?> ">

	    <select>
        <?php
 
        for ($i=1; $i <= 10 ; $i++) {
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
 
        ?>
    </select>

    <?php
    echo '<table border=1>';
 
    // Cabecera (1º fila)
    echo '<tr>';
    echo '<td>X</td>';
 
    for ($i=1; $i <= 10; $i++) { 
        echo '<td>';
        echo $i;
        echo '</td>';
    }
 
    echo '</tr>';
 
    // contenido
 
    //columna vertical
    for ($i=1; $i <= 10; $i++) { 
        echo '<tr>';
        echo '<td>';
        echo $i;
        echo '</td>';
 
        //calculo tabla multiplicar
        for ($j=1; $j <= 10; $j++) { 
             
            echo '<td>';
            echo $i * $j;
            echo '</td>';
 
        }
 
        echo '</tr>';
    }
 
    echo '</table>';
     
?>
</body>
</html>