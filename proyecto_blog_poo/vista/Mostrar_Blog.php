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
        
         include_once '../modelo/Manejo_Objetos.php';
         
         
                 try {

            $miconexion = new PDO('mysql:host=localhost; dbname=bbddblog; port=3306 ', 'root', '');
            $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $Manejo_Objetos = new Manejo_Objetos($miconexion);
            
            $tabla_blog=$Manejo_Objetos->getContenidoPorFecha();
            
            if(empty($tabla_blog)) {
                echo 'No hay entradas de blog aún';
            }else{
                foreach ($tabla_blog as $valor) {
                    echo '<h3>' . $valor->getTitulo() . '</h3>';
                    echo '<h4>' . $valor->getFecha() . '</h4>';
                    echo '<div style="width:400px;">' . $valor->getComentario() . '</div>';
                    
                    if($valor->getImagen()!=""){
                        
                        echo "<img src='../imagenes" . $valor->getImagen() . "' width='300px' alt=''>";
                    }
                    
                    echo '<hr/>';
                }
            }
            
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }

        ?>
        
        <br/>
        
        <a href="Formulario.php">Volver a la página de inserción</a>
    </body>
</html>
