<?php require_once('controller/controller.php'); ?>
<?php
 ob_start(); 
ini_set('display_errors', 1);
var_dump($_POST);
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8 text-center mb-4 mt-4">
            <?php
            $note = 0 ;
            foreach($_POST as $id_question => $correct) {
                if(!empty($correct)) {
                    $note+=1;
                }
            }
            echo "<h3> Votre Score : </h3>";
            echo $note . "/8<br><br /><br />";
            
            
            if($note <= 2) {
                echo '<span class="alert alert-danger">Retournez vous entraîner dans les hautes herbes !</span><br /><br />';
            }

            elseif($note >2 && $note <=4) {
                echo '<span class="alert alert-danger">Vous n\'êtes pas à la hauteur </span><br /><br />';
            }
            elseif($note >4 && $note <=6) {
                echo '<span class="alert alert-warning">Vous pouvez mieux faire ! </span><br /><br />';
            }
            elseif($note >6 && $note <8) {
                echo '<span class="alert alert-success">Encore un petit effort pour être le meilleur !</span><br /><br />';
            }
            elseif($note == 8) {
                echo '<span class="alert alert-success">Vous êtes le meilleur dresseur !</span><br /><br />';
            }
            
            ?>
            <br>
            <a href="index.php?quiz"><button class ="btn btn-primary">Retentez votre chance !</button></a>
        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>