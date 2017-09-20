-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 18 Septembre 2017 à 18:30
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `adress_collection` varchar(45) DEFAULT NULL,
  `postal_code` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `further_information` text,
  `country` varchar(45) DEFAULT NULL,
  `collection_day` enum('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche') DEFAULT NULL,
  `client_idclient` int(11) NOT NULL,
  `location_processing_idlocation_processing` int(11) NOT NULL,
  `firm_type` enum('epicerie','restaurant','restaurantCollectif') DEFAULT NULL,
  `address_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `adresses_collectes`
--

INSERT INTO `adresses_collectes` (`id_collection_address`, `adress_collection`, `postal_code`, `city`, `further_information`, `country`, `collection_day`, `client_idclient`, `location_processing_idlocation_processing`, `firm_type`, `address_name`) VALUES
(1, '1 rue de PARIS', '75000', 'Paris', 'Digicode: A1234', 'France', 'vendredi', 1, 1, 'epicerie', NULL),
(2, '1rueBlabla', '12345', 'Paris', 'Digicode: A1234', 'France', 'mardi', 8, 2, 'epicerie', NULL),
(3, '9 rue Machin', '12123', 'Paris', 'Blablabla', 'France', 'mercredi', 4, 3, 'restaurantCollectif', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `adresses_collections_have_collector`
--

CREATE TABLE `adresses_collections_have_collector` (
  `id_adresses_collections_have_collector` int(11) NOT NULL,
  `adress_collection_idadress_collection` int(11) NOT NULL,
  `collector_idcollector` int(11) NOT NULL,
  `collection_datetime` datetime DEFAULT NULL,
  `bin_number` int(11) DEFAULT NULL,
  `processing_datetime` datetime DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `compost_quality` enum('bon','moyen','mauvais') DEFAULT NULL,
  `further_information` text,
  `processing_location` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `adresses_collections_have_collector`
--

INSERT INTO `adresses_collections_have_collector` (`id_adresses_collections_have_collector`, `adress_collection_idadress_collection`, `collector_idcollector`, `collection_datetime`, `bin_number`, `processing_datetime`, `weight`, `compost_quality`, `further_information`, `processing_location`) VALUES
(1, 1, 1, '0000-00-00 00:00:00', 127, '0000-00-00 00:00:00', 0, 'bon', 'éncoz', '1'),
(2, 1, 1, '0000-00-00 00:00:00', 127, '0000-00-00 00:00:00', 0, 'bon', 'zonc', '1'),
(3, 1, 6, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 'bon', 'commentaire', '1'),
(4, 2, 4, '0000-00-00 00:00:00', 127, '0000-00-00 00:00:00', 23, 'bon', 'commentaire', '1'),
(5, 2, 4, '0000-00-00 00:00:00', 1345678, '0000-00-00 00:00:00', 23, 'bon', 'commentaire', '1');

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
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `start_date_contract`, `lastname`, `firstname`, `phone_number`, `email`, `billing_address`, `postal_code`, `city`, `country`, `is_active`, `company`, `siret`, `password`) VALUES
(1, '0000-00-00 00:00:00', 'Dupont', 'Jerome', 698985433, 'jerome@dupont.com', '1 rue de PARIS', '75000', 'Paris', 'France', 1, 'Webforce', '1234567765432', 'aozdoac'),
(2, '0000-00-00 00:00:00', 'zeogno', 'gzpenrgpo', 698985433, 'textco@test.com', '1 rue de PARIS', '75000', 'Paris', 'France', 1, 'elgnn', '12345', '$2y$10$1huIuQt97X.UzZ4immDaZebrYD7ABqC7wunqAV'),
(3, '0000-00-00 00:00:00', 'textco', 'textco', 698985433, 'testcodeux@test.com', '1 rue de PARIS', '75000', 'Paris', 'France', 1, 'Webforce', '1234567', '$2y$10$kJVDhmmxn6rHFqu.Is76bOSJ93WeoE8X2EMMT5'),
(4, '0000-00-00 00:00:00', 'textco', 'textco', 698985433, 't@t.com', '1 rue de PARIS', '75000', 'Paris', 'France', 1, 'Webforce', '12345678', '$2y$10$hktC6uPnhKWDra5fd3SC4Ob8Qur2.ie9qtO5hL'),
(6, '0000-00-00 00:00:00', 'zeogno', 'gzpenrgpo', 698985433, 'tg@tg.com', '1 rue de PARIS', '75000', 'Paris', 'France', 1, 'elgnn', '12345678', '1234'),
(8, '0000-00-00 00:00:00', 'fiche', 'Client', 423435465, 'client@client.com', 'blabla', '34567', 'blablou', 'France', 1, 'Mabite', '', 'azerty'),
(9, '0000-00-00 00:00:00', 'Dupont', 'Jerome', 698985433, 'jerome@dupont.com', '1 rue de PARIS', '75000', 'Paris', 'France', 1, 'Webforce', '12345678', 'azerty1234'),
(10, '0000-00-00 00:00:00', 'Dupont', 'Jerome', 698985433, 'test@test2.com', '1 rue de PARIS', '75000', 'Paris', 'France', 1, 'Webforce', '1234567890°', '$2y$10$mgQOP0oORNdqQeXvMWGwf.pbDN.eXRiPUIs70A4doVxRRYIqVtiaC'),
(11, '0000-00-00 00:00:00', 'Dupont', 'Jerome', 698985433, 'azert@azra.com', '1 rue de PARIS', '75000', 'Paris', 'France', 1, 'Webforce', '12356789', '$2y$10$Oizt0LKMV4buckwVUDVrLOY9mM47OVHaxsggtygFWuazBEa7NWuhS'),
(12, '0000-00-00 00:00:00', 'client', 'Client', 698985433, 'client@client2.com', '1 rue de PARIS', '75000', 'Paris', 'France', 1, 'Webforce', '1234567898765432', '$2y$10$A5e1ZGUPEbjhwJJU1L42O.8Iyo6eDkEiF25n9l2fO0KhFD4I5lHmK');

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

--
-- Contenu de la table `collector`
--

INSERT INTO `collector` (`idcollector`, `lastname`, `firstname`, `phone_number`, `email`, `status`, `address`, `city`, `postal_code`, `password`) VALUES
(1, 'zeogno', 'gzpenrgpo', '698985433', 'mozen@zlgn.com', 'admin', '1 rue de PARIS', 'Paris', '75000', 'dfghjk'),
(3, 'zeogno', 'gzpenrgpo', '698985433', 'testdeux@test.com', 'admin', '1 rue de PARIS', 'Paris', '75000', 'azerty'),
(4, 'Dupont', 'Jerome', '698985433', 'test@test.com', 'salarié', '1 rue de PARIS', 'Paris', '75000', 'AZERTY'),
(6, 'Fiche', 'CollecteurSalarié', '12345', 'collecteur@salarie.com', 'salarié', 'blabla', 'blablou', '45321', 'azerty'),
(7, 'TestCollecteur', 'VerifForm', '124567812', 'testcc@test.com', 'salarié', 'rue test', 'test', '45234', '$2y$10$ziVaTI4IPCB/ZdC0MyrntOD3Y7ze5ST53Mw5Kw'),
(9, 'zeogno', 'gzpenrgpo', '698985433', 'azer@azer.com', 'salarié', '1 rue de PARIS', 'Paris', '75000', '$2y$10$yPHEXyqr2beu6TtzrNIMAOZXBhkkGmL.kZynPs'),
(10, 'Collecteur', 'Test', '1234567898', 'collecteur@collecteur.com', 'salarié', 'rue Collecteur', 'ville collecteur', '12345', '$2y$10$P2fGTyj9odxtCd8kffsb0uyUtN7nvRkMGXGi.1'),
(11, 'Collecteur', 'Admin', '012345678', 'collecteur@admin.com', 'admin', 'collecteuradmin', 'collecteuradmin', '12345', '$2y$10$52aMWu.mXzQxhuYTKvdOKerZaKa3fWx29rXEZJ');

-- --------------------------------------------------------

--
-- Structure de la table `collector_has_processing_location`
--

CREATE TABLE `collector_has_processing_location` (
  `id_collector_has_processing_location` int(11) NOT NULL,
  `collector_idcollector` int(11) NOT NULL,
  `processing_location_id_location_processing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `collector_has_processing_location`
