<?php

require_once 'User.php';

class Subscriber extends User {
    private string $abonnement;

    public function Commenter() {}
    public function Signaler() {}

    /**
     * Get the value of abonnement
     *
     * @return string
     */
    public function getAbonnement(): string {
        return $this->abonnement;
    }

    /**
     * Set the value of abonnement
     *
     * @param string $abonnement
     *
     * @return self
     */
    public function setAbonnement(string $abonnement): self {
        $this->abonnement = $abonnement;
        return $this;
    }
}