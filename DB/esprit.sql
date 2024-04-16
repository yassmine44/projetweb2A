-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 29 déc. 2020 à 20:30
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
-- Base de données : `esprit`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectationeventtoclient`
--

DROP TABLE IF EXISTS `affectationeventtoclient`;
CREATE TABLE IF NOT EXISTS `affectationeventtoclient` (
  `IDAffectation` int(11) NOT NULL,
  `EvenementFK` int(11) DEFAULT NULL,
  `ClientFK` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDAffectation`),
  KEY `EvenementFK` (`EvenementFK`),
  KEY `ClientFK` (`ClientFK`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `camping`
--

DROP TABLE IF EXISTS `camping`;
CREATE TABLE IF NOT EXISTS `camping` (
  `IDCamping` int(11) NOT NULL,
  `NomCamping` varchar(100) DEFAULT NULL,
  `dateCamping` datetime DEFAULT NULL,
  `catFK` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDCamping`),
  KEY `catFK` (`catFK`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `IDClient` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `Cin` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDClient`),
  UNIQUE KEY `Cin` (`Cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `IDEvenement` int(11) NOT NULL,
  `prix` float DEFAULT NULL,
  `destination` varchar(100) DEFAULT NULL,
  `categorieFK` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDEvenement`),
  KEY `categorieFK` (`categorieFK`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `festival`
--

DROP TABLE IF EXISTS `festival`;
CREATE TABLE IF NOT EXISTS `festival` (
  `IDFestival` int(11) NOT NULL,
  `NomFestival` varchar(100) DEFAULT NULL,
  `dateFestival` datetime DEFAULT NULL,
  `catFK` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDFestival`),
  KEY `catFK` (`catFK`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `soiree`
--

DROP TABLE IF EXISTS `soiree`;
CREATE TABLE IF NOT EXISTS `soiree` (
  `IDSoiree` int(11) NOT NULL,
  `NomSoiree` varchar(100) DEFAULT NULL,
  `dateSoiree` datetime DEFAULT NULL,
  `catFK` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDSoiree`),
  KEY `catFK` (`catFK`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
