<?php require_once('controller/controller.php');
alert();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <title>Pokéducation</title>
    </head>
    <body>   
        <header >
            <div  style="position:relative; overflow:hidden">
                <video autoplay muted loop >
                    <source src="ressources/homepage.mp4" type="video/mp4" style="position:fixed;">      
                </video>
                <img src="ressources/pokedex5.png" alt="logo" id="logo">               
            </div>
    <!-- Page Content -->  
            <div class="sideNav">
                <nav class = "navbar navbar-expand-lg justify-content-center container-fullwidth mr-auto ml-auto fixed-top  navHome "> 
                    <div id="shadow " class="navbar-toggler "  data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                        <div id="rec">
                            <div id="black-stripe">
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
                        <ul class="nav ">
                        <?php  $page = $_SERVER['PHP_SELF']; ?>
                            <li class="nav-item">
                                <a href="index.php?histoire" class="nav-link">
                                    Histoire
                                </a>
                            </li>
                            <li class="nav-item">  
                                <a href="index.php?Generations" class="nav-link">
                                    Générations
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?pop-culture" class="nav-link">
                                    Pop-culture
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?quiz" class="nav-link">
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
        </header>
        
        <footer class="font-small footer" >
            <div class=" text-center py-3 links " >
                <img class="col-6 col-md-4 col-lg-1"src ="ressources/pokemoncompany.png" alt="img nintendo" />
                <br>
                <br>
                <img class="col-6 col-md-4 col-lg-1" src="ressources/logoNintendo.png" alt="img nintendo">'
                <br>
                <br>
                <a href="https://www.pokemon.com/fr/conditions-d-utilisation/">
                    Conditions d'utilisation
                </a> 
                |
                <a href="https://www.pokemon.com/fr/avis-de-confidentialite/"> 
                    Avis de confidentialité
                </a> 
                |
                <a href="https://www.pokemon.com/fr/juridique/">
                    Informations juridiques
                </a>  
                |
                <a href="" data-toggle="modal" data-target="#modalLoginForm">
                     Admin
                </a>
                <br>
                <br>
                <text>
                    ©2019 Pokémon. ©1995–2019 Nintendo / Creatures Inc. / GAME FREAK inc. Pokémon et Nintendo Switch sont des marques de  Nintendo. ©2019 Nintendo.
                </text>
            </div>
            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Se connecter</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="login" action="" method="post">
                            <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                                    <input type="text" name="username" class="form-control validate" id="orangeForm-name" required>
                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Identifiant</label>
                                </div>
                                <div class="md-form mb-4">
                                    <input type="password" id="defaultForm-pass" class="form-control validate" name="password" required>
                                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Mot de passe</label>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center ">
                                <button type="submit" class=" btn btn-default btn-primary btn-rounded ">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
           
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="js/javascript.js"></script>

    </body>
</html>