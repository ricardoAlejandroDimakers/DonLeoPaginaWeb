
<?php

use vista\Vista;

class VisitanosController {

    public function index() {
        return Vista::crear("visitanos.index");
    }
    
    
}