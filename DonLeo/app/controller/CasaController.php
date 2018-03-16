<?php

use vista\Vista;

class CasaController {

    public function index() {
        return Vista::crear("casa.index");
    }
    
    
}