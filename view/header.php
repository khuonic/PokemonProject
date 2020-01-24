<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!-- link de Bootstrap -->
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/magic.min.css"> <!-- Link de la libraire magic, pour les transitions -->
        <link rel="stylesheet" href="css/style.css">  <!-- Link de la feuille de style CSS -->
        <title>Pokéducation</title>
    </head>
    <body id="body-template">
        <div class="bg-image"></div> 
        <div class="sideNav">
            <nav class = "navbar navbar-expand-lg justify-content-center container-fullwidth mr-auto ml-auto fixed-top  nav-style "> 
                <div id="shadow " class="navbar-toggler magictime foolishIn"  data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <div id="rec" >
                        <div id="black-stripe" >
                                <div id="circ">
                                    <button id="circ2">
                                        <button id="circ3"> 
                                        </button>
                                    </button>
                                </div>
                            </div>
                        <div id="top"></div>
                        <div id="bot"></div>
                    </div>
                </div>
                
                <div class="collapse navbar-collapse justify-content-around sticky-top " id ="nav-content">
                    <ul class="nav navUl">
                        <?php $page = $_SERVER['PHP_SELF']; ?>
                        <li  class="nav-item">
                            <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?home') ){ echo 'class=" nav-link active"'; } ?> href="index.php?home" class="nav-link">
                            <img src="ressources/pokedex5.png" alt="logoNav"  id="logoNav">
                            </a>
                        </li>
                        <li  class="nav-item">
                            <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?histoire') ){ echo 'class=" nav-link active"'; } ?> href="index.php?histoire" class="nav-link ">
                                Histoire
                            </a>
                        </li>
                        <li class="nav-item">  
                            <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?Generations') ){ echo 'class=" nav-link active"'; } ?> href="index.php?Generations" class="nav-link">
                                Générations
                            </a>
                        </li>
                        <li class="nav-item">
                            <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?pop-culture') ){ echo 'class=" nav-link active"'; } ?> href="index.php?pop-culture" class="nav-link">
                                Pop-culture
                            </a>
                        </li>
                        <li class="nav-item">
                            <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?quiz') ){ echo 'class=" nav-link active"'; } ?> href="index.php?quiz" class="nav-link">
                                Quiz
                            </a>
                        </li>
                        <?php if(is_connected()):?>
                            <li class="nav-item">
                                <a href="index.php?action=logout" class="nav-link">
                                    Se déconnecter
                                </a>
                            </li>
                        <?php endif?>
                    </ul>
                </div>
            </nav>
        </div>




            