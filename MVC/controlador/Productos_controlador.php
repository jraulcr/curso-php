<?php


    require_once("modelo/Productos_modelo.php");
    
    $productos=new Productos_modelo();    
    $matrizProductos=$productos->getProductos();
    
    require_once ("vista/Productos_view.php");


?>