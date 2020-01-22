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
    
    <script src="js/javascript.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/magic.min.css">
    <link rel="stylesheet" href="css/style.css">
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
                        <?php  
                            $page = $_SERVER['PHP_SELF'];
                        ?>
                            <li  class="nav-item">
                                <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?home') ){ echo 'class=" nav-link active"'; } ?> href="index.php?home" class="nav-link"><img src="ressources/pokedex5.png" alt="logoNav"  id="logoNav"></a>
                            </li>
                            <li  class="nav-item">
                                <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?histoire') ){ echo 'class=" nav-link active"'; } ?> href="index.php?histoire" class="nav-link ">Histoire</a>
                            </li>
                            <li class="nav-item">  
                                <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?Generations') ){ echo 'class=" nav-link active"'; } ?> href="index.php?Generations" class="nav-link">Générations</a>
                            </li>
                            <li class="nav-item">
                                <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?pop-culture') ){ echo 'class=" nav-link active"'; } ?> href="index.php?pop-culture" class="nav-link">Pop-culture</a>
                            </li>
                            <li class="nav-item">
                                <a <?php if( strpos($_SERVER['REQUEST_URI'],'/index.php?quiz') ){ echo 'class=" nav-link active"'; } ?> href="index.php?quiz" class="nav-link">Quiz</a>
                            </li>
                            <?php if(is_connected()):?>
                                <li class="nav-item"><a href="index.php?action=logout" class="nav-link">Se déconnecter</a></li>
                            <?php endif?>
                        </ul>
                    </div>
                </nav>
            </div>




            