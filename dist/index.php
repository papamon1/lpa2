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
        <div class="row">
            <div class="col-md-3 cards">
                <img class="img-fluid" src="images/entrantes/torrenachos.jpg" alt="">
                <div class="cards__body text-center">
                    <img src="images/icon1.png" alt="">
                    <div class="cards__text cards__text--title text-center"><?php echo $lang["HOME_PE"]; ?></div>
                    <a href="entrantes.php" class="cards__text cards__text--subtitle"><?php echo $lang["HOME_VPE"]; ?></a>                    
                </div>
            </div>
            <div class="col-md-3 cards">                
                <div class="cards__body text-center">
                    <img class="lb-js" src="images/icon2.png" alt="" data-theme="trans" data-type="image" data-path="images/icon2.png" >
                    <div class="cards__text cards__text--title text-center"><?php echo $lang["HOME_PP"]; ?></div>
                    <a href="hamburguesas.php" class="cards__text cards__text--subtitle"><?php echo $lang["HOME_VPP"]; ?></a>                    
                </div>
                <img class="img-fluid" src="images/hamburguesas/amarilla.jpg" alt="">
            </div>
            <div class="col-md-3 cards">
                <img class="img-fluid" src="images/carnes/parrilla_para_dos.jpg" alt="">
                <div class="cards__body text-center">
                    <img src="images/icon4.png" alt="">
                    <div class="cards__text cards__text--title text-center"><?php echo $lang["HOME_PG"]; ?></div>
                    <a href="carnes.php" class="cards__text cards__text--subtitle"><?php echo $lang["HOME_VPG"]; ?></a>                    
                </div>
            </div>
            <div class="col-md-3 cards">                
                <div class="cards__body text-center">
                    <img src="images/icon3.png" alt="">
                    <div class="cards__text cards__text--title text-center"><?php echo $lang["HOME_PS"]; ?></div>
                    <a href="postres.php" class="cards__text cards__text--subtitle"><?php echo $lang["HOME_VPS"]; ?></a>                    
                </div>
                <img class="img-fluid" src="images/postres/brownie.jpg" alt="">
            </div>            
        </div>
    </section>

    <section id="timetable" class="container">
        <h2><?php echo $lang["HOME_HORARIOC"]; ?></h2>
        <div class="row">

            <div class="col-md-4 cards">
                <img class="img-fluid" src="images/home/almuerzos.png" alt="">
                <div class="cards__body text-center">                    
                    <div class="cards__text cards__text--timetable text-center"><?php echo $lang["HOME_HDESA"]; ?></div>
                </div>
            </div>

            <div class="col-md-4 cards">
                <img class="img-fluid" src="images/home/desayunos.png" alt="">
                <div class="cards__body text-center">                    
                    <div class="cards__text cards__text--timetable text-center"><?php echo $lang["HOME_HCOMIDA"]; ?></div>
                </div>
            </div>

            <div class="col-md-4 cards">
                <img class="img-fluid" src="images/home/cenas.png" alt="">
                <div class="cards__body text-center">                    
                    <div class="cards__text cards__text--timetable text-center"><?php echo $lang["HOME_HCENA"]; ?></div>
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