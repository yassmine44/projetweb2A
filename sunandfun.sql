-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 25 avr. 2024 à 15:14
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

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

CREATE TABLE `affectationeventtoclient` (
  `IDAffectation` int(11) NOT NULL,
  `OffreFK` int(11) DEFAULT NULL,
  `ClientFK` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `affectationeventtoclient`
--

INSERT INTO `affectationeventtoclient` (`IDAffectation`, `OffreFK`, `ClientFK`) VALUES
(25, 37, 16),
(24, 37, 16),
(23, 36, 16);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `IDcat` int(11) NOT NULL,
  `Typecat` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`IDcat`, `Typecat`) VALUES
(0, 'Technologie de l\'information (TI)'),
(1, 'Santé '),
(2, 'Vente et service à la clientèle');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `exp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `login`, `password`, `cv`, `exp`) VALUES
(27, 'dasdas', 'dasdasdasdsadasd', 'sza@gmail.com', 'dsadas', '21213', '', 0),
(28, 'mohamed', 'cherif', 'mohamedcherif@gmail.com', 'qwe', '12345', '', 0),
(29, 'kim', 'kim', 'kim@gmail.com', 'kim', 'kim', 'team_01.jpg', 5),
(30, 'trarar', 'rarar', 'rarara', 'rarara', 'raraar', 'blog-4-370x270.jpg', 3),
(32, '+21655660567', 'kim', 'szsdsad@dsads.com', 'TUN', 'dsadsasdsadsadsa', 'about-1-570x350.jpg', 1),
(33, '+21655660742', 'kim', 'moh', 'TUN', 'raraar', 'about-1-570x350.jpg', 33),
(34, '+21655660742', 'kimfsafsafsafsafasf', 'moh', 'TUN', 'raraar', 'about-1-570x350.jpg', 33),
(35, '+21655660509', 'sdafasfsfsafasfa', 'fsafsafasfasfsafasf', 'UK', 'sdsadasdasdasdasd', 'about-1-570x350.jpg', 11),
(36, '+21621212222', 'yessssssssssssssssssss', 'yessssssssssssssssssssssdsadasdsadsa', 'UK', 'yesssssssssssssssssssssss', 'employe.pdf', 12),
(37, '+21655555555', 'dsadasddasdasdasdsadsadasdasdas', 'dsadasdasdasdasdasdasdasdasdasdasd', 'CAN', 'dsadsadasdasdasdasdasdas', 'employe.pdf', 4),
(39, '+21699999999', 'eeeeeeeeeeeeeebarchaaa', 'krittttt lin fadiiit', 'TUN', 'chahreya wkarhba al leasing', 'employe.pdf', 20),
(42, '+21655660742', 'yessssssssssssssssssss', 'sza@gmail.com', 'TUN', 'aaaadsadasdas', 'employe.pdf', 2),
(43, '+21655660742', 'yessssssssssssssssssss', 'sza@gmail.com', 'TUN', 'aaaadsadasdas', 'employe.pdf', 2),
(45, '+21609876543', 'naaamelkolchayhamdoulah', 'dsadasdasdasdasdasdasdasdasdasdasda', 'TUN', 'dsadsadasdasdsadsadasdsadsadsadasd', 'employe.pdf', 2),
(46, '+21655660777', 'YRYRYYRYRYRYRYRYRY', 'YY', 'CAN', 'hahahahahahahahahahahahahhah', 'employe.pdf', 1),
(47, '+21655660777', 'YRYRYYRYRYRYRYRYRY', 'YY', 'CAN', 'RR', 'employe.pdf', 1),
(48, '+21655660742', 'dsadasdasdasdsadsadsa', 'dsadasdasdasdsadsa', 'UK', 'dsadasdasdasdsad', 'employe.pdf', 2),
(49, '+21655666655', 'hahahahahahhaahahahhahahaa', 'ahahhahaaahahahhahh', 'UK', 'hahahahahahahahahahahahahhah', 'employe.pdf', 2),
(50, '+21655660742', 'yessssssssssssssssssss', 'mohamedazizcherif75@gmail.com', 'CAN', 'hahahahahahahahahahahahahhah', 'employe.pdf', 11),
(51, '+21698756565', 'lllllllllllllllllllllllllllllll', 'ööööööööööööööööööö', 'AFG', 'ööööööööööööööööööö', 'employe.pdf', 33),
(52, '+21698756565', 'lllllllllllllllllllllllllllllll', 'ööööööööööööööööööö', 'AFG', 'ööööööööööööööööööö', 'employe.pdf', 33);

-- --------------------------------------------------------

--
-- Structure de la table `condidat`
--

CREATE TABLE `condidat` (
  `idc` int(11) NOT NULL,
  `phone` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `exp` varchar(255) DEFAULT NULL,
  `education` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `career` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `IDEvenement` int(11) NOT NULL,
  `NomEvenement` varchar(255) DEFAULT NULL,
  `dateEvenement` date DEFAULT NULL,
  `prixEvenement` float DEFAULT NULL,
  `destinationEvenement` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `categorieFK` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`IDEvenement`, `NomEvenement`, `dateEvenement`, `prixEvenement`, `destinationEvenement`, `image`, `categorieFK`) VALUES
(36, 'azea', '2021-01-13', 45545, 'eeee', 'projet.png', NULL),
(37, 'rfgfdg', '2021-01-14', 16, 'fdfdf', '6166nn.jpg', NULL),
(38, 'mohamed', '2024-04-02', 22222, 'turkie', '93cb9aef513a7990351c7255d02da53e.jpeg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `IDoffre` int(11) NOT NULL,
  `titreoffre` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `datelimit` date DEFAULT NULL,
  `typecontrat` varchar(255) DEFAULT NULL,
  `salaire` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `idfk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`IDoffre`, `titreoffre`, `datelimit`, `typecontrat`, `salaire`, `image`, `idfk`) VALUES
