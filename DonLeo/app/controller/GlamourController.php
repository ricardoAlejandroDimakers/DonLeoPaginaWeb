<?php

use vista\Vista;

class GlamourController {

    public function index() {
        return Vista::crear("glamour.index");
    }
    
    
}