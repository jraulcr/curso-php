<?php

class calculadora {

    var $ajuda = "Missatge d’ajuda";
    
    public function __construct() {       
    }
    
    function ajuda() {
        return $this->ajuda;
    }

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
        
         $ajuda = "Hola";
        
        if (isset($clave)) {
            $encripta = md5($clave . $hash);
        } else {
            $encripta = NULL;
        }
        return $encripta;
    }

    public function __destruct() {
        $this->ajuda();
    }
    
    
}

$calcula = new calculadora();
$operacion = $calcula->suma(5, 4);
echo $operacion;

//*************************************************//

echo '<br/>';
echo '<br/>';
$calcula = new calculadora();
echo $calcula->suma(1, 1);
echo '<br/>';
echo $calcula->resta(3, 1);
echo '<br/>';
echo $calcula->producte(2, 2);
echo '<br/>';
echo $calcula->divisio(10, 5);

echo '<br/>';
$encripta = new calculadora();
echo $encripta->encriptaLaClau("Unitat Formativa UF1844");

echo '<br/>';

echo $encripta->ajuda;

?>

