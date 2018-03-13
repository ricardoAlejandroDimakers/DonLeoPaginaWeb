<?php 
function asset($asset) {
    $urlprin = trim(str_replace("index.php","",$_SERVER["PHP_SELF"]),"/");

    echo "/".$urlprin."/assets/".$asset;
}

function url($rute) {
    $urlprin = trim(str_replace("index.php","",$_SERVER["PHP_SELF"]),"/");

    echo "/".trim($urlprin,"/")."/".$rute;
}