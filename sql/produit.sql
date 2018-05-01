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
  `produit_prix` double(11,3) NOT NULL,
  `produit_qte` int(11) NOT NULL,
  `produit_date_ajout` varchar(80) NOT NULL,
  `produit_date_modification` varchar(80) NOT NULL,
  PRIMARY KEY (`produit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`produit_id`, `produit_marque`, `produit_categorie`, `produit_nom`, `produit_description`, `produit_forme`, `produit_couleur`, `produit_prix`, `produit_qte`, `produit_date_ajout`, `produit_date_modification`) VALUES
(1, 'Tom Ford', 'optique', 'FT5298', ' ', 'Ronde/Ovale', 'bleue', 198.200, 10, '01-05-2018 20:43:23', '01-05-2018 20:43:23'),
(2, 'BOSS', 'optique', 'B0254', ' ', 'rectangulaire', 'noir', 220.300, 5, '01-05-2018 20:45:07', '01-05-2018 20:45:07'),
(3, 'Ray-Ban', 'optique', 'RB245', '  ', 'Ronde/Ovale', 'marron', 184.500, 6, '01-05-2018 20:46:14', '01-05-2018 20:46:14'),
(4, 'Miu Miu', 'optique', 'MM236', '  ', 'Cat Eyes', 'blanche', 202.400, 2, '01-05-2018 20:47:14', '01-05-2018 20:47:14'),
(5, 'Calvin Klein', 'optique', 'CK201', ' ', 'Classique', 'marron', 340.100, 10, '01-05-2018 20:48:12', '01-05-2018 20:48:12'),
(6, 'Oakley', 'optique', 'O6667', ' ', 'rectangulaire', 'bleue', 174.500, 3, '01-05-2018 20:49:03', '01-05-2018 20:49:03'),
(7, 'Ray-Ban', 'solaire', 'RB6987', ' ', 'Ronde/Ovale', 'Doré', 165.400, 5, '01-05-2018 20:53:04', '01-05-2018 20:53:04'),
(8, 'Tom Ford', 'solaire', 'TF8475', '  ', 'Cat Eyes', 'noir', 210.350, 4, '01-05-2018 20:53:57', '01-05-2018 20:53:57'),
(9, 'Gucci', 'solaire', 'G754', ' ', 'Ronde/Ovale', 'marron', 250.310, 8, '01-05-2018 20:54:56', '01-05-2018 20:54:56'),
(10, 'Carrera', 'solaire', 'C103', ' ', 'Classique', 'noir', 360.400, 10, '01-05-2018 20:55:41', '01-05-2018 20:55:41'),
(11, 'Gucci', 'solaire', 'G9352', '  ', 'Ronde/Ovale', 'Doré', 280.620, 9, '01-05-2018 20:57:06', '01-05-2018 20:57:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
