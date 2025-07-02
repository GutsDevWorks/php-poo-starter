<?php

abstract class Produits {

    private string $nom;
    private string $prix;
    private string $categorie;
    private string $description;

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get the value of prix
     *
     * @return string
     */
    public function getPrix(): string {
        return $this->prix;
    }

//Récupère la valeur de prix et ajoute le symbole €

    public function getPrixEuro(): string {
        return $this->getPrix() . ' &euro;';
    }

    /**
     * Set the value of prix
     *
     * @param string $prix
     *
     * @return self
     */
    public function setPrix(string $prix): self {
        $this->prix = $prix;
        return $this;
    }

    /**
     * Get the value of categorie
     *
     * @return string
     */
    public function getCategorie(): string {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @param string $categorie
     *
     * @return self
     */
    public function setCategorie(string $categorie): self {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Get the value of description
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self {
        $this->description = $description;
        return $this;
    }
}