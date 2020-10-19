<?php


class Empleado extends Person{
    
    protected $strPuesto;
    
    public function __construct($intDPI, $strNombre, $intEdad) {
        parent::__construct($intDPI, $strNombre, $intEdad);
        
    }
    
   public function getStrPuesto():string {
        return $this->strPuesto;
    }

   public function setStrPuesto($strPuesto):void {
        $this->strPuesto = $strPuesto;
    }

}
