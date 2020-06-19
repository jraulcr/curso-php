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
        <style> 
            h1{
                text-align: center;

            }
            table {
                width: 25%;
                background-color: #ffc;
                border: 2px dashed #f00;
                margin:20px auto;
            }

            .izq{text-align: right;}
            .der{text-align: left;}

            td{text-align: center;
               padding: 10px;}


            table.fotos{
                margin: auto;
            }
        </style>
    </head>
    <body>
        <?php
        if (isset($_POST['enviar'])) {
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

                    // header("location:usuarios_registrados1.php");
                } else {
                    //redirigimos a la pagina de login 
                    //header("location:login.php");

                    echo "Error. Usuario o contraseña incorrectos.";
                }
            } catch (Exception $e) {
                die("Error: " . $e->getMessage());
            }
        }
        ?>

        <?php
        if (!isset($_SESSION['usuario'])) {
            include './formulario.html';
        } else {
            echo "Usuario: " . $_SESSION['usuario'];
        }
        ?>
        <table class='fotos'>
            <thead>
                <tr>
                    <th colspan="2"><h2>Contenido de la web</h2></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <img src="img/imagen1.jpg" alt="" width="auto" height="200px"></td>
                    <td> <img src="img/imagen2.jpg" alt="" width="auto" height="200px"></td>
                </tr>
                <tr>
                    <td> <img src="img/imagen3.jpg" alt="" width="auto" height="200px"></td>
                    <td> <img src="img/imagen4.jpg" alt="" width="auto" height="200px"></td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
