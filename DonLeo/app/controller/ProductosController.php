<?php

use vista\Vista;

class ProductosController {

    public function index() {
        return Vista::crear("productos.infoproductos");
    }

    
    
}