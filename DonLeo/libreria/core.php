<?php

require_once("help/helps.php");
define("APP_RUTA",RUTA_BASE."app/");
define("VISTA_RUTA",RUTA_BASE."view/");
define("LIBRERIA",RUTA_BASE."libreria/");
define("RUTA",APP_RUTA."rutas/");

//include RUTA_BASE."config/config.php";
require_once (RUTA_BASE."config/config.php");

require_once ("Vista.php");
include "Ruta.php";
include RUTA."rutas.php";