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
        <h2>Blog</h2>
        <hr/>
        <?php
        $miconexion = mysqli_connect('localhost', 'root', '', 'bbddblog', 3306);
        if (!$miconexion) {
            echo 'La conexión ha fallado: ' . mysqli_error();
        }

        $miconsulta = "SELECT * FROM CONTENIDO ORDER BY FECHA DESC";

        if ($resultado = mysqli_query($miconexion, $miconsulta)) {

            while ($registro = mysqli_fetch_assoc($resultado)) {

                echo "<h3>" . $registro['Titulo'] . "</h3>";
                echo "<h4>" . $registro['Fecha'] . "</h4>";
                echo "<div style='whidth:400px'>" . $registro['Comentario'] . "</div><br/><br/>";

                if ($registro['Imagen'] != "") {

                    echo "<img src='imagenes/" . $registro['Imagen'] . "' width='300px' alt=''>";
                }

                echo '<hr/>';
            }
        }
        ?>


    </body>
</html> 
