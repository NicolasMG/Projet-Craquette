-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 07 Juin 2017 à 07:39
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
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `Nom` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `motDePasse` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datenaissance` date NOT NULL,
  `promo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filiere` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` text COLLATE utf8_unicode_ci NOT NULL,
  `imageprofil` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `imagecouverture` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `album` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `profil`
--

INSERT INTO `profil` (`id`, `Nom`, `Prenom`, `motDePasse`, `email`, `datenaissance`, `promo`, `filiere`, `telephone`, `commentaire`, `imageprofil`, `imagecouverture`, `album`) VALUES
(26, 'Rien', 'MotDePasse', '$2y$10$1aXEmdGz8QYYsLo2PcJTkOqvciHMRSb4jxMfWKKFd.jKhWmR9LEJy', 'mot.de.passe@uha.fr', '1980-01-01', 'autre', 'enseignant', 'NULL', 'NULL', 'Images/profilpardefaut.png', 'Images/couverturepardefaut.jpg', 'NULL'),
(25, 'Git', 'Hub', '$2y$10$ct3YEVWbbjQCzFCxQhGGFOXNLk0g.ESCcGT1Br34AaYdsBMT9eGMy', 'git.hub@uha.fr', '1996-05-06', '1A', 'IR', 'NULL', 'NULL', 'Images/profilpardefaut.png', 'Images/couverturepardefaut.jpg', 'NULL'),
(24, 'Alouette', 'Alouette', '$2y$10$kVk3bCQusOWWwQIrbXOLFemeiRHOqNRKpH3sWvN9W7UXXolQqYlxy', 'alouette@uha.fr', '2020-10-11', '1A', 'IR', '06 85 45 53 99', '                     ', 'Images/profilpardefaut.png', 'Images/couverturepardefaut.jpg', 'NULL'),
(23, 'qwe', 'qwe', '$2y$10$zC.R4qA2KwAYn/jc8i09v.Pr8Y8bLcj7Tbz2AsSEuEtDLhcSZw1D6', 'qwe@uha.fr', '2001-02-03', '1A', 'IR', 'NULL', 'NULL', 'Images/profilpardefaut.png', 'Images/couverturepardefaut.jpg', 'NULL');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
