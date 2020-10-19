<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 02Repaso
 *
 * @author Mabera
 */
class Persona {

    //Atributos
    public $nombre = array();
    public $apellido = array();

    //Metodos
    public function guardar($nombre, $apellido) {
        $this->nombre[] = $nombre;
        $this->apellido[] = $apellido;
    }

    public function mostrar() {
        for ($i = 0; $i < count($this->nombre); $i++) {
            //$this->formato($this->nombre[$i], $this->apellido[$i]);
            self::formato($this->nombre[$i], $this->apellido[$i]);
        }
    }

    public function formato($nombre, $apellido) {
        echo 'Nombre: ' . $nombre . " | Apellidos: " . $apellido . "<br/>";
    }
}

$persona = new Persona();
$persona->guardar('Juan', 'Ruiz');
$persona->guardar('Bego', 'Ferreras');
$persona->mostrar();
?>