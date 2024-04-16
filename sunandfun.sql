-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 03 jan. 2021 à 19:17
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
-- Base de données : `sunandfun`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectationeventtoclient`
--

DROP TABLE IF EXISTS `affectationeventtoclient`;
CREATE TABLE IF NOT EXISTS `affectationeventtoclient` (
  `IDAffectation` int(11) NOT NULL AUTO_INCREMENT,
  `EvenementFK` int(11) DEFAULT NULL,
  `ClientFK` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDAffectation`),
  KEY `EvenementFK` (`EvenementFK`),
  KEY `ClientFK` (`ClientFK`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `affectationeventtoclient`
--

INSERT INTO `affectationeventtoclient` (`IDAffectation`, `EvenementFK`, `ClientFK`) VALUES
(25, 37, 16),
(24, 37, 16),
(23, 36, 16);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `IDcat` int(11) NOT NULL,
  `Typecat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IDcat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`IDcat`, `Typecat`) VALUES
(0, 'Camping'),
(1, 'Festival'),
(2, 'Soiree');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `login`, `password`) VALUES
(16, 'eeee', 'hhh', 'mazloutsofiene@gmail.com', 'sofiene.mazlout@esprit.tn', 'aaaa'),
(17, 'hhhh', 's55555', 'mazloutsofiene@gmail.com', 'aaa', 'aaaa');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `IDEvenement` int(11) NOT NULL AUTO_INCREMENT,
  `NomEvenement` varchar(255) DEFAULT NULL,
  `dateEvenement` date DEFAULT NULL,
  `prixEvenement` float DEFAULT NULL,
  `destinationEvenement` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `categorieFK` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDEvenement`),
  KEY `categorieFK` (`categorieFK`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`IDEvenement`, `NomEvenement`, `dateEvenement`, `prixEvenement`, `destinationEvenement`, `image`, `categorieFK`) VALUES
(36, 'azea', '2021-01-13', 45545, 'eeee', 'projet.png', NULL),
(37, 'rfgfdg', '2021-01-14', 16, 'fdfdf', '6166nn.jpg', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
