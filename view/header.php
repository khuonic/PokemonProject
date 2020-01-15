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
    <script src="js/javascript.js"></script>
    <title>Pokéducation</title>
</head>
    <body style='height:100%;'>
        <nav class = "navbar navbar-expand-lg justify-content-center container-fullwidth sticky-top bg-light"> 
            <ul class="nav nav-pills">   
                <?php  
                    $page = $_SERVER['PHP_SELF'];
                ?>
                <li  class="nav-item">
                    <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?home') ){ echo 'class=" nav-link active"'; } ?> href="index.php?home" class="nav-link">Home</a>
                    </li>
                <li  class="nav-item">
                    <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?histoire') ){ echo 'class=" nav-link active"'; } ?> href="index.php?histoire" class="nav-link ">Histoire</a>
                </li>
                <li class="nav-item">  
                    <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?Generations') ){ echo 'class=" nav-link active"'; } ?> href="index.php?Generations" class="nav-link">Générations</a>
                </li>
                <li class="nav-item dropdown">
                <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?series_et_films') ){ echo 'class=" nav-link active dropdown-toggle"'; } ?> 
                    <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?cartes') ){ echo 'class=" nav-link active dropdown-toggle"'; } ?>
                    <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?mangas') ){ echo 'class=" nav-link active dropdown-toggle"'; } ?>
                class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Médias
                    </a>
                    <div class="dropdown-menu link" aria-labelledby="navbarDropdown">
                        <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?series_et_films') ){ echo 'class=" nav-link active"'; } ?> class="dropdown-item" href="index.php?series_et_films">Séries et films</a>
                        <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?cartes') ){ echo 'class=" nav-link active"'; } ?> class="dropdown-item" href="index.php?cartes">Cartes à jouer</a>
                        <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?mangas') ){ echo 'class=" nav-link active"'; } ?> class="dropdown-item" href="index.php?mangas">Mangas</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?pop-culture') ){ echo 'class=" nav-link active"'; } ?> href="index.php?pop-culture" class="nav-link">Pop-culture</a>
                </li>
                <li class="nav-item">
                    <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?quizz') ){ echo 'class=" nav-link active"'; } ?> href="index.php?quizz" class="nav-link">Quizz</a>
                </li>
            </ul>
        </nav>



    
