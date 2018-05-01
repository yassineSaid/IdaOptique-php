-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 01 mai 2018 à 21:44
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
) ENGINE=InnoDB AUTO_INCREMENT=387 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id_image`, `url`, `nom`, `taille`, `produit_id`, `type`) VALUES
(353, 'image/jpeg', 'image_353', 29503, 1, 'principal'),
(354, 'image/jpeg', 'image_354', 25806, 1, 'secondaire'),
(355, 'image/jpeg', 'image_355', 24827, 1, 'secondaire'),
(356, 'image/jpeg', 'image_356', 24114, 2, 'principal'),
(357, 'image/jpeg', 'image_357', 20894, 2, 'secondaire'),
(358, 'image/jpeg', 'image_358', 18777, 2, 'secondaire'),
(359, 'image/jpeg', 'image_359', 26588, 3, 'principal'),
(360, 'image/jpeg', 'image_360', 23126, 3, 'secondaire'),
(361, 'image/jpeg', 'image_361', 25164, 3, 'secondaire'),
(362, 'image/jpeg', 'image_362', 21337, 4, 'principal'),
(363, 'image/jpeg', 'image_363', 20004, 4, 'secondaire'),
(364, 'image/jpeg', 'image_364', 18532, 4, 'secondaire'),
(365, 'image/jpeg', 'image_365', 23999, 5, 'principal'),
(366, 'image/jpeg', 'image_366', 21709, 5, 'secondaire'),
(367, 'image/jpeg', 'image_367', 21115, 5, 'secondaire'),
(368, 'image/jpeg', 'image_368', 24660, 6, 'principal'),
(369, 'image/jpeg', 'image_369', 28029, 6, 'secondaire'),
(370, 'image/jpeg', 'image_370', 20790, 6, 'secondaire'),
(371, 'image/jpeg', 'image_371', 27207, 7, 'principal'),
(372, 'image/jpeg', 'image_372', 21057, 7, 'secondaire'),
(373, 'image/jpeg', 'image_373', 28314, 7, 'secondaire'),
(374, 'image/jpeg', 'image_374', 35599, 8, 'principal'),
(375, 'image/jpeg', 'image_375', 27798, 8, 'secondaire'),
(376, 'image/jpeg', 'image_376', 28144, 8, 'secondaire'),
(377, 'image/jpeg', 'image_377', 30693, 9, 'principal'),
(378, 'image/jpeg', 'image_378', 29035, 9, 'secondaire'),
(379, 'image/jpeg', 'image_379', 30208, 9, 'secondaire'),
(380, 'image/jpeg', 'image_380', 25299, 10, 'principal'),
(381, 'image/jpeg', 'image_381', 22423, 10, 'secondaire'),
(382, 'image/jpeg', 'image_382', 24891, 10, 'secondaire'),
(383, 'image/jpeg', 'image_383', 13822, 11, 'principal'),
(384, 'image/jpeg', 'image_384', 13544, 11, 'secondaire'),
(385, 'image/jpeg', 'image_385', 24067, 11, 'secondaire');

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
