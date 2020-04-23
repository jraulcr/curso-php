<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 03constructor_destructor
 *
 * @author Milami
 */
class Loteria {

    public $numero;
    public $intentos;
    public $resultado = false;

    public function __construct($numero, $intentos) {
        $this->numero = $numero;
        $this->intentos = $intentos;
    }

    public function sortear() {
        $minimo = $this->numero / 2;
        $maximo = $this->numero * 2;
        for ($i = 0; $i < $this->intentos; $i++) {
            $numRand = rand($minimo, $maximo);
            $this->intentos($numRand);
        }
    }

    public function intentos($numRand) {
        if ($numRand == $this->numero) {
            echo "<b>" . $numRand . " " . $this->numero . " </b><br/>";
            $this->resultado = true;
        } else {
            echo $numRand . " != " . $this->numero . " <br/>";
        }
    }

    public function __destruct() {
        if ($this->resultado) {
            echo "Felicidades, has ganado en " . $this->intentos . " intentos";
        } else {
            echo "Lo siento, has perdido en " . $this->intentos . " intentos";
        }
    }
}

$loteria = new Loteria(10, 5);
$loteria->sortear();