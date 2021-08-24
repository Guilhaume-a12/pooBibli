<?php

class Book {
    
    private $idLivre;
    private $titre;
    private $image;
    private $pages;

    public function __construct($idLivre,$titre,$pages,$image)
    {
        $this->idLivre = $idLivre;
        $this->titre = $titre;
        $this->image = $image;
        $this->pages = $pages;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return htmlspecialchars($this->titre);
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of pages
     */ 
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set the value of pages
     *
     * @return  self
     */ 
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get the value of idLivre
     */ 
    public function getIdLivre()
    {
        return $this->idLivre;
    }

    /**
     * Set the value of idLivre
     *
     * @return  self
     */ 
    public function setIdLivre($idLivre)
    {
        $this->idLivre = $idLivre;

        return $this;
    }
}