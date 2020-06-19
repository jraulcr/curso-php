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
            session_start();
            if(!isset($_SESSION['usuario'])){
                header('location:login.php');
            }
            
        ?>
        
        <h1>Bienvenidos usuarios</h1>
        
        <?php
            echo "Usuario: " . $_SESSION['usuario'] . "<br><br>";
        ?>
        
        <p><a href="cierre.php">Cerrar sesión</a></p> 

        <p>Esto es información es para usuarios registrados</p>
        <a href="usuarios_registrados1.php">Volver</a>
    </body>
</html>
