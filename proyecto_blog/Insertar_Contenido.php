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
        <?php
        $miconexion = mysqli_connect('localhost', 'root', '', 'bddblog');
        //Conprobar conexion

        if (!$miconexion) {
            echo 'La conexión ha fallado' . mysqli_error();
            die('Connect Error: ' . mysqli_connect_errno());
            exit();
        }

        if ($_FILES['imagen']['error']) {

            //Ver las posibles consecuencias de error en la API de PHP
            switch ($_FILES['imagen']['error']) {
                
                case 1: //Error exceso de tamaño de archivo en php.ini
                    echo 'El tamaño del archivo excede lo permitido por el servidor';

                    break;

                case 2: //Error tamaño archivo marcado desde formulario (imput hidden)

                    echo 'El tamaño del archivo excede 2 MB';

                    break;

                case 3: //corrupcion de archivo

                    echo 'El envío del archivo se interrumpió';

                    break;

                case 4: //No hay archivo

                    echo 'No se ha enviado ningún archivo';

                    break;
            }
            
        }else{
            
            echo 'Entrada subida correctamente<br/>';
            
            if((isset($_FILES['imagen']['nombre']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK))){
                $destino_ruta='imagenes/';
                move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_ruta . $_FILES['imagen']['name']);
                echo 'El archivo ' .  $_FILES['imagen']['name'] . ' se ha copiado en el directorio de imágenes';
                
            }else{
                
                echo 'El archivo no se ha podido copiar al directorio de imágenes';
                            
            }
        }
        
        $miconsulta="INSERT INTO CONTENIDO (TITULO, FECHA, COMENTARIO, IMAGEN) VALUES ('Titulo', 'Fecha', 'Comentario', 'Imagen')";
        
        
        ?>
    </body>
</html>
