<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conectar
 *
 * @author Milami
 */
class Conectar {

    public static function conexion() {

        try {
            $conexion = new PDO('mysql:host=localhost; port=3306; dbname=pruebas', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET UTF8");
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
            echo $e->getLine();
        }

        return $conexion;
    }

}
