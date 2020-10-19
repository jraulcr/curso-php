<?php

require_once './Person.php';
require_once './Empleado.php';
require_once './Cliente.php';
    
$objEmpleado = new Empleado(123456, "Juan Ruiz", 50);
$objEmpleado->setStrPuesto("Administrador");

echo $objEmpleado->getDatospersonales();
echo "Puesto: ".$objEmpleado->getStrPuesto();

$objCliente = new Cliente(88888, "Bego Pérez", 51);
$objCliente->setFltCredito(1000.50);

echo $objCliente->getDatospersonales();
echo "Créditos: ".$objCliente->getFltCredito();

?>