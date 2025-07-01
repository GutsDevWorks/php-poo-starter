# php-poo-starter
Dépôt dédié au cours de PHP POO

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