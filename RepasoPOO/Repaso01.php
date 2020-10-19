<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 01Repaso
 *
 * @author Mabera
 */
class Persona {
    //Atributo o propiedad
    public $nombre = "Raul";
    //Metodo o caracteristica
    public function hablar($mensaje) {
        echo $mensaje;
    }
}

$persona = new Persona();
$persona->hablar("Saludos cordiales");

?>