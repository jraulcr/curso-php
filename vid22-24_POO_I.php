<?php

class Coche {

    //Propiedades o atributos (Caracteristiras);
    var $ruedas;
    var $color;
    var $motor;

    //function Coche(){  //Es declarado obsoleto en PHP7. (ver manual PHP)
    //Metodo Constructor
    function __construct() {
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = "1600";
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
        $this -> color = $color_coche;
        echo "El color del " . $nombre_coche . "  es: " . $this->color . "<br>";        
    }    
}

$renault = new Coche(); //(Instancias o ejemplares)estado inicial al objeto o instancia

$mazda = new Coche();

$seat = new Coche();

$renault->establece_color("Rojo", "Renault");

$seat->establece_color("Verde", "Seat");

//$mazda->girar();

//echo $mazda->ruedas;

?>