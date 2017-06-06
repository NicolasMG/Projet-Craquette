-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 06 Juin 2017 à 09:20
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
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `idutil` int(11) NOT NULL,
  `nomgroupe` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `imageprofil` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `imagecouverture` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`idutil`, `nomgroupe`, `role`, `imageprofil`, `imagecouverture`) VALUES
(24, 'copain', 'administrateur', '', ''),
(24, 'copain', 'administrateur', '', ''),
(24, 'copain', 'administrateur', '', ''),
(24, 'copain', 'administrateur', '', ''),
(24, 'LesCoupains', 'administrateur', '', ''),
(24, 'chercher amisssss', 'administrateur', 'NULL', 'NULL'),
(24, 'chercher amisssss', 'administrateur', 'NULL', 'NULL'),
(24, 'chercher amisssss', 'administrateur', 'NULL', 'NULL'),
(24, 'lesbolosses', 'administrateur', 'NULL', 'NULL'),
(24, 'lesbolosses', 'administrateur', 'NULL', 'NULL'),
(24, 'coucou', 'administrateur', 'NULL', 'NULL'),
(24, 'coucou', 'administrateur', 'NULL', 'NULL'),
(24, 'coucou', 'administrateur', 'NULL', 'NULL'),
(24, 'coucou', 'administrateur', 'NULL', 'NULL'),
(24, 'coucou', 'administrateur', 'NULL', 'NULL'),
(24, 'coucou', 'administrateur', 'NULL', 'NULL'),
(24, 'coucou', 'administrateur', 'NULL', 'NULL'),
(24, 'co2', 'administrateur', 'NULL', 'NULL'),
(24, 'co2', 'administrateur', 'NULL', 'NULL'),
(24, 'co2', 'administrateur', 'NULL', 'NULL'),
(24, 'co2', 'administrateur', 'NULL', 'NULL'),
(24, 'co2', 'administrateur', 'NULL', 'NULL'),
(17, '', 'membre', 'NULL', 'NULL'),
(17, '', 'membre', 'NULL', 'NULL'),
(17, '', 'membre', 'NULL', 'NULL'),
(17, '', 'membre', 'NULL', 'NULL'),
(17, '', 'membre', 'NULL', 'NULL'),
(17, '', 'membre', 'NULL', 'NULL'),
(17, '', 'membre', 'NULL', 'NULL'),
(24, 'bla', 'administrateur', 'NULL', 'NULL'),
(24, 'bla', 'administrateur', 'NULL', 'NULL'),
(24, 'bla', 'administrateur', 'NULL', 'NULL'),
(24, 'bla', 'administrateur', 'NULL', 'NULL'),
(24, 'salut', 'administrateur', 'NULL', 'NULL'),
(24, 'salut', 'administrateur', 'NULL', 'NULL'),
(24, 'copain', 'administrateur', 'NULL', 'NULL'),
(24, 'copain', 'administrateur', 'NULL', 'NULL'),
(24, 'salut', 'administrateur', 'NULL', 'NULL'),
(24, 'salut', 'administrateur', 'NULL', 'NULL'),
(24, 'salut', 'administrateur', 'NULL', 'NULL'),
(24, 'salut', 'administrateur', 'NULL', 'NULL'),
(16, '', 'membre', 'NULL', 'NULL'),
(16, '', 'membre', 'NULL', 'NULL'),
(16, '', 'membre', 'NULL', 'NULL'),
(24, 'salut', 'administrateur', 'NULL', 'NULL'),
(24, 'salut', 'administrateur', 'NULL', 'NULL'),
(24, 'salut', 'administrateur', 'NULL', 'NULL'),
(24, 'salut', 'administrateur', 'NULL', 'NULL'),
(24, 'salut', 'administrateur', 'NULL', 'NULL'),
(24, 'salut', 'administrateur', 'NULL', 'NULL'),
(17, '', 'membre', 'NULL', 'NULL'),
(17, '', 'membre', 'NULL', 'NULL'),
(17, '', 'membre', 'NULL', 'NULL'),
(17, '', 'membre', 'NULL', 'NULL'),
(17, '', 'membre', 'NULL', 'NULL'),
(24, 'bouh', 'administrateur', 'NULL', 'NULL'),
(24, 'bouh', 'administrateur', 'NULL', 'NULL'),
(17, 'bouh', 'membre', 'NULL', 'NULL'),
(16, 'bouh', 'membre', 'NULL', 'NULL'),
(16, 'bouh', 'membre', 'NULL', 'NULL'),
(16, 'bouh', 'membre', 'NULL', 'NULL'),
(24, 'copain', 'administrateur', 'NULL', 'NULL'),
(24, 'copain', 'administrateur', 'NULL', 'NULL'),
(24, 'copain', 'administrateur', 'NULL', 'NULL'),
(24, 'copain', 'administrateur', 'NULL', 'NULL'),
(24, 'copain', 'administrateur', 'NULL', 'NULL'),
(24, 'copain', 'administrateur', 'NULL', 'NULL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
