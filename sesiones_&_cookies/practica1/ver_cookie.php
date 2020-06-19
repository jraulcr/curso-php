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
        if (!$_COOKIE['idioma_seleccionado']) {
            header('Location:pag1.php');
        } elseif ($_COOKIE['idioma_seleccionado'] == 'es') {
            header('Location:spanish.php');
        } elseif ($_COOKIE['idioma_seleccionado'] == 'en') {
            header('Location:english.php');
        }
        ?>
    </body>
</html>
