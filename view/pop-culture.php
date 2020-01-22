<?php
require_once('controller/controller.php');
 ob_start(); 
ini_set('display_errors', 1);
?>

<?php
while ($data = $articles->fetch()){
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-4 text-center mb-4 mt-4">
            <div class="card  mb-3">
                <div  class="card-header">
                    <h3>
                        <?= htmlspecialchars($data['Title']); ?>
                    </h3>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    <?php
                    echo htmlspecialchars($data['Articles']);
                    ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
$articles->closeCursor();
?>
<?php 
if(is_connected()){ ?>
    <div class="row justify-content-center">
        <a href="index.php?newArticle" class="btn btn-info">Add</a>
    </div>
    
<?php }
?>




<?php $content = ob_get_clean(); ?>

<?php require_once('template.php'); ?>

