-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 13 Juin 2017 à 20:15
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
(25, 'Greiner', 'Nicolas', '$2y$10$MLw5oBa71mBSCevNlBilDOGQ//RL0mc9oCTvk0t1uT6wnCgiUU33S', 'nicolas.greiner@uha.fr', '1995-08-10', '1A', 'IR', 'NULL', 'NULL', 'Images/profilpardefaut.png', 'Images/couverturepardefaut.jpg', 'NULL'),
(24, 'Jacob', 'Rabbit', '$2y$10$BhZ3SXjfHopCJT1CaeKdr.Ak9mW/w9jsmjHvslIWOb5/rfVytqIHO', 'rabbit.jacob@uha.fr', '1980-01-01', '1A', 'IR', 'NULL', '                    ', 'Images/profilpardefaut.png', 'Images/couverturepardefaut.jpg', 'NULL'),
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
