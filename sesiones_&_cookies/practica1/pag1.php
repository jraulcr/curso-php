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
            .demo {
                width:25%;
                border:1px solid #C0C0C0;
                border-collapse:collapse;
                padding:5px;
                margin: auto;
            }
            .demo th {
                border:1px solid #C0C0C0;
                padding:5px;
                background:#F0F0F0;
            }
            .demo td {
                border:1px solid #C0C0C0;
                text-align:center;
                padding:5px;
            }
        </style>
    </head>
    <body>

        <?php
        if ($_COOKIE['idioma_seleccionado']) {
            if ($_COOKIE['idioma_seleccionado'] == 'es') {
                header('Location:spanish.php');
            } elseif ($_COOKIE['idioma_seleccionado'] == 'en') {
                header('Location:english.php');
            }
        }
        ?>


        <table class="demo">
            <thead>
                <tr>
                    <th colspan="2">Elige idioma</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="creaCookie.php?idioma=es"><img src="img/esp.jpg" alt="esp" width="60px"></a></td>
                    <td><a href="creaCookie.php?idioma=en"><img src="img/eng.jpg" alt="eng"  width="60px"></a></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
