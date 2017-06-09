-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 08 Juin 2017 à 20:38
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

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
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `idutil1` int(11) NOT NULL,
  `idutil2` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `idutil1`, `idutil2`, `message`) VALUES
(1, 26, 27, 'salut'),
(2, 26, 27, 'rachou'),
(3, 26, 27, 'yoyo'),
(4, 26, 27, 'coucou'),
(6, 26, 27, 'yo'),
(7, 26, 27, 'yo'),
(8, 26, 27, 'yo'),
(9, 26, 27, 'F.F.'),
(10, 26, 27, 'chat'),
(11, 26, 27, 'le p\'ti gras'),
(12, 26, 27, 'et gros et plus'),
(13, 26, 27, '*en'),
(14, 26, 27, 'salutsalut'),
(15, 27, 26, 't\'es moche'),
(16, 27, 26, 'tu me fais peur'),
(17, 27, 26, 'Faut que tu arrêtes les cris chelou comme ça ... !!!!\r\n'),
(18, 27, 26, 'aie');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
