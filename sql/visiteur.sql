-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 01 Mai 2018 à 13:29
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
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `id_visit` int(11) NOT NULL,
  `ip_visit` varchar(30) NOT NULL,
  `country_visit` varchar(50) NOT NULL,
  `date_visit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `visiteur`
--

INSERT INTO `visiteur` (`id_visit`, `ip_visit`, `country_visit`, `date_visit`) VALUES
(1, '::1', 'Tunisie', '01-05-2018 09:38:25'),
(2, '::1', 'Tunisie', '01-05-2018 09:39:22'),
(3, '::1', 'Tunisie', '01-05-2018 10:29:29'),
(4, '::1', 'Tunisie', '01-05-2018 11:02:44'),
(5, '::1', 'Tunisie', '01-05-2018 11:02:52'),
(6, '::1', 'Tunisie', '01-05-2018 11:38:27'),
(7, '::1', 'Tunisie', '01-05-2018 11:39:49'),
(8, '::1', 'Tunisie', '01-05-2018 11:41:25'),
(9, '::1', 'Tunisie', '01-05-2018 11:43:40'),
(10, '::1', 'Tunisie', '01-05-2018 11:45:41'),
(11, '::1', 'Tunisie', '01-05-2018 11:45:42'),
(12, '::1', 'Tunisie', '01-05-2018 11:47:34'),
(13, '::1', 'Tunisie', '01-05-2018 11:55:34'),
(14, '::1', 'Tunisie', '01-05-2018 11:55:34'),
(15, '::1', 'Tunisie', '01-05-2018 11:56:22'),
(16, '::1', 'Tunisie', '01-05-2018 12:01:10'),
(17, '::1', 'Tunisie', '01-05-2018 12:01:16'),
(18, '::1', 'Tunisie', '01-05-2018 12:32:05');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id_visit`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id_visit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
