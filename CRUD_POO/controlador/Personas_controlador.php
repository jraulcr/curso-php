<?php


    require_once("modelo/Personas_modelo.php");
    
    $persona=new Personas_model();    
    $matrizPersonas=$persona->getPersonas();
    
    require_once ("vista/Personas_view.php");


?>