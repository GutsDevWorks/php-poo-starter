<?php

require_once 'User.php';

class Admin extends User {
    private string $niveauAcces;

    public function bannir () {}
    public function creerUtilisateur() {}

    


    /**
     * Get the value of niveauAcces
     *
     * @return string
     */
    public function getNiveauAcces(): string {
        return $this->niveauAcces;
    }

    /**
     * Set the value of niveauAcces
     *
     * @param string $niveauAcces
     *
     * @return self
     */
    public function setNiveauAcces(string $niveauAcces): self {
        $this->niveauAcces = $niveauAcces;
        return $this;
    }
}