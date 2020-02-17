<?php
require_once('controller/controller.php');
 ob_start(); 
ini_set('display_errors', 1);
?>

<?php
alert();
while ($data = $articles->fetch()){
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-4 text-center mb-4 mt-4">
            <div class="card  mb-3">
            <img class="card-img-top" src="ressources/<?= htmlspecialchars($data['Picture'])?>" alt="Card image cap">
            <?php  if(is_connected() ):  ?>
                <div>
                    <em><a href="index.php?action=edit&id=<?php echo $data['id']; ?>" class="btn btn-info">Editer</a></em>
                    <em><a href="index.php?action=delete&id=<?php echo $data['id']; ?>" class="btn btn-danger">Supprimer</a></em>
                </div>
                <?php endif?>
                <div class="card-body">
                    <h3>
                        <?= htmlspecialchars(utf8_encode($data['Title'])); ?>
                    </h3>
                    <p class="card-text">
                    <?= htmlspecialchars(utf8_encode($data['Articles']));?>
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
if(is_connected()): ?>
    <div class="row justify-content-center">
        <a href="index.php?newArticle" class="btn btn-info">Add</a>
    </div>
    
<?php endif?>

<div class = "d-flex justify-content-center my-4">
    <?php if($_GET['pop-culture'] > 1):?>
        <a href="index.php?pop-culture=<?= $_GET['pop-culture'] - 1?>" class="valider mr-3"><img src="ressources/previousPage.png" alt="next"></a>
    <?php endif?>
    <?php if($_GET['pop-culture'] < $returnData[2]):?>
        <a href="index.php?pop-culture=<?= $_GET['pop-culture'] + 1?>" class="valider ml-3"><img src="ressources/nextPage.png" alt="previous"></a>
    <?php endif?>
</div>


<?php $content = ob_get_clean(); ?>

<?php require_once('template.php'); ?>

