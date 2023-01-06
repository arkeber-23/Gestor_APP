<?php

function cargarControladores($controlador)
{
    $archivo = 'src/controllers/' . ucfirst($controlador) . ".php";
    if (!file_exists($archivo)) {
        return;
    }
    include_once $archivo;
}

spl_autoload_register('cargarControladores');
