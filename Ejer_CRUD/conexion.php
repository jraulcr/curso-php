<?php

try {

    //$base = new PDO('mysql:host=localhost; port=3308; dbname=pruebas', 'root', '');
    $base = new PDO('mysql:host=localhost;  dbname=pruebas', 'root', '');

    //ATRIBUTOS QUE VA A ESTABLECER LA CONEXION (eSTABLECER LA NATURALEZA DE EXCEPCIONES DE ERROR)
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("SET CHARACTER SET UTF8");
} catch (Exception $e) {

    die('Error' . $e->getMessage());

    echo "Linea del error " . $e->getLine();
} finally {
    
}
?>
