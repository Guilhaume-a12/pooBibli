<?php ob_start();?>

<table class="table text-center">
<tr class = "table-dark">
    <th>Image</th>
    <th>Titre</th>
    <th>Nombre de pages</th>
    <th colspan="3">Action</th>
</tr>

<?php
foreach ($stockBooks as $valeur) {
    ?>

            <tr>
                <td class="align-middle"><img src="images/<?=$valeur->getImage()?>" alt="livre lsda" width="60px;"></td>
                <td class="align-middle"><?=$valeur->getTitre()?></td>
                <td class="align-middle"><?=$valeur->getPages()?></td>
                <td class="align-middle"><a href="livres/lire/<?=$valeur->getIdLivre()?>" class="btn btn-success">Lire</a></td>
                <td class="align-middle"><a href="livres/modifier/<?=$valeur->getIdLivre()?>" class="btn btn-warning">Modifier</a></td>
                <td class="align-middle"><a href="livres/supprimer/<?=$valeur->getIdLivre()?>" class="btn btn-danger">Supprimer</a></td>
            </tr>
        
    <?php
}

?>
</table>

    <a href="livres/ajouter" class="btn btn-success d-block">Ajouter</a>

<?php
$titre = "Livres";
$content = ob_get_clean();
require_once "template.php";
