-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 23 Avril 2018 à 18:45
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
-- Structure de la table `clientfidele`
--

CREATE TABLE `clientfidele` (
  `id_client` int(11) NOT NULL,
  `codePromo` varchar(50) NOT NULL,
  `sum` float NOT NULL,
  `count` int(11) NOT NULL,
  `pourcentage` decimal(2,0) NOT NULL,
  `validite` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `clientfidele`
--

INSERT INTO `clientfidele` (`id_client`, `codePromo`, `sum`, `count`, `pourcentage`, `validite`) VALUES
(55, 'IDA-g71Tw', 800, 1, '20', 1),
(99, 'IDA-oI1Ao', 4600, 3, '25', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `clientfidele`
--
ALTER TABLE `clientfidele`
  ADD PRIMARY KEY (`id_client`,`codePromo`),
  ADD KEY `FK_codePromo_clientfidele` (`codePromo`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `clientfidele`
--
ALTER TABLE `clientfidele`
  ADD CONSTRAINT `stranger` FOREIGN KEY (`id_client`) REFERENCES `commande` (`id_client`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
