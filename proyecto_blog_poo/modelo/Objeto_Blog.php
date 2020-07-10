<?php

class Objeto_Blog{
    
    //Propiedades del objeto 
    private $id;
    private $titulo;
    private $fecha; 
    private $comentario;
    private $imagen;
    
    //Metodos de acceso
    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getComentario() {
        return $this->comentario;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    function setFecha($fecha): void {
        $this->fecha = $fecha;
    }

    function setComentario($comentario): void {
        $this->comentario = $comentario;
    }

    function setImagen($imagen): void {
        $this->imagen = $imagen;
    }


}

?>