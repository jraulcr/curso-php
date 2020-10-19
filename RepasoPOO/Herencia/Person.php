<?php

class Person {
    
/*SuperClase*/
    private $intDPI;
    private $strNombre;
    private $intEdad;
    
    public function __construct($intDPI, $strNombre, $intEdad) {
        $this->intDPI=$intDPI;
        $this->strNombre=$strNombre;
        $this->intEdad=$intEdad;        
    }
   
    public function getDatospersonales() {
        $datos="<h2>DATOS PERSONALES</h2>
        DPO: {$this->intDPI}<br/>
        NOMBRE: {$this->strNombre}<br/>
        EDAD: {$this->intEdad}<br/>";
        return $datos;
    }
    
}
