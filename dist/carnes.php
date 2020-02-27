<!DOCTYPE html>
<html lang="en">
<head>

<?php include_once 'header.php' ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Puerta Amarilla - Steaks and burgers</title>    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="./css/lpa.css" rel="stylesheet">

</head>
<body>    

    <?php include_once 'menu_superior.php' ?>    

    <section id="cards" class="container">   
        <h2><?php echo $lang["CARNES_NC"]; ?></h2>
        <p><?php echo $lang["CARNES_NC_D"]; ?></p>
        <div class="row mt-4 mb-4">
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/carnes/entrana.jpg">
                    <img class="card-img-top" src="images/carnes/entrana.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["CARNES_ENTRA"]; ?></h5>
                        <p class="card-text"><?php echo $lang["CARNES_ENTRA_D"]; ?></p>
                    </div>            
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/carnes/lomo_alto.jpg">
                    <img class="card-img-top" src="images/carnes/lomo_alto.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["CARNES_LOMO"]; ?></h5>
                        <p class="card-text"><?php echo $lang["CARNES_LOMO_D"]; ?></p>
                    </div>            
                </div>
            </div>
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/carnes/solomillo_trufado.jpg">
                    <img class="card-img-top" src="images/carnes/solomillo_trufado.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["CARNES_SOLOMILLO"]; ?></h5>
                        <p class="card-text"><?php echo $lang["CARNES_SOLOMILLO_D"]; ?></p>
                    </div>            
                </div>
            </div>                      
        </div>

        <div class="row mt-4 mb-4">
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/carnes/pollo_parrilla.jpg">
                    <img class="card-img-top" src="images/carnes/pollo_parrilla.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["CARNES_POLLO"]; ?></h5>
                        <p class="card-text"><?php echo $lang["CARNES_POLLO_D"]; ?></p>
                    </div>            
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/carnes/parrilla_para_dos.jpg">
                    <img class="card-img-top" src="images/carnes/parrilla_para_dos.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["CARNES_PARRILLA"]; ?></h5>
                        <p class="card-text"><?php echo $lang["CARNES_PARRILLA_D"]; ?></p>
                    </div>            
                </div>
            </div>                     
        </div>       
    </section>
    
    <?php include_once 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./js/lpa.js"></script>    

</body>
</html>