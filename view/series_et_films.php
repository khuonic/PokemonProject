<?php
 ob_start(); 
ini_set('display_errors', 1);
?>

<span class="alert alert-<?=$type_alert?>"><?=$message?></span><br /><br />

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>