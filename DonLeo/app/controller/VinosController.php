<?php

use vista\Vista;

class VinosController {

    public function index() {
        return Vista::crear("vinos.index");
    }
    
    
}