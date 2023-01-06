<?php
include_once './src/models/loginModelo.php';
class LoginController
{


    function index()
    {
        Render::vista('login.index');
    }

    function validarDatos()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            return header('Location: ' . BASE_URL);
        }
        extract($_POST);
        $loginModelo = new LoginModelo();
        $loginModelo->setUserName($user);
        $loginModelo->setPassword($password);
        $response = $loginModelo->iniciarSesion($loginModelo);
        echo json_encode($response);
    }
}
