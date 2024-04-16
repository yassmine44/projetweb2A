-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 02 avr. 2024 à 13:44
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
-- Structure de la table `commantaire`
--

CREATE TABLE `commantaire` (
  `id_c` int(11) NOT NULL,
  `date_c` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `domaine` int(25) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entretien`
--

CREATE TABLE `entretien` (
  `ide` int(11) NOT NULL,
  `nomc` varchar(25) NOT NULL,
  `format` varchar(255) NOT NULL,
  `langue` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `num` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gestionblog`
--

CREATE TABLE `gestionblog` (
  `id` int(50) NOT NULL,
  `nom` int(20) NOT NULL,
  `email` int(50) NOT NULL,
  `sujet` int(50) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'chaimakhiari', 'chaimakhiari25@gmail.com', 93030489, 'reclamation', '2024-04-05', 'hey', 'Approved'),
(2, 'chaimakhiari', 'chaimakhiari25@gmail.com', 93030489, 'reclamation', '2024-04-05', 'hey', 'Approved'),
(3, 'azer', 'sahbikhiari49@gmail.com', 93030489, 'heyy', '0000-00-00', 'hii', 'Pending'),
(4, 'yass', 'sahbikhiari46@gmail.com', 93030489, 'hey', '2024-04-06', 'yrdktjk', 'Approved'),
(5, 'yass', 'sahbikhiari46@gmail.com', 93030489, 'hey', '2024-04-06', 'yrdktjk', 'Approved'),
(6, 'hamza', 'azerty@gmail.com', 93030489, 'reclamation', '2024-04-25', 'tryui', 'Pending'),
(7, 'hamza', 'azerty@gmail.com', 93030489, 'yuik', '2024-04-27', '(\'-yui', 'Approved'),
(8, 'hamza', 'azerty@gmail.com', 93030489, 'yuik', '2024-04-27', '(\'-yui', 'Approved'),
(9, 'hamza', 'azerty@gmail.com', 93030489, 'yuik', '2024-04-27', '(\'-yui', 'Approved'),
(10, 'chaimakhiari', 'sahbikhiari46@gmail.com', 93030489, 'hey', '6585-08-09', 'ygiuhoj', 'Pending'),
(11, 'hamza', 'azerty@gmail.com', 93030489, 'reclamation', '2024-04-25', 'tryui', 'Pending'),
(12, 'chaikhiari', 'sahbikhiari49@gmail.com', 93030489, 'hey', '2024-04-25', 'ytiui', 'Approved'),
(13, 'chaikhiari', 'sahbikhiari49@gmail.com', 93030489, 'hey', '2024-04-25', 'ytiui', 'Approved'),
(14, 'chaikhiari', 'sahbikhiari49@gmail.com', 93030489, 'hey', '2024-04-25', 'ytiui', 'Approved');

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
-- Index pour les tables déchargées
--

--
-- Index pour la table `commantaire`
--
ALTER TABLE `commantaire`
  ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entretien`
--
ALTER TABLE `entretien`
  ADD PRIMARY KEY (`ide`);

--
-- Index pour la table `gestionblog`
--
ALTER TABLE `gestionblog`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entretien`
--
ALTER TABLE `entretien`
  MODIFY `ide` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commantaire`
--
ALTER TABLE `commantaire`
  ADD CONSTRAINT `commantaire_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `gestionblog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`id_reclamation`) REFERENCES `reclamation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
