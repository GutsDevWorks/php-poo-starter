<?php

require_once 'Model/Livre.php'; // Charge la classe livre

// Instanciation de la classe Livre

$petitPrince = new Livre(); //Ceci est un objet issue de la classe Livre

$petitPrince 
->setTitre('Le Petit Prince')
->setnbPage(128)
->setAuteur('Antoine de St-Exupéry')
->setEdition('Gallimard')
->setIsbn('9783148464079')
; // L'opération de compléter un objet se nomme hydratation

require_once 'Model/Utilisateur.php';

$user = new Utilisateur();

$user
-> setNom('Alice')
-> setEmail('alice@email.com')
-> setIdentifiant(1)
-> setDateInscription(new \DateTime('1988-01-01')) // Les dates sont des objets
;

echo 'Le livre nommé ' . $petitPrince->getTitre() . ' est entre les mains de ' . $user->getNom();

// var_dump($user);