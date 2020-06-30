<?php

        $nombre_archivo = $_FILES['archivo']['name'];
        $tipo_archivo = $_FILES['archivo']['type'];
        $tamagno_archivo = $_FILES['archivo']['size'];


        if ($tamagno_archivo <= 3000000) {


        //Ruta de la carpeta destino en servidor
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';

        //Movemos el archivo del directorio temporal al directorio escogido
            move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta_destino . $nombre_archivo);
        } else {
            echo "El tamaño es demasiado grande";
        }

        require ("datosConexionBBDD.php");

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

        if (mysqli_connect_errno()) {
            echo "Fallo al conectar la BB.DD";
            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die('No se encuentra la BB.DD');

        mysqli_set_charset($conexion, "utf8");

        //Abrimos flujo datos
        $archivo_objetivo = fopen($carpeta_destino . $nombre_archivo, "r");
        //"r" significa 'modo lectura'

        $contenido = fread($archivo_objetivo, $tamagno_archivo);

        $contenido = addslashes($contenido);

        //Cerramos flujo
        fclose($archivo_objetivo);

        $sql = "INSERT INTO ARCHIVOS (Id, Nombre, Tipo, Contenido) VALUES (0, '$nombre_archivo', '$tipo_archivo', '$contenido')";

        $resultado = mysqli_query($conexion, $sql);

        // echo mysqli_affected_rows($conexion);

        if (mysqli_affected_rows($conexion) > 0) {

            echo "Se ha registrado el registro con éxito";
        } else {

            echo "No se ha insertado";
        }

        mysqli_close($conexion);
?>