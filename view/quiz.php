<?php require_once('controller/controller.php'); ?>
<?php
 ob_start(); 
ini_set('display_errors', 1);
alert();
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12 text-center mb-4 mt-4">
            <h2 class="">Testez vos connaissances de dresseur !</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12 text-center">
            <div class="card " style=" border:none;background-color:rgba(255,255,255, 0.3);">
                <div class="card-body " >
                    <form method ="post" action="index.php?action=quizResult" enctype="multipart/form-data" name ="radioForm" >
                        <?php while ($dataQ = $questions->fetch(PDO::FETCH_ASSOC)){?>
                            <fieldset class="form-group">
                                <div class="row">
                                        <legend class="col-form-label col-sm-12 mb-2">
                                        <h5><?= htmlspecialchars(utf8_encode($dataQ['Question'])); ?></h5>
                                    </legend>
                                </div>
                            </fieldset>
                            <?php $answers = quizMatchAnswers($dataQ['id']); ?>
                            <?php 
                                $note = 0 ;
                                while($dataA = $answers->fetch(PDO::FETCH_ASSOC)){                       
                                    if($dataA["question_id"] == $dataQ['id']){
                            ?>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="radio" name="<?= $dataQ['id']?>" value="<?= $dataA['correct']?>" id="<?= $dataA['id_answer']?>"  style="cursor:pointer;" class="radio">
                                    <label for="<?= $dataA['id_answer']?>" style="cursor:pointer;"><?= htmlspecialchars(utf8_encode($dataA['answer']));?> </label>   
                                </div>
                            </div>
                            <?php        
                                }  
                            }
                            $answers->closeCursor();
                            ?>
                            
                        <hr class = "col-8">
                        <?php
                        }
                        $questions->closeCursor();
                        ?>
                        <div id="alert" class="col-12"></div>
                        <button type="submit" class="valider" name="save" onclick =" return isChecked()">
                            <img src="ressources/validerA.png" alt="valider">
                        </button>
                    </form>
                </div>
            </div>
            <?php 
                if(is_connected()){ ?>
                <br>
                    <a href="index.php?newQuestions" class="btn btn-info">Ajouter des questions</a>   
            <?php }?>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>