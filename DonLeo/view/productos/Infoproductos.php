<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Producto</title>
    <?php include(VISTA_RUTA."inc/head.php") ?>

</head>
<body>
    <?php include(VISTA_RUTA."inc/navbar2.php") ?>

    <div class="row">
        <div class="col-md-12">
            <div style="padding-left:18%">Regresar</div>
        </div>
    </div>

    <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1" style="background-color:black"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
        <div class="row">
        <div class="col-md-2">
            
        </div>

        <div class="col-md-3" style="padding-right:5px;">
            <img src="<?php asset("img/vino1nombre.png") ?>" class="final-lg" style="width: 90%; margin-bottom: 5%;" >
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <p class="span-DL4" align="center">DON LEO ZINFADEL</p>              
                    <span class="span-DL7"><img src="<?php asset("img/comilla.png") ?>" class="final-lg" style="width: 16%; margin-bottom: 5%;" >
                    EL VINO ROSADO LE HARÁ EXPERIMENTAR SUS
                    SENTIDOS UNA DELICIOSA EXPERIENCIA,
                    ES MUY AMABLE, SUAVE QUE A LA TEMPERATURA IDEAL
                    SE PUEDE TOMAR SIN NECESIDAD DE MARIDARLO
                    <img src="<?php asset("img/comillas2.png") ?>" class="final-lg" style="width: 16%; margin-bottom: 5%;" ></span>
                    <p class="span-DL8">$262.00</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <span class="span-DL6">VISTA</span>
                </div>
                <div class="col-md-3">                
                    <span class="span-DL5">Es un vino de color rojo rubi muy suave</span>
                </div>
                <div class="col-md-3">
                    <span class="span-DL6">AROMA</span>
                </div>
                <div class="col-md-3">            
                    <span class="span-DL5">Aromaticamente es muy intenso con notas de frutos rojos</span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" align="center" style="padding-top:25px;">                
                    <img src="<?php asset("img/botonAddtoCart.png") ?>" class="final-lg" style="width: 30%; margin-bottom: 5%;" >
                </div>
            </div>
        </div>
        <div class="col-md-3" align="center">
            <div style="padding-top:100%"><img src="<?php asset("img/hoja.png") ?>" class="final-lg" style="width: 60%; margin-bottom: 5%;" ></div>
        </div>
        </div>
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
        <div class="row">
        <div class="col-md-2">
            
        </div>

        <div class="col-md-3" style="padding-right:5px;">
            <img src="<?php asset("img/vino2nombre.png") ?>" class="final-lg" style="width: 90%; margin-bottom: 5%;" >
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <p class="span-DL4" align="center">DON LEO SAUVIGNON BLANC</p>              
                    <span class="span-DL7"><img src="<?php asset("img/comilla.png") ?>" class="final-lg" style="width: 16%; margin-bottom: 5%;" >
                    EN BOCA ES UN VINO MUY AMABLE, FRUTADO CON
                    NOTAS CÍTRICAS QUE LE DAN FRESCURA.
                    UN VINO ELEGANTE, LIMPIO Y SEDOSO IDEAL COMO
                    APERITIVO PARA PLATOS ÁCIDOS Y FRESCOS
                    COMO PESCADO, ENSALADAS Y COMIDA MEXICANA
                    <img src="<?php asset("img/comillas2.png") ?>" class="final-lg" style="width: 16%; margin-bottom: 5%;" ></span>
                    <p class="span-DL8">$262.00</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <span class="span-DL6">VISTA</span>
                </div>
                <div class="col-md-3">                
                    <span class="span-DL5">TONO AMARILLO VERDOSO CARACTERÍSTICO DE LA ZONA FRÍA.</span>
                </div>
                <div class="col-md-3">
                    <span class="span-DL6">AROMA</span>
                </div>
                <div class="col-md-3">            
                    <span class="span-DL5">Aromaticamente es muy intenso con notas de frutos rojos</span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" align="center" style="padding-top:25px;">                
                    <img src="<?php asset("img/botonAddtoCart.png") ?>" class="final-lg" style="width: 30%; margin-bottom: 5%;" >
                </div>
            </div>
        </div>
        <div class="col-md-3" align="center">
            <div style="padding-top:100%"><img src="<?php asset("img/hoja.png") ?>" class="final-lg" style="width: 60%; margin-bottom: 5%;" ></div>
        </div>
        </div>
        </div>
        <!--/First slide-->
        
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
   
    

    <?php include(VISTA_RUTA."inc/footer.php") ?>

    
</body>
</html>