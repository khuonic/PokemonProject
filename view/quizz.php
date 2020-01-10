<?php require_once('controller/controller.php'); ?>
<?php
 ob_start(); 
ini_set('display_errors', 1);
?>



<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8 text-center mb-4 mt-4">
            <h2>Testez vos connaissances de dresseur !</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8 text-center">
            <form method ="post" action="index.php?action=quizzResult">
<?php while ($dataQ = $questions->fetch(PDO::FETCH_ASSOC)){?>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-12 mb-2">
                <h5><?= htmlspecialchars($dataQ['Question']); ?></h5>
            </legend>
        </div>
    </fieldset>
        <?php $answers = quizzMatchAnswers($dataQ['id']);?>
        <?php while($dataA = $answers->fetch(PDO::FETCH_ASSOC)){
            if($dataA["question_id"] == $dataQ['id']){
        ?>
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="radio" name="<?= $dataQ['id']?>" value="<?= $dataA['id_answer']?>" id="<?= $dataA['id_answer']?>"> <label for="<?= $dataA['id_answer']?>"><?= htmlspecialchars($dataA['answer']);?> </label>  </div>
            </div>
        <?php 
            }
        }
        $answers->closeCursor();
        ?>

<script>



</script>  

<?php
}
$questions->closeCursor();
?>
<div id="alert"></div>
<button type="submit" class="btn btn-primary" name="save" onclick = "return valForm()">Valider</button>
            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>