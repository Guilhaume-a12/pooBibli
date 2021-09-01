<?php

// include "Book.class.php";
include "models/BookManager.class.php";
include "globalController.controller.php";

class BookController {

    private $BookManager;

    public function __construct()
    {
        $this->BookManager = new BookManager();
        $this->BookManager->loadingBooks();
    }

    public function displayBooks() {
        $stockBooks = $this->BookManager->getBookList();
        require "views/books.php";
    }

    public function displayBook($id) {
        $monLivre = $this->BookManager->getBookById($id);
        require "views/book.view.php";
    }

    public function ajoutLivre() {
        require "views/ajoutLivre.view.php";
    }

    public function addBookValidate() {
        // require "views/validate.view.php";
        $bookImage = GlobalController::addImage($_FILES);
        $this->BookManager->addBookDB($_POST['titre'],$_POST['page'],$bookImage);
        header("location:".URL."livres");
    }

    public function deleteBookController($id) {
        $monLivre = $this->BookManager->getBookById($id);
        require "views/supprimer.php";
    }

    public function deleteValidate($id) {
        $monLivre = $this->BookManager->getBookById($id);
        $this->BookManager->deleteBook($id);
        header("location:".URL."livres");
    }

    public function modifierBook($id) {
        $monLivre = $this->BookManager->getBookById($id);
        require "views/modifier.php";
    }

    public function modifierOk($id) {
        $monLivre = $this->BookManager->getBookById($id);
        $bookImage = GlobalController::addImage($_FILES);

        if (!empty($_FILES['image'])) {

        $this->BookManager->modifierLivre($_POST['titre'],$_POST['page'],$bookImage,$id);

        }

        header("location:".URL."livres");
    }
    

}