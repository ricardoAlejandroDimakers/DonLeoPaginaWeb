<?php

use vista\Vista;

class ShopingController {

    public function index() {
        return Vista::crear("shopingcart.shopingcart");
    }
    
}