(2, 'ELAAAAAA', '2024-04-22', 'CDO', '2222', 'blog-image-fullscren-1-1920x700.jpg', 2),
(5, 'sadsdasdasdda', '2024-04-15', 'ani', '1222', '', 12),
(7, 'TITRE', '2024-05-04', 'CDO', '3', 'team_01.jpg', 12),
(8, 'CHOUFII', '2024-04-17', 'annuellle', '12222', 'blog-6-370x270.jpg', 12),
(11, 'MOHAMEDD', '2024-04-27', 'CDI', '33333', 'heading-3-1920x500.jpg', 12),
(13, 'CHARFAA', '2024-04-20', 'Stage', '2111', 'blog-image-fullscren-1-1920x700.jpg', 12),
(14, 'HAMA', '2024-04-25', 'CDD', '1111', 'team_01.jpg', 12),
(15, 'CHOUFIIHAL', '2024-04-25', 'Alternance', '2000', 'projet.png', 12),
(16, '1', '2024-04-26', 'CDD', '1222', 'blog-6-370x270.jpg', 2),
(22, 'ZOUHAIR', '2024-04-27', 'CDD', '200000000', 'heading-2-1920x500.jpg', 12),
(23, 'OOLLMM', '2024-04-26', 'Stage', '22', 'blog-1-370x270.jpg', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affectationeventtoclient`
--
ALTER TABLE `affectationeventtoclient`
  ADD PRIMARY KEY (`IDAffectation`),
  ADD KEY `ClientFK` (`ClientFK`) USING BTREE,
  ADD KEY `OffreFK` (`OffreFK`) USING BTREE;

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`IDcat`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `condidat`
--
ALTER TABLE `condidat`
  ADD PRIMARY KEY (`idc`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`IDEvenement`),
  ADD KEY `categorieFK` (`categorieFK`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`IDoffre`),
  ADD KEY `idfk` (`idfk`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affectationeventtoclient`
--
ALTER TABLE `affectationeventtoclient`
  MODIFY `IDAffectation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `condidat`
--
ALTER TABLE `condidat`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `IDEvenement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `IDoffre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `offre_ibfk_1` FOREIGN KEY (`idfk`) REFERENCES `2a25`.`user` (`idu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
