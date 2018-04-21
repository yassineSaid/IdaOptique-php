-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 21 avr. 2018 à 11:33
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
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `taille` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_image`),
  KEY `produit_id` (`produit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id_image`, `url`, `nom`, `taille`, `produit_id`, `type`) VALUES
(115, 'image/jpeg', 'image_115', 29732, 6060, 'principal'),
(116, 'image/jpeg', 'image_116', 50432, 6060, 'secondaire'),
(117, 'image/jpeg', 'image_116', 29732, 6060, 'secondaire'),
(118, 'image/jpeg', 'image_118', 29732, 8202, 'principal'),
(119, 'image/jpeg', 'image_118', 50432, 8202, 'secondaire'),
(120, 'image/jpeg', 'image_118', 377844, 8202, 'secondaire'),
(166, 'image/png', 'image_166', 147978, 1940, 'principal'),
(167, 'image/jpeg', 'image_167', 183752, 1940, 'secondaire'),
(168, 'image/jpeg', 'image_168', 142688, 1940, 'secondaire'),
(202, 'image/jpeg', 'image_202', 142688, 1414, 'principal'),
(203, 'image/jpeg', 'image_203', 183752, 1414, 'secondaire'),
(204, 'image/png', 'image_204', 147978, 1414, 'secondaire'),
(220, 'image/jpeg', 'image_220', 50432, 2020, 'principal'),
(221, '', 'image_221', 0, 2020, 'secondaire'),
(222, '', 'image_222', 0, 2020, 'secondaire');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`produit_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
