-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 26 avr. 2018 à 13:02
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
) ENGINE=InnoDB AUTO_INCREMENT=338 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id_image`, `url`, `nom`, `taille`, `produit_id`, `type`) VALUES
(117, 'image/jpeg', 'image_116', 29732, 6060, 'secondaire'),
(119, 'image/jpeg', 'image_118', 50432, 8202, 'secondaire'),
(120, 'image/jpeg', 'image_118', 377844, 8202, 'secondaire'),
(289, 'image/jpeg', 'image_289', 142688, 102040, 'secondaire'),
(297, 'image/jpeg', 'image_297', 183752, 1414, 'principal'),
(298, 'image/jpeg', 'image_298', 142688, 1414, 'secondaire'),
(299, 'image/png', 'image_299', 147978, 1414, 'secondaire'),
(300, 'image/jpeg', 'image_300', 175626, 102046, 'principal'),
(301, 'image/jpeg', 'image_301', 68613, 102046, 'secondaire'),
(302, 'image/jpeg', 'image_302', 4705, 102046, 'secondaire'),
(303, 'image/jpeg', 'image_303', 142688, 102045, 'principal'),
(304, 'image/png', 'image_304', 147978, 102045, 'secondaire'),
(305, 'image/jpeg', 'image_305', 183752, 102045, 'secondaire'),
(306, 'image/jpeg', 'image_306', 29732, 102048, 'principal'),
(307, 'image/jpeg', 'image_307', 50432, 102048, 'secondaire'),
(308, 'image/jpeg', 'image_308', 4705, 102048, 'secondaire'),
(309, 'image/jpeg', 'image_309', 68613, 1940, 'principal'),
(310, 'image/jpeg', 'image_310', 4705, 1940, 'secondaire'),
(311, 'image/jpeg', 'image_311', 175626, 1940, 'secondaire'),
(312, 'image/jpeg', 'image_312', 4972, 102043, 'principal'),
(313, 'image/jpeg', 'image_313', 116059, 102043, 'secondaire'),
(314, 'image/jpeg', 'image_314', 3618, 102043, 'secondaire'),
(315, 'image/jpeg', 'image_315', 116059, 102047, 'principal'),
(316, 'image/jpeg', 'image_316', 3618, 102047, 'secondaire'),
(317, 'image/jpeg', 'image_317', 4972, 102047, 'secondaire'),
(318, 'image/jpeg', 'image_318', 3618, 102044, 'principal'),
(319, 'image/jpeg', 'image_319', 4972, 102044, 'secondaire'),
(320, 'image/jpeg', 'image_320', 116059, 102044, 'secondaire'),
(321, 'image/jpeg', 'image_321', 4705, 102049, 'principal'),
(322, 'image/jpeg', 'image_322', 68613, 102049, 'secondaire'),
(323, 'image/jpeg', 'image_323', 175626, 102049, 'secondaire'),
(324, 'image/png', 'image_324', 4255, 2020, 'principal'),
(325, 'image/jpeg', 'image_325', 68613, 2020, 'secondaire'),
(326, 'image/jpeg', 'image_326', 3684, 2020, 'secondaire'),
(327, 'image/jpeg', 'image_327', 116059, 102039, 'secondaire'),
(328, 'image/jpeg', 'image_328', 116059, 102041, 'principal'),
(329, 'image/jpeg', 'image_329', 3618, 102041, 'secondaire'),
(330, 'image/jpeg', 'image_330', 4972, 102041, 'secondaire'),
(331, 'image/png', 'image_331', 147978, 102042, 'principal'),
(332, 'image/jpeg', 'image_332', 142688, 102042, 'secondaire'),
(333, 'image/jpeg', 'image_333', 183752, 102042, 'secondaire'),
(334, 'image/jpeg', 'image_334', 142688, 102039, 'principal'),
(335, 'image/jpeg', 'image_335', 183752, 102039, 'secondaire'),
(336, 'image/png', 'image_336', 147978, 102040, 'principal'),
(337, 'image/jpeg', 'image_337', 183752, 102040, 'secondaire');

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
