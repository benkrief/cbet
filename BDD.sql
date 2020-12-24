-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 24 déc. 2020 à 21:35
-- Version du serveur :  5.7.30
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `cbet`
--

-- --------------------------------------------------------

--
-- Structure de la table `Answers`
--

CREATE TABLE `Answers` (
  `ID_Q` int(11) NOT NULL,
  `q1` varchar(50) NOT NULL,
  `q2` varchar(50) NOT NULL,
  `q3` varchar(50) NOT NULL,
  `q4` varchar(50) NOT NULL,
  `q5` varchar(50) NOT NULL,
  `q6` varchar(50) NOT NULL,
  `q7` varchar(50) NOT NULL,
  `q8` varchar(50) NOT NULL,
  `q9` varchar(50) NOT NULL,
  `q10` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Answers`
--

INSERT INTO `Answers` (`ID_Q`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
(1, '2', '3', '2', '5', '0', '0', '1', '3', '0', '3');

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE `Client` (
  `gender` varchar(8) DEFAULT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `adress` varchar(150) DEFAULT NULL,
  `tel` int(10) NOT NULL DEFAULT '0',
  `solde` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Client`
--

INSERT INTO `Client` (`gender`, `mail`, `password`, `nom`, `prenom`, `dob`, `adress`, `tel`, `solde`) VALUES
('Monsieur', 'benjaminkri@hotmail.fr', '$2y$10$4HUgHm.FGwHHzUmgWp9/n.cQI2W88Q.ZdGmWTPH2ExXlB/o4wbNPy', 'krief', 'benjamin', '2020-12-01', '10 rue d\'anglemont', 615363982, 10);

-- --------------------------------------------------------

--
-- Structure de la table `Quiz`
--

CREATE TABLE `Quiz` (
  `id_Q` int(11) NOT NULL,
  `Nom` varchar(60) NOT NULL,
  `Catégorie` varchar(60) NOT NULL,
  `Difficulté` varchar(20) NOT NULL,
  `Cote` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Quiz`
--

INSERT INTO `Quiz` (`id_Q`, `Nom`, `Catégorie`, `Difficulté`, `Cote`) VALUES
(1, 'Le premier', 'Foot', 'Facile', 1.2);

-- --------------------------------------------------------

--
-- Structure de la table `XP`
--

CREATE TABLE `XP` (
  `ID_CLIENT` varchar(50) NOT NULL,
  `ID_QUIZ` int(11) NOT NULL,
  `resultat` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Answers`
--
ALTER TABLE `Answers`
  ADD UNIQUE KEY `ID_Q` (`ID_Q`);

--
-- Index pour la table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`mail`);

--
-- Index pour la table `Quiz`
--
ALTER TABLE `Quiz`
  ADD PRIMARY KEY (`id_Q`);

--
-- Index pour la table `XP`
--
ALTER TABLE `XP`
  ADD KEY `Quiz` (`ID_QUIZ`),
  ADD KEY `Client` (`ID_CLIENT`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Quiz`
--
ALTER TABLE `Quiz`
  MODIFY `id_Q` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Answers`
--
ALTER TABLE `Answers`
  ADD CONSTRAINT `ID_QUIZ` FOREIGN KEY (`ID_Q`) REFERENCES `Quiz` (`id_Q`);

--
-- Contraintes pour la table `XP`
--
ALTER TABLE `XP`
  ADD CONSTRAINT `Client` FOREIGN KEY (`ID_CLIENT`) REFERENCES `Client` (`mail`),
  ADD CONSTRAINT `Quiz` FOREIGN KEY (`ID_QUIZ`) REFERENCES `Quiz` (`id_Q`);
