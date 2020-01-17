<?php
 ob_start(); 
ini_set('display_errors', 1);
?>
<div id="shadow">
    <div id="rec">
        <div id="black-stripe">
                <div id="circ">
                    <button id="circ2">
                        <button id="circ3"></button>
                    </button>
                </div>
            </div>
        <div id="top"></div>
        <div id="bot"></div>
    </div>
</div>

<div class='wrapper'></div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>