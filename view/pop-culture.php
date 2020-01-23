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
            <img class="card-img-top" src="ressources/<?= htmlspecialchars($data['Picture'])?>" alt="Card image cap">
                <div class="card-body">
                    <h3>
                        <?= htmlspecialchars($data['Title']); ?>
                    </h3>
                    <p class="card-text">
                    <?= htmlspecialchars($data['Articles']);?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
$articles->closeCursor();
var_dump($_FILES['userfile']['error']);
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

