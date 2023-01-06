<?php

declare(strict_types=1);
class LoginModelo extends Conexion
{

    private string $username;
    private string $password;

    public function __construct()
    {
    }



    public function iniciarSesion(LoginModelo $loginModelo)
    {
        try {
            $sql = "SELECT * FROM tabla_usuarios WHERE USERNAME = '{$loginModelo->getUserName()}'";
            $sentenciaPreparada = self::con()->query($sql);
            if ($sentenciaPreparada && $sentenciaPreparada->rowCount() == 1) {
                $usuario = $sentenciaPreparada->fetchObject();
                $verificarPassword = password_verify($loginModelo->getPassword(), $usuario->PASSWORD);
                if (!$verificarPassword) {
                    return ['status' => false, 'msg' => 'Username y/o Password erroneos...'];
                }
                $_SESSION['usuario'] = $usuario;
                return ['status' => true, 'msg' => 'Bienvenido...', 'url' => BASE_URL . '/dashboard'];
            }
            return ['status' => false, 'msg' => 'Username y/o Password erroneos...'];
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getUserName()
    {
        return $this->username;
    }

    public function setUserName(string $username)
    {
        $this->username = strip_tags($username);
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = strip_tags($password);
    }
}
