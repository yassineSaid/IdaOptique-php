-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 30 avr. 2018 à 15:43
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
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id_notification` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `contenu` varchar(1000) NOT NULL,
  `type` varchar(25) NOT NULL,
  `heure` timestamp NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id_notification`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id_notification`, `titre`, `contenu`, `type`, `heure`, `link`) VALUES
(1, 'test', 'etzzet', 'ffff', '2018-04-30 05:14:06', 'dazdz'),
(11, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(12, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(13, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(14, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(15, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(16, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(17, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(18, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(19, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(20, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(21, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(22, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(23, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(24, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(25, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(26, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(27, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(28, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(29, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(30, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(31, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(32, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(33, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(34, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(35, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', ''),
(36, 'ggggg', 'eeeeeee', '', '2018-04-30 13:00:00', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
