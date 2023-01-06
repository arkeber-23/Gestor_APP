<?php

declare(strict_types=1);

class Mysql extends Conexion
{
    function __construct()
    {
    }


    function listarTodo(string $tabla)
    {
        try {
            $sql = "SELECT * FROM $tabla";
            $sentenciaPreparada = parent::con()->prepare($sql);
            $sentenciaPreparada->execute();
            return $sentenciaPreparada->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return "Error " . $e->getMessage();
        }
    }

    function listarPorId(string $tabla, string $nombreCampoId, int $id)
    {
        try {
            $sql = "SELECT * FROM $tabla WHERE $tabla" . '.' . "$nombreCampoId = ':id'";
            $sentenciaPreparada = parent::con()->prepare($sql);
            $sentenciaPreparada->bindValue(':id', $id, PDO::PARAM_INT);
            $sentenciaPreparada->execute();
            return $sentenciaPreparada->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return "Error " . $e->getMessage();
        }
    }
}
