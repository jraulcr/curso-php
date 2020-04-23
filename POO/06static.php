<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of 06static
 *
 * @author Milami
 */
class Pagina {
    public $nombre = "Codigo Facilito";
    public static $url="www.codigofacilito.com";
    
    public function bienvenido() {
        echo "Bienvenido a <b>" . $this->nombre . "</b> la página es: " .  self::$url;       
    }
    
    public static function bienvenido2() {
        echo "Bienvenido " .  self::$url;;        
    }    
}


class Web extends Pagina{
    
}

Web::bienvenido2();

