-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 16 oct. 2022 à 04:53
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gomycode`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `idComm` int(11) NOT NULL,
  `contenuComm` varchar(150) NOT NULL,
  `idEtu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `idEtu` int(11) NOT NULL,
  `nomEtu` varchar(50) NOT NULL,
  `prenomEtu` varchar(70) NOT NULL,
  `emailEtu` varchar(100) NOT NULL,
  `passwordEtu` varchar(30) NOT NULL,
  `idFormation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idEtu`, `nomEtu`, `prenomEtu`, `emailEtu`, `passwordEtu`, `idFormation`) VALUES
(1, 'TEST', 'TETSE', 'sall@gmail.com', 'passer', 3),
(2, 'NDIAYE', 'LAMINE', 'alaminend23@gmail.com', 'passer', 3);

-- --------------------------------------------------------

--
-- Structure de la table `exercices`
--

CREATE TABLE `exercices` (
  `idExo` int(11) NOT NULL,
  `contenuExo` varchar(300) NOT NULL,
  `ImageExo` blob NOT NULL,
  `idIns` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `idFormation` int(11) NOT NULL,
  `nomFormation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`idFormation`, `nomFormation`) VALUES
(1, 'Digital Marketing'),
(2, 'DevOps'),
(3, 'CyberSecurity'),
(4, '2D Game Development'),
(5, 'Deep Learning'),
(6, 'UX Design'),
(7, 'Back-End with NodeJS'),
(8, 'Front-End with ReactJS');

-- --------------------------------------------------------

--
-- Structure de la table `instructeur`
--

CREATE TABLE `instructeur` (
  `idIns` int(11) NOT NULL,
  `nomIns` varchar(50) NOT NULL,
  `prenomIns` varchar(70) NOT NULL,
  `emailIns` varchar(100) NOT NULL,
  `passwordIns` varchar(30) NOT NULL,
  `dateNaissIns` date NOT NULL,
  `photoIns` blob NOT NULL,
  `specialisationIns` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `idReponse` int(11) NOT NULL,
  `contenuReponse` blob NOT NULL,
  `idExo` int(11) NOT NULL,
  `idEtu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `superadmin`
--

CREATE TABLE `superadmin` (
  `email` varchar(250) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `supportcours`
--

CREATE TABLE `supportcours` (
  `idSupport` int(250) NOT NULL,
  `video` varchar(250) NOT NULL,
  `audio` varchar(250) NOT NULL,
  `idFormation` int(11) NOT NULL,
  `idInstructeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idComm`),
  ADD KEY `idEtu` (`idEtu`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`idEtu`),
  ADD KEY `idFormation` (`idFormation`);

--
-- Index pour la table `exercices`
--
ALTER TABLE `exercices`
  ADD PRIMARY KEY (`idExo`),
  ADD KEY `idIns` (`idIns`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`idFormation`);

--
-- Index pour la table `instructeur`
--
ALTER TABLE `instructeur`
  ADD PRIMARY KEY (`idIns`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`idReponse`),
  ADD KEY `idExo` (`idExo`,`idEtu`);

--
-- Index pour la table `supportcours`
--
ALTER TABLE `supportcours`
  ADD PRIMARY KEY (`idSupport`),
  ADD KEY `idFormation` (`idFormation`),
  ADD KEY `idInstructeur` (`idInstructeur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `idEtu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `idFormation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `supportcours`
--
ALTER TABLE `supportcours`
  MODIFY `idSupport` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
