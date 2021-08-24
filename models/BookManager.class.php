<?php

include "Book.class.php";
require "model.php";


class BookManager extends Model {

    private $bookList;

    public function addBook($bookList) {

        $this->bookList[] = $bookList;

    }


    /**
     * Get the value of bookList
     */ 
    public function getBookList()
    {
        return $this->bookList;
    }

    public function loadingBooks() {
        $sql = "SELECT * FROM Book";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $books = $req->fetchAll(PDO::FETCH_OBJ);
        foreach($books as $book) {
            $add = new Book($book->idBook,$book->nom,$book->pages,$book->image);
            $this->addBook($add);
        }
    }

    public function getBookById($id) {
        foreach($this->bookList as $livre) {
            if ($id == $livre->getIdLivre()) {
                return $livre;
            } 
        }
    }

    public function addBookDB($titreLivre,$nbPages,$image) {

        $sql = "INSERT INTO book (nom,pages,image) VALUES (:titreLivre,:nbPages,:image)";
        $req = $this->getDB()->prepare($sql);
        $result = $req->execute([
            "titreLivre"=>$titreLivre,
            "nbPages"=>$nbPages,
            "image"=>$image
        ]);

    }
}