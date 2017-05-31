-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 31 Mai 2017 à 12:03
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
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `Nom` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datenaissance` date NOT NULL,
  `promo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filiere` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `profil`
--

INSERT INTO `profil` (`Nom`, `Prenom`, `email`, `adresse`, `datenaissance`, `promo`, `filiere`, `telephone`) VALUES
('Noireau', 'Rachel', 'dkurfi;krfk;', 'rachel.noireau@uha.fr', '2017-05-01', '1A', 'IR', 'NULL'),
('Noireau', 'Rachel', 'rachel.noireau@uha.fr', 'dkurfi;krfk;', '2017-05-01', '1A', 'IR', 'NULL'),
('Machin', 'Lola', 'lola.machin@uha.fr', 'unendroit', '1994-05-01', '3A', 'TF', 'NULL'),
('Machin', 'Lola', 'lola.machin@uha.fr', 'unendroit', '1994-05-01', '3A', 'TF', 'NULL'),
('Machin', 'Lola', 'lola.machin@uha.fr', 'unendroit', '1994-05-01', '3A', 'TF', 'NULL'),
('Truc', 'Toto', 'toto.truc@uha.fr', 'maison', '1994-06-17', '2A', 'AS', 'NULL'),
('Truc', 'Toto', 'toto.truc@uha.fr', 'maison', '1994-06-17', '2A', 'AS', 'NULL'),
('Truc', 'Toto', 'toto.truc@uha.fr', 'maison', '1994-06-17', '2A', 'AS', 'NULL'),
('Truc', 'Toto', 'toto.truc@uha.fr', 'maison', '1994-06-17', '2A', 'AS', 'NULL'),
('jugdeyusz', 'fbdehjgduy', 'rachel.noireau@uha.fr', 'hryeyhqqry', '2017-05-10', '1A', 'IR', 'NULL'),
('Coucou', 'Hello', 'coucou.hello@uha.fr', 'hryeyhqqry', '2017-05-10', '1A', 'IR', 'NULL'),
('Coucou', 'Hello', 'coucou.hello@uha.fr', 'hryeyhqqry', '2017-05-10', '1A', 'IR', 'NULL'),
('Coucou', 'Hello2', 'coucou.hello2@uha.fr', 'hryeyhqqry', '2017-05-10', '1A', 'IR', 'NULL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
