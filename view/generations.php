<?php require_once('controller/controller.php'); ?>
<?php
 ob_start(); 
ini_set('display_errors', 1);
?>

    <div class="containder-fluid mt-5" style="overflow: hidden;">
            <div class="col-2">
                
                <ol class="carousel-indicators row text-center">
                    <h3 class="col-12">Générations</h3>
                    <li class="carouselButton " data-target="#slideshow1" data-slide-to="0" class="col-12" onclick="$('#slideshow2').carousel(0)">
                        <img src="ressources/Générations/rougebleu.png" >
                    </li>
                    <li class="carouselButton" data-target="#slideshow1" data-slide-to="1" class="col-12" onclick="$('#slideshow2').carousel(1)"> 
                        <img src="ressources/Générations/orargent.png">
                    </li>
                    <li class="carouselButton" data-target="#slideshow1" data-slide-to="2" class="col-12" onclick="$('#slideshow2').carousel(2)"> 
                        <img src="ressources/Générations/rubissaphir.png">
                    </li>
                    <li class="carouselButton" data-target="#slideshow1" data-slide-to="3" class="col-12" onclick="$('#slideshow2').carousel(3)">
                        <img src="ressources/Générations/diamantperle.png">
                    </li>
                    <li class="carouselButton" data-target="#slideshow1" data-slide-to="4" class="col-12" onclick="$('#slideshow2').carousel(4)"> 
                        <img src="ressources/Générations/noireblanche.png">
                    </li>
                    <li class="carouselButton" data-target="#slideshow1" data-slide-to="5" class="col-12" onclick="$('#slideshow2').carousel(5)"> 
                        <img src="ressources/Générations/xy.png">
                    </li>
                    <li class="carouselButton" data-target="#slideshow1" data-slide-to="6" class="col-12" onclick="$('#slideshow2').carousel(6)"> 
                        <img src="ressources/Générations/soleillune.png">
                    </li>
                    <li class="carouselButton" data-target="#slideshow1" data-slide-to="7" class="col-12" onclick="$('#slideshow2').carousel(7)"> 
                        <img src="ressources/Générations/epeebouclier.png">
                    </li>
                </ol>
            </div>
        <div class="row ">
            <div  id="slideshow1" class=" col-md-6 col-lg-6  col-sm-8 carousel container " data-interval="false">
               
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="ressources/Générations/rouge-bleu.png" class="d-block w-100 magictime spaceInDown" alt=" version rouge-bleu" >
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/Générations/or-argent.png" class="d-block w-100 magictime spaceInDown" alt="version or-argent">
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/Générations/rubis-saphir.png" class="d-block w-100 magictime spaceInDown" alt="version rubis-saphir">
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/Générations/diamant-perle.png" class="d-block w-100 magictime spaceInDown" alt="version diamant-perle">
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/Générations/noire-blanche.png" class="d-block w-100 magictime spaceInDown" alt="version noire-blanche">
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/Générations/x-y.png" class="d-block w-100 magictime spaceInDown" alt="version x-y">
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/Générations/soleil-lune.png" class="d-block w-100 magictime spaceInDown" alt="version soleil-lune">
                    </div>
                    <div class="carousel-item">
                        <img src="ressources/Générations/epee-bouclier-2.png" class="d-block w-100 magictime spaceInDown" alt="version épée-bouclier">

                    </div>
                </div>
                <a class="carousel-control-prev" href="#slideshow1" role="button" data-slide="prev" onclick="$('#slideshow2').carousel('prev')">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slideshow1" role="button" data-slide="next" onclick="$('#slideshow2').carousel('next')">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div id="slideshow2" class=" col-md-7 col-lg-7  col-sm-8 carousel  container mt-5 " data-interval="false">
                <div class="carousel-inner innerP">
                    <div class="carousel-item active text-center magictime spaceInDown">                       
                        <h5>Pokemon 1ère Génération</h5>
                        <p>Pokémon version Rouge et Pokémon version Bleue sont les tout premiers jeu de la franchise Pokémon à avoir débarqué sur notre vieux continent, en 1999. Ces versions vont installer ce qui va devenir la base du RPG Pokémon pour toutes les générations suivantes.
                        Dans Pokémon Rouge et Bleu, vous allez parcourir pour la toute première fois la région de Kanto, et par la même occasion découvrir les 151 Pokémon qui s'y cachent. 
                        </p>
                        <h6><u><b>Liste des protagonistes principaux : </b></u></h6>   
                        <br>  
                        <div class="imagesContenuGenerations row">
                            <div class="rivaux col-4">
                                <img src="ressources/Générations/rivalrb.png" alt ="rival régis" style="width:20%;"> 
                                <br>
                                <br>
                                <text class="col-3">Blue, rival du joueur dans la premiere génération</text>
                            </div> 
                            <div class="prof col-4">
                                <img src="ressources/Générations/profchen_rb.png" alt ="Professeur Chen" style="width:40%;"> 
                                <br>
                                <br>
                                <text class="col-3">Le professeur Chen accueillant le joueur dans Pokémon Rouge et Bleu.</text>
                            </div>
                            <div class="team col-4">
                                <img src="ressources/Générations/teamrocketrb.png" alt ="rival régis" style="width:40%;"> 
                                <br>
                                <br>
                                <text class="col-3">Sbire de la Team Rocket, ennemis principaux du joueur </text>
                            </div>                     
                        </div>                    
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">                     
                        <h5>Pokemon 2ème Génération</h5>
                        <p>Cette deuxième génération de Pokémon est apparue à la fin de l'année 1999 au Japon et est arrivée en avril 2001 en France.
                        Elle réunit 100 nouveaux Pokémon ce qui porte leur nombre à 251, les versions Or et Argent nous font donc découvrir une nouvelle région du monde Pokémon : Johto, région sitée à l'ouest de Kanto, la région des versions précédentes.</p>
                        <h6><u><b>Liste des protagonistes principaux : </b></u></h6>   
                        <br>  
                        <div class="imagesContenuGenerations row">
                            <div class="rivaux col-4">
                                <img src="ressources/Générations/silver.png" alt ="rival régis" style="width:30%;"> 
                                <br>
                                <br>
                                <text class="col-3">Silver, rival du joueur dans la premiere génération</text>
                            </div> 
                            <div class="prof col-4">
                                <img src="ressources/Générations/Professeur_Orme.png" alt ="Professeur Chen" style="width:20%;"> 
                                <br>
                                <br>
                                <text class="col-3">Le professeur Orme, ancien élève du professeur Chen,il remet au dresseur son premier pokémon.</text>
                            </div>
                            <div class="team col-4">
                                <img src="ressources/Générations/rocketGold.png" alt ="rival régis" style="width:35%;"> 
                                <br>
                                <br>
                                <text class="col-3">Sbire de la Team Rocket, ennemis principaux du joueur</text>
                            </div>                     
                        </div>                               
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">
                        <h5>Pokemon 3ème Génération</h5>
                        <p>La troisième génération de Pokémon est apparue en novembre 2002 au Japon et est arrivée en juillet 2003 en France.
                        Elle nous présente 135 nouveaux Pokémon, ce qui porte leur nombre total à 386 Pokémon. Sur ces versions Pokémon Rubis et Saphir, on découvre la région d'Hoenn qui ne semble pas avoir de frontière commune avec les précédentes régions, Johto et Kanto.</p>
                        <h6><u><b>Liste des protagonistes principaux : </b></u></h6>   
                        <br>  
                        <div class="imagesContenuGenerations row">
                            <div class="rivaux col-4">
                                <img src="ressources/Générations/Brice.png" alt ="rival régis" style="width:30%;">
                                <img src ="ressources/Générations/Flora.png" alt ="flora" style="width:30%;">
                                <br>
                                <br>
                                <text class="col-3">Selon le choix du joueur concernant son genre, il incarne Flora ou Brice au cours de l'aventure. Son (sa) rival(e) est du sexe opposé, et a pour père le Professeur Seko.</text>
                            </div> 
                            <div class="prof col-4">
                                <img src="ressources/Générations/Seko.png" alt ="Professeur Chen" style="width:20%;"> 
                                <br>
                                <br>
                                <text class="col-3">Le professeur Seko, formé par le professeur Chen, il remet au dresseur son premier pokémon.</text>
                            </div>
                            <div class="team col-4">
                                <img src="ressources/Générations/Timmy.png" alt ="rival régis" style="width:33%;"> 
                                <br>
                                <br>
                                <text class="col-3">Élève du joueur au départ, il devient son rival par la suite.</text>
                            </div> 

                            <div class="rivaux col-12 mt-4">
                                <img src="ressources/Générations/teamMagma.png" alt ="rival régis" style="width:20%;">
                                <img src ="ressources/Générations/teamAqua.png" alt ="flora" style="width:20%;">
                                <br>
                                <br>
                                <text class="col-3">Team Magma et Team Aqua, ennemis principaux du joueur.</text>
                            </div>                     
                        </div>
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">
                        <h5>Pokemon 4ème Génération</h5>
                        <p>
                        Pokémon Diamant et Perle sont les premiers jeux de la quatrième génération. Sortis en septembre 2006 au Japon et en juillet 2007 en Europe, ils nous font découvrir la toute nouvelle région de Sinnoh et ses 107 nouveaux Pokémon.</p>
                        <h6><u><b>Liste des protagonistes principaux : </b></u></h6>   
                        <br>  
                        <div class="imagesContenuGenerations row">
                            <div class="rivaux col-4">
                                <img src="ressources/Générations/Louka.png" alt ="rival régis" style="width:30%;">
                                <img src ="ressources/Générations/Aurore.png" alt ="flora" style="width:30%;">
                                <br>
                                <br>
                                <text class="col-3">Selon le choix du joueur concernant son genre, il incarne Aurore ou Louka au cours de l'aventure. Son (sa) rival(e) est du sexe opposé, et est assistant(e) du professeur Sorbier.</text>
                            </div> 
                            <div class="prof col-4">
                                <img src="ressources/Générations/sorbier.png" alt ="Professeur Chen" style="width:20%;"> 
                                <br>
                                <br>
                                <text class="col-3">Le professeur Sorbier, il donne un Pokémon de départ aux jeunes dresseurs de la région de Sinnoh. Il est dit que le Professeur Sorbier est plus vieux que le Professeur Chen et qu'ils se sont bien connus.</text>
                            </div>
                            <div class="team col-4">
                                <img src="ressources/Générations/Barry.png" alt ="rival régis" style="width:33%;"> 
                                <br>
                                <br>
                                <text class="col-3">Le rival blond, prénommé Barry. Il choisit le Pokémon de départ ayant l'avantage sur celui du joueur et l'affronte à plusieurs reprises tout au long de son périple. </text>
                            </div> 

                            <div class="rivaux col-12 mt-4">
                                <img src="ressources/Générations/teamGalaxie.png" alt ="rival régis" style="width:20%;">
                                <br>
                                <br>
                                <text class="col-3">Sbires de la Team Galaxie, ennemis principaux du joueur.</text>
                            </div>                     
                        </div>
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">
                        <h5>Pokemon 5ème Génération</h5>
                        <p>La légende renaît dans Pokémon version Noire et Pokémon version Blanche  dans la toute nouvelle région d'Unys à explorer. Il s'agit de jeux Nintendo DS, disponibles depuis le 18 septembre 2010 au Japon, depuis le 4 mars 2011 en France . </p>
                        <h6><u><b>Liste des protagonistes principaux : </b></u></h6>   
                        <br>
                        <div class="imagesContenuGenerations row">
                            <div class="rivaux col-4">
                                <img src="ressources/Générations/Ludwig.png" alt ="rival régis" style="width:30%;">
                                <img src ="ressources/Générations/Ludvina.png" alt ="flora" style="width:30%;">
                                <br>
                                <br>
                                <text class="col-3">Ludwig et Ludvina sont respectivement le héros et l'héroïne que le joueur peut choisir d'incarner dans Pokémon Noir et Blanc.</text>
                            </div> 
                            <div class="prof col-4">
                                <img src="ressources/Générations/Keteleeria.png" alt ="Professeur Chen" style="width:20%;"> 
                                <br>
                                <br>
                                <text class="col-3">Le Professeur Keteleeria est une Professeur Pokémon localisée dans la région d'Unys. Elle remet aux jeunes dresseurs, dont le joueur, leur Pokémon de départ. Responsable de la région, c'est, dans les jeux vidéo, la première femme à avoir droit à un tel statut.</text>
                            </div>
                            <div class="team col-4">
                                <img src="ressources/Générations/Tcheren.png" alt ="rival régis" style="width:33%;"> 
                                <img src="ressources/Générations/Bianca.png" alt ="rival régis" style="width:33%;"> 
                                <br>
                                <br>
                                <text class="col-3">Bianca et Tcheren sont les amis d'enfance et rivaux du joueur dans Pokémon Noir et Blanc. </text>
                            </div> 

                            <div class="rivaux col-12 mt-4">
                                <img src="ressources/Générations/Plasma.png" alt ="rival régis" style="width:30%;">
                                <br>
                                <text class="col-3">Sbires de la Team Plasma, ennemis principaux du joueur.</text>
                            </div>                     
                        </div>  
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">
                        <h5>Pokemon 6ème Génération</h5>
                        <p>Pokémon X  et Pokémon Y  sont les deux versions principales du RPG Pokémon pour la sixième génération. Se déclinant sous forme de deux versions complémentaires, il s'agit de jeux Nintendo 3DS, sortis mondialement le 12 octobre 2013. Une sortie mondiale est une première pour un jeu Pokémon, tout comme la possibilité de choisir la langue en début de jeu (pour la série principale). Les langues disponibles sont le français, l'allemand, l'anglais, le coréen, l'espagnol, l'italien, et le japonais.</p>
                        <h6><u><b>Liste des protagonistes principaux : </b></u></h6>   
                        <br>
                        <div class="imagesContenuGenerations row">
                            <div class="rivaux col-4">
                                <img src="ressources/Générations/Kalem.png" alt ="rival régis" style="width:30%;">
                                <img src ="ressources/Générations/Serena.png" alt ="flora" style="width:30%;">
                                
                                <br>
                                <text class="col-4">Kalem et Serena sont respectivement l'héroïne et le héros que le joueur peut choisir d'incarner dans Pokémon X et Y Le personnage non choisi devient un des rivaux de l'histoire. .</text>
                            </div> 
                            <div class="prof col-4">
                                <img src="ressources/Générations/Platane.png" alt ="Professeur Chen" style="width:30%;"> 
                                
                                <br>
                                <text class="col-3">Le Professeur Platane, le Professeur Pokémon de la région de Kalos. Il donne au joueur un Pokémon de départ de la région de Kanto.</text>
                            </div>
                            <div class="team col-4">
                                <img src="ressources/Générations/rivalxy.png" alt ="rival régis" style="width:50%;"> 
                                
                                <br>
                                <text class="col-3">Sannah, Trovato, Tierno, et Serena ou Kalem (suivant celui incarné) sont les nouveaux amis et rivaux du joueur dans Pokémon X et Y.  </text>
                            </div> 

                            <div class="rivaux col-12 mt-4">
                                <img src="ressources/Générations/teamFlare.png" alt ="rival régis" style="width:10%;">
                                <br>
                                <text class="col-3">Sbires de la Team Flare, organisation malfaisante de cette génération.</text>
                            </div>                     
                        </div>  
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">
                        <h5>Pokemon 7ème Génération</h5>
                        <p>Pokémon Soleil et Pokémon Lune ont été annoncés le 26 février 2016 (27 février pour le Japon), soit le jour des 20 ans de Pokémon ! Ils sont sortis le 23 novembre 2016 en Europe.Le jeu se déroule dans la région insulaire et paradisiaque d'Alola, inspirée de l'île d'Oahu, dans l'archipel d'Hawaï.</p>
                        <h6><u><b>Liste des protagonistes principaux : </b></u></h6>   
                        <br>
                        <div class="imagesContenuGenerations row">
                            <div class="rivaux col-4">
                                <img src="ressources/Générations/sunmoon.png" alt ="rival régis" style="width:60%;">
                              <br>
                                <text class="col-4">Soleil et Lune sont les personnages que le joueur peut choisir d'incarner. Le fait de jouer l'un ou l'autre fait disparaître son alter-ego de l'histoire.</text>
                            </div> 
                            <div class="prof col-4">
                                <img src="ressources/Générations/euphorbe.png" alt ="Professeur Chen" style="width:50%;"> 
                                <br>
                                <text class="col-3">Professeur Euphorbe est le Professeur Pokémon d'Alola et le fondateur de la Ligue Pokémon de la région. C'est lui qui accueille le joueur à son arrivée dans la région.</text>
                            </div>
                            <div class="team col-4">
                                <img src="ressources/Générations/Tili.png" alt ="rival régis" style="width:45%;"> 
                                <img src="ressources/Générations/Gladio.png" alt ="rival régis" style="width:45%;"> 
                                <br>
                                <text class="col-3">Le rival est un garçon qui se prénomme Tili. Il choisit le Pokémon ayant un type désavantagé par rapport à celui du joueur.  </text>
                            </div> 

                            <div class="rivaux col-6 mt-4">
                                <img src="ressources/Générations/Team-Skull.png" alt ="rival régis" style="width:40%;">
                                <br>
                                <text class="col-3">Sbires de la Team Skull, une organisation criminelle active dans la région d'Alola.
                                </text>
                            </div>    
                            <div class="rivaux col-6 mt-4">
                                <img src="ressources/Générations/fondation.png" alt ="rival régis" style="width:40%;">
                                <br>
                                <text class="col-3">Employés de la Fondation Æther, organisation qui mène des projets de recherche à Alolaavec pour but de soigner les pokémon blessés et de les protéger de la team Skull.</text>
                            </div>                    
                        </div>  
                    </div>
                    <div class="carousel-item text-center magictime spaceInDown">
                        <h5>Pokemon 8ème Génération</h5>
                        <p>Pokémon Épée et Bouclier sont des jeux sur Nintendo Switch qui ont été annoncés le 27 février 2019 dans un Pokémon Direct. Les jeux sont sortis mondialement le 15 novembre 2019 et introduisent la 8ème génération de Pokémon ! Parcourez la région de Galar dans ces deux nouveaux opus !</p>
                        <h6><u><b>Liste des protagonistes principaux : </b></u></h6>   
                        <br>
                        <div class="imagesContenuGenerations row">
                            <div class="rivaux col-4">
                                <img src="ressources/Générations/gloriaviktor.png" alt ="rival régis" style="width:50%;">

                              <br>
                                <text class="col-4">Viktor et Gloria sont les personnages que le joueur peut choisir d'incarner. Le  personnage incarné possède au début de son aventure l'un des trois Pokémon de départ de la région de Galar, à savoir Ouistempo , Flambino ou Larméléon.</text>
                            </div> 
                            <div class="prof col-4">
                                <img src="ressources/Générations/magnolia.png" alt ="Professeur Chen" style="width:40%;"> 
                                <br>
                                <text class="col-3">Magnolia est la Professeure Pokémon de la région de Galar. Ses recherches portent principalement sur le phénomène Dynamax.Le joueur la rencontre pour la première fois sur les conseils de Tarak pour lui demander une Lettre de Recommandation. </text>
                            </div>
                            <div class="team col-4">
                                <img src="ressources/Générations/rivalsshields.png" alt ="rival régis" style="width:80%;"> 
                                <br>
                                <text class="col-3">Le premier rival est un garçon appelé Nabil, voisin et ami du héros, qui débute son aventure en même temps que lui. Le second est un garçon nommé Travis, un génie des combats Pokémon. Enfin, la dernière rivale est Rosemary, une fille très intelligente et stratège. 
                            </div>
                            <div class="rivaux col-12 mt-4">
                                <img src="ressources/Générations/YELL.png" alt ="rival régis" style="width:20%;">
                                <br>
                                <text class="col-3">Sbires de la Team Yell, organisation active dans la région de Galar.
                                </text>
                            </div>      
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        
    </div>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>