<?php

use vista\Vista;

class NuestrosVinosController {

    public function index() {
        return Vista::crear("nuestrosvinos.index");
    }
    
    
}