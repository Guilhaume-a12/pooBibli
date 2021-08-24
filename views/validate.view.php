<?php ob_start();?>
<p>page test validate</p>
<?php
var_dump($_POST);
var_dump($_FILES);
$titre = "test validate";
$content = ob_get_clean();
require_once "template.php";