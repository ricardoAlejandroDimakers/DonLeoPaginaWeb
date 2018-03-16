<?php

//Todas las rutas disponibles en nuestra aplicación
$ruta = new Ruta();
$ruta->controladores(array(
    "/"=>"PrincipalController",
    "/casa"=>"CasaController",
    "/vinedos"=>"VinedosController",
    "/glamour"=>"GlamourController",
    "/vinos"=>"NuestrosVinosController",
    "/visitanos"=>"VisitanosController",
    "/blog"=>"BlogController",
    "/contacto"=>"ContactoController",
    "/shop"=>"VinosController",
    "/usuarios"=>"UsuarioController",
    "/infoproductos"=>"ProductosController",
    "/infocategorias"=>"CategoriasController",
    "/accesorios"=>"AccesoriosController",
    "/shopingcart"=>"ShopingController"

));
