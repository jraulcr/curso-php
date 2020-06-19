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
        // put your code here
        try {
            //Datos de conexión
            $base = new PDO("mysql:host=localhost;port=3308; dbname=pruebas", "root", "");

            //Establecemos las propiedades de esta conexion:
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIOS=:login AND PASSWORD=:password";

            $resultado = $base->prepare($sql);

            //Rescatamos los datos del login y password
            //'htmlentities' = convierte cualquier simbolo en html (comillas, guiones...)       
            //'addslashes' = escapar cualquier caracter extraño (comillas, guiones...) para evitar caracteres extraño para evitar inyeccion sql

            $login = htmlentities(addslashes($_POST['login']));
            $password = htmlentities(addslashes($_POST['password']));

            //'bindParam' Cuando utilizamos parametros '?' en la sentencia sql
            //'bindValue'  Cuando utilizamos valores ':valor' en la sentencia sql 
            $resultado->bindValue(":login", $login);
            $resultado->bindValue(":password", $password);

            $resultado->execute();

            //'rowCount()' devuelve el numero de filas que contiene en la bb.dd.,
            // una vez ejecutado la sentencia 'execute'

            $numero_registro = $resultado->rowCount();

            // echo $numero_registro;

            if ($numero_registro != 0) {

                session_start();

                $_SESSION['usuario'] = $_POST['login'];

                // echo "<h2>Adelante</h2>";
                header("location:usuarios_registrados1.php");
            } else {
                //redirigimos a la pagina de login 
                header("location:login.php");
            }
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
        ?>
    </body>
</html>
