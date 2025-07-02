<?php

namespace Model;

class Utilisateur
{
    // Les propriétés de la classe (variables)
    private int $id;
    private string $nom;
    private string $email;
    private string $mot_de_passe;
    private string $photo;

    // Les méthodes de la classe (fonctions)

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
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     * @return  self
     */ 
    public function setNom(string $nom): Utilisateur
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email): Utilisateur
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of mdp
     */ 
    public function getMdp(): string
    {
        return $this->mot_de_passe;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setMdp(string $mot_de_passe): Utilisateur
    {
        $this->mot_de_passe = $mot_de_passe;
        return $this;
    }

    /**
     * Get the value of photo
     */
    public function getPhoto() {
        return $this->photo;
    }

    /**
     * Set the value of photo
     */
    public function setPhoto(string $photo): Utilisateur {
        $this->photo = $photo;
        return $this;
    }


    
}

// Ne rien écrire après cette accolade