--

INSERT INTO `collector_has_processing_location` (`id_collector_has_processing_location`, `collector_idcollector`, `processing_location_id_location_processing`) VALUES
(1, 1, 1),
(2, 6, 2),
(3, 7, 3),
(4, 7, 2);

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

--
-- Contenu de la table `output_compost`
--

INSERT INTO `output_compost` (`idoutput_compost`, `output_datetime`, `quantity_exit`, `location_processing_idlocation_processing`, `collector_idcollector`) VALUES
(1, '0000-00-00 00:00:00', 1345, 1, 1),
(2, '0000-00-00 00:00:00', 345, 1, 6),
(3, '0000-00-00 00:00:00', 12, 1, 1);

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
-- Contenu de la table `processing_location`
--

INSERT INTO `processing_location` (`id_location_processing`, `processing_address`, `postal_code`, `city`, `country`, `processing_location`) VALUES
(1, '82 avenue denfert rochereaux', '75014', 'Paris', 'France', 'Les grands voisins'),
(2, 'LieuTraitement', '12345', 'Paris', 'France', 'AjoutTraitement'),
(3, '1 rue loin', '12123', 'Jesaispas', 'Peutetre', 'LoinLoinLoin');

--
-- Index pour les tables exportées
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
  ADD PRIMARY KEY (`id_adresses_collections_have_collector`),
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
  ADD PRIMARY KEY (`id_collector_has_processing_location`),
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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adresses_collectes`
--
ALTER TABLE `adresses_collectes`
  MODIFY `id_collection_address` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `adresses_collections_have_collector`
--
ALTER TABLE `adresses_collections_have_collector`
  MODIFY `id_adresses_collections_have_collector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `collector`
--
ALTER TABLE `collector`
  MODIFY `idcollector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `collector_has_processing_location`
--
ALTER TABLE `collector_has_processing_location`
  MODIFY `id_collector_has_processing_location` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `output_compost`
--
ALTER TABLE `output_compost`
  MODIFY `idoutput_compost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `processing_location`
--
ALTER TABLE `processing_location`
  MODIFY `id_location_processing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
