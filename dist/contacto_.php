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


    <style>
        body{
            font-family: Montserrat;
        }
    </style>


</head>
<body>    
    
    <div class="fixed-top" style="top=5px; right=3%">
        <a href="<?php echo $pag ?>?lang=es"><img src="images/flags/es.png" alt="Language - ES"/></a>
        <a href="<?php echo $pag ?>?lang=en"><img src="images/flags/en.png" alt="Language - EN"/></a> 
    </div> 

    <nav class="navbar navbar-expand-sm navbar-light mb-3 mt-4">
        <div class="container">                              
            <a class="navbar-brand" href="#">
                <div class="d-block d-md-none">
                    <img src="images/logo.png" alt="Logo alt" height="89.6" width="103.6" >                
                </div>

                <div class="d-none d-md-block">
                    <img src="images/logo.png" alt="Logo alt" style="max-width:182px;" >                
                </div>
            </a>
            <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse align-items-end" id="navbarNav" style="">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item align-self-end">
                        <a class="nav-link text-dark" href="index.php"><?php echo $lang["MENU_INICIO"]; ?></a>
                    </li>
                    <li class="nav-item align-self-end">
                        <a class="nav-link text-dark" href="entrantes.php"><?php echo $lang["MENU_ENTRANTES"]; ?></a>
                    </li>
                    <li class="nav-item align-self-end">
                        <a class="nav-link text-dark" href="hamburguesas.php"><?php echo $lang["MENU_HAMBURGUESAS"]; ?></a>
                    </li>
                    <li class="nav-item align-self-end">
                        <a class="nav-link text-dark" href="carnes.php"><?php echo $lang["MENU_CARNES"]; ?></a>
                    </li>
                    <li class="nav-item align-self-end">
                        <a class="nav-link text-dark" href="postres.php"><?php echo $lang["MENU_POSTRES"]; ?></a>
                    </li>
                    <li class="nav-item align-self-end">
                        <a class="nav-link text-dark" href="carta_<?php echo $lang_ ?>.pdf" target="_blank  "><?php echo $lang["MENU_CARTA"]; ?></a>
                    </li>
                    <li class="nav-item align-self-end">
                        <a class="nav-link text-dark" href="contacto.php"><?php echo $lang["MENU_CONTACTO"]; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="cards" class="container mt-4">
        <h2><?php echo $lang["CONTACTO_NP"]; ?></h2>
        <div class="mt-4">
            <iframe src="https://module.lafourchette.com/es_ES/module/421731-60ab1" style="width: 100%; min-height:480px; border:none; scrolling:yes;"></iframe>
        </div>
    </section>

    <section id="timetable" class="container mb-4">
        <h2><?php echo $lang["CONTACTO_DONDE"]; ?></h2>
        <div class="row">
            <div class="col-md-8">

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1518.9372580757426!2d-3.6959098226992744!3d40.411630567587835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x44605a3b49479f82!2sLa+Puerta+Amarilla+(steaks+%26+burgers)!5e0!3m2!1ses!2ses!4v1538679051424" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-md-4">

                <p>
                    <strong><?php echo $lang["CONTACTO_DIRECCION"]; ?>:</strong></br>
                    C/ Fúcar, 9<br> 28014, MADRID            
                </p>
                <p>
                    <strong><?php echo $lang["CONTACTO_TELEFONO"]; ?>:</strong></br>
                    +34 911 451 168
                </p>    
                <p>
                    <strong class="map_title"><?php echo $lang["CONTACTO_EMAIL"]; ?>:</strong> </br>
                    <a href="mailto:toctoc@lapuertamarilla.es">toctoc@lapuertamarilla.es</a>
                </p>
                
            </div>
        </div>
    </section>

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
                    <img src="images/icon2.png" alt="">
                    <div class="cards__text cards__text--title text-center"><?php echo $lang["HOME_PP"]; ?></div>
                    <a href="entrantes.php" class="cards__text cards__text--subtitle"><?php echo $lang["HOME_VPP"]; ?></a>                    
                </div>
                <img class="img-fluid" src="images/hamburguesas/amarilla.jpg" alt="">
            </div>
            <div class="col-md-3 cards">
                <img class="img-fluid" src="images/carnes/parrilla_para_dos.jpg" alt="">
                <div class="cards__body text-center">
                    <img src="images/icon4.png" alt="">
                    <div class="cards__text cards__text--title text-center"><?php echo $lang["HOME_PG"]; ?></div>
                    <a href="entrantes.php" class="cards__text cards__text--subtitle"><?php echo $lang["HOME_VPG"]; ?></a>                    
                </div>
            </div>
            <div class="col-md-3 cards">                
                <div class="cards__body text-center">
                    <img src="images/icon3.png" alt="">
                    <div class="cards__text cards__text--title text-center"><?php echo $lang["HOME_PS"]; ?></div>
                    <a href="entrantes.php" class="cards__text cards__text--subtitle"><?php echo $lang["HOME_VPS"]; ?></a>                    
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>