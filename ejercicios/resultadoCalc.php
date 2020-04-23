<style>
    
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>

<?php

if (isset($_POST["calcular"])) {

$operacion= $_POST["lista"];
    
function resultado() {    
    
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
global $operacion;
//echo $operacion;

$res = 0;

switch ($operacion) {    
    case "sumar":
        $res = $num1 + $num2 ;
        break;
        case "restar":
        $res = $num1 - $num2 ;
        break;
        case "multiplicar":
        $res = $num1 * $num2 ;
        break;
        case "dividir":
        $res= $num1 / $num2 ;
        break;
    default :
        $res = $num1 % $num2 ;
}

return $res;

}

//echo resultado();
}
?>

<label for="resultado">El resultado de <?php echo $operacion?> es: <input type="number" readonly="readonly"  value="<?=resultado()?>" id="resultado"/></label>

