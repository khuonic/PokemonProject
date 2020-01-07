<?php
 ob_start(); 
ini_set('display_errors', 1);
?>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8 text-center mb-4 mt-4">
                <h2>Testez vos connaissances de dresseurs !</h2>
            </div>
            <div class="col-8 text-center">
                <form method ="post" action="index.php?action=quizzResult">
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label col-sm-12 mb-2"> <h5>Quels sont les pokémons de départ dans la première génération ? </h5></legend>
                        <div class="col-sm-12">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="answ1" id="gridRadios1" value="option1" >
                            <label class="form-check-label" for="gridRadios1">
                                Carapuce - Flammèche - Bulbizarre
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="answ2" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Germignon - Héricendre - Kaiminus
                            </label>
                            </div>
                            <div class="form-check ">
                            <input class="form-check-input" type="radio" name="answ3" id="gridRadios3" value="option3">
                            <label class="form-check-label" for="gridRadios3">
                                Arcko - Poussifeu - Gobou
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


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>