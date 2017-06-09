-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 08 Juin 2017 à 15:57
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
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `nomevenement` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `createur` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `lieu` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` text COLLATE utf8_unicode_ci NOT NULL,
  `couvertureevenement` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `profilevenement` varchar(225) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`nomevenement`, `createur`, `date`, `heure`, `lieu`, `commentaire`, `couvertureevenement`, `profilevenement`) VALUES
('soirée', '27', '2017-02-06', '00:00:00', 'ici', 'bla', 'NULL', 'NULL'),
('bla', '26', '2017-08-06', '00:00:00', 'NULL', 'NULL', 'Images/imagesgroupecouverture.jpg', 'Images/imagegroupeprofil.jpg'),
('coucou', '26', '2017-06-14', '23:02:00', 'NULL', 'NULL', 'Images/f4d507c0899f92c9eebed5be34817de1', 'Images/imagegroupeprofil.jpg'),
('bbq', '26', '2017-06-07', '23:02:00', 'NULL', 'NULL', 'Images/a34bce2d80c86b2be1927add2e02004d', 'Images/imagegroupeprofil.jpg'),
('grosse soir&eacute;e', '26', '2017-06-20', '20:01:00', 'NULL', 'NULL', 'Images/imagesgroupecouverture.jpg', 'Images/imagegroupeprofil.jpg'),
('fete', '26', '2017-08-06', '00:00:00', 'NULL', 'NULL', 'Images/imagesgroupecouverture.jpg', 'Images/imagegroupeprofil.jpg'),
('f&ecirc;te', '26', '2017-08-06', '00:00:00', 'NULL', 'NULL', 'Images/imagesgroupecouverture.jpg', 'Images/imagegroupeprofil.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
