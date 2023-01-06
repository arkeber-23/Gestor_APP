<?php
session_start();
include_once 'src/core/libs/autoload.php';
include_once 'src/config/config.php';
include_once 'src/core/db/Conexion.php';
include_once 'src/core/libs/Mysql.php';
include_once 'src/core/libs/Ayudante.php';
include_once 'src/core/libs/Render.php';

if (!$_SESSION['usuario']) {
    header('location:' . BASE_URL . '../');
    return;
}
$url = $_GET['url'] ?? 'Inicio';
$url = explode('/', $url);
if (isset($url[0])) {
    $NOMBRE_CONTROLADOR = $url[0] . 'Controller';
} elseif (!isset($url[0]) && !isset($url[1])) {
    $NOMBRE_CONTROLADOR = CONTROLADOR;
} elseif (isset($url[0]) && !isset($url[1])) {
    $NOMBRE_CONTROLADOR = CONTROLADOR;
} else {
    echo "error 1";
    exit;
}

if (class_exists($NOMBRE_CONTROLADOR)) {
    $controlador = new $NOMBRE_CONTROLADOR();
    if (isset($url[1]) && method_exists($controlador, $url[1])) {
        $metodo = $url[1];
        $controlador->$metodo(); #2->parametro categoria, 3->parametro ubicacion, 4->parametro paginacion
    } elseif (!isset($url[0]) && !isset($url[1])) {
        $metodo = METODO;
        $controlador->$metodo();
    } elseif (isset($url[0]) && !isset($url[1])) {
        $metodo = METODO;
        $controlador->$metodo();
    } else {
        echo "error 2";
    }
} else {
    echo "error 3";
}
