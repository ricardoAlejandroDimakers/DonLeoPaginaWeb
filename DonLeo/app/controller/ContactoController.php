<?php

use vista\Vista;

class ContactoController {

    public function index() {
        return Vista::crear("contacto.index");
    }
    
    
}