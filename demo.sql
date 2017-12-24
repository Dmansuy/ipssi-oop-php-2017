-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 24 déc. 2017 à 14:12
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `demo`
--

-- --------------------------------------------------------

--
-- Structure de la table `attendees`
--

DROP TABLE IF EXISTS `attendees`;
CREATE TABLE IF NOT EXISTS `attendees` (
  `meeting_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `attendees`
--

INSERT INTO `attendees` (`meeting_id`, `user_id`) VALUES
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `communities`
--

DROP TABLE IF EXISTS `communities`;
CREATE TABLE IF NOT EXISTS `communities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `communities`
--

INSERT INTO `communities` (`id`, `name`) VALUES
(1, 'fan'),
(2, 'lama');

-- --------------------------------------------------------

--
-- Structure de la table `meetings`
--

DROP TABLE IF EXISTS `meetings`;
CREATE TABLE IF NOT EXISTS `meetings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `community_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `meetings`
--

INSERT INTO `meetings` (`id`, `title`, `description`, `startDate`, `endDate`, `community_id`) VALUES
(1, 'Oh my god of bed bugs !', 'Sciences of World', '2025-03-12', '2025-02-12', 1),
(2, 'Mattresses on the moon', 'Geography of the space', '2018-01-25', '2018-03-11', 2),
(3, 'Why we code ?', 'Question existential', '2017-12-15', '2017-12-16', 2);

-- --------------------------------------------------------

--
-- Structure de la table `organisers`
--

DROP TABLE IF EXISTS `organisers`;
CREATE TABLE IF NOT EXISTS `organisers` (
  `meeting_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `organisers`
--

INSERT INTO `organisers` (`meeting_id`, `user_id`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Noobies'),
(2, 'Peluche'),
(3, 'BigBoss'),
(4, 'BossBoss');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
