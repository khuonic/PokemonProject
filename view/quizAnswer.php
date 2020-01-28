<?php require_once('controller/controller.php'); ?>
<?php
 ob_start(); 
ini_set('display_errors', 1);

?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-12 col-12 text-center mb-4 mt-4">
            <?php quizResult();?>
            <br>
            <a href="index.php?quiz"><button class ="mt-4 valider"><img src="ressources/rejouer.png" alt="rejouer"></button></a>
        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>