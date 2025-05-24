-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 22 mai 2025 à 16:41
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autotech`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin_administrateur` int(25) NOT NULL,
  `nom_administrateur` varchar(25) DEFAULT NULL,
  `prenom_administrateur` varchar(25) DEFAULT NULL,
  `email_administrateur` int(20) DEFAULT NULL,
  `mot_de_passe_administrateur` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client_client` int(40) NOT NULL,
  `nom_client` text DEFAULT NULL,
  `prenom_client` text DEFAULT NULL,
  `telephone_client` decimal(7,0) DEFAULT NULL,
  `adresse_client` varchar(25) DEFAULT NULL,
  `email_client` decimal(8,0) DEFAULT NULL,
  `mot_de_passe_client` decimal(6,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gerer`
--

CREATE TABLE `gerer` (
  `id_vehicule_vehicule` int(25) NOT NULL,
  `id_admin_administrateur` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `louer`
--

CREATE TABLE `louer` (
  `id_client_client` int(40) NOT NULL,
  `id_vehicule_vehicule` int(40) NOT NULL,
  `date_de_location_louer` date DEFAULT NULL,
  `date_de_debut_louer` date DEFAULT NULL,
  `date_de_fin_louer` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id_paiement_paiement` int(25) NOT NULL,
  `montant_paiement` int(30) DEFAULT NULL,
  `mode_paiement` varchar(30) DEFAULT NULL,
  `date_paiement_paiement` date DEFAULT NULL,
  `id_client_client` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_vehicule_vehicule` int(25) NOT NULL,
  `immatriculation_vehicule` int(15) DEFAULT NULL,
  `marque_vehicule` varchar(20) DEFAULT NULL,
  `modele_vehicule` int(12) DEFAULT NULL,
  `annee_vehicule` date DEFAULT NULL,
  `categorie_vehicule` varchar(15) DEFAULT NULL,
  `statut_vehicule` varchar(25) DEFAULT NULL,
  `tarif_journalier_vehicule` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin_administrateur`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client_client`);

--
-- Index pour la table `gerer`
--
ALTER TABLE `gerer`
  ADD PRIMARY KEY (`id_vehicule_vehicule`,`id_admin_administrateur`),
  ADD KEY `FK_gerer_id_admin_administrateur` (`id_admin_administrateur`);

--
-- Index pour la table `louer`
--
ALTER TABLE `louer`
  ADD PRIMARY KEY (`id_client_client`,`id_vehicule_vehicule`),
  ADD KEY `FK_louer_id_vehicule_vehicule` (`id_vehicule_vehicule`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id_paiement_paiement`),
  ADD KEY `FK_paiement_id_client_client` (`id_client_client`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id_vehicule_vehicule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_admin_administrateur` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client_client` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gerer`
--
ALTER TABLE `gerer`
  MODIFY `id_vehicule_vehicule` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `louer`
--
ALTER TABLE `louer`
  MODIFY `id_client_client` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id_paiement_paiement` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id_vehicule_vehicule` int(25) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `gerer`
--
ALTER TABLE `gerer`
  ADD CONSTRAINT `FK_gerer_id_admin_administrateur` FOREIGN KEY (`id_admin_administrateur`) REFERENCES `administrateur` (`id_admin_administrateur`),
  ADD CONSTRAINT `FK_gerer_id_vehicule_vehicule` FOREIGN KEY (`id_vehicule_vehicule`) REFERENCES `vehicule` (`id_vehicule_vehicule`);

--
-- Contraintes pour la table `louer`
--
ALTER TABLE `louer`
  ADD CONSTRAINT `FK_louer_id_client_client` FOREIGN KEY (`id_client_client`) REFERENCES `client` (`id_client_client`),
  ADD CONSTRAINT `FK_louer_id_vehicule_vehicule` FOREIGN KEY (`id_vehicule_vehicule`) REFERENCES `vehicule` (`id_vehicule_vehicule`);

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `FK_paiement_id_client_client` FOREIGN KEY (`id_client_client`) REFERENCES `client` (`id_client_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
