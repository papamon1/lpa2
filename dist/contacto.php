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

            <div class="col-md-4 pt-4">

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
    
    <?php include_once 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./js/lpa.js"></script>
</body>
</html>