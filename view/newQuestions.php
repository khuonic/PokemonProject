<?php
 ob_start(); 
ini_set('display_errors', 1);
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6 text-center mb-4 mt-4">
            <form action="index.php?action=questionCreated" class="form" method="post">
                <div class="form-group">
                        <label for="formGroupExampleInput">Question</label>
                        <input type="text" class="form-control"  name="question" >
                </div>
                <button type="submit" class="btn btn-primary" name="save">Create Question</button>
            </form>
            <br>
            <br>
         
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>