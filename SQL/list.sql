-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 13 Juin 2017 à 20:14
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
-- Structure de la table `list`
--

CREATE TABLE `list` (
  `mail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `list`
--

INSERT INTO `list` (`mail`) VALUES
('nicolas.greiner@uha.fr'),
('jonathan.weber@uha.fr'),
('rabbit.jacob@uha.fr'),
('ben.nuts@uha.fr'),
('david.vergnault@uha.fr'),
('jacques.vernay@uha.fr'),
('vincent.basset@uha.fr'),
('bryan.follin@uha.fr'),
('saad.bendaoud@uha.fr'),
('rachel.noireau@uha.fr'),
('fanny.ringler@uha.fr'),
('louis.planes@uha.fr'),
('andy.chabalier@uha.fr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
