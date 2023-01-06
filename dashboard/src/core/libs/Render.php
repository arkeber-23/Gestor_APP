<?php

declare(strict_types=1);
class Render
{
    static function vista(string $archivo, array $data = [])
    {
        $ruta = str_replace('.', '/', $archivo);
        include_once 'src/views/' . $ruta . '.php';
    }
}
