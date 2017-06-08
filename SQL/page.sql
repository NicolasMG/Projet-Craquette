-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 08 Juin 2017 à 08:34
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
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `nompage` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `createur` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `imageprofil` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `imagecouverture` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `page`
--

INSERT INTO `page` (`nompage`, `createur`, `imageprofil`, `imagecouverture`) VALUES
('mapage', '26', 'NULL', 'NULL'),
('mapage', '26', 'NULL', 'NULL'),
('mapage', '26', 'NULL', 'NULL'),
('mapage', '26', 'NULL', 'NULL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
