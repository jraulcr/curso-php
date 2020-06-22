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

        
        //****************PAGINACION**********      
  
            $tamanyo_paginas = 3;
            
            if (isset($_GET['pagina'])) {
                if ($_GET['pagina'] == 1) {
                    header('Location:index.php');
                } else {
                    $pagina = $_GET['pagina'];
                }
            }else{ 
              $pagina = 1;  
            }

            
            $empezar_desde = ($pagina - 1) * $tamanyo_paginas;

            $sql_total = "SELECT * FROM DATOS_USUARIOS";

            $resultado = $base->prepare($sql_total);

            $resultado->execute(array());

            $num_filas = $resultado->rowCount();

            $total_paginas = ceil($num_filas / $tamanyo_paginas);
               
        $registros = $base->query("SELECT * FROM DATOS_USUARIOS LIMIT $empezar_desde, $tamanyo_paginas")->fetchAll(PDO::FETCH_OBJ);

        if (isset($_POST['cr'])) {

            $nombre=$_POST['Nom'];
            $apellido=$_POST['Ape'];
            $direccion=$_POST['Dir'];
            
            $sql="INSERT INTO DATOS_USUARIOS (NOMBRE, APELLIDO, DIRECCION) VALUES (:nom, :ape, :dir)";
            $resultado=$base->prepare($sql);
            $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion));
            
            header('Location:index.php');
        }
        ?>

        <h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

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
<?php foreach ($registros as $persona): ?>

                    <tr>
                        <td><?php echo $persona->Id ?></td>
                        <td><?php echo $persona->Nombre ?></td>
                        <td><?php echo $persona->Apellido ?></td>
                        <td><?php echo $persona->Direccion ?></td>

                        <td class="bot"><a href="borrar.php?Id=<?php echo $persona->Id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
                        <td class="bot"><a href="editar.php?Id=<?php echo $persona->Id ?>&nom=<?php echo $persona->Nombre ?>&ape=<?php echo $persona->Apellido ?>&dir=<?php echo $persona->Direccion ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>

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
         
        <p>&nbsp;</p>
    </body>
</html>