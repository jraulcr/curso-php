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
            table {
                width: 50%;
                border:1px solid #000;
                border-collapse: collapse;
            }
            td, th{
                border:1px solid #000;
                width:200px;
                height: 100px;
            }
            th {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
        session_start();
        if (!isset($_SESSION['usuario'])) {
            header('location:login.php');
        }
        ?>

        <h1>Bienvenidos usuarios</h1>

        <?php
        echo "Hola: " . $_SESSION['usuario'] . "<br><br>";
        ?>

        <p><a href="cierre.php">Cerrar sesión</a></p> 

        <table class="tg">
            <thead>

                <tr>
                    <th class="tg-0pky" colspan="4">Zona usuarios registrados</th>
                </tr>
                <tr>
                    <td class="tg-0pky"><a href="usuarios_registrados2.php">Página 1</a></td>
                    <td class="tg-0pky"><a href="usuarios_registrados3.php">Página 2</a></td>
                    <td class="tg-0pky"><a href="usuarios_registrados4.php">Página 3</a></td>
                </tr>
        </table>

        <p>Esto es información es para usuarios registrados</p>
    </body>
</html>
