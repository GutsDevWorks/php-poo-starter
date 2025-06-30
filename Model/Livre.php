<?php

class Livre {
    private $titre;
    private $nbPage;
    private $auteur;
    private $edition;
    private $isbn;

    /**
     * Get the value of titre
     */ 
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre(string $titre): Livre
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of nbPage
     */ 
    public function getNbPage(): int
    {
        return $this->nbPage;
    }

    /**
     * Set the value of nbPage
     *
     * @return  self
     */ 
    public function setNbPage($nbPage): Livre
    {
        $this->nbPage = $nbPage;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur(): string
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur): Livre
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of edition
     */ 
    public function getEdition(): string
    {
        return $this->edition;
    }

    /**
     * Set the value of edition
     *
     * @return  self
     */ 
    public function setEdition($edition): Livre
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get the value of isbn
     */ 
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */ 
    public function setIsbn($isbn): Livre
    {
        $this->isbn = $isbn;

        return $this;
    }
}
// Ne rien écrire après cette accolade
