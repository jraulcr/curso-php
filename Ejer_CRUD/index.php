<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link rel="stylesheet" type="text/css" href="hoja.css">
    </head>

    <body>
        <?php
        include './conexion.php';
       // $conexion=$base->query('SELECT * FROM DATOS_USUARIOS');
       // $registros=$conexion->fetchAll(PDO::FETCH_OBJ);
        
        $registros=$base->query('SELECT * FROM DATOS_USUARIOS')->fetchAll(PDO::FETCH_OBJ);
      
        ?>

        <h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

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
<?php
    foreach ($registros as $persona): ?>

            <tr>
                <td><?php echo $persona->Id?></td>
                <td><?php echo $persona->Nombre?></td>
                <td><?php echo $persona->Apellido?></td>
                <td><?php echo $persona->Direccion?></td>

                <td class="bot"><a href="borrar.php?Id=<?php echo $persona->Id?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
                <td class='bot'><a href="editar.php?Id=<?php echo $persona->Id?>"> & <?php echo $persona->Nombre?>">& <?php echo $persona->Apellido?>"> & & <?php echo $persona->Direccion?>"><input type='button' name='up' id='up' value='Actualizar'></td>
            </tr> 
	
    <?php 
        endforeach; ?>
            
            <tr>
                <td></td>
                <td><input type='text' name='Nom' size='10' class='centrado'></td>
                <td><input type='text' name='Ape' size='10' class='centrado'></td>
                <td><input type='text' name='Dir' size='10' class='centrado'></td>
                <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
        </table>

        <p>&nbsp;</p>
    </body>
</html>