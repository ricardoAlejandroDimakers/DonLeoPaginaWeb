<?php

use vista\Vista;

class VinedosController {

    public function index() {
        return Vista::crear("vinedos.index");
    }
    
    
}