<?php ob_start();?>
<form action="validate" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titre</label>
        <input type="text" class="form-control" id="titre" name="titre">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre de page</label>
        <input type="number" class="form-control" id="page" name="page">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control" type="file" id="formFile" name="image">
    </div>
    <button type="submit" class="btn btn-outline-success">Ajouter</button>
</form>
<?php
$titre = "Ajouter un livre";
$content = ob_get_clean();
require_once "template.php";