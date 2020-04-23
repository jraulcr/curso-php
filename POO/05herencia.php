<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 05herencia
 *
 * @author Milami
 */
class Vehiculo {

    public $motor = false;
    public $marca;
    public $color;

    public function estado() {
        if ($this->motor) {
            echo "Esta encendido<br/>";
        } else {
            echo "Esta apagado<br/>";
        }
    }

    public function encender() {
        if ($this->motor) {
            echo "Cuidado, ya esta encendido<br/>";
        } else {
            echo "El motor ahora esta encendido<br/>";
            $this->motor = true;
        }
    }

}

class Moto extends Vehiculo {

    public function estadoMoto() {
        $this->estado();
    }

}

class Cuatrimoto extends Moto {    
}

$moto = new Cuatrimoto();
$moto->estado();
