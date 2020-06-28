<?php

$nombre_imagen = $_FILES['imagen']['name'];
$tipo_imagen = $_FILES['imagen']['type'];
$tamagno_imagen = $_FILES['imagen']['size'];


if ($tamagno_imagen <= 3000000) {

    if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/gif") {

//Ruta de la carpeta destino en servidor

        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';
echo  $carpeta_destino;
//Movemos la imagen del directorio temporal al directorio escogido

        move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino . $nombre_imagen);
    } else {
        echo "Solo se puede subir imagenes";
    }
} else {
    echo "El tamaño es demasiado grande";
}


    require ("datosConexionBBDD.php");

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
        
        if(mysqli_connect_errno()){
            echo "Fallo al conectar la BB.DD";
            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die ('No se encuentra la BB.DD');
        
        mysqli_set_charset($conexion, "utf8");         
      
        $sql = "INSERT INTO PRODUCTOS (FOTO) VALUES ('$nombre_imagen')";
        $resultado = mysqli_query($conexion, $sql);        

echo $nombre_imagen;

?>