<?php

use vista\Vista;

class AccesoriosController {

    public function index() {
        return Vista::crear("accesorios.accesorios");
    }
    
}