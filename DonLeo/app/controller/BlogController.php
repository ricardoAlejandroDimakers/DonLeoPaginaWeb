<?php

use vista\Vista;

class BlogController {

    public function index() {
        return Vista::crear("blog.index");
    }
    
    
}