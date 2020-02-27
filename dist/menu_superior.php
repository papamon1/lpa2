<?php
include_once 'common.php';
$pag=str_replace("/test/","", $_POST['pag']);
$lang_ = $_SESSION['lang'];
if($lang_==null){$lang_='es';}
?>

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
                <li class="nav-item align-self-end dropdown">
                    <a class="nav-link align-self-end text-dark dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $lang["LANG"]; ?>
                    </a>
                    <div class="dropdown-menu align-self-end" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item nav-link" href="<?php echo $pag ?>?lang=es"><img src="images/flags/es.png" alt="Language - ES"/>&nbsp;<?php echo $lang["ESP"]; ?></a>
                        <a class="dropdown-item nav-link" href="<?php echo $pag ?>?lang=en"><img src="images/flags/en.png" alt="Language - EN"/>&nbsp;<?php echo $lang["ENG"]; ?></a>                         
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
