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

}