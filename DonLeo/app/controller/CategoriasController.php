<?php

use vista\Vista;

class CategoriasController {

    public function index() {
        return Vista::crear("categorias.infocategorias");
    }

    public function index2() {
        return Vista::crear("categorias.accesorios");
    }
    
}