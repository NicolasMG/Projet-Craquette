-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 02 Juin 2017 à 13:05
-- Version du serveur :  5.7.18-log
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `profil_newsfeed`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `poste` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `actualite`
--

INSERT INTO `actualite` (`id`, `poste`) VALUES
(1, 'bonjour, tout le monde !'),
(2, 'bonjour, je m''appelle david'),
(3, 'Quoi de neuf ?'),
(4, 'Quoi de neuf ?'),
(5, 'Quoi de neuf ?'),
(6, 'Quoi de neuf ?'),
(7, 'Quoi de neuf ?'),
(8, 'blablavla'),
(9, 'dfghjkfgh'),
(10, '212122122212'),
(11, 'dffdgfdfdfdgfdytyvcb'),
(12, 'fgfgfgfgf'),
(13, 'salut les amis !'),
(14, 'kkkkkk'),
(15, 'salut les amis !'),
(16, 'hey tout le monde '),
(17, 'wesh la mif \r\n'),
(18, 'lll');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
