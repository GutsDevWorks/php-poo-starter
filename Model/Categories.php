<?php

namespace Model;

class Categories 
{
    public int $id;
    public string $nom;
    public string $banniere;

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
    public function setId(int $id): Categories {
        $this->id = $id;
        return $this;
    }

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
    public function setNom(string $nom): Categories {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get the value of banniere
     *
     * @return string
     */
    public function getBanniere(): string {
        return $this->banniere;
    }

    /**
     * Set the value of banniere
     *
     * @param string $banniere
     *
     * @return self
     */
    public function setBanniere(string $banniere): Categories {
        $this->banniere = $banniere;
        return $this;
    }
}