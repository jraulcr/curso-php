<<<<<<< HEAD
<?php


    require_once("modelo/Productos_modelo.php");
    
    $productos=new Productos_modelo();    
    $matrizProductos=$productos->getProductos();
    
    require_once ("vista/Productos_view.php");


=======
<?php


    require_once("modelo/Productos_modelo.php");
    
    $productos=new Productos_modelo();    
    $matrizProductos=$productos->getProductos();
    
    require_once ("vista/Productos_view.php");


>>>>>>> c1b97b056abcdf8ef6a032c122be8adfbd9f1c80
?>