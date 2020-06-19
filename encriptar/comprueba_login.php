<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Documento sin título</title>
    </head>

    <body>


        <?php
        
        try {

            $login = htmlentities(addslashes($_POST["login"]));

            $password = htmlentities(addslashes($_POST["password"]));

            $contador = 0;
            
            $base = new PDO("mysql:host=localhost;port=3308; dbname=pruebas", "root", "");

            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $base->exec("SET CHARACTER SET utf8");

            $sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login";

            $resultado = $base->prepare($sql);

            $resultado->execute(array(":login" => $login));

            while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

                // echo "Usuario: " . $registro['USUARIOS'] . " Contraseña: " . $registro['PASSWORD'] . "<br>";			
                //Comprobamos si la contraseña insertada es la misma que el de la bb.dd. codificada
                
                //password_verify($password, '$2y$12$m3zHpRRqEa/a62s7yLF3LektfPtiZ38eVenafIcS6Ihm5OTU5BneS');
                
                //NOTA: CUANDO SE CREA LA TABLA, EL DIPO DE DATO HA DE SER AMPLIO DE 255 CARACTERES
                password_verify($password, $registro['PASSWORD']);
                
                if (password_verify($password, $registro['PASSWORD'])) {
                    //echo "true";
                    
                    $contador++;
                }
            }


            if ($contador > 0) {
                
                echo "Usuario registrado";
                
            } else {

                echo "Usuario no registrado";
            }

            $resultado->closeCursor();
            
        } catch (Exception $e) {

            die("Error: " . $e->getMessage());
        }
        ?>
    </body>
</html>