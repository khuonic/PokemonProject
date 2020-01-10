<?php
 ob_start(); 
ini_set('display_errors', 1);
?>

<?php
while ($data = $articles->fetch()){
?>
    
    <div class="card  mb-3">
        <div  class="card-header">
            <h3>
                <?= htmlspecialchars($data['Title']); ?>
            </h3>
        </div>
        <div class="card-body">
            <p class="card-text">
            <?php
            // On affiche le contenu du billet
            echo htmlspecialchars($data['Articles']);
            ?>
            </p>
        </div>
    </div>
<?php
}
$articles->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require_once('template.php'); ?>

