-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 26 Avril 2018 à 12:26
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
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `sujet` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `email`, `sujet`, `message`, `date_ajout`) VALUES
(42, 'faefae', 'feafea@fae.afe', 'feafae', 'feafae', '2018-04-05 13:18:38'),
(43, 'raenfak@fea.fae', 'feafea@fae.afe', 'raeraeraer', 'earearaer', '2018-04-24 05:30:21'),
(44, 'aefaef', 'feafea@fae.afe', 'faef', 'eafaefeaf', '2018-04-24 05:45:29');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`, `color`) VALUES
(7, 'feafa', '2016-03-02 00:00:00', '2016-03-03 00:00:00', '#0071c5'),
(9, 'fzfaze', '2016-01-05 00:00:00', '2016-01-06 00:00:00', '#008000'),
(10, 'feaf', '2016-01-06 00:00:00', '2016-01-07 00:00:00', '#008000'),
(15, 'aefeaf', '2018-04-18 00:00:00', '2018-04-19 00:00:00', ''),
(17, 'fezfez', '2018-04-12 00:00:00', '2018-04-13 00:00:00', '#008000');

-- --------------------------------------------------------

--
-- Structure de la table `mail`
--

CREATE TABLE `mail` (
  `id_mail` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cc` varchar(50) NOT NULL,
  `bcc` varchar(50) NOT NULL,
  `sujet` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date_env` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mirrormx_customer_chat_data`
--

CREATE TABLE `mirrormx_customer_chat_data` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mirrormx_customer_chat_message`
--

CREATE TABLE `mirrormx_customer_chat_message` (
  `id` bigint(20) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `talk_id` bigint(20) NOT NULL,
  `is_new` char(1) NOT NULL DEFAULT 'y',
  `from_user_info` text NOT NULL,
  `to_user_info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mirrormx_customer_chat_message`
--

INSERT INTO `mirrormx_customer_chat_message` (`id`, `from_id`, `to_id`, `body`, `datetime`, `talk_id`, `is_new`, `from_user_info`, `to_user_info`) VALUES
(1, 2, 1, 'Yo', '2018-04-25 20:33:42', 1, 'n', '{"id":2,"name":"Sami-1524695608","mail":"sami@esprit.tn","image":"\\/code\\/light\\/livechat\\/upload\\/default-avatars\\/a.png","info":{"ip":"::1","referer":"http:\\/\\/localhost\\/code\\/mimosa\\/contact.php"},"roles":["GUEST"],"last_activity":"2018-04-25 22:33:40"}', 'all'),
(2, 1, 2, 'Hey', '2018-04-25 20:33:52', 1, 'n', '{"id":1,"name":"Support1","mail":"test@esprit.tn","roles":["OPERATOR"],"last_activity":"2018-04-25 22:33:49","7":"2018-04-25 22:33:49"}', '{"id":2,"name":"Sami-1524695608","mail":"sami@esprit.tn","image":"\\/code\\/light\\/livechat\\/upload\\/default-avatars\\/a.png","info":{"ip":"::1","referer":"http:\\/\\/localhost\\/code\\/mimosa\\/contact.php"},"roles":["GUEST"],"last_activity":"2018-04-25 22:33:49"}'),
(3, 2, 1, '&lt;3', '2018-04-25 20:34:06', 1, 'n', '{"id":2,"name":"Sami-1524695608","mail":"sami@esprit.tn","image":"\\/code\\/light\\/livechat\\/upload\\/default-avatars\\/a.png","info":{"ip":"::1","referer":"http:\\/\\/localhost\\/code\\/mimosa\\/contact.php"},"roles":["GUEST"],"last_activity":"2018-04-25 22:34:04"}', '{"id":1,"name":"Support1","mail":"test@esprit.tn","roles":["OPERATOR"],"last_activity":"2018-04-25 22:33:49","7":"2018-04-25 22:33:49"}'),
(4, 2, -1, 'ezfafeza', '2018-04-25 22:08:03', 2, 'n', '{"id":2,"name":"Sami-1524695608","mail":"sami@esprit.tn","image":"\\/code\\/light\\/livechat\\/upload\\/default-avatars\\/a.png","info":{"ip":"::1","referer":"http:\\/\\/localhost\\/code\\/mimosa\\/contact.php"},"roles":["GUEST"],"last_activity":"2018-04-26 00:07:59"}', 'all');

-- --------------------------------------------------------

--
-- Structure de la table `mirrormx_customer_chat_user`
--

CREATE TABLE `mirrormx_customer_chat_user` (
  `id` bigint(20) NOT NULL,
  `name` char(32) NOT NULL,
  `mail` char(64) NOT NULL,
  `password` char(255) NOT NULL,
  `image` char(255) DEFAULT NULL,
  `info` text,
  `roles` char(128) DEFAULT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mirrormx_customer_chat_user`
--

INSERT INTO `mirrormx_customer_chat_user` (`id`, `name`, `mail`, `password`, `image`, `info`, `roles`, `last_activity`) VALUES
(1, 'Support1', 'test@esprit.tn', '10470c3b4b1fed12c3baac014be15fac67c6e815', NULL, NULL, 'OPERATOR', '2018-04-26 00:18:12'),
(2, 'Sami-1524695608', 'sami@esprit.tn', 'x', '/code/light/livechat/upload/default-avatars/a.png', '{"ip":"::1","referer":"http:\\/\\/localhost\\/code\\/mimosa\\/contact.php"}', 'GUEST', '2018-04-25 22:31:47');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id_reclamation` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(15) NOT NULL,
  `pays` varchar(30) NOT NULL,
  `adress1` varchar(40) NOT NULL,
  `adress2` varchar(40) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `code_postal` int(6) NOT NULL,
  `profession` varchar(60) NOT NULL,
  `nom_produit` varchar(200) NOT NULL,
  `date_achat` varchar(50) NOT NULL,
  `note` varchar(500) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reclamation`
--

INSERT INTO `reclamation` (`id_reclamation`, `nom`, `prenom`, `age`, `email`, `telephone`, `pays`, `adress1`, `adress2`, `ville`, `region`, `code_postal`, `profession`, `nom_produit`, `date_achat`, `note`, `id_client`) VALUES
(7, 'Joshua', 'mcAndrew', 44, 'kodakpowa@gmail.com', 4444444, 'Tunisia', '41 arnica cresen', 'iiii', 'Bladhills', 'Sfax', 4036, 'faefae', 'test3', '2018-04-06', 'aefaef', 99);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id_mail`);

--
-- Index pour la table `mirrormx_customer_chat_data`
--
ALTER TABLE `mirrormx_customer_chat_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `key` (`key`);

--
-- Index pour la table `mirrormx_customer_chat_message`
--
ALTER TABLE `mirrormx_customer_chat_message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mirrormx_customer_chat_user`
--
ALTER TABLE `mirrormx_customer_chat_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id_reclamation`),
  ADD KEY `id_client` (`id_client`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `mail`
--
ALTER TABLE `mail`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `mirrormx_customer_chat_data`
--
ALTER TABLE `mirrormx_customer_chat_data`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `mirrormx_customer_chat_message`
--
ALTER TABLE `mirrormx_customer_chat_message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `mirrormx_customer_chat_user`
--
ALTER TABLE `mirrormx_customer_chat_user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id_reclamation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `FK_reclamation_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
