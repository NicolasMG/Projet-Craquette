-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 02 Juin 2017 à 10:03
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
(15, '\'.$nom.\'', '\'.$prenom.\'', 'NULL', '\'.$mail.\'', '2017-08-04', '\'.$promo.\'', '\'.$filiere.\'', 'NULL', 'NULL', 'Images/profilpardefaut.png', 'Images/couverturepardefaut.jpg', 'NULL'),
(2, 'Noireau', 'Rachou', '', 'rachel.noireau@uha.fr', '2017-05-01', '1A', 'IR', 'NULL', '', '', 'Images/Cigogne%20proposition%20logo%201.png', ''),
(3, 'Machin', 'Lola', '', 'lola.machin@uha.fr', '1994-05-01', '3A', 'TF', 'NULL', '', '', '', ''),
(6, 'Truc', 'Toto', '', 'toto.truc@uha.fr', '1994-06-17', '2A', 'AS', 'NULL', '', '', '', ''),
(17, 'Robot', 'E', 'NULL', 'e.robot@uha.fr', '2017-06-15', 'sortie d\'ecole', 'Méca', 'NULL', 'NULL', 'Images/profilpardefaut.png', 'Images/couverturepardefaut.jpg', 'NULL'),
(10, 'jugdeyusz', 'Rachou', '', 'rachel.noireau@uha.fr', '2017-05-10', '1A', 'IR', 'NULL', '', '', 'Images/Cigogne%20proposition%20logo%201.png', ''),
(16, 'Loup', 'Loulou', 'NULL', 'loulou.loup@uha.fr', '2017-06-06', '1A', 'IR', 'NULL', 'NULL', 'Images/profilpardefaut.png', 'Images/couverturepardefaut.jpg', 'NULL'),
(12, 'Dupont', 'Tintin', '', 'coucou.hello@uha.fr', '2017-05-10', '2A', 'TF', 'NULL', '', 'Images/Cigogne%20proposition%20logo%201.png', 'Images/Cigogne%20proposition%20logo%201.png', ''),
(13, 'Coucou', 'Hello2', '', 'coucou.hello2@uha.fr', '2017-05-10', '1A', 'IR', 'NULL', '', '', '', ''),
(18, 'Ours', 'Nou', 'NULL', 'nou.nours@uha.fr', '2017-06-14', '1A', 'IR', 'NULL', 'NULL', 'Images/profilpardefaut.png', 'Images/couverturepardefaut.jpg', 'NULL'),
(20, 'rrrr', 'rrrr', 'NULL', 'rrrr.rrr@uha.fr', '2017-06-07', '1A', 'IR', 'NULL', 'NULL', 'Images/profilpardefaut.png', 'Images/couverturepardefaut.jpg', 'NULL'),
(21, 'Titi', 'Bleu', 'NULL', 'jaune.bleu@uha.fr', '2017-06-01', '2A', 'Méca', 'NULL', 'NULL', 'Images/profilpardefaut.png', 'Images/couverturepardefaut.jpg', 'NULL'),
(22, 'test3', 'test', 'NULL', 'test.test3@uha.fr', '2017-06-13', '1A', 'IR', 'NULL', 'NULL', 'Images/profilpardefaut.png', 'Images/couverturepardefaut.jpg', 'NULL');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
