-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 mai 2024 à 01:04
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetweb2a`
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
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `idc` int(50) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `id_post` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`idc`, `nom`, `email`, `contenu`, `id_post`) VALUES
(21, 'megbli', 'megblifamily@gmail.com', 'jhhhh', 0),
(22, 'megbli', 'megblifamily@gmail.com', 'jjjjjjjjjjjjjjjjj', 0),
(23, 'megbli', 'megblifamily@gmail.com', 'uuuuuuuuuuuuuuuuu', 0),
(24, 'megbli', 'megblifamily@gmail.com', 'uuuuuuuuuuuuuuuuu', 0),
(25, 'megbli', 'megblifamily@gmail.com', 'yyyyyyyyyyyyyy', 0),
(26, 'ggg', 'megblifamily@gmail.com', 'oooo', 0),
(27, 'ggg', 'megblifamily@gmail.com', 'oooo', 0),
(28, 'ggg', 'megblifamily@gmail.com', 'oooo', 0),
(29, 'megbli', 'megblifamily@gmail.com', 'yekhdemm', 0),
(30, 'HCCC', 'megblifamily@gmail.com', '???', NULL);

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

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id_post` int(50) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(40) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_post`, `date`, `description`, `img`, `sujet`, `titre`) VALUES
(13, '2024-04-18', 'lll', '', '', ''),
(14, '2024-04-06', 'mldkjdj', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `etat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `nom`, `email`, `phone`, `sujet`, `date`, `contenu`, `etat`) VALUES
(15, 'chaimhiari', 'sahbikhiari46@gmail.com', 93030489, 'reclamation', '2024-04-19', 'une reclamation', 'Approved'),
(18, 'lamia2', 'lamia@gmail.com', 1254787, 'reclamation', '2024-05-04', 'hello', 'Pending'),
(21, 'raed', 'raed@gmail.com', 78954621, 'recla', '2001-04-04', 'jobless', 'Approved'),
(22, 'ala', 'ala@gmail.com', 96778452, 'REJET', '2024-04-21', 'why', 'Rejected'),
(23, 'alia', 'alia@gmail.com', 9654127, '5634', '2024-04-12', 're', 'Approved'),
(24, 'chhiari', 'azerty@gmail.com', 93030489, 'reject', '2024-04-06', 'ok', 'Pending'),
(25, 'elyeshiari', 'chaimakhiari25@gmail.com', 93030489, 'rejected', '2024-05-02', 'trt', 'Pending'),
(33, 'chichiiitakhiari', 'sahbikhiari49@gmail.com', 93030489, 'yuik', '2024-04-22', 'hyjuj', 'Pending'),
(35, 'fy', 'ammar.youssef.1@esprit.tn', 93030489, ' aahh', '2024-04-13', 'rtegr', 'Pending'),
(39, 'chaimahiari', 'azerty@gmail.com', 93030489, 'rejected', '2024-04-10', 'iyokuyth', 'Pending'),
(40, 'saif', 'saif@gmail.tn', 93030489, 'reclamation', '2024-04-18', 'pourquoi', 'Approved'),
(41, 'nedhir', 'nedhir@yahoo.tn', 25104184, 'reason', '2024-04-18', 'why me', 'Approved'),
(42, 'amine', 'amine@yahoo.fr', 12547896, 'reclamation', '2024-04-30', 'veuillez me contacter', 'Approved'),
(43, 'yassmine', 'yass@gmail.com', 93030489, 'reclamation', '2024-04-30', 'ok', 'Approved'),
(44, 'chaimakhiari', 'chaimakhiari25@gmail.com', 93030489, 'rejected', '2024-05-06', 'feg', 'Approved'),
(45, 'chaimahiari', 'chaimakhiari25@gmail.com', 93030489, 'yuik', '2024-05-06', 'poiu', 'Pending'),
(46, 'chaimahiari', 'chaimakhiari25@gmail.com', 93030489, 'yuik', '2024-05-06', 'poiu', 'Pending'),
(47, 'cha', 'chaimakhiari25@gmail.com', 93030489, 'hey', '2024-05-06', 'kjhg', 'Approved'),
(48, 'cha', 'chaimakhiari25@gmail.com', 93030489, 'hey', '2024-05-06', 'kjhg', 'Approved'),
(49, 'cha', 'chaimakhiari25@gmail.com', 93030489, 'hey', '2024-05-06', 'kjhg', 'Approved'),
(50, 'chaimakhiari', 'chaimakhiari25@gmail.com', 93030489, 'rejected', '2024-05-06', 'test', 'Pending'),
(51, 'lamiaaaa', 'lamia@gmail.com', 93030489, 'hey', '2024-05-06', 'azerty', 'Approved'),
(55, 'cha', 'chaimakhiari25@gmail.com', 93030489, 'je verife encore', '2024-05-06', 'ok', 'Rejected'),
(57, 'med', 'mohamed@yahoo.fr', 93030489, 'REJET', '2024-05-13', 'ok', 'Rejected');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `id_reclamation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id`, `date`, `description`, `id_reclamation`) VALUES
(37, '2024-05-06', 'nope4', 18),
(46, '2024-04-21', 'je verife', 22),
(50, '6896-07-08', 'iuiohk', 18),
(51, '0000-00-00', 'iutuuh', 18),
(55, '2024-04-25', 'loser\r\n', 41),
(56, '2024-04-13', 'hb', 18),
(57, '2024-05-10', 'ahla', 18),
(58, '2024-05-19', 'wadhah', 47);

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
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idc`),
  ADD KEY `id_post` (`id_post`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`IDoffre`),
  ADD KEY `idfk` (`idfk`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_reclamation` (`id_reclamation`);

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
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `idc` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `IDoffre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`id_reclamation`) REFERENCES `reclamation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
