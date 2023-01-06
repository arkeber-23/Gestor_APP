<?php

class Ayudante
{
    static function cerrarSesion()
    {
        session_destroy();
        unset($_SESSION['usuario']);
        header('location:' . BASE_URL . '../');
    }
}
