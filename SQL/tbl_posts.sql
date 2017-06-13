-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 13 Juin 2017 à 17:59
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `codingcage`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `postID` int(11) NOT NULL,
  `postTitle` varchar(255) NOT NULL,
  `postUrl` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_posts`
--

INSERT INTO `tbl_posts` (`postID`, `postTitle`, `postUrl`) VALUES
(1, 'qwe', 'http://127.0.0.1/Projet-Craquette-master/PHP/profil.php\r\n'),
(2, 'Alouette', 'http://127.0.0.1/Projet-Craquette-master/PHP/profilami?id=24'),
(805, 'ertui', 'http://127.0.0.1/Projet-Craquette-master/PHP/page.php?id=28'),
(29, 'azer', 'http://127.0.0.1/Projet-Craquette-master/PHP/page.php?id=28'),
(801, 'ohnn', 'http://127.0.0.1/Projet-Craquette-master/PHP/page.php?id=28'),
(28, 'moi', 'http://127.0.0.1/Projet-Craquette-master/PHP/page.php?id=28'),
(800, 'oki', 'http://127.0.0.1/Projet-Craquette-master/PHP/profilami?id=28'),
(20, 'Rien', 'http://127.0.0.1/Projet-Craquette-master/PHP/profilami?id=26'),
(25, 'Git', 'http://127.0.0.1/Projet-Craquette-master/PHP/profilami?id=25'),
(27, 'bry', 'http://127.0.0.1/Projet-Craquette-master/PHP/profilami?id=27');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`postID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=806;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
