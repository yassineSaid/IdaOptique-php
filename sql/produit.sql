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
(1414, '', 'optique', 'test00', 'test00', 'rectangulaire', 'Noir', 120, 2, '08-04-2018 13:55:37', '17-04-2018 10:04:16'),
(1940, '', 'optique', 'test3', 'test3', 'carrÃ©', 'Rouge', 150, 5, '08-04-2018 12:50:20', '17-04-2018 10:01:16'),
(2020, 'ghj', 'solaire', 'j', 'h', 'carrÃ©', 'jk', 5, 5, '17-04-2018 11:16:31', '17-04-2018 11:16:31'),
(6060, 'Police', 'solaire', 'fgh', 'ghj', 'rectangulaire', '', 5, 5, '04-04-2018 19:18:31', '17-04-2018 11:03:05'),
(8202, 'RayBan', 'solaire', 'gh', 'hj', 'rectangulaire', '', 200, 30, '05-04-2018 12:51:48', '17-04-2018 10:04:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
