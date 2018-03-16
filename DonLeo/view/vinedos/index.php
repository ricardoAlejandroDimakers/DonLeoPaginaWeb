<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <?php include(VISTA_RUTA."inc/head.php") ?>

</head>

<body>

    <?php include(VISTA_RUTA."inc/navbarCasa.php") ?>
    
    
    <div class="container-fluid">
        <div class="row">

            <div class ="col-md-12" align="center" style="padding-left:0px; padding-right:0px;">
                <h2 class="titulo-DL">DESCUBRE VIÑEDOS DON LEO</h2>
                <hr style="width:6%; color:rgb(173,142,116)" class="hr-DL">

                <video width="100%;" height="75%;"autoplay loop="1" controls>
                <source src="<?php asset("img/VinosDonLeoFinal.mp4") ?>" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
                </video>

            </div>
        </div>

        <div class="row">

            <div class = "col-md-2"></div>
            <div class = "col-md-8" align="center">
            <span class="span-DL4"><br>LOCALIZADO EN EL VALLE DEL TUNAL, MUNICIPIO DE PARRAS,
                A UNA ALTURA DE 2,100M SOBRE EL NIVEL DEL MAR<br>
            </span>
            </div>
            <div class = "col-md-2"></div>

        </div>

        <div class="row">
            <div class = "col-md-2"></div>
            <div class = "col-md-8" align="left">
            <p class="span-DL8">
            <br>
            Don Leo se coloca en uno de los viñedos más altos del mundo, localizado en el Valle del Tunal, municipio de Parras, a una altura de 2,100 m
            sobre el nivel del mar, rodeado de montañas, lo que nos dá más horas de frío durante la época de maduración, por lo que tenemos mayor concentración
            aromática y una mejor definición de gustos varietales.<br><br>
            Por su particular ubicación geográfica y elaborado por las mejores manos del enólogo el Ing. Francisco Rodríguez. Éstas características le dan
            una cualidad inigualable a las diferentes cepas que aquí se producen, por ejemplo: Vinos Tintos: Merlot, Shiraz, Cabernet Suavignon, Pinot Noir,
            Malbec y Zinfandel; Vinos Blancos: Sauvignon Blanc, Semillón y Chardonay.<br><br>
            Lo que hace único a éste vino, es el cuidado que se le da a la planta, tratando de ser un producto orgánico. Las barricas que utiliza Don Leo son
            de roble francés y americano. Y para finalizar el toque único y los mejores blends de nuestro enólogo,
            reconocido mundialmente como el enólogo más galardonado de México.<br><br><br>
                </p>
            </div>
            <div class = "col-md-2"></div>

            </div>
        
            <div class="row">

            <div class ="col-md-12" align="center" style="padding-left:0px; padding-right:0px;">
                
                <img src="<?php asset("img/viñedoValleTunal.jpg") ?>" >

            </div>
            </div>
    </div>
  
    
    <?php include(VISTA_RUTA."inc/footer.php") ?>
    
</body>

</html>