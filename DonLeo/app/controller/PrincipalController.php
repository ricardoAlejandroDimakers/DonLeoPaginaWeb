<?php

use vista\Vista;

class PrincipalController {

    public function index() {
        return Vista::crear("principal.index");
    }

    public function insertar() {
        return Vista::crear("principal.insertar");
    }

    
    
}