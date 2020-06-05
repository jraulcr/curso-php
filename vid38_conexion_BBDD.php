<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            table {
                width:50%;
                border:1px dotted #ff0000;
                margin:auto;
            }
        </style>
    </head>
    <body>

        <?php
        require ("datosConexionBBDD.php");

        //$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

        //Si ha fallado la conexion con la BB.DD. p.e.: en vez de 'localhost' se escribe 'localhossst'
        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la BBDD";
            //Sale del codigo PHP
            exit();
        }

        //Especificar la base de datos en que queremos conectarnos
        mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
        //Utilizar los caracteres latinos
        mysqli_set_charset($conexion, "utf8");
        $consulta = "select * from productos where paisdeorigen='españa'";
        //Resultset
        $resultados = mysqli_query($conexion, $consulta);

        //  while ($fila = mysqli_fetch_row($resultados)) {
        while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
            echo "<table><tr><td>";
            echo $fila['CODIGOARTICULO'] . "</td><td>";
            echo $fila['NOMBREARTICULO'] . "</td><td>";
            echo $fila['SECCION'] . "</td><td>";
            echo $fila['IMPORTADO'] . "</td><td>";
            echo $fila['PRECIO'] . "</td><td>";
            echo $fila['PAISDEORIGEN'] . "";
            /*echo $fila[0] . "</td><td>";
              echo $fila[1] . "</td><td>";
              echo $fila[2] . "</td><td>";
              echo $fila[3] . "</td><td>";
              echo $fila[4] . "</td><td>";
              echo $fila[5] . "</td><td>";
              echo $fila[6] . "</td></tr></table>"; */
            echo "</td></tr></table><br> ";
        }
        mysqli_close($conexion);
        ?>
    </body>
</html>


