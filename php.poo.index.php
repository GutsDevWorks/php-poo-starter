<?php

require_once 'Model/Livre.php'; // Charge la classe livre

// Instanciation de la classe Livre

$petitPrince = new Livre(); //Ceci est un objet issue de la classe Livre

$petitPrince 
->setNom('Le Petit Prince') //Méthode du parent Produit
->setPrix(8) //Méthode du parent Produit
->setDescription('Le Petit Prince est un roman') //Méthode du parent Produit
->setCategorie('Fantastique') //Méthode du parent Produit
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
-> setIdentifiant('aliceAlice')
-> setDateInscription(new \DateTime('1988-01-01')) // Les dates sont des objets
;

echo 'Le livre nommé ' . $petitPrince->getNom() . ' est entre les mains de ' . $user->getNom();
echo 'Le livre coûte ' . $petitPrince->getPrixEuro() . '<br>';
var_dump($petitPrince);

require_once 'Exos/Admin.php';

$admin = new Admin();

$admin
->setNom('Durand')
->setPrenom('Paul')
->setEmail('paul@admin.com')
->setNiveauAcces('Haute');

require_once 'Exos/Subscriber.php';

$subscriber = new Subscriber;

$subscriber
->setNom('Dupont')
->setPrenom('Charlie')
->setEmail('charlie@email.com')
->setAbonnement('Prime');

var_dump($admin);
var_dump($subscriber);