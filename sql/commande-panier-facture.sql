-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 21 Avril 2018 à 12:33
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `idaoptique`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `adresse` text NOT NULL,
  `adresse2` text NOT NULL,
  `ville` text NOT NULL,
  `zip` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_client`, `total`, `nom`, `prenom`, `adresse`, `adresse2`, `ville`, `zip`, `date`) VALUES
(1, 99, 1520, 'hjkl', 'fdhgjhj', 'rdgtfhgjk', '', 'fdghjk', 2015, '0000-00-00'),
(2, 99, 800, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '0000-00-00'),
(3, 99, 2280, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-04'),
(4, 99, 2600, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-17'),
(5, 99, 3160, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-19'),
(6, 99, 760, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-19'),
(7, 99, 600, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-19'),
(8, 99, 760, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-19');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `ref` int(6) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `statut` varchar(20) NOT NULL,
  `total` float NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`ref`, `nom`, `date`, `heure`, `statut`, `total`, `type`) VALUES
(1, 'Said', '2018-03-30', '05:07:32', 'Non payé', 150.2, 'manual'),
(2, 'Yassine', '2018-03-31', '11:10:42', 'Non payé', 350.12, 'auto');

-- --------------------------------------------------------

--
-- Structure de la table `facture_ligne`
--

CREATE TABLE `facture_ligne` (
  `refFacture` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `qte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `facture_ligne`
--

INSERT INTO `facture_ligne` (`refFacture`, `idProduit`, `qte`) VALUES
(1, 123, 3),
(1, 456, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `qte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`id_commande`, `id_produit`, `qte`) VALUES
(1, 123, 2),
(2, 123, 1),
(2, 963, 1),
(3, 123, 3),
(4, 123, 1),
(4, 666, 3),
(4, 963, 1),
(5, 123, 4),
(5, 963, 3),
(6, 123, 1),
(7, 666, 1),
(8, 123, 1);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_client` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `qte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`id_client`, `id_produit`, `qte`) VALUES
(99, 123, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`ref`),
  ADD UNIQUE KEY `ref` (`ref`);

--
-- Index pour la table `facture_ligne`
--
ALTER TABLE `facture_ligne`
  ADD PRIMARY KEY (`refFacture`,`idProduit`),
  ADD KEY `FK_produit_id` (`idProduit`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`id_commande`,`id_produit`),
  ADD KEY `FK_id_produit_ligne_commande` (`id_produit`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_client`,`id_produit`),
  ADD KEY `FK_id_produit` (`id_produit`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_id_client_commande` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `facture_ligne`
--
ALTER TABLE `facture_ligne`
  ADD CONSTRAINT `FK_produit_id` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`produit_id`),
  ADD CONSTRAINT `FK_ref_fact_ligne` FOREIGN KEY (`refFacture`) REFERENCES `facture` (`ref`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `FK_id_commande_ligne_commande` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`),
  ADD CONSTRAINT `FK_id_produit_ligne_commande` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`produit_id`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `FK_id_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_id_produit` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`produit_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
