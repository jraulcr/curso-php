
        <?php
        include ("./vid24-29_vehiculos.php");
        $mazda =  new Coche();
        $pegaso =  new Camion();
        
        echo "El Mazda tiene " . $mazda->getRuedas() . " ruedas<br>";
        echo "El Pegaso tiene " . $pegaso->getRuedas() . " ruedas<br>";
        echo "El Mazda tiene un motor de " . $mazda->getMotor() . " ruedas<br>";

        /*echo "El Mazda tiene " . $mazda->ruedas . " ruedas<br>";
        echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas<br>";*/

        
        ?>

