<?php

declare(strict_types=1);

class CuentasModelo extends Conexion
{

    private string $idUsuario;
    private string $pagina;

    public function __construct()
    {
    }


    public function listar(CuentasModelo $cuenta)
    {
        try {
            $sql = "SELECT * FROM tabla_cuentas WHERE ID_USUARIO = :id ";
            $sentenciaPreparada = parent::con()->prepare($sql);
            $sentenciaPreparada->bindValue(':id', $cuenta->getIdUsuario());
            $sentenciaPreparada->execute();
            return $sentenciaPreparada->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    public function listarPorPagina(CuentasModelo $cuenta)
    {
        try {
            $sql = "SELECT * FROM tabla_cuentas WHERE ID_USUARIO = :id AND PAGINA LIKE :pagina";
            $sentenciaPreparada = parent::con()->prepare($sql);
            $sentenciaPreparada->bindValue(':id', $cuenta->getIdUsuario());
            $sentenciaPreparada->bindValue(':pagina', $cuenta->getPagina() . '%');
            $sentenciaPreparada->execute();
            return $sentenciaPreparada->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getPagina()
    {
        return $this->pagina;
    }


    public function setPagina(string $pagina)
    {
        $this->pagina = $pagina;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    public function setIdUsuario(string $idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }
}
