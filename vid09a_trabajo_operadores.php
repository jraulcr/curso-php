<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sin título</title>
        <style>
            h1{
                text-align:center;
            }

            table{
                background-color:#FFC;
                padding:5px;
                border:#666 5px solid;
            }

            .no_validado{
                font-size:18px;
                color:#F00;
                font-weight:bold;
            }

            .validado{
                font-size:18px;
                color:#0C3;
                font-weight:bold;
            }
        </style>
    </head>

    <body>
        <h1>USANDO OPERADORES COMPARACIÓN</h1>
        <!--Sin pag validación-->
        <!--<form action="#" method="post" name="datos_usuario" id="datos_usuario">-->
        <!--Con pag validación-->
        <form action="vid09b_validacion.php" method="post" name="datos_usuario" id="datos_usuario">
            <table width="15%" align="center">
                <tr>
                    <td>Nombre:</td>
                    <td><label for="nombre_usuario"></label>
                        <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
                </tr>
                <tr>
                    <td>Edad:</td>
                    <td><label for="edad_usuario"></label>
                        <input type="text" name="edad_usuario" id="edad_usuario"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
                </tr>
            </table>
        </form>

        <?php
        //Comprobar si se ha pulsado o no el boton de envío
        if (isset($_POST["enviando"])) {
            $usuario = $_POST["nombre_usuario"];
            $edad = $_POST["edad_usuario"];

            if ($usuario == "Juan" && $edad >=18) {
                echo "<p class='validado'>Puedes entrar</p>";
            } else {
                echo "<p class=\"no_validado\">No puedes entrar</p>";
            }
        }
        ?>

    </body>
</html>