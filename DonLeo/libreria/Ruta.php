<?php

class Ruta{

    //METODO QUE NOS PERMITE INGRESAR LOS CONTROLADORES CON SUS RESPECTIVAS RUTAS
    private $_controladores = array();
    public function controladores ($controlador){

        $this->_controladores = $controlador;

        // llamada al metodo que hace el proceso de rutas
        self::submit();

    }

    //funcion o metodo que se ejecuta cada vez que se envia una peticion en la url
    public function submit(){
        $uri = isset($_GET["uri"])?$_GET["uri"]:"/"; // recupera la url del proyecto

        //explode divide un string en un array de strings(hay que pasarle un delimitador)
        $paths = explode("/",$uri);

        //hacer un condicional para saber si esta en un controlador o en la ruta principal
        if($uri == "/"){

            //principal

            //verificamos si indice o clave existe en el array 
            $res = array_key_exists("/",$this->_controladores);

            if($res != "" && $res == 1) {
                 
                foreach($this->_controladores as $ruta=>$controller) {
                    if($ruta == "/") {

                        $controlador = $controller;
                    }
                }

                $this->getController("index",$controlador);
            }
        }

        else {
            //controladores y metodos 
            $estado = false;
            foreach($this->_controladores as $ruta => $cont){

                if(trim($ruta,"/") == $paths[0]) {
                    $estado = true;
                    $controlador = $cont;
                    $metodo = "";

                    if(count($paths) > 1){
                        $metodo = $paths[1];
                    }

                    $this->getController($metodo,$controlador);
                }
            }

            if($estado == false){
                die("error en la ruta");
            }
        }
    }

    public function getController($metodo,$controlador) {

        $metodoController = "";

        if($metodo == "index" || $metodo == "") {

            $metodoController = "index";
        }

        else {

            $metodoController = $metodo;
        }

        $this -> incluirControlador($controlador);

        if(class_exists($controlador)){
            $ClaseTemp = new $controlador();

            if(is_callable(array($ClaseTemp,$metodoController))) {

                $ClaseTemp->$metodoController();
            }

            else {

                die("no existe el metodo");
            }
        }

        else {
            die("no existe la clase");
        }
    }

    public function incluirControlador($controlador){

        if(file_exists(APP_RUTA."controller/".$controlador.".php")){
  
            include APP_RUTA."controller/".$controlador.".php";
        }

        else {
            die("error al encontrar el archivo del controlador");
        }
    }
}