-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 23 Avril 2018 à 19:35
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
  `adresse2` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `MotDePasse`, `pays`, `cite`, `telephone`, `fax`, `adresse`, `adresse2`) VALUES
(12, 'eafz', 'ezaf', 'fazef@zeaf.faze', '$2y$10$1R0l2nzGQk6WB/NVfCbIRuz9uHecNKw4bGJzfWJ.UJJdxg8u6l.V2', 'Tunisia', 'Ben Arous', 555, '5555', '55', '555'),
(99, '888', 'faze', 'fezaghf@azef.fez', '44444', 'Tunisia', 'Mahdia', 44, '444', '4', '4'),
(265, 'jjh', 'juh', 'jij@ss.zz', 'kijjk', 'hju', 'gy', 6546, 'huih', 'bhu', 'bhj'),
(852, 'gfhjk', 'dfghjk', 'ghujki@kfvbn.fgh', '', 'hnj,k', 'jk,l', 5263, 'hjk', 'hbnj,k', 'nhjgkl'),
(999, 'fe', 'hfbj', 'befjhb', 'jfb', 'zjefbjheb', 'jf', 11, 'efbzh', 'fbzjebfjz', 'azef'),
(5255, '52', '52', '56@r52.dz', '526', 'Tunisia', 'Monastir', 202, '5225', '0', '25'),
(6585, 'jkh', 'bhj', 'jkn@qs.d', 'njsh', 'bjkh', 'bhjb', 546, 'hjgv', 'ok', 'hbh'),
(9999, '9', '9', '9aef@eaf.afe', '45c48cce2e2d7fbdea1afc51c7c6ad26', 'Tunisia', 'Sfax', 888, '888', '888', '88'),
(21551, 'hhjbhb', 'jnjn', 'jnjk@nj.sq', 'e509f2ec8532279f63fc9d8e7792cbe7', 'Tunisia', 'Ben Arous', 2531, '2052', 'knjk', 'knkn'),
(26585, 'hjn', 'vgv', 'iyn@ehh.el', 'hjbk', 'jkbjb', 'bhg', 5698, 'vgv', 'bh', 'ls'),
(85211, 'gfhjk', 'dfghjk', 'ghujki@kfvbn.fgh', '', 'hnj,k', 'jk,l', 5263, 'hjk', 'hbnj,k', 'nhjgkl'),
(256451, 'jikjjkn ', 'njkn ', 'jkn@kn.sk', '$2y$10$NQPpFyC.rOmSpzmurf7EFeE44n6ouhzUDX6k1UlfH7zpkmMeARtQG', 'Tunisia', 'Ben Arous', 552, 'fytgvb', 'k,', 'k,');

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
  `date` date NOT NULL,
  `type` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commande`
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
(9, 99, 150, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-23', ''),
(10, 99, 120, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-23', ''),
(11, 99, 240, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-23', ''),
(12, 99, 120, 'said', 'yassine', 'rue', 'rue', 'sfax', 2037, '2018-04-23', ''),
(13, 99, 300, 'said', 'yassine', 'rue', 'rue', 'sfax', 2037, '2018-04-23', ''),
(14, 99, 120, 'said', 'yassine', 'rue rsfs', 'rue rsfs', 'sfax', 2037, '2018-04-23', ''),
(15, 99, 500, 'said', 'yassine', 'rue', 'rue', 'sfax', 2037, '2018-04-23', 'Carte de crédit'),
(16, 99, 240, 'said', 'yassine', 'rue', 'rue', 'sfax', 2037, '2018-04-23', 'Carte de crédit');

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
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id_image` int(11) NOT NULL,
  `url` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `taille` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id_image`, `url`, `nom`, `taille`, `produit_id`, `type`) VALUES
(115, 'image/jpeg', 'image_115', 29732, 6060, 'principal'),
(116, 'image/jpeg', 'image_116', 50432, 6060, 'secondaire'),
(117, 'image/jpeg', 'image_116', 29732, 6060, 'secondaire'),
(118, 'image/jpeg', 'image_118', 29732, 8202, 'principal'),
(119, 'image/jpeg', 'image_118', 50432, 8202, 'secondaire'),
(120, 'image/jpeg', 'image_118', 377844, 8202, 'secondaire'),
(166, 'image/png', 'image_166', 147978, 1940, 'principal'),
(167, 'image/jpeg', 'image_167', 183752, 1940, 'secondaire'),
(168, 'image/jpeg', 'image_168', 142688, 1940, 'secondaire'),
(202, 'image/jpeg', 'image_202', 142688, 1414, 'principal'),
(203, 'image/jpeg', 'image_203', 183752, 1414, 'secondaire'),
(204, 'image/png', 'image_204', 147978, 1414, 'secondaire'),
(220, 'image/jpeg', 'image_220', 50432, 2020, 'principal'),
(221, '', 'image_221', 0, 2020, 'secondaire'),
(222, '', 'image_222', 0, 2020, 'secondaire');

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
(8, 123, 1),
(9, 1940, 1),
(10, 1414, 1),
(11, 1414, 2),
(12, 1414, 1),
(13, 1940, 2),
(14, 1414, 1),
(15, 2020, 1),
(16, 1414, 2);

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id_commande` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `paiement`
--

INSERT INTO `paiement` (`id_commande`, `token`, `total`) VALUES
(13, 'tok_1CK3S0EHRSD7AaDuWK8LH4Y5', 300),
(15, 'tok_1CK43aEHRSD7AaDuXwcd6XYL', 500),
(16, 'tok_1CK45AEHRSD7AaDucXHVJyk2', 240);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_client` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `qte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
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
  `produit_date_modification` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`produit_id`, `produit_marque`, `produit_categorie`, `produit_nom`, `produit_description`, `produit_forme`, `produit_couleur`, `produit_prix`, `produit_qte`, `produit_date_ajout`, `produit_date_modification`) VALUES
(123, NULL, 'solaire', 'selon', 'mouch normale', NULL, NULL, 760, 41, '30-03-2018 21:50:55', '02-04-2018 15:32:16'),
(1414, '', 'optique', 'test00', 'test00', 'rectangulaire', 'Noir', 120, 2, '08-04-2018 13:55:37', '17-04-2018 10:04:16'),
(1940, '', 'optique', 'test3', 'test3', 'carrÃ©', 'Rouge', 150, 5, '08-04-2018 12:50:20', '17-04-2018 10:01:16'),
(2020, 'ghj', 'solaire', 'j', 'h', 'carrÃ©', 'jk', 5, 5, '17-04-2018 11:16:31', '17-04-2018 11:16:31'),
(6060, 'Police', 'solaire', 'fgh', 'ghj', 'rectangulaire', '', 5, 5, '04-04-2018 19:18:31', '17-04-2018 11:03:05'),
(8202, 'RayBan', 'solaire', 'gh', 'hj', 'rectangulaire', '', 200, 30, '05-04-2018 12:51:48', '17-04-2018 10:04:58');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `produit_id` (`produit_id`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`id_commande`,`id_produit`),
  ADD KEY `FK_id_produit_ligne_commande` (`id_produit`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id_commande`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_client`,`id_produit`),
  ADD KEY `FK_id_produit` (`id_produit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`produit_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
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
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `fk_paiement_commande` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `FK_id_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_id_produit` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`produit_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
