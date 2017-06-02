-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 02 Juin 2017 à 11:25
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `groupe`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupe ensisa`
--

CREATE TABLE `groupe ensisa` (
  `Membre1` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL,
  `Membre2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Nom` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Administrateur` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `groupe poto`
--

CREATE TABLE `groupe poto` (
  `ID` int(11) NOT NULL,
  `Membre1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Membre2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Membre3` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nom` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Administrateur` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `groupe ensisa`
--
ALTER TABLE `groupe ensisa`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `groupe poto`
--
ALTER TABLE `groupe poto`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `groupe ensisa`
--
ALTER TABLE `groupe ensisa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `groupe poto`
--
ALTER TABLE `groupe poto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
