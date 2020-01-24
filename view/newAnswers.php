<?php require_once('controller/controller.php'); ?>
<?php
 ob_start(); 
ini_set('display_errors', 1);
?>

<?php $lastId; ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6 text-center mb-4 mt-4">
            <h3><?php echo $_POST['question'] ?></h3>
            <br>
            <form action="index.php?action=answersCreated " class="form " method="post">
                    <div class="form-group  ">
                        <label for="formGroupExampleInput">Réponse 1 : Réponse Vraie</label>
                        <input type="text" class="form-control"  name="answer[]" required>

                        <label for="formGroupExampleInput">Réponse 2 :</label>
                        <input type="text" class="form-control"  name="answer[]" required>

                        <label for="formGroupExampleInput">Réponse 3 : </label>
                        <input type="text" class="form-control"  name="answer[]" required>
                        
                        <input type="number" name="idQuestion" value="<?= $lastId; ?>" style='display:none;'>
                    </div>
                    <div class="form-group col-12">
                        <button type="submit" class="btn btn-primary" name="save">Create Answers </button>
                    </div>
            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>