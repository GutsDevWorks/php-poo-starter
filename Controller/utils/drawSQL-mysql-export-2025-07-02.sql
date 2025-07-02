CREATE TABLE `Utilisateur`(
    `id` BIGINT UNSIGNED NOT NULL  PRIMARY KEY,
    `nom` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `mot_de_passe` VARCHAR(255) NOT NULL,
    `photo` VARCHAR(255) NOT NULL
);
CREATE TABLE `Note`(
    `id` BIGINT UNSIGNED NOT NULL  PRIMARY KEY,
    `titre` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `contenu` TEXT NOT NULL,
    `cree_le` DATETIME NOT NULL,
    `modifie_le` DATETIME NOT NULL,
    `auteur` BIGINT NOT NULL,
    `categorie` BIGINT NOT NULL
);
CREATE TABLE `Categorie`(
    `id` BIGINT UNSIGNED NOT NULL  PRIMARY KEY,
    `nom` VARCHAR(255) NOT NULL,
    `banniere` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `Note` ADD CONSTRAINT `note_categorie_foreign` FOREIGN KEY(`categorie`) REFERENCES `Categorie`(`id`);
ALTER TABLE
    `Note` ADD CONSTRAINT `note_auteur_foreign` FOREIGN KEY(`auteur`) REFERENCES `Utilisateur`(`id`);