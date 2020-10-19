<?php

require_once './Person.php';

class Cliente extends Person{
    
    protected $fltCredito;
    
    public function __construct($intDPI, $strNombre, $intEdad) {
        parent::__construct($intDPI, $strNombre, $intEdad);        
    }
    
    function getFltCredito():float {
        return $this->fltCredito;
    }

    function setFltCredito($fltCredito): void {
        $this->fltCredito = $fltCredito;
    }

}
