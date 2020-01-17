<?php require_once('controller/controller.php'); ?>
<?php
 ob_start(); 
ini_set('display_errors', 1);
var_dump($_POST);
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8 text-center mb-4 mt-4">
            <?php quizResult();?>
            <br>
            <a href="index.php?quiz"><button class ="btn btn-primary">Retentez votre chance !</button></a>
        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>