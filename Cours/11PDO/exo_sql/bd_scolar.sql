-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 14 avr. 2025 à 14:02
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `scholar`
--

-- --------------------------------------------------------

--
-- Structure de la table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int NOT NULL AUTO_INCREMENT,
  `department_name` varchar(100) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'Informatique'),
(2, 'Mathématiques'),
(3, 'Biologie'),
(4, 'Chimie');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `note_id` int NOT NULL AUTO_INCREMENT,
  `student_id` int DEFAULT NULL,
  `subject_id` int DEFAULT NULL,
  `grade` decimal(4,2) DEFAULT NULL,
  PRIMARY KEY (`note_id`),
  KEY `student_id` (`student_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`note_id`, `student_id`, `subject_id`, `grade`) VALUES
(1, 1, 1, 15.50),
(2, 1, 2, 14.00),
(3, 2, 3, 11.50),
(4, 2, 4, 13.20),
(5, 3, 3, 18.00),
(6, 3, 4, 16.00),
(7, 4, 5, 9.00),
(8, 4, 6, 10.50),
(9, 5, 5, 14.00),
(10, 5, 6, 12.00),
(11, 6, 7, 16.00),
(12, 6, 8, 14.50),
(13, 7, 1, 14.80),
(14, 7, 2, 13.70),
(15, 8, 3, 13.30),
(16, 8, 4, 15.20),
(17, 9, 5, 17.60),
(18, 9, 6, 18.00),
(19, 10, 7, 10.50),
(20, 10, 8, 11.70);

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int NOT NULL,
  `average_grade` decimal(4,2) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `age`, `average_grade`, `email`, `phone_number`, `city`) VALUES
(1, 'Alice', 'Dupont', 22, 14.75, 'alice.dupont@mail.com', '0601020304', 'Paris'),
(2, 'Bob', 'Martin', 23, 12.60, 'bob.martin@mail.com', '0602030405', 'Toulouse'),
(3, 'Claire', 'Lemoine', 24, 16.20, 'claire.lemoine@mail.com', '0603040506', 'Lyon'),
(4, 'David', 'Berger', 25, 10.85, 'david.berger@mail.com', '0604050607', 'Rennes'),
(5, 'Eva', 'Dufresne', 19, 13.50, 'eva.dufresne@mail.com', '0605060708', 'Paris'),
(6, 'François', 'Petit', 30, 15.40, 'francois.petit@mail.com', '0606070809', 'Lyon'),
(7, 'Giselle', 'Roche', 21, 11.90, 'giselle.roche@mail.com', '0607080901', 'Toulouse'),
(8, 'Hugo', 'Renard', 26, 14.20, 'hugo.renard@mail.com', '0608091011', 'Rennes'),
(9, 'Isabelle', 'Marchand', 32, 17.30, 'isabelle.marchand@mail.com', '0609101112', 'Paris'),
(10, 'Jules', 'Gautier', 27, 9.75, 'jules.gautier@mail.com', '0610111213', 'Lyon'),
(11, 'Léo', 'Benoit', 25, 12.30, 'leo.benoit@nouveau-email.com', '0601121314', 'Toulouse'),
(12, 'Mia', 'Bouvier', 21, 16.10, 'mia.bouvier@mail.com', '0602233445', 'Rennes'),
(13, 'Noah', 'Brunet', 23, 18.30, 'noah.brunet@mail.com', '0603344556', 'Paris'),
(14, 'Olivia', 'Durand', 22, 14.95, 'olivia.dufresne@mail.com', '0604455667', 'Toulouse'),
(15, 'Paul', 'Lemoine', 28, 13.75, NULL, '0605566778', 'Lyon'),
(16, 'Quentin', 'Roussel', 24, 15.20, 'quentin.roussel@mail.com', '0606677889', 'Rennes'),
(17, 'Rachelle', 'Petit', 19, 14.40, 'rachelle.petit@mail.com', '0607788990', 'Paris'),
(18, 'Sophie', 'Jacques', 29, 16.50, 'sophie.jacques@mail.com', '0608899001', 'Lyon'),
(19, 'Théo', 'Lefevre', 21, 11.20, 'theo.lefevre@mail.com', '0609900112', 'Toulouse'),
(20, 'Alice', 'Lemoine', 22, 13.00, 'alice.lemoine100@mail.com', '0612345678', 'Paris'),
(21, 'Bastien', 'Laurent', 32, 15.80, 'bastien.laurent@mail.com', '0612345679', 'Lyon'),
(22, 'Charlotte', 'Dupuis', 27, 18.50, NULL, '0612345680', 'Rennes'),
(23, 'Dylan', 'Chauvet', 24, 12.75, 'dylan.chauvet@mail.com', '0612345681', 'Toulouse'),
(24, 'Eva', 'Morin', 25, 14.80, 'eva.morin@mail.com', '0612345682', 'Paris'),
(25, 'Frédéric', 'Vallet', 26, 17.10, 'frederic.vallet@mail.com', '0612345683', 'Lyon'),
(26, 'Géraldine', 'Brune', 23, 13.40, 'geraldine.brune@mail.com', '0612345684', 'Toulouse'),
(27, 'Hugo', 'Tissot', 30, 15.10, 'hugo.tissot@mail.com', '0612345685', 'Rennes'),
(28, 'Inès', 'Gallet', 21, 12.60, 'ines.gallet@mail.com', '0612345686', 'Paris'),
(29, 'Jérôme', 'Giraud', 29, 13.90, 'jerome.giraud@mail.com', '0612345687', 'Lyon'),
(30, 'Kélian', 'Dufresne', 23, 14.70, 'kelian.dufresne@mail.com', '0612345688', 'Rennes'),
(31, 'Léa', 'Leblanc', 22, 12.80, NULL, '0612345689', 'Toulouse'),
(32, 'Marion', 'Besson', 28, 15.30, 'marion.besson@mail.com', '0612345690', 'Paris'),
(33, 'Nicolas', 'Leclerc', 25, 13.60, 'nicolas.leclerc@mail.com', '0612345691', 'Lyon'),
(34, 'Océane', 'Lemoine', 24, 14.10, 'oceane.lemoine@mail.com', '0612345692', 'Toulouse'),
(35, 'Maxime', 'Dumas', 30, 12.50, NULL, '0612345693', 'Rennes'),
(36, 'Raphaël', 'Germain', 32, 16.90, 'raphael.germain@mail.com', '0612345694', 'Paris'),
(37, 'Sébastien', 'Vidal', 27, 14.00, 'sebastien.vidal@mail.com', '0612345695', 'Lyon'),
(38, 'Théodore', 'Chavanne', 31, 16.20, 'theodore.chavanne@mail.com', '0612345696', 'Rennes'),
(39, 'Yasmine', 'Lemoine', 22, 14.30, 'yasmine.lemoine@mail.com', '0612345697', 'Toulouse'),
(40, 'Nawel', 'Henni', 47, 20.00, 'nel@reli.com', '0602556633', 'Pantin');

-- --------------------------------------------------------

--
-- Structure de la table `student_department`
--

DROP TABLE IF EXISTS `student_department`;
CREATE TABLE IF NOT EXISTS `student_department` (
  `student_id` int NOT NULL,
  `department_id` int NOT NULL,
  PRIMARY KEY (`student_id`,`department_id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `student_department`
--

INSERT INTO `student_department` (`student_id`, `department_id`) VALUES
(40, 1),
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 4),
(18, 4),
(19, 4),
(20, 4);

-- --------------------------------------------------------

--
-- Structure de la table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(100) NOT NULL,
  `department_id` int DEFAULT NULL,
  PRIMARY KEY (`subject_id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `department_id`) VALUES
(1, 'Programmation', 1),
(2, 'Réseaux', 1),
(3, 'Algèbre', 2),
(4, 'Calcul différentiel', 2),
(5, 'Biologie Cellulaire', 3),
(6, 'Génétique', 3),
(7, 'Chimie Organique', 4),
(8, 'Chimie Physique', 4);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `student_department`
--
ALTER TABLE `student_department`
  ADD CONSTRAINT `student_department_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_department_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
