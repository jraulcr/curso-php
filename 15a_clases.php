<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>document</title>
    </head>
    <body>
        <?php

        //objetos tienen propiedades y funciones

        class Coche {

            //propiedades
            var $ruedas;
            var $color;
            var $motor;

            //Metodo constructor 
            function __construct() { //se le da un valor inicial
                $this->ruedas = 4;
                $this->color = "";
                $this->motor = 1400;
            }

            //funcionalidades            
            function arrancar() {
                echo "Estoy arrancando<br>";
            }

            function girar() {
                echo "Estoy girando<br>";
            }

            function frenar() {
                echo "Estoy frenando<br>";
            }

        }

        //invocacion de objetos o instancia
        $renault = new Coche();
        $mazda = new Coche();
        $seat = new Coche();
        
        $mazda->girar();
        
        echo $mazda->ruedas;
        
        ?>
    </body>
</html>