<?php
 ob_start(); 
ini_set('display_errors', 1);
require_once("index.php");
?>


<div class="row justify-content-center">
    <div class="col-8">
    <a href="index.php?pop-culture" class="btn btn-primary">Retour à l'écran précédent</a>
        <form action="index.php?action=create"  method="POST" enctype="multipart/form-data">
            <div class="form-group mt-3">
                Ajouter une image: <input name="userfile" type="file"/>
            </div>
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name= "title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="text"> Texte</label>
                <textarea name="text" id="text" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="author"> Auteur</label>
                <input type="text" name= "author" id="author" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require("template.php");?>