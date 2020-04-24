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
                $this->color = "Gris";
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
            
            function establece_color($color_coche, $nombre_coche){
                $this->color=$color_coche;
                 echo "El color de " .$nombre_coche . " es: " . $this->color . "<br>";       
            }
        }

        //invocacion de objetos o instancia
       /* $renault = new Coche();
        $mazda = new Coche();
        $seat = new Coche();
        $renault->establece_color("Rojo", "Renault" );
        $seat->establece_color("Azul", "Seat" );*/
        
      //  $mazda->girar();
        
      //  echo $mazda->ruedas;
        
      //--------------------------------------------------------------
        
        class Camion {

            //propiedades
            var $ruedas;
            var $color;
            var $motor;

            //Metodo constructor 
            function __construct() { //se le da un valor inicial
                $this->ruedas = 8;
                $this->color = "Gris";
                $this->motor = 2600;
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
            
           /* function establece_color($color_coche, $nombre_coche){
                $this->color=$color_coche;
                 echo "El color de " .$nombre_coche . " es: " . $this->color . "<br>";       
            }*/
        }
        
        
        
        
        
        
        
        
        
        
        ?>
    </body>
</html>