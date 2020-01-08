<?php require('controller.php'); ?>
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
<?php
while ($data = $questions->fetch()){
        $idQuestion = $data['id'];
?>

    <div class="container-fluid">
        <div class="row justify-content-center">
       
            <div class="col-8 text-center">
                <form method ="post" action="index.php?action=quizzResult">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label col-sm-12 mb-2"> <h5><?php echo htmlspecialchars($data['Question']); ?></h5></legend>
                        <div class="col-sm-12">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="answ1" id="gridRadios1" value="option1" >
                            <label class="form-check-label" for="gridRadios1">
                                Carapuce - Flammèche - Bulbizarre
                            </label>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary" name="save">Valider</button>
                </form>
            </div>
        </div>
    </div>
    <?php
}
$questions->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>