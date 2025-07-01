<?php

abstract class User {
    private $nom;
    private $prenom;
    private $email;

    

    /**
     * Get the value of nom
     */
    public function getNom(): string {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom(): string {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     */
    public function setPrenom($prenom): self {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self {
        $this->email = $email;
        return $this;
    }
}