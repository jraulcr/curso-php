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
         include './conexion.php';
         $Id=$_GET['Id'];
         $base->query("DELETE FROM DATOS_USUARIOS WHERE ID='$Id'");
         
         header('Location:index.php');
        ?>
    </body>
</html>
