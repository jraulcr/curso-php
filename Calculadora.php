<?php

class calculadora {

    var $ajuda = "Missatge d’ajuda";

    /*function ajuda() {
        return $valor1*$valor2;
    }*/

    function suma($valor1, $valor2) {
        return $valor1 + $valor2;
    }

    function resta($valor1, $valor2) {

        return $valor1 - $valor2;
    }

    function producte($valor1, $valor2) {

        return $valor1 * $valor2;
    }

    function divisio($valor1, $valor2) {
        return $valor1 / $valor2;
    }

    function encriptaLaClau($clave) {
        $hash = "123Abc-";
        
        if (isset($clave)) {
            $encripta = md5($clave . $hash);
        } else {
            $encripta = NULL;
        }
        return $encripta;
    }

}

$calcula = new calculadora();
$operacion = new calculadora();

echo $calcula->suma(2, 4);

?>

