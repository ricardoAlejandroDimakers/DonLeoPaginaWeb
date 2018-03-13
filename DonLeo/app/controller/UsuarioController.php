<?php

use vista\Vista;

class UsuarioController {

public function index() {
    return Vista::crear("usuarios.lista");
}

public function insertar() {
    echo "insertado correctamente";
}



}