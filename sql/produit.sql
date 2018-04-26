-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 26 avr. 2018 à 13:01
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
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `produit_id` int(11) NOT NULL,
  `produit_marque` varchar(20) DEFAULT NULL,
  `produit_categorie` varchar(20) NOT NULL,
  `produit_nom` varchar(50) NOT NULL,
  `produit_description` varchar(80) NOT NULL,
  `produit_forme` varchar(30) DEFAULT NULL,
  `produit_couleur` varchar(20) DEFAULT NULL,
  `produit_prix` int(11) NOT NULL,
  `produit_qte` int(11) NOT NULL,
  `produit_date_ajout` varchar(80) NOT NULL,
  `produit_date_modification` varchar(80) NOT NULL,
  PRIMARY KEY (`produit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`produit_id`, `produit_marque`, `produit_categorie`, `produit_nom`, `produit_description`, `produit_forme`, `produit_couleur`, `produit_prix`, `produit_qte`, `produit_date_ajout`, `produit_date_modification`) VALUES
(123, NULL, 'solaire', 'selon', 'mouch normale', NULL, NULL, 760, 41, '30-03-2018 21:50:55', '02-04-2018 15:32:16'),
(1414, 'police', 'solaire', 'G58578', 'test00', 'rectangulaire', 'Noir', 120, 2, '08-04-2018 13:55:37', '26-04-2018 12:25:17'),
(1940, 'Gucci', 'optique', 'K857', 'lunette', 'Classique', 'Rouge', 150, 5, '08-04-2018 12:50:20', '26-04-2018 12:29:52'),
(2020, 'Gucci', 'optique', 'U874', 'lunette', 'Ronde/Ovale', 'noir', 150, 5, '17-04-2018 11:16:31', '26-04-2018 12:34:53'),
(6060, 'Police', 'solaire', 'fgh', 'ghj', 'rectangulaire', '', 5, 5, '04-04-2018 19:18:31', '17-04-2018 11:03:05'),
(8202, 'ray ban', 'solaire', 'gh', 'hj', 'rectangulaire', '', 200, 30, '05-04-2018 12:51:48', '17-04-2018 10:04:58'),
(102039, 'ray ban', 'solaire', 'G555', 'lunette', 'rectangulaire', 'rouge', 120, 5, '25-04-2018 16:08:52', '26-04-2018 12:44:39'),
(102040, 'ray ban', 'solaire', 'G55502', 'lunette', 'rectangulaire', 'vert', 100, 20, '25-04-2018 16:13:08', '26-04-2018 12:47:21'),
(102041, 'ray ban', 'solaire', 'G555', 'lunette', 'rectangulaire', 'noir', 100, 20, '25-04-2018 16:13:54', '26-04-2018 12:45:30'),
(102042, 'ray ban', 'solaire', 'T4757', 'lunette', 'rectangulaire', 'bleue', 100, 20, '25-04-2018 16:14:07', '26-04-2018 12:45:12'),
(102043, 'ray ban', 'solaire', 'Y854789', 'lunette', 'rectangulaire', 'rouge', 100, 20, '25-04-2018 16:14:35', '26-04-2018 12:44:16'),
(102044, 'ray ban', 'solaire', 'G555648', 'lunette', 'rectangulaire', 'bleue', 100, 20, '25-04-2018 16:14:54', '26-04-2018 12:44:31'),
(102045, 'ray ban', 'solaire', 'H8475', 'lunette', 'rectangulaire', 'bleu', 55, 20, '25-04-2018 16:15:22', '26-04-2018 12:47:38'),
(102046, 'ray ban', 'optique', 'Y8745', 'lunette', 'Aviateur', 'rouge', 55, 5, '26-04-2018 00:51:53', '26-04-2018 12:26:10'),
(102047, 'police', 'solaire', 'S8574', 'lunette', 'rectangulaire', 'Noir', 444, 4, '26-04-2018 00:56:17', '26-04-2018 12:32:12'),
(102048, 'ray ban', 'optique', 'F4747', 'lunette', 'rectangulaire', 'bleu', 100, 5, '26-04-2018 01:25:17', '26-04-2018 12:44:01'),
(102049, 'ray ban', 'optique', 'M147', 'lunette', 'rectangulaire', 'bleu', 100, 5, '26-04-2018 01:25:35', '26-04-2018 12:45:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
