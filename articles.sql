-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 06 déc. 2021 à 09:23
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `articles`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `modele` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`ID`, `modele`, `photo`, `description`, `video`, `prix`, `categorie`, `marque`, `date`, `type`) VALUES
(1, 'Ibiza', 'photosVoitures/photoV1.jpg', 'point fort: pas chère\r\npoint: ancienne', '', 2500, 'citadine', 'Seat', 2000, 'article régulier'),
(2, 'ClubMan', 'photosVoitures/photoV2.jpg', 'point fort:esthétique\r\npoint faible: ancienne', '', 6500, 'citadine', 'Mini', 2004, 'article régulier'),
(3, 'A1', 'photosVoitures/photoV3.jpg', 'point fort: vitesse\r\npoint faible: prix', '', 10200, 'citadine', 'Audi', 2008, 'Article haute gamme'),
(4, 'MK9', 'photosVoitures/photoV4.jpg', 'point fort: rare\r\npoint faible: prix', '', 160000, 'voiture de collection ', 'Jaguar', 1990, 'article rare'),
(5, 'City', 'photosVoitures/photoV5.jpg', 'point fort: pas besoin du permis\r\npoint faible: vitesse faible', '', 8090, 'voiture sans permis', 'Aixam', 2010, 'article régulier'),
(6, 'Panda', 'photosVoitures/photoV6.jpg', 'point fort: prix\r\npoint faible: vielle voiture', '', 2400, 'citadine', 'Fiat', 1998, 'article régulier'),
(7, 'Tiguan', 'photosVoitures/photoV7.jpg', 'point fort: prix\r\npoint faible: âge', '', 3400, 'citadine', 'volkswagen', 1996, 'article régulier'),
(8, 'Scooby Doo', 'photosVoitures/photoV8.jpg', 'point fort: beaucoup de place\r\npoint faible: difficilement garable', '', 20000, 'camping car', 'volkswagen', 2015, 'article rare'),
(9, 'Mario Kart', 'photosVoitures/photoV9.jpg', 'point fort: vitesse\r\npoint faible: prix', '', 150000, 'voiture de course', 'Mario', 2020, 'article rare');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
