<?php

class Persona {

    //Atributo
    public $nombre = "Pedro";

    //Metodo    
    public function hablar($mensaje) {
        echo $mensaje;
    }
}

$persona = new Persona();
$persona->hablar("Hola mundo PHP");
?>
