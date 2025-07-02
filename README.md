# php-poo-starter
Dépôt dédié au cours de PHP POO

Projet : https://drawsql.app/teams/agiliteach/diagrams/notebook

# Premier pas avec la POO

La programmation orientée objet est basé sur un système qu'on appelle 'les classes'. 

Ces classes sont comme un moule à gateau et définissent ce que représente quelque chose dans une application. Ce qui signifie que chaque application aura sa propre vision d'une classe qui porterai le même nom que celles que nous avons.

## Les classes

Une classe en PHP, est déclarée avec le mot-clé 'class' ou 'final class'. Afin de l'utiliser, il faudra créer une instance d'elle. Pour cela le mot-clé correspondant est 'new'.

Exemple -> voir le fichier Utilisateur.php pour la déclaration et index.php pour l'utilisation.

### Accesseurs et Mutateurs

Lorsque nous définissons des propriétés dans une classe, il est judicieux de mettre en place uen structure sécurisée pour intéragir avec. C'est là qu'entre en jeu les 'Accesseurs' et 'Mutateurs' nommés en anglais 'Getter' et 'Setters'. Ce sont des fonctions mais dans une classe on les appelle des 'méthodes'.

Exemple -> voir le fichier Utilisateur.php pour la déclaration et index.php pour l'utilisation.

## Classe parent et enfants

Pour ne pas se répéter dans l'organisation des classes, on dispose d'un outil qui facilite le partage des propriétés et des méthodes : l'héritage.

Afin de mettre en place un héritage, il faut conceptualisé la structure de nos classes. 

Exemple -> site e-comemrce.

Un site e-commerce est une application qui contient des produits. Cependant, les produits dispose de caractéristiques propres à elles, comme la taille pour un vêtement, le réseau pour un smartphone ou encore l'éditeur pour un livre.

En revanche, certaines propriétés sont communes à tous les produits comme le nom, le prix, la description, la catégorie etc. De ce fait, on peut les rassembler dans une classe parente qui ne sera jamais instanciée directement.

Compte tenu du fait qu'elle n'est pas instanciée on peut la déclarer comme abstrate avec le mot clé 'abstract'.

```php


abstract class Produit 
{   
    private string $nom;
    private string $prix;
    private string $categorie;
    private string $description;
}
```

Maintenant que la classe est en place, il faut la lier avec les classes enfants définies. Pour cela, on utilise le mot-clé 'extends' qui permet de déclarer une classe enfant.

```php

require_once 'Produit.php';

class Livre extends Produit {
    private int $nbPage;
    private string $auteur;
    private string $edition;
    private string $isbn;
}
```

Cela aura pour résultat, la mise à disposition de l'ensemble des propriétés et des méthodes de la classe parente dans les classes enfants. On pourra alors faire ce genre de choses: 

```php
//...
$bouquin = new Livre();
$bouquin 
->setNom('Le petit Prince')
->setPrix(8)
//...
;
```

## Le projet d'initialisation

Afin de prendre en main la POO, on créer une application simple de prise de notes : NoteBook.

### Scénarios (User Stories)

| Rôle (En tant que) | Action (Je veux)    | Résultat (Afin de) |
| ---                | ---                 | ---                |
| Utilisateur        | Créer une note      | La conserver       |
| Utilisateur        | Modifier une note   | La mettre a jour   |
| Utilisateur        | Accéder à une note  | La consulter       |
| Utilisateur        | Spprimer une note   | La détruire        |

Grâce à cela, il est plus simple pour nous de comprendre les objectifs de notre application.
Cela facilitera sa conception dans une approche plus réaliste.

## Rappel sur l'intérêt du Backend

Dans le domaine du web, le backend est utilisé pour la conception complexe.
Il s'agit de mettre en place des fonctionnalités afin de rendre l'expérience la plus complète possible.

Dans notre exemple, l'application de prise de notes, doit nous permettre de créer, afficher, modifier et supprimer des notes. Cet ensemble d'action s'appelle le 'CRUD' (Create, read, update, delete).

L'intervention d'un langage de programmation est alors indispensable. Il peut aussi y avoir une base de données qui entre en compte. Les bases de données sont appelées 'SGBD' (Système de Gestion de Base de Données).

Le point de départ pour un backend sera principalement uen requête 'HTTP' (GET,POST,PUT,DELETE, etc). Lorsque le serveur reçoit une requête, un script PHP est exécuté afin d'y répondre.

Exemple:

'Martin' demande la page '/contact' à l'adresse 'http://localhost:3000/contact'.
Le serveur, s'il dispose de cette page, retourne le contenu correspondant. 

'/contact' est ce qu'on appel une route dans le contexte de l'application. Pour le commun des internautes, c'est une URL ou URI. Rien ne se passe si me serveur n'est pas sollicité, il faut l'interpeller pour obtenir un résultat. 

### Le cas exceptionnel

Afin d'exécuter un script PHP sans requête http, nous pouvons utiliser uen tache 'cron' qui lance une commande à notre place de manière automatique et périodique.