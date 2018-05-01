-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 01 Mai 2018 à 13:33
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
  `pays` varchar(20) DEFAULT NULL,
  `cite` varchar(20) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `telephone` bigint(15) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `adresse` varchar(40) DEFAULT NULL,
  `adresse2` varchar(40) DEFAULT NULL,
  `confirmationMail` varchar(100) DEFAULT NULL,
  `type` varchar(7) DEFAULT NULL,
  `google_id` varchar(30) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `MotDePasse`, `pays`, `cite`, `zip`, `telephone`, `fax`, `adresse`, `adresse2`, `confirmationMail`, `type`, `google_id`, `status`) VALUES
(320520259, 'oumayma', 'oumayma', 'souhail.dakhlaoui1@gmail.com', 'fafou', 'Tunisia', 'Siliana', 0, 2469758, '5896', 'tunis', 'tunis', 'yIyyanRQp6', NULL, NULL, 0),
(320520270, 'nefzi', 'mouhamed', 'mouhamed@esprit.tn', 'mouhamed', 'Tunisia', 'Bizerte', 0, 71596325, '7171', 'sall', 'lol', 't7v9chSxeq', NULL, NULL, 0),
(320520274, 'said', 'yassine', 'yassine.said@esprit.tn', 'esprit123', 'Tunisie', 'Ariana', 2037, 52095837, '71255362', '35 rue medinat al raha', '', 'dELOKZymMV', NULL, NULL, 0),
(320520275, 'malek', 'mrabti', 'malek.mrabti@esprit.tn', 'malek123', 'Tunisie', 'Select', 3000, 2589632, '5852', 'rue tahrir manouba', '', 'ZBTOLTcyqc', NULL, NULL, 0),
(320520276, 'bensalah', 'olfa', 'mariem@es.rn', 'olfa123', 'Tunisie', 'Select', 20000, 5569875, '20000', 'rue jasmin tunis', '', 'SM3zVQ3Vpx', NULL, NULL, 0),
(320520277, 'boukhayatia', 'salma', 'idaoptique@gmail.com', 'mimi12', 'Tunisie', 'Nabeul', 2500, 58328129, '3000', '22, les jasmins', '', 'QTke4EmODx', NULL, '117239007741255795290', 0),
(320520282, 'BOUKHAYATIA', 'OUMAYMA', 'oumayma.boukhayatia@esprit.tn', 'google', 'Tunisie', 'Select', 15000, 2000, '', '22, les jasmins', '', NULL, 'google', '115887450129624310747', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320520283;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
