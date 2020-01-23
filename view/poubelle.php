<<<<<<< HEAD
<div class="row justify-content-center">
        <div class="col-8 text-center">
            <form method ="post" action="index.php?action=quizzResult" name ="radioForm" >
=======

<img src="ressources/pokedex5.png" alt="logo" style="position:absolute;z-index:2;top:30%;left:20%;"> 
                <!-- <div class="d-flex justify-content-between" >
                    <div class="col-8">
                        <img src="ressources/pokedex13.png" alt="pokedex"  style="position:absolute;z-index:3;bottom:0; height: 100vh"> 
                    </div>
                    <div class="col-8">
                        <img src="ressources/pokedex12.png" alt="pokedex"  style="position:absolute;z-index:3;bottom:0; height: 100vh">
                    </div> -->
                </div>
                
                
            </div>
            <div>
                <nav class = "navbar navbar-expand-lg justify-content-center container-fullwidth mr-auto ml-auto fixed-top  nav-style"> 
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
                            <a href="index.php?quiz" class="nav-link">Quiz</a>
                        </li>
                    </ul>