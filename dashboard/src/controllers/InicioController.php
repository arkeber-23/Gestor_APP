<?php
require_once 'src/models/CuentasModelo.php';
class InicioController
{

    function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            json_encode($_POST);
        }

        $cuentasModelo = new CuentasModelo();
        $cuentas = null;
        $cuentasModelo->setIdUsuario($_SESSION['usuario']->ID_USUARIO);
        $cuentas = $cuentasModelo->listar($cuentasModelo);
        $data = [
            'cuentas' => $cuentas
        ];

        Render::vista('inicio', $data);
    }

    function buscarPorPagina()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            return header('Location:' . BASE_URL);
        }
        extract($_POST);
        $objetoModelo =  new CuentasModelo();
        $objetoModelo->setIdUsuario($_SESSION['usuario']->ID_USUARIO);
        $objetoModelo->setPagina($buscador);
       $datos =  $objetoModelo->listarPorPagina($objetoModelo);
        echo json_encode($datos);
    }
}
