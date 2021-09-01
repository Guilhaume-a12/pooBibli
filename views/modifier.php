<?php ob_start();?>
<form action="<?=URL?>livres/modifierOk/<?=$monLivre->getIdLivre()?>" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titre</label>
        <input type="text" class="form-control" id="titre" name="titre" value="<?=$monLivre->getTitre()?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre de page</label>
        <input type="number" class="form-control" id="page" name="page" value="<?=$monLivre->getPages()?>">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control" type="file" id="formFile" name="image">
    </div>
    <button class="btn btn-outline-success">Modifier</button>
</form>
<?php
$titre = "Modifier livre";
$content = ob_get_clean();
require_once "template.php";