-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 02 août 2024 à 07:06
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `parfumerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `lesparfums`
--

DROP TABLE IF EXISTS `lesparfums`;
CREATE TABLE IF NOT EXISTS `lesparfums` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `genre` varchar(80) NOT NULL,
  `quantites` int NOT NULL,
  `alcool` int NOT NULL,
  `couleur` varchar(15) NOT NULL,
  `createur` varchar(20) NOT NULL,
  `prix` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `lesparfums`
--

INSERT INTO `lesparfums` (`id`, `nom`, `genre`, `quantites`, `alcool`, `couleur`, `createur`, `prix`) VALUES
(1, 'drakkar', 'parfum homme', 250, 10, 'pourpre', 'franck', 60),
(2, 'love', 'parfum femme', 300, 5, 'jaune', 'franck', 80),
(3, 'puissance', 'parfum homme', 350, 15, 'bleu', 'sophie', 99),
(4, 'folie', 'parfum femme', 200, 12, 'noire', 'sophie', 110),
(5, 'extreme', 'parfum homme', 300, 13, 'blanc', 'franck', 69),
(6, 'champagne', 'parfum homme', 350, 15, 'brun', 'franck', 89),
(7, 'lune', 'parfum femme', 500, 17, 'blanc', 'sophie', 79),
(8, 'dragon', 'parfum homme', 450, 15, 'rouge', 'franck', 119),
(9, 'rose', 'parfum femme', 250, 10, 'rose', 'sophie', 69),
(10, 'mars', 'Parfum homme', 450, 18, 'ocre', 'franck', 88);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
