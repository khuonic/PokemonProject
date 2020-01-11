<?php require_once('controller/controller.php'); ?>
<?php
 ob_start(); 
ini_set('display_errors', 1);
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
            if($note <= 2) {
                echo "<h2>Vous etes nazes</h2>";
            }

            elseif($note >2 && $note <=4) {
                echo "<h2>Vous pouvez mieux faire</h2>";
            }
            elseif($note >4 && $note <=6) {
                echo "<h2>Franchement pas dégueu</h2>";
            }
            elseif($note >6 && $note <8) {
                echo "<h2>Presque parfait</h2>";
            }
            elseif($note == 8) {
                echo "<h2>Au top </h2>";
            }
            echo $note . "/8";
            ?>
        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>