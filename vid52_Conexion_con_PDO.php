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
        try {

            $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
            echo "¡Conexión OK!";
            
        } catch (Exception $e) {

            die('Error: ' . $e->getMessage());
            
        } finally {
            
            $base = null;
            
        }
        ?>
    </body>
</html>
