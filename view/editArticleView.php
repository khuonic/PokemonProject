<?php ob_start(); ?>

<div class="row justify-content-center">
    <div class="col-8">
        <form method="post" action="index.php?action=articleEdited&id=<?php echo $_GET['id']?> " >
            <div class="form-group">
                <label for="formGroupExampleInput">Titre</label>
                <input type="text" class="form-control"  name="Title" value="<?php echo $article['Title']; ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Article</label>
                <textarea class="form-control"  rows="8" name="Article" >
    <?php echo $article['Article']; ?>"</textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="save">Save</button>
        </form>
    </div>
</div>
        
    

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>