<?php

//Todas las rutas disponibles en nuestra aplicación
$ruta = new Ruta();
$ruta->controladores(array(
    "/"=>"PrincipalController",
    "/usuarios"=>"UsuarioController",
    "/infoproductos"=>"ProductosController"

));
