<?php

class CerrarsesionController{

    public function index(){
        Ayudante::cerrarSesion();
    }
}
