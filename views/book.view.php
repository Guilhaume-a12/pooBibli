<?php ob_start();?>

<div class="row">
    <div class="col-md-8">
        <img src="<?=URL?>images/<?=$monLivre->getImage()?>" class="w-75">
    </div>
    <div class="col-md-4">
        <p><?=$monLivre->getTitre()?></p>
        <a href="<?=URL?>accueil" class='btn btn-outline-dark mt-5'>Retour accueil</a>
    </div>
</div>


<?php
$titre = $monLivre->getTitre();
$content = ob_get_clean();
require_once "template.php";