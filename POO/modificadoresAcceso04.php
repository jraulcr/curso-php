<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 04modificadoresAcceso
 *
 * @author Milami
 */
class Facebook {

    public $nombre;
    public $edad;
    private $password;

    function __construct($nombre, $edad, $password) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->password = $password;
    }

    public function verInformacion() {
        echo 'Nombre: ' . $this->nombre . '<br/>';
        echo 'Edad: ' . $this->edad . '<br/>';
        $this->cambiarPassword("54321");
        echo 'Password: ' . $this->password . '<br/>';
    }

    private function cambiarPassword($password) {
        $this->password = $password;
    }
}

$facebook = new Facebook("Raul", 50, "12345");
$facebook->verInformacion();
