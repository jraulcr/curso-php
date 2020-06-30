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
        try {

            $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec('SET CHARACTER SET UTF8');

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

            $sql_total = "SELECT NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE SECCION='DEPORTES'";

            $resultado = $base->prepare($sql_total);

            $resultado->execute(array());

            $num_filas = $resultado->rowCount();

            $total_paginas = ceil($num_filas / $tamanyo_paginas);

            echo 'Número de registros de la consulta: ' . $num_filas . '<br>';
            echo 'Mostramos ' . $tamanyo_paginas . '<br>';
            echo 'Mostrando la página ' . $pagina . ' de ' . $total_paginas . '<br><br>';

            $resultado->closeCursor();

            $sql_limite = "SELECT NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE SECCION='DEPORTES' LIMIT $empezar_desde, $tamanyo_paginas";

            $resultado = $base->prepare($sql_limite);

            $resultado->execute(array());

            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

                echo 'Nombre articulo: ' . $registro['NOMBREARTICULO']
                . '  Nombre sección: ' . $registro['SECCION']
                . '  Precio: ' . $registro['PRECIO']
                . '  País de origen: ' . $registro['PAISDEORIGEN'] . '<br>';
            }
        } catch (Exception $e) {
            echo 'Linea del error ' . $e->getLine();
        }

        //*********************PAGINACION*********************************

        for ($i = 1; $i <= $total_paginas; $i++) {

            echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
        }
        ?>

    </body>
</html>
