-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 15 sep. 2017 à 10:32
-- Version du serveur :  10.1.22-MariaDB
-- Version de PHP :  7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `alchimistes`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresses_collectes`
--

CREATE TABLE `adresses_collectes` (
  `id_collection_address` int(11) NOT NULL,
  `firm_type` enum('epicerie','restaurant','restaurantCollectif') DEFAULT NULL,
  `address_name` varchar(45) DEFAULT NULL,
  `adress_collection` varchar(45) DEFAULT NULL,
  `postal_code` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `further_information` text,
  `country` varchar(45) DEFAULT NULL,
  `collection_day` enum('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche') DEFAULT NULL,
  `client_idclient` int(11) NOT NULL,
  `location_processing_idlocation_processing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `adresses_collections_have_collector`
--

CREATE TABLE `adresses_collections_have_collector` (
  `adress_collection_idadress_collection` int(11) NOT NULL,
  `collector_idcollector` int(11) NOT NULL,
  `collection_datetime` datetime DEFAULT NULL,
  `bin_number` tinyint(3) DEFAULT NULL,
  `processing_datetime` datetime DEFAULT NULL,
  `weight` tinyint(3) DEFAULT NULL,
  `compost_quality` enum('bon','moyen','mauvais') DEFAULT NULL,
  `further_information` text,
  `transformation_place` varchar(60) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `start_date_contract` datetime NOT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `billing_address` varchar(45) DEFAULT NULL,
  `postal_code` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `company` varchar(45) DEFAULT NULL,
  `siret` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `collector`
--

CREATE TABLE `collector` (
  `idcollector` int(11) NOT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `status` enum('salarié','admin') DEFAULT 'salarié',
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `postal_code` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `collector_has_processing_location`
--

CREATE TABLE `collector_has_processing_location` (
  `collector_idcollector` int(11) NOT NULL,
  `processing_location_id_location_processing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `output_compost`
--

CREATE TABLE `output_compost` (
  `idoutput_compost` int(11) NOT NULL,
  `output_datetime` datetime DEFAULT NULL,
  `quantity_exit` int(11) DEFAULT NULL,
  `location_processing_idlocation_processing` int(11) NOT NULL,
  `collector_idcollector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `processing_location`
--

CREATE TABLE `processing_location` (
  `id_location_processing` int(11) NOT NULL,
  `processing_address` varchar(45) DEFAULT NULL,
  `postal_code` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `processing_location` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresses_collectes`
--
ALTER TABLE `adresses_collectes`
  ADD PRIMARY KEY (`id_collection_address`),
  ADD KEY `fk_adresses_collectes_client_idx` (`client_idclient`),
  ADD KEY `fk_adresses_collectes_lieu_traitement1_idx` (`location_processing_idlocation_processing`);

--
-- Index pour la table `adresses_collections_have_collector`
--
ALTER TABLE `adresses_collections_have_collector`
  ADD PRIMARY KEY (`adress_collection_idadress_collection`,`collector_idcollector`),
  ADD KEY `fk_adresses_collectes_has_collecteur_collecteur1_idx` (`collector_idcollector`),
  ADD KEY `fk_adresses_collectes_has_collecteur_adresses_collectes1_idx` (`adress_collection_idadress_collection`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `collector`
--
ALTER TABLE `collector`
  ADD PRIMARY KEY (`idcollector`);

--
-- Index pour la table `collector_has_processing_location`
--
ALTER TABLE `collector_has_processing_location`
  ADD PRIMARY KEY (`collector_idcollector`,`processing_location_id_location_processing`),
  ADD KEY `fk_collector_has_processing_location_processing_location1_idx` (`processing_location_id_location_processing`),
  ADD KEY `fk_collector_has_processing_location_collector1_idx` (`collector_idcollector`);

--
-- Index pour la table `output_compost`
--
ALTER TABLE `output_compost`
  ADD PRIMARY KEY (`idoutput_compost`),
  ADD KEY `fk_Sortie_composte_lieu_traitement1_idx` (`location_processing_idlocation_processing`),
  ADD KEY `fk_Sortie_composte_collecteur1_idx` (`collector_idcollector`);

--
-- Index pour la table `processing_location`
--
ALTER TABLE `processing_location`
  ADD PRIMARY KEY (`id_location_processing`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresses_collectes`
--
ALTER TABLE `adresses_collectes`
  MODIFY `id_collection_address` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `collector`
--
ALTER TABLE `collector`
  MODIFY `idcollector` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `output_compost`
--
ALTER TABLE `output_compost`
  MODIFY `idoutput_compost` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `processing_location`
--
ALTER TABLE `processing_location`
  MODIFY `id_location_processing` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adresses_collectes`
--
ALTER TABLE `adresses_collectes`
  ADD CONSTRAINT `fk_adresses_collectes_client` FOREIGN KEY (`client_idclient`) REFERENCES `client` (`id_client`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_adresses_collectes_lieu_traitement1` FOREIGN KEY (`location_processing_idlocation_processing`) REFERENCES `processing_location` (`id_location_processing`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `adresses_collections_have_collector`
--
ALTER TABLE `adresses_collections_have_collector`
  ADD CONSTRAINT `fk_adresses_collectes_has_collecteur_adresses_collectes1` FOREIGN KEY (`adress_collection_idadress_collection`) REFERENCES `adresses_collectes` (`id_collection_address`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_adresses_collectes_has_collecteur_collecteur1` FOREIGN KEY (`collector_idcollector`) REFERENCES `collector` (`idcollector`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `collector_has_processing_location`
--
ALTER TABLE `collector_has_processing_location`
  ADD CONSTRAINT `fk_collector_has_processing_location_collector1` FOREIGN KEY (`collector_idcollector`) REFERENCES `collector` (`idcollector`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_collector_has_processing_location_processing_location1` FOREIGN KEY (`processing_location_id_location_processing`) REFERENCES `processing_location` (`id_location_processing`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `output_compost`
--
ALTER TABLE `output_compost`
  ADD CONSTRAINT `fk_Sortie_composte_collecteur1` FOREIGN KEY (`collector_idcollector`) REFERENCES `collector` (`idcollector`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Sortie_composte_lieu_traitement1` FOREIGN KEY (`location_processing_idlocation_processing`) REFERENCES `processing_location` (`id_location_processing`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
