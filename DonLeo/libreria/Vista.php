<?php namespace vista;

class Vista {

    public static function crear($path){
        
       if($path != "") {
            $paths = explode(".",$path);
            $ruta = "";

            for($i = 0; $i < count($paths);$i++){

                if($i == count($paths)-1) {

                    $ruta .= $paths[$i].".php";

                }else {

                    $ruta .= $paths[$i]."/";
                }
           
            }

           if(file_exists(VISTA_RUTA.$ruta)) {

                

                include VISTA_RUTA.$ruta;
           }

           else {
               die("no existe");
           }
       }
    }
}