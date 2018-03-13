<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <?php include(VISTA_RUTA."inc/head.php") ?>

</head>
<body>
    <?php include(VISTA_RUTA."inc/navbar.php") ?>

    <div class="row">
        <div class="col-md-12"></div>
    </div>

    <div class="row">

        <div class ="col-md-2"></div>
        <div class ="col-md-8">

            <div class="col-md-3" style="padding-right:5px;">
                <img src="<?php asset("img/fcollage1.png") ?>" class="final-lg" style="width: 100%; margin-bottom: 5%;" >
                <img src="<?php asset("img/fcollage4.png") ?>" class="final-lg" style="width: 100%;" >
            </div>
            <div class="col-md-6" style="padding-left:5px; padding-right:5px;">
                <img src="<?php asset("img/fcollage2.png") ?>" class="final-lg" style="width: 100%; margin-bottom: 3%;" >
                <img src="<?php asset("img/fcollage5.png") ?>" class="final-lg" style="width: 100%; margin-bottom: 3%;" >
                <img src="<?php asset("img/fcollage7.png") ?>" class="final-lg" style="width: 100%; margin-bottom: 3%;" >
            </div>
            <div class="col-md-3" style="padding-left:5px;">

                <img src="<?php asset("img/fcollage3.png") ?>" class="final-lg" style="width: 100%; margin-bottom: 5%;" >
                <img src="<?php asset("img/fcollage6.png") ?>" class="final-lg" style="width: 100%; margin-bottom: 5%;" >
                <img src="<?php asset("img/fcollage8.png") ?>" class="final-lg" style="width: 100%;" >

            </div>
            
        </div>
        <div class ="col-md-2"></div>

    </div>

    <?php include(VISTA_RUTA."inc/footer.php") ?>

    
</body>
</html>