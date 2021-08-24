<?php

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? " https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

include "controllers/BookController.controller.php";
$controller = new BookController;

try {

    if (empty($_GET['page'])) {
        require "views/accueil.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        switch ($url[0]) {
            case "accueil":
                require "views/accueil.view.php";
                break;
            case "livres":
                if (empty($url[1])) {
                $controller->displayBooks();
                }
                else if ($url[1]=="lire") {
                    $controller->displayBook($url[2]);
                }
                else if ($url[1]=="ajouter") {
                    $controller->ajoutLivre();
                }
                else if ($url[1]=="modifier") {
                    echo "modifier";
                }
                else if ($url[1]=="supprimer") {
                    echo "supprimer";
                }
                else if ($url[1]=="validate") {
                    $controller->addBookValidate();
                }
                else {
                    throw new Exception ("Error 404, page not found");
                }
                break;
            default:
                throw new Exception("Error 404, page not found mouahahahahaha.");
        }
    }
}

catch(Exception $e) {
    echo $e->getMessage();
}

