<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <?php include(VISTA_RUTA."inc/head.php") ?>

</head>

<body>

    <?php include(VISTA_RUTA."inc/navbarprincipal.php") ?>
    
    
    <div class="container-fluid" >
        
    <div class="row">

        <div class ="col-md-12" align="center" style="padding-left:0px; padding-right:0px;">
            <h2 class="titulo-DL">CONTACTO</h2>
            <hr style="width:6%; color:rgb(173,142,116)" class="hr-DL">
            
        </div>
        
    </div>

    

    <div class="row">
       
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <center><span class="fuente-navSec" style="color:rgb(145,147,150);">Para completar tu compra los campos obligatorios<br>
                                   de lo contrario tu solicitud no podrá procesar</span><br>
            </center>

            <br>
            <input type="text" placeholder="Nombre Completo *" class="fuente-navSec" style="margin-bottom:4%;">
            <input type="text" placeholder="Correo Electrónico *" class="fuente-navSec" style="margin-bottom:4%;">
            <input type="text" placeholder="Teléfono *" class="fuente-navSec" style="margin-bottom:0%;">
            <textarea type="text" id="form7" class="md-textarea form-control fuente-navSec" rows="5" placeholder="Mensaje *"></textarea>

            <center><img src="<?php asset("img/botonEnviar.png") ?>" style="width:20%;"></center>
        </div>
        <div class="col-md-3"></div>
        
    </div>

    <br><br>

    
        
    </div>
  
    
    <?php include(VISTA_RUTA."inc/footer.php") ?>
    
</body>

</html>