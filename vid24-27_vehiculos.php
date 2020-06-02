<?php

class Coche {

    //Propiedades o atributos (Caracteristiras);
    protected $ruedas;
    var $color;
    var $motor;

    //function Coche(){  //Es declarado obsoleto en PHP7. (ver manual PHP)
    //Metodo Constructor
    function __construct() {
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = "1600";
    }

    function getRuedas() {
        return $this->ruedas;
    }

    function getColor() {
        return $this->color;
    }

    function getMotor() {
        return $this->motor;
    }

        
    //Funcionalidades o metodos
    function arrancar() {//Ver las propiedades del objeto
        echo "Estoy arrancando<br>";
    }

    function girar() {
        echo "Estoy girando<br>";
    }

    function frenar() {
        echo "Estoy frenando<br>";
    }

    function establece_color($color_coche, $nombre_coche) {
        $this->color = $color_coche;
        echo "El color del " . $nombre_coche . "  es: " . $this->color . "<br>";
    }

}

//***********************************

class Camion extends Coche {

    //Metodo Constructor
    function __construct() {
        $this->ruedas = 8;
        $this->color = "Gris";
        $this->motor = "2600";
    }

//Sobreescritura de metodos (Reutilizar el metodo o funcion exixtente heredada 
//de la clase Coche con diferentes parametros y comportamientos)

    function establece_color($color_camion, $nombre_camion) {
        $this->color = $color_camion;
        echo "El color del " . $nombre_camion . "  es: " . $this->color . "<br>";
    }

    function arrancar() {   //Ver las propiedades del objeto
        parent::arrancar();
        echo "Camión arrancando<br>";
    }
}

?>