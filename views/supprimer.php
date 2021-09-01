<?php ob_start();?>

<div class="row">
    <div class="col-md-8">
        <img src="<?=URL?>images/<?=$monLivre->getImage()?>" class="w-75">
    </div>
    <div class="col-md-4">
        <h2>Etes vous sur de vouloir supprimer ce livre définitivement ?</h2>
        <a href="<?=URL?>accueil" class='btn btn-outline-success mt-5'>Annuler</a>
        <a href="<?=URL?>livres/confirmer/<?=$monLivre->getIdLivre()?>" class='btn btn-outline-danger mt-5'>Confirmer</a>
    </div>
</div>


<?php
$titre = "Supprimer";
$content = ob_get_clean();
require_once "template.php";