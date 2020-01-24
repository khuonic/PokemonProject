<?php require_once('controller/controller.php'); ?>
<?php
 ob_start(); 
ini_set('display_errors', 1);
?>
<div class="contain-fluid">
    <div class="row justify-content-center">
        <h3>Le créateur</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-2" id="satoshi-div">
            <img id="satoshi" src="ressources/Satoshi Tajiri.jpg" alt="Satoshi Tajiri">
            <p>Satoshi Tajiri né le 28 Août 1965</p>
        </div>
        <div class="col-8 mt-5">
            <p>Tajiri a passé son enfance dans une banlieue de Tokyo où il aimait collectionner les insectes, et les chassait partout, au bord des mares, dans les champs ou en forêt. 
            Il en cherchait tout le temps de nouveaux et imaginait même de nouvelles techniques pour attirer les scarabées. 
            Il était tellement attiré par les insectes, que ses copains l'appelaient « Dr. Bug. » .
            Le jeune Satoshi n'aimait pas l'école. Son père voulait qu'il devînt électricien, mais lui-même ne le souhaitait pas. 
            Plus tard, dans les années 1970, les champs et les mares que Satoshi avait tant aimés furent transformés en appartements et en parkings. 
            C'est à cette époque que germa l'idée des Pokémon. Satoshi Tajiri voulait offrir à la nouvelle génération d'enfants la possibilité de chasser des créatures, comme il l'avait fait petit.
            </p>
            <img id="scout" src="ressources/scout.png" alt="Scout">
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>