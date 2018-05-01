-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 01 Mai 2018 à 22:44
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
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `comment` longtext NOT NULL,
  `date_com` datetime NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(45, 'raouf', 'aoufae@d.e', 'efnaje', 'fezfa', '2018-04-26 14:52:14'),
(46, 'mayma', 'malek.mrabti@esprit.tn', 'test', 'fjanezkjfnaze fzjaenf', '2018-05-01 23:36:38');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` varchar(100) NOT NULL,
  `end_event` varchar(100) NOT NULL,
  `heure_debut` varchar(30) NOT NULL,
  `heure_fin` varchar(30) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`, `heure_debut`, `heure_fin`, `color`) VALUES
(22, 'azeraez', '2018-04-04', '2018-04-06', '01:00', '11:01', '#008000'),
(24, 'deada', '2018-04-06', '2018-04-07', '10:00', '11:11', '#0071c5'),
(25, 'zedaze', '2018-05-01', '2018-05-06', '', '', '#008000'),
(26, '', '2018-05-08', '2018-05-09', '05:00', '06:00', '');

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
(4, 2, -1, 'ezfafeza', '2018-04-25 22:08:03', 2, 'n', '{"id":2,"name":"Sami-1524695608","mail":"sami@esprit.tn","image":"\\/code\\/light\\/livechat\\/upload\\/default-avatars\\/a.png","info":{"ip":"::1","referer":"http:\\/\\/localhost\\/code\\/mimosa\\/contact.php"},"roles":["GUEST"],"last_activity":"2018-04-26 00:07:59"}', 'all'),
(5, 3, 1, 'hey', '2018-05-01 21:35:47', 3, 'n', '{"id":3,"name":"raouf-1525214144","mail":"raouf.aouadi@hotmail.com","image":"\\/code\\/light\\/livechat\\/upload\\/default-avatars\\/a.png","info":{"ip":"::1","referer":"http:\\/\\/localhost\\/code\\/mimosa\\/contact.php"},"roles":["GUEST"],"last_activity":"2018-05-01 22:35:45"}', 'all'),
(6, 1, 3, 'ofof', '2018-05-01 21:36:10', 3, 'n', '{"id":1,"name":"Support1","mail":"test@esprit.tn","roles":["OPERATOR"],"last_activity":"2018-05-01 22:36:07","7":"2018-05-01 22:36:07"}', '{"id":3,"name":"raouf-1525214144","mail":"raouf.aouadi@hotmail.com","image":"\\/code\\/light\\/livechat\\/upload\\/default-avatars\\/a.png","info":{"ip":"::1","referer":"http:\\/\\/localhost\\/code\\/mimosa\\/contact.php"},"roles":["GUEST"],"last_activity":"2018-05-01 22:36:09"}');

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
(1, 'Support1', 'test@esprit.tn', '10470c3b4b1fed12c3baac014be15fac67c6e815', NULL, NULL, 'OPERATOR', '2018-05-01 21:43:56'),
(2, 'Sami-1524695608', 'sami@esprit.tn', 'x', '/code/light/livechat/upload/default-avatars/a.png', '{"ip":"::1","referer":"http:\\/\\/localhost\\/code\\/mimosa\\/contact.php"}', 'GUEST', '2018-04-25 22:31:47'),
(3, 'raouf-1525214144', 'raouf.aouadi@hotmail.com', 'x', '/code/light/livechat/upload/default-avatars/a.png', '{"ip":"::1","referer":"http:\\/\\/localhost\\/code\\/mimosa\\/contact.php"}', 'GUEST', '2018-05-01 21:43:57');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `post` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_post` datetime NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`id`, `titre`, `categorie`, `post`, `image`, `date_post`, `id_client`) VALUES
(4, 'test2', 'Generale', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example,', 'img/blog/general.png', '2018-05-01 16:28:08', 99),
(6, 'test22', 'Generale', 'afenzekjfnkjzae fkjaze jfbazejfbkjazebfjkbzaekf jkzeabkfjbzaekjfbkjzaebf', 'img/blog/general.png', '2018-05-01 23:27:31', 99),
(7, 'test3', 'Actualites', 'fazefzeafzaef', 'img/blog/news.png', '2018-05-01 23:30:16', 99);

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
(7, 'Joshuae', 'mcAndrew', 44, 'kodakpowa@gmail.com', 4444444, 'Tunisia', '41 arnica cresene', 'iiii', 'Bladhills', 'Sfax', 4036, 'faefae', 'test3', '2018-04-06', 'aefaef', 99),
(9, 'Aouadi', 'Raouf', 20, 'raouf.aouadi@hotmail.com', 54446816, 'Tunisia', 'Rue Monastir, 7', 'Rue Monastir, 7', 'Nouvelle Medina', 'Ben Arous', 2063, 'etudiatn', 'test00', '2018-04-11', 'test', 99);

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `id_visit` int(11) NOT NULL,
  `ip_visit` varchar(30) NOT NULL,
  `country_visit` varchar(50) NOT NULL,
  `date_visit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `visiteur`
--

INSERT INTO `visiteur` (`id_visit`, `ip_visit`, `country_visit`, `date_visit`) VALUES
(25, '::1', 'Tunisie', '2018-05-01 19:45:04'),
(26, '::1', 'Tunisie', '2018-05-01 19:45:13'),
(29, '192.168.1.1', 'France', '2018-04-11 11:29:25'),
(30, '192.168.1.1', 'France', '2018-03-14 10:25:17'),
(31, '192.168.1.2', 'France', '2018-03-14 09:25:38'),
(32, '192.168.1.3', 'France', '2018-03-13 09:25:38'),
(33, '192.168.1.4', 'France', '2018-03-10 09:25:38'),
(34, '::1', 'Tunisie', '2018-05-01 21:12:59');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_client` (`id_client`);

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
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id_reclamation`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id_visit`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `mirrormx_customer_chat_user`
--
ALTER TABLE `mirrormx_customer_chat_user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id_reclamation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id_visit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_comment_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `fk_comment_post` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_post_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `FK_reclamation_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
