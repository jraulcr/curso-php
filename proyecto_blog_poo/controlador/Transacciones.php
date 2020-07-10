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
        include_once '../modelo/Objeto_Blog.php';
        include_once '../modelo/Manejo_Objetos.php';

        try {

            $miconexion = new PDO('mysql:host=localhost; dbname=bbddblog; port=3306 ', 'root', '');
            $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


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
            } else {

                echo 'Entrada subida correctamente<br/>';

                if ((isset($_FILES["imagen"]["name"]) && ($_FILES["imagen"]["error"] == UPLOAD_ERR_OK))) {

                    $destino_ruta = '../imagenes/';
                    
                    move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_ruta . $_FILES["imagen"]["name"]);
                    echo 'El archivo ' . $_FILES["imagen"]["name"] . ' se ha copiado en el directorio de imágenes<br/>';
                } else {

                    echo 'El archivo no se ha podido copiar al directorio de imágenes<br/>';
                }
            }
            
            
            $Manejo_Objetos= new Manejo_Objetos($miconexion);
            $blog=new Objeto_Blog();
            $blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));
            $blog->setFecha(Date("Y-m-d H:m:s"));
            $blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));
            $blog->setImagen($_FILES["imagen"]["name"]);
            
            $Manejo_Objetos->insertaContenido($blog);
            
            echo 'Entrada de blog agregada con éxito';
            
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
        
        
        ?>
    </body>
</html>
