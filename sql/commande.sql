-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 26 avr. 2018 à 11:26
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
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `adresse` text NOT NULL,
  `adresse2` text NOT NULL,
  `ville` text NOT NULL,
  `zip` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(25) NOT NULL,
  PRIMARY KEY (`id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_client`, `total`, `nom`, `prenom`, `adresse`, `adresse2`, `ville`, `zip`, `date`, `type`) VALUES
(1, 99, 1520, 'hjkl', 'fdhgjhj', 'rdgtfhgjk', '', 'fdghjk', 2015, '0000-00-00', ''),
(2, 99, 800, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '0000-00-00', ''),
(3, 99, 2280, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-04', ''),
(4, 99, 2600, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-17', ''),
(5, 99, 3160, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-19', ''),
(6, 99, 760, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-19', ''),
(7, 99, 600, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-19', ''),
(8, 99, 760, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-19', ''),
(9, 5, 300, 'said', 'yassine', '35 rue medinat all', '', 'ariana', 2037, '2018-04-25', 'à la livraison'),
(10, 5, 300, 'said', 'yassine', '35 rue medinat all', '', 'ariana', 2037, '2018-04-25', 'à la livraison'),
(11, 5, 300, 'said', 'yassine', '35 rue medinat all', '35 rue medinat all', 'ariana', 2037, '2018-04-25', 'à la livraison'),
(12, 5, 300, 'said', 'yassine', '35 rue medinat all', '35 rue medinat all', 'ariana', 2037, '2018-04-25', 'à la livraison'),
(13, 5, 300, 'said', 'yassine', '35 rue medinat all', '35 rue medinat all', 'ariana', 2037, '2018-04-25', 'à la livraison'),
(14, 5, 300, 'said', 'yassine', '35 rue medinat all', '35 rue medinat all', 'ariana', 2037, '2018-04-25', 'à la livraison'),
(15, 5, 0, 'said', 'yassine', '35 rue medinat all', '35 rue medinat all', 'ariana', 2037, '2018-04-25', 'à la livraison'),
(16, 5, 0, 'said', 'yassine', '35 rue medinat all', '35 rue medinat all', 'ariana', 2037, '2018-04-25', 'à la livraison'),
(17, 5, 300, 'said', 'yassine', '35 rue medinat all', '35 rue medinat all', 'ariana', 2037, '2018-04-25', 'à la livraison'),
(18, 5, 120, 'said', 'yassine', '35 rue medinat all', '35 rue medinat all', 'ariana', 2037, '2018-04-25', 'à la livraison'),
(19, 5, 120, 'said', 'yassine', '35 rue medinat all', '35 rue medinat all', 'ariana', 2037, '2018-04-25', 'à la livraison'),
(20, 5, 120, 'yassine', 'said', '35 rue  all', '', 'ariana', 2037, '2018-04-26', 'à la livraison');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
