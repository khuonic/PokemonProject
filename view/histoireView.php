<?php
 ob_start(); 
ini_set('display_errors', 1);
?>

<div class='wrapper'></div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>