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

        setcookie('prueba', 'Esta es la informacion de la nueva cookie', time()+300, "/CursoPHP/sesiones_%26_cookies/zona_contenidos/");
        //time()establece el tiempo en que la cockie se ha activado en el momento que se inicia. Si añadimos
        //por ejemplo+30, en este caso se le añade 30sg desde que se inicia
        //ejecutamos la página y no la cerramos. cuando ejecutemos la segunda pagina leera el contenido de la primera
        ?>
    </body>
</html>
