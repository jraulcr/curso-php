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
        
         require ("./datosConexionBBDD.php");
         $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
         // Evitamos la inyeccion SQL para averiguar externamente los datos 
         //ej Si insertan en el campo contraseña caracteres ' or '1'='1 - 'DELETE FROM USUARIOS WHERE USUARIO = 'Maria' and CONTRA='\' or \'1\'=\'1'
         $usuario = mysqli_real_escape_string($conexion, $_GET["usu"]);
         $contra = mysqli_real_escape_string($conexion, $_GET["con"]);

        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la BB.DD.";
            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BB.DD.");
        mysqli_set_charset($conexion, "utf8");

        $consulta = "DELETE FROM USUARIOS WHERE USUARIO = '$usuario' and CONTRA='$contra'";

        echo "$consulta<br><br>";

        mysqli_query($conexion, $consulta);        
        
        if (mysqli_affected_rows($conexion)>0) {

            echo "Baja procesada";
            
        }else{
             echo "No se ha encontrado usuario";
        }     
        
        mysqli_close($conexion);
        ?>
    </body>
</html>
