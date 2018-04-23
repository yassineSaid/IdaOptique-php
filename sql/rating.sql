-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 23 avr. 2018 à 21:10
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ida-optique`
--

-- --------------------------------------------------------

--
-- Structure de la table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `id_rating` int(11) NOT NULL AUTO_INCREMENT,
  `produit_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`id_rating`),
  KEY `idp_rate` (`produit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rating`
--

INSERT INTO `rating` (`id_rating`, `produit_id`, `rate`) VALUES
(1, 2020, 3),
(2, 2020, 1),
(3, 2020, 5),
(4, 2020, 5),
(5, 2020, 0),
(6, 2020, 4),
(7, 2020, 4),
(8, 2020, 4),
(9, 2020, 4),
(10, 2020, 1),
(11, 2020, 0),
(26, 2020, 5),
(27, 2020, 5),
(28, 2020, 5),
(29, 2020, 5),
(30, 2020, 5),
(31, 6060, 3),
(32, 6060, 5),
(33, 6060, 1),
(34, 6060, 1),
(35, 6060, 1),
(36, 8202, 3),
(37, 8202, 3),
(38, 8202, 3),
(39, 8202, 3),
(40, 8202, 3),
(41, 8202, 3),
(42, 8202, 3),
(43, 8202, 3),
(44, 8202, 3),
(45, 8202, 3),
(46, 8202, 3),
(47, 8202, 3),
(48, 8202, 3),
(49, 8202, 3),
(50, 8202, 3),
(51, 8202, 3),
(52, 8202, 3),
(53, 8202, 3),
(54, 8202, 3),
(55, 8202, 3),
(56, 8202, 3),
(57, 8202, 3),
(58, 8202, 3),
(59, 8202, 3),
(60, 8202, 3),
(61, 8202, 3),
(62, 8202, 3),
(63, 8202, 3),
(64, 8202, 3),
(65, 8202, 3),
(66, 8202, 3),
(67, 8202, 3),
(68, 8202, 3),
(69, 8202, 3),
(70, 8202, 3),
(71, 6060, 3),
(72, 6060, 5),
(73, 6060, 5),
(74, 6060, 5),
(75, 6060, 5),
(76, 6060, 5),
(77, 6060, 5),
(78, 6060, 5),
(79, 1414, 3),
(80, 1940, 3),
(81, 1414, 5),
(82, 1414, 5),
(83, 1414, 5);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `idp_rate` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`produit_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
