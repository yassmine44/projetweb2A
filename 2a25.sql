-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 13 avr. 2024 à 18:55
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
-- Base de données : `2a25`
--

-- --------------------------------------------------------

--
-- Structure de la table `condida`
--

CREATE TABLE `condida` (
  `idc` int(11) NOT NULL,
  `ido` int(11) NOT NULL,
  `nomc` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lettre` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `ide` int(50) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `contacte` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `mission` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offre demploi`
--

CREATE TABLE `offre demploi` (
  `ido` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `datelimitc` date NOT NULL,
  `typecontrat` varchar(255) NOT NULL,
  `salaire` varchar(255) NOT NULL,
  `idu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `condida`
--
ALTER TABLE `condida`
  ADD PRIMARY KEY (`idc`),
  ADD KEY `ido` (`ido`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`ide`);

--
-- Index pour la table `offre demploi`
--
ALTER TABLE `offre demploi`
  ADD PRIMARY KEY (`ido`),
  ADD KEY `idu` (`idu`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idu`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `condida`
--
ALTER TABLE `condida`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `ide` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `offre demploi`
--
ALTER TABLE `offre demploi`
  MODIFY `ido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idu` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `condida`
--
ALTER TABLE `condida`
  ADD CONSTRAINT `condida_ibfk_1` FOREIGN KEY (`ido`) REFERENCES `offre demploi` (`ido`);

--
-- Contraintes pour la table `offre demploi`
--
ALTER TABLE `offre demploi`
  ADD CONSTRAINT `offre demploi_ibfk_1` FOREIGN KEY (`idu`) REFERENCES `user` (`idu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
