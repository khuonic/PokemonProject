<?php
 ob_start(); 
ini_set('display_errors', 1);
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8 text-center mb-2 mt-4">
            <h2>Cartes à jouer</h2>
        </div>
        <div class="col-8 text-center mb-4 mt-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In maxime vero obcaecati, laborum magni voluptas dolore, necessitatibus error esse itaque ipsa modi? Sapiente porro a pariatur vitae temporibus omnis ipsa?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam quibusdam eius doloribus earum iste magni mollitia unde sint iure voluptatum ex voluptatem minima maxime similique, ut ipsa maiores sapiente veniam.
            </p>
        </div>
        <div class="col-12 justifiy-content-center mb-5 mt-2 row" >
        <div class="left col-4 d-flex flex-column justify-content-between ">
            <div class="arrowRight mb-5 ml-auto"> Nom du Pokémon   </div>
            <div class="arrowRight mb-5 ml-auto">Caractéristiques du pokémon<img src="ressources/arrow.png"></div>
            <div class="arrowRight ml-auto"><img src="ressources/arrow.png"></div>
        </div>
       
        <div class="col-3 text-center  " style="width:50%;">
            <img src="ressources/pikachu.jpg" alt="carte pikachu" style="width:90%;" >
        </div>
        <div class="right col-4 d-flex flex-column justify-content-between ">
            <div class="arrowLeft mb-5 mr-auto"><img src="ressources/arrow.png"></div>
            <div class="arrowLeft mb-5 mr-auto"><img src="ressources/arrow.png"></div>
            <div class="arrowLeft mr-auto"><img src="ressources/arrow.png"></div>
        </div>
            
        </div>

    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>