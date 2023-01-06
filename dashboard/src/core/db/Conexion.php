<?php

class Conexion extends PDO
{
    private  function __construct()
    {
        try {
            $opciones = [
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => FALSE
            ];
            $url = "mysql:host=" . DATOS_['DB_HOST'] . "; dbname=" . DATOS_["DB_NAME"] . ";" . DATOS_["DB_CHAR"];
            return parent::__construct($url, DATOS_['DB_USER'], DATOS_['DB_PASS'], $opciones);
        } catch (PDOException $e) {
            return "Error! " . $e->getMessage();
            die();
        }
    }


    static public function con()
    {
        return new Conexion();
    }
}
