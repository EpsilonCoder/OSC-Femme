-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 07 mars 2022 à 07:17
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `femme-org`
--

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE `commune` (
  `id_commune` int(11) NOT NULL,
  `libelle_colmmune` int(11) NOT NULL,
  `id_departement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `nom` varchar(255) NOT NULL,
  `dte` date NOT NULL,
  `id` int(11) NOT NULL,
  `regime` tinyint(1) NOT NULL,
  `registre` varchar(100) NOT NULL,
  `ninea` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  `sociale` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`nom`, `dte`, `id`, `regime`, `registre`, `ninea`, `web`, `sociale`) VALUES
('Sow', '2022-03-19', 46, 0, '345GQTGSGS71717', '77712GFSSVGFA51511', 'hhhrfuedsfcuesq.com', 'Malika77'),
('simplon', '2022-03-01', 47, 0, '345GQTGSGS71717333', '77712GFSSVGFA51511', 'https://www.simplon.com', 'Mermoz'),
('Atos', '2022-04-06', 48, 1, '345GQTGSGS71717', '77712GFSSVGFA51511666', 'https://www.simplon.com', 'Cité Keur Gorgui'),
('AtosA', '2022-04-06', 49, 1, '345GQTGSGS71717', '77712GFSSVGFA51511666', 'https://www.simplon.com', 'Cité Keur Gorgui'),
('Samba', '2022-03-06', 53, 0, '345GQTGSGS71717', '77712GFSSVGFA51511', 'hhhrfuedsfcuesq.com', 'Malika'),
('Samba', '2022-03-06', 54, 0, '345GQTGSGS71717', '77712GFSSVGFA51511', 'hhhrfuedsfcuesq.com', 'Malika'),
('Samba', '2022-03-06', 55, 0, '345GQTGSGS71717', '77712GFSSVGFA51511', 'hhhrfuedsfcuesq.com', 'Malika'),
('Samba 13', '2022-03-06', 56, 0, '345GQTGSGS71717', '77712GFSSVGFA51511', 'https://sow.com', 'Rufisque'),
('Samba 15', '2022-03-06', 57, 0, '345GQTGSGS71717', '77712GFSSVGFA51511', 'https://sow.com', 'Rufisque');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id_departement` int(11) NOT NULL,
  `libelle_departement` varchar(100) NOT NULL,
  `id_region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `domaine`
--

CREATE TABLE `domaine` (
  `id_domaine` int(11) NOT NULL,
  `libelle_domaine` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE `quartier` (
  `id_quartier` int(11) NOT NULL,
  `libelle_quartier` varchar(100) NOT NULL,
  `id_commune` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id_region` int(11) NOT NULL,
  `libelle_region` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `répondant`
--

CREATE TABLE `répondant` (
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `id_repondant` int(11) NOT NULL,
  `id_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'cheikh', '827ccb0eea8a706c4c34a16891f84e7b'),
(13, 'epsilon', '827ccb0eea8a706c4c34a16891f84e7b'),
(14, 'epsilon', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`id_commune`),
  ADD KEY `id_departement` (`id_departement`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id_departement`),
  ADD KEY `id_region` (`id_region`);

--
-- Index pour la table `domaine`
--
ALTER TABLE `domaine`
  ADD PRIMARY KEY (`id_domaine`);

--
-- Index pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD PRIMARY KEY (`id_quartier`),
  ADD KEY `id_commune` (`id_commune`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`),
  ADD KEY `id_entreprise` (`id`);

--
-- Index pour la table `répondant`
--
ALTER TABLE `répondant`
  ADD PRIMARY KEY (`id_repondant`),
  ADD KEY `id` (`id`),
  ADD KEY `id_contact` (`id_contact`);

--
-- Index pour la table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commune`
--
ALTER TABLE `commune`
  MODIFY `id_commune` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id_departement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `domaine`
--
ALTER TABLE `domaine`
  MODIFY `id_domaine` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `quartier`
--
ALTER TABLE `quartier`
  MODIFY `id_quartier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `répondant`
--
ALTER TABLE `répondant`
  MODIFY `id_repondant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commune`
--
ALTER TABLE `commune`
  ADD CONSTRAINT `commune_ibfk_1` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id_departement`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD CONSTRAINT `quartier_ibfk_1` FOREIGN KEY (`id_commune`) REFERENCES `commune` (`id_commune`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `region_ibfk_1` FOREIGN KEY (`id`) REFERENCES `contact` (`id`);

--
-- Contraintes pour la table `répondant`
--
ALTER TABLE `répondant`
  ADD CONSTRAINT `répondant_ibfk_1` FOREIGN KEY (`id`) REFERENCES `contact` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
