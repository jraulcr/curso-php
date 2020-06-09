<?php

class Compra_vehiculo {

    private $precio_base;
    private static $ayuda = 0;

    function __construct($gama) {

        if ($gama == "urbano") {

            $this->precio_base = 10000;
        } else if ($gama == "compacto") {

            $this->precio_base = 20000;
        } else if ($gama == "berlina") {

            $this->precio_base = 30000;
        }
    }

// fin constructor

    static function descuento_gobierno() {

        if (date("m-d-y") > "03-01-2020") {
            self::$ayuda = 4500;
        }
    }

    function climatizador() {


        $this->precio_base += 2000;
    }

// fin climatizador

    function navegador_gps() {

        $this->precio_base += 2500;
    }

//fin navegador gps

    function tapiceria_cuero($color) {

        if ($color == "blanco") {

            $this->precio_base += 3000;
        } else if ($color == "beige") {

            $this->precio_base += 3500;
        } else {

            $this->precio_base += 5000;
        }
    }

// fin tapicería

    function precio_final() {

        $valor_final = $this->precio_base - self::$ayuda;

        return $valor_final;
    }

// fin precio final
}

// fin clase
?>