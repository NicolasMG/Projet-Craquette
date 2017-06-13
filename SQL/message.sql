-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 13 Juin 2017 à 08:38
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
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `idutil1` int(11) NOT NULL,
  `idutil2` int(11) NOT NULL,
  `mp` text COLLATE utf8_unicode_ci NOT NULL,
  `format` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `idutil1`, `idutil2`, `mp`, `format`) VALUES
(1, 0, 0, 'salut\r\n', ''),
(2, 0, 0, 't\'es moche', ''),
(3, 0, 0, 'kikou', ''),
(4, 0, 0, 'vous etes tous moches', ''),
(5, 26, 27, 'salut\r\n', ''),
(6, 26, 27, 'salut\r\n', ''),
(7, 26, 27, 'salut\r\n', ''),
(8, 26, 27, 'de rachel a rn', ''),
(9, 27, 27, 'coucou', ''),
(10, 27, 26, 'de rn a rachel', ''),
(11, 27, 26, 't\'es moche', ''),
(12, 24, 16, 'sallut', ''),
(13, 25, 24, 'salut ca va?\r\n', ''),
(14, 24, 25, 'ouais et toi?', ''),
(15, 25, 24, 'je ne te supporte plus', ''),
(16, 25, 17, 'salut', ''),
(17, 25, 16, 'hey', ''),
(18, 25, 24, 'heffffffff\r\ndjsmldkq\r\ndqkjdpomljpq\r\nqjdjqodjq\r\nqdmldfjlmq\r\nqflmlfkq', ''),
(19, 25, 24, 'llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', ''),
(20, 25, 24, 'lllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll\r\nLlllllllllllllllllllllllllllllllllllllllllllllll\r\nllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll\r\nllllllllllllllllllllllllllllllllllllllllllll', ''),
(21, 25, 24, 'salut', 'text'),
(22, 25, 24, 'yoyo', 'text'),
(23, 25, 24, 'Images/7b48554a5152048870abb9ad50e8fea2', 'image'),
(24, 25, 24, 'Images/ebc5de80c556a6f06983a2978dd38b88', 'image'),
(25, 25, 25, 'Images/2fdb0e50cd3f847501ae14ba11a0dede', 'image'),
(26, 25, 25, 'salut', 'text'),
(27, 25, 24, 'Images/b6bc6e8856a40c2bd1454a1a4e9153b6', 'image'),
(28, 25, 24, 'salut', 'text'),
(29, 25, 24, 'salut', 'text'),
(30, 25, 24, 'kikou', 'text'),
(31, 25, 24, 'Images/e1f4f9c5f80c77a497f6afbc0e6c2fb4', 'image'),
(32, 25, 24, 'Images/ea30a6ce823e1967ebb0178bc2c9bcef', 'image'),
(33, 25, 24, 'Images/4031104fd719cfc07a184d7b59cc6b7c', 'image'),
(34, 25, 24, 'c\'est une licorne', 'text'),
(35, 25, 24, 'Images/178541261bebe638cca72e11308e61dd', 'image'),
(36, 25, 24, 'Images/ebd4385adacfb5b76db454de78a03791', 'image'),
(37, 24, 24, 'Images/989170be95b6b3ae52caa3e3a3fb7263', 'image');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
