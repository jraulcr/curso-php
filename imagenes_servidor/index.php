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
            table{
                margin:auto;
                width: 450px;
                border:2px dotted red;
               
            }
            
        </style>
        
        
    </head>
    <body>
        <form action="datosImagen.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="imagen">Imagen: </label></td>
                    <td><input type="file" name="imagen" size="20"></td></tr>
                    <tr><td colspan="2" style="text-align: center;"><input type="submit" value="Enviar imagen"></td>
                </tr>
            </table> 



        </form>

    </body>
</html>
