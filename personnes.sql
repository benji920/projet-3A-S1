-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 05 déc. 2021 à 15:26
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `personnes`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheteurs`
--

DROP TABLE IF EXISTS `acheteurs`;
CREATE TABLE IF NOT EXISTS `acheteurs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prénom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `adresse1` varchar(255) NOT NULL,
  `adresse2` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `code postale` int(11) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `téléphone` int(11) NOT NULL,
  `type carte` varchar(255) NOT NULL,
  `numéro carte` int(11) NOT NULL,
  `nom carte` varchar(255) NOT NULL,
  `date expiration` date NOT NULL,
  `code sécurité` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acheteurs`
--

INSERT INTO `acheteurs` (`ID`, `nom`, `prénom`, `email`, `mdp`, `adresse1`, `adresse2`, `ville`, `code postale`, `pays`, `téléphone`, `type carte`, `numéro carte`, `nom carte`, `date expiration`, `code sécurité`) VALUES
(1, 'Dulong', 'Margot', 'margot.dulong@gmail.fr', 'margot.dulong', '2 chemin de l\'église', '2 chemin de l\'église', 'Paris', 75006, 'France', 786564398, 'Master Card', 12345678, 'Margot Dulong', '2024-12-02', 456);

-- --------------------------------------------------------

--
-- Structure de la table `vendeurs`
--

DROP TABLE IF EXISTS `vendeurs`;
CREATE TABLE IF NOT EXISTS `vendeurs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeurs`
--

INSERT INTO `vendeurs` (`ID`, `nom`, `photo`, `image`, `mail`, `login`) VALUES
(1, 'thomas.martin', 'piscine/photosVendeurs/photo1.jpg', 'piscine/imagesVendeurs/image1.jpg', 'thomas.martin@gmail.fr', 'thomasmartin'),
(2, 'julie.durand', 'piscine/photosVendeurs/photo2.jpg', 'piscine/imagesVendeurs/photo2.jpg', 'julie.durand@yahoo.fr', 'JulieDurand'),
(3, 'louis.marché', 'piscine/photosVendeurs/photo3.jpg', 'piscine/imagesVendeurs/image3.jpg', 'louis.marche@yahoo.fr', 'louisMarché');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
