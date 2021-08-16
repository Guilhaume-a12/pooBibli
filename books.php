<?php ob_start();
include "Book.class.php";
$livreTest = new Book(1,"Sorceleur...","images/le-dernier-voeu.jpg",500);
$livreTest2 = new Book(1,"Sorceleur2...","images/le-dernier-voeu.jpg",550);
$livreTest3 = new Book(1,"Sorceleur3...","images/le-dernier-voeu.jpg",600);


foreach (Book::$livreTab as $valeur) {
    ?>
        <table class="table text-center">
            <tr>
                <td class="align-middle"><img src="<?=$valeur->getImage()?>" alt="livre lsda" width="60px;"></td>
                <td class="align-middle"><?=$valeur->getTitre()?></td>
                <td class="align-middle"><?=$valeur->getPages()?></td>
                <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
                <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
            </tr>
        </table>

    <?php
}

?>

<a href="" class="btn btn-success d-block">Ajouter</a>

<?php

$titre = "Livres";
$content = ob_get_clean();
require_once "template.php";

// var_dump($livreTest);
// var_dump($livreTest->getTitre());
// var_dump($livreTab);