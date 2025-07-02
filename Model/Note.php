<?php

namespace Model;

class Note 
{
    public int $id;
    public string $titre;
    public string $description;
    public string $contenu;
    public \DateTime $cree_le;
    public \DateTime $modifie_le;
    public int $auteur;
    public int $categorie;

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of titre
     *
     * @return string
     */
    public function getTitre(): string {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param string $titre
     *
     * @return self
     */
    public function setTitre(string $titre): self {
        $this->titre = $titre;
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

    /**
     * Get the value of contenu
     *
     * @return string
     */
    public function getContenu(): string {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @param string $contenu
     *
     * @return self
     */
    public function setContenu(string $contenu): self {
        $this->contenu = $contenu;
        return $this;
    }

    /**
     * Get the value of cree_le
     *
     * @return \DateTime
     */
    public function getCreeLe(): \DateTime {
        return $this->cree_le;
    }

    /**
     * Set the value of cree_le
     *
     * @param \DateTime $cree_le
     *
     * @return self
     */
    public function setCreeLe(\DateTime $cree_le): self {
        $this->cree_le = $cree_le;
        return $this;
    }

    /**
     * Get the value of modifie_le
     *
     * @return \DateTime
     */
    public function getModifieLe(): \DateTime {
        return $this->modifie_le;
    }

    /**
     * Set the value of modifie_le
     *
     * @param \DateTime $modifie_le
     *
     * @return self
     */
    public function setModifieLe(\DateTime $modifie_le): self {
        $this->modifie_le = $modifie_le;
        return $this;
    }

    /**
     * Get the value of auteur
     *
     * @return int
     */
    public function getAuteur(): int {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @param int $auteur
     *
     * @return self
     */
    public function setAuteur(int $auteur): self {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * Get the value of categorie
     *
     * @return int
     */
    public function getCategorie(): int {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @param int $categorie
     *
     * @return self
     */
    public function setCategorie(int $categorie): self {
        $this->categorie = $categorie;
        return $this;
    }
}