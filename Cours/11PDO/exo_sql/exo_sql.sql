-- Création de la base
CREATE DATABASE IF NOT EXISTS boulangerie;
USE boulangerie;

-- Table des utilisateurs
CREATE TABLE IF NOT EXISTS `utilisateur` (
    `utilisateur_id` INT AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(100) NOT NULL,
    `prenom` VARCHAR(100) NOT NULL,
    `mot_de_passe` VARCHAR(255) NOT NULL,
    `est_admin` TINYINT(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- Table des catégories (ex: Pain, Viennoiserie...)
CREATE TABLE IF NOT EXISTS `categorie` (
    `categorie_id` INT AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- Table des produits 
CREATE TABLE IF NOT EXISTS `produit` (
    `produit_id` INT AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(100) NOT NULL,
    `prix` DECIMAL(5,2) NOT NULL,
    `image_produit` VARCHAR(500) NOT NULL,
    FOREIGN KEY `vategorie_id` (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- Table des commandes 
CREATE TABLE IF NOT EXISTS `commande` (
    `commande_id` INT AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(100) NOT NULL,
    `date_commande` DATETIME    NOT NULL,
    FOREIGN KEY `utilisateur_id` (`utilisateur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- Table des commandes_PRODUITS 
CREATE TABLE IF NOT EXISTS `commande_produit` (
    FOREIGN KEY `commande_id` (`commande_id`),
    PRIMARY KEY (`commande_id`,`produit_id`)
    `quantite` INT NOT NULL,
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande_produit`
--
ALTER TABLE `commande_produit`
  ADD CONSTRAINT `commande_produit_ibfk_1` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`commande_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commande_produit_2` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`produit_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `produit_utilisateur`
--
ALTER TABLE `produit_utilisateur`
  ADD CONSTRAINT `produit_utilisateur_ibfk_1` FOREIGN KEY (`produit_id`) REFERENCES `utilisateur` (`utilisateur_id`) ON DELETE CASCADE,

--
-- Contraintes pour la table `commande_utilisateur`
--
ALTER TABLE `commande_utilisateur`
  ADD CONSTRAINT `commande_utilisateur_1` FOREIGN KEY (`commande_id`) REFERENCES `utilisateur` (`utilisateur_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
