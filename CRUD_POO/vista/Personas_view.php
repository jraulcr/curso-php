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
        require ("modelo/paginacion.php");
        ?>
        
       <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

            <table width="50%" border="0" align="center">
                <tr >
                    <td class="primera_fila">Id</td>
                    <td class="primera_fila">Nombre</td>
                    <td class="primera_fila">Apellido</td>
                    <td class="primera_fila">Dirección</td>
                    <td class="sin">&nbsp;</td>
                    <td class="sin">&nbsp;</td>
                    <td class="sin">&nbsp;</td>
                </tr> 
<?php foreach ($matrizPersonas as $persona): ?>

                    <tr>
                        <td><?php echo $persona["Id"] ?></td>
                        <td><?php echo $persona["Nombre"] ?></td>
                        <td><?php echo $persona["Apellido"] ?></td>
                        <td><?php echo $persona["Direccion"] ?></td>

                        <td class="bot"><a href="borrar.php?Id=<?php echo $persona["Id"] ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
                        <td class="bot"><a href="editar.php?Id=<?php echo $persona["Id"] ?>&nom=<?php echo $persona["Nombre"] ?>&ape=<?php echo $persona["Apellido"] ?>&dir=<?php echo $persona["Direccion"] ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>

                    </tr> 

    <?php endforeach; ?>

                <tr>
                    <td></td>
                    <td><input type='text' name='Nom' size='10' class='centrado'></td>
                    <td><input type='text' name='Ape' size='10' class='centrado'></td>
                    <td><input type='text' name='Dir' size='10' class='centrado'></td>
                    <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
                </tr> 
                <tr>
                    <td colspan="4">
                        
        <?php        
                //*********************PAGINACION*********************************

         for ($i = 1; $i <= $total_paginas; $i++) {

            echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
        } 
        ?>     
                        
                    </td>
                </tr>    
            </table>
        </form>
         
    </body>
</html>
