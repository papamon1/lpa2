<?php
include_once 'common.php';
?>
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
        <h2><?php echo $lang["ENT_NE"]; ?></h2>
        <div class="row mt-4 mb-4">
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/entrantes/torrenachos.jpg">
                    <img class="card-img-top" src="images/entrantes/torrenachos.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["ENT_NACHOS"]; ?></h5>
                        <p class="card-text"><?php echo $lang["ENT_NACHOS_D"]; ?></p>
                    </div>            
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/entrantes/carpaccio_thumb.jpg">
                    <img class="card-img-top" src="images/entrantes/carpaccio_thumb.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["ENT_CARP"]; ?></h5>
                        <p class="card-text"><?php echo $lang["ENT_CARP_D"]; ?></p>
                    </div>            
                </div>
            </div>
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/entrantes/japonesas.jpg">
                    <img class="card-img-top" src="images/entrantes/japonesas.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["ENT_EMPA"]; ?></h5>
                        <p class="card-text"><?php echo $lang["ENT_EMPA_D"]; ?></p>
                    </div>            
                </div>
            </div>                      
        </div>

        <div class="row mt-4 mb-4">
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/entrantes/camembert.jpg">
                    <img class="card-img-top" src="images/entrantes/camembert_thumb.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["ENT_CAMEMBERT"]; ?></h5>
                        <p class="card-text"><?php echo $lang["ENT_CAMEMBERT_D"]; ?></p>
                    </div>            
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/entrantes/tiritas.jpg">
                    <img class="card-img-top" src="images/entrantes/tiritas.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["ENT_POLLO"]; ?></h5>
                        <p class="card-text"><?php echo $lang["ENT_POLLO_D"]; ?></p>
                    </div>            
                </div>
            </div>
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/entrantes/chorizo_thumb.jpg">
                    <img class="card-img-top" src="images/entrantes/chorizo_thumb.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["ENT_CHORIZO"]; ?></h5>
                        <p class="card-text"><?php echo $lang["ENT_CHORIZO_D"]; ?></p>
                    </div>            
                </div>
            </div>                      
        </div>

        <div class="row mt-4 mb-4">
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/entrantes/tequenos_thumb.jpg">
                    <img class="card-img-top" src="images/entrantes/tequenos_thumb.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["ENT_TEQUE"]; ?></h5>
                        <p class="card-text"><?php echo $lang["ENT_TEQUE_D"]; ?></p>
                    </div>            
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/entrantes/provoleta_thumb.jpg">
                    <img class="card-img-top" src="images/entrantes/provoleta_thumb.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["ENT_PROVO"]; ?></h5>
                        <p class="card-text"><?php echo $lang["ENT_PROVO_D"]; ?></p>
                    </div>            
                </div>
            </div>
            <div class="col-md-4">
                <div class="card lb-js dishes" data-theme="trans" data-type="image" data-path="images/entrantes/hummus.jpg">
                    <img class="card-img-top" src="images/entrantes/hummus.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $lang["ENT_HUMMUS"]; ?></h5>
                        <p class="card-text"><?php echo $lang["ENT_HUMMUS_D"]; ?></p>
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
    <script>
        // $(document).ready(function(){
        //     $('#aviso').modal('show');
        // })

        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
    </script>





    <div class="modal fade" id="aviso" tabindex="-1" role="dialog" aria-labelledby="aviso" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header modales__text--title">
                <h5 class="modal-title" id="exampleModalLabel">Aviso sobre el uso de cookies</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body modales__text--content">
                <p>
                El  sitio  WEB  de 	LA PUERTA AMARILLA 	utiliza  cookies 	de terceros para mejorar 
                nuestros servicios	.  Si  continua  navegando,  consideramos  que  acepta  su	  uso.  Puede 
                cambiar la configuración u obtener más información 	en nuestra <a href="cookies.php" >“Política de Cookies"</a>
                </p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
    </div>

</body>
</html>