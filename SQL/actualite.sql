-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 13 Juin 2017 à 15:25
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `siteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
  `id` int(250) NOT NULL,
  `poste` text NOT NULL,
  `compteur_like` int(250) DEFAULT '0',
  `compteur_retweet` int(250) DEFAULT '0',
  `num_tweet` int(250) NOT NULL,
  `liked` varchar(250) DEFAULT 'false',
  `retweeted` varchar(250) DEFAULT 'false',
  `retweeted_by` int(250) DEFAULT NULL,
  `commented` varchar(250) DEFAULT 'false',
  `commented_by` int(250) DEFAULT NULL,
  `compteur_comments` int(250) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `actualite`
--

INSERT INTO `actualite` (`id`, `poste`, `compteur_like`, `compteur_retweet`, `num_tweet`, `liked`, `retweeted`, `retweeted_by`, `commented`, `commented_by`, `compteur_comments`) VALUES
(25, 'hey', 0, 0, 68, 'false', 'false', NULL, 'true', 25, 2),
(25, 'hey', 0, 0, 69, 'false', 'false', NULL, 'true', 25, 3),
(25, 'jjjj', 0, 0, 70, 'false', 'false', NULL, 'false', NULL, 0),
(25, 'fff', 0, 0, 71, 'false', 'false', NULL, 'false', NULL, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`num_tweet`),
  ADD KEY `num_tweet` (`num_tweet`),
  ADD KEY `num_tweet_2` (`num_tweet`),
  ADD KEY `num_tweet_3` (`num_tweet`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `num_tweet` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
