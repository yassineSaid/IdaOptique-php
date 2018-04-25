-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 25 Avril 2018 à 00:51
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
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `MotDePasse` varchar(200) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `cite` varchar(20) NOT NULL,
  `telephone` int(15) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `adresse2` varchar(40) NOT NULL,
  `confirmationMail` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `MotDePasse`, `pays`, `cite`, `telephone`, `fax`, `adresse`, `adresse2`, `confirmationMail`, `status`) VALUES
(320520258, 'dakhlaoui', 's', 'idaoptique@gmail.com', 'souhail', 'Tunisia', 'Kairouan', 5898652, '5636985', '452', '55236xs ', 'CqaLEYILzx', 0),
(320520259, 'oumayma', 'oumayma', 'souhail.dakhlaoui1@gmail.com', 'oumayma', 'Tunisia', 'Siliana', 2469758, '5896', 'tunis', 'tunis', 'yIyyanRQp6', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320520260;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
