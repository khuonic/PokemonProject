
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Pokéducation</title>
</head>
    <body>
    
        <header >
                 <div class="embed-responsive embed-responsive-16by9" >
                    <video autoplay muted loop>
                        <source src="ressources/homepage.mp4" type="video/mp4" style="position:absolute;">
                    </video>
                </div>
            <div>
                <nav class = "navbar navbar-expand-lg justify-content-center container-fullwidth mr-auto ml-auto fixed-top "> 
                    <ul class="nav">
                    <?php  
                        $page = $_SERVER['PHP_SELF'];
                    ?>
                        <li class="nav-item">
                            <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?home') ){ echo 'class=" nav-link active"'; } ?>href="index.php?home" class="nav-link">Home</a>
                         </li>
                        <li class="nav-item">
                            <a href="index.php?histoire" class="nav-link">Histoire</a>
                        </li>
                        <li class="nav-item">  
                            <a href="index.php?Generations" class="nav-link">Générations</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Médias
                            </a>
                            <div class="dropdown-menu link" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?series_et_films">Séries et films</a>
                                <a class="dropdown-item" href="index.php?cartes">Cartes à jouer</a>
                                <a class="dropdown-item" href="index.php?mangas">Mangas</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?pop-culture" class="nav-link">Pop-culture</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?quizz" class="nav-link">Quizz</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        
        <footer class="font-small " >
            <div class=" text-center py-3 links " >
                <img src ="ressources/logo-pokemon-company.svg" alt="img nintendo">
                <br>
                <br>
                <img src ="ressources/logo-nintendo.svg" alt="img nintendo">
                <br>
                <br>
                <a href="https://www.pokemon.com/fr/conditions-d-utilisation/">
                Conditions d'utilisation
                </a> |
                <a href="https://www.pokemon.com/fr/avis-de-confidentialite/"> 
                Avis de confidentialité
                </a> |
                <a href="https://www.pokemon.com/fr/juridique/"> Informations juridiques</a>
                <br>
                <br>
                <text>©2019 Pokémon. ©1995–2019 Nintendo / Creatures Inc. / GAME FREAK inc. Pokémon et Nintendo Switch sont des marques de Nintendo. ©2019 Nintendo.
                </text>
            </div>
        </footer>
        
    </body>
</html>