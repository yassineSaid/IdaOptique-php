-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 22 Avril 2018 à 16:55
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `id_client` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sosciete` varchar(30) NOT NULL,
  `adresse1` varchar(100) NOT NULL,
  `adresse2` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `region` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(12) NOT NULL,
  `note` varchar(500) NOT NULL,
  `date_livraison` datetime NOT NULL,
  `statut` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `livraison`
--

INSERT INTO `livraison` (`id_client`, `id_commande`, `nom`, `prenom`, `sosciete`, `adresse1`, `adresse2`, `ville`, `code_postal`, `pays`, `region`, `email`, `telephone`, `note`, `date_livraison`, `statut`) VALUES
(898, 4512, 'ylguk', 'hk', 'lgklhk', 'k', 'h', 'hlhlv', 8445, 'lkglukgk', 'kgklh', 'ugullkgk@jkfkf.lyyfl', 7866, 'jfkjfkj', '2018-04-08 00:00:00', 'livree');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
