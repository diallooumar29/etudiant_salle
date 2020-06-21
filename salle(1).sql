-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 31 Juillet 2018 à 15:13
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `salle`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE `batiment` (
  `idBatiment` int(11) NOT NULL,
  `nomBatiment` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `batiment`
--

INSERT INTO `batiment` (`idBatiment`, `nomBatiment`) VALUES
(4, 'A'),
(5, 'B'),
(6, 'C'),
(7, 'D'),
(8, 'F');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `idclasse` int(11) NOT NULL,
  `nomclasse` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `effectif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`idclasse`, `nomclasse`, `effectif`) VALUES
(3, 'BIT3', 450),
(5, 'GBBA', 56),
(6, 'BBAZ', 30),
(7, 'GBBA-2', 34),
(8, 'BIG 2', 20),
(9, 'BBA-4', 20),
(10, 'BBA-1H', 20),
(11, 'BBA-4H', 30),
(12, 'BIT-3', 25),
(13, 'BIG-2', 30),
(14, 'CONVENTION-ETAT', 40),
(15, 'BBA1-J', 40);

-- --------------------------------------------------------

--
-- Structure de la table `occupation`
--

CREATE TABLE `occupation` (
  `idcreneau` int(11) NOT NULL,
  `idclasse` int(11) NOT NULL,
  `nomsalle` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `dateoccupation` date NOT NULL,
  `hd` time NOT NULL,
  `hf` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `occupation`
--

INSERT INTO `occupation` (`idcreneau`, `idclasse`, `nomsalle`, `dateoccupation`, `hd`, `hf`) VALUES
(13, 3, 'CISCOO', '2018-07-23', '12:00:00', '15:00:00'),
(15, 10, 'Molalr', '2018-07-29', '18:00:00', '21:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `nom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `taille` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `niveausalle` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `typesalle` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `tableau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `videoprojecteur` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `batiment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`nom`, `taille`, `niveausalle`, `typesalle`, `tableau`, `videoprojecteur`, `batiment`) VALUES
('CISCOO', 'Petite salle', '2eme niveau', 'Salle de Conference', 'smart board', 'oui', 7),
('Molalr', 'salle moyenne', '1er niveau', 'Salle de TP', 'smart board', 'oui', 5),
('MUMINOU', 'Grande salle', 'RDC', 'Salle Normale', 'smart board', 'oui', 6),
('RAFIOU', 'Grande salle', 'RDC', 'Salle Normale', 'smart board', 'oui', 8);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idutilisateur` int(11) NOT NULL,
  `identifiant` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idutilisateur`, `identifiant`, `mdp`, `photo`) VALUES
(1, 'zain', 'zain14', ''),
(2, 'oumar', 'oumar', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`idBatiment`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`idclasse`);

--
-- Index pour la table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`idcreneau`),
  ADD KEY `idclasse` (`idclasse`),
  ADD KEY `nomsalle` (`nomsalle`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idutilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `batiment`
--
ALTER TABLE `batiment`
  MODIFY `idBatiment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `idclasse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `occupation`
--
ALTER TABLE `occupation`
  MODIFY `idcreneau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idutilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `occupation`
--
ALTER TABLE `occupation`
  ADD CONSTRAINT `occupation_ibfk_1` FOREIGN KEY (`idclasse`) REFERENCES `classe` (`idclasse`),
  ADD CONSTRAINT `occupation_ibfk_2` FOREIGN KEY (`nomsalle`) REFERENCES `salle` (`nom`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
