-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 15 avr. 2020 à 10:41
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `brassage_dieccte`
--

-- --------------------------------------------------------

--
-- Structure de la table `emplacement`
--

DROP TABLE IF EXISTS `emplacement`;
CREATE TABLE IF NOT EXISTS `emplacement` (
  `id_emplacement` varchar(20) NOT NULL,
  `etage_emplacement` varchar(20) NOT NULL,
  `type_emplacement` varchar(20) NOT NULL,
  PRIMARY KEY (`id_emplacement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emplacement`
--

INSERT INTO `emplacement` (`id_emplacement`, `etage_emplacement`, `type_emplacement`) VALUES
('Accueil', 'Accueil', 'Accueil'),
('B000', 'RDC', 'Bureau'),
('B001', 'RDC', 'Bureau'),
('B002', 'RDC', 'Bureau'),
('B003', 'RDC', 'Bureau'),
('B004', 'RDC', 'Bureau'),
('B005', 'RDC', 'Bureau'),
('B006', 'RDC', 'Bureau'),
('B007', 'RDC', 'Bureau'),
('B008', 'RDC', 'Bureau'),
('B009', 'RDC', 'Bureau'),
('B010', 'RDC', 'Bureau'),
('B011', 'RDC', 'Bureau'),
('B012', 'RDC', 'Bureau'),
('B013', 'RDC', 'Bureau'),
('B014', 'RDC', 'Bureau'),
('B015', 'RDC', 'Bureau'),
('B016', 'RDC', 'Bureau'),
('B017', 'RDC', 'Bureau'),
('B018', 'RDC', 'Bureau'),
('B019', 'RDC', 'Bureau'),
('B020', 'RDC', 'Bureau'),
('B021', 'RDC', 'Bureau'),
('B0XX', 'RDC', 'Bureau'),
('B100', 'Etage01', 'Bureau'),
('B101', 'Etage01', 'Bureau'),
('B102', 'Etage01', 'Bureau'),
('B103', 'Etage01', 'Bureau'),
('B104', 'Etage01', 'Bureau'),
('B105', 'Etage01', 'Bureau'),
('B106', 'Etage01', 'Bureau'),
('B107', 'Etage01', 'Bureau'),
('B108', 'Etage01', 'Bureau'),
('B109', 'Etage01', 'Bureau'),
('B110', 'Etage01', 'Bureau'),
('B111', 'Etage01', 'Bureau'),
('B112', 'Etage01', 'Bureau'),
('B113', 'Etage01', 'Bureau'),
('B114', 'Etage01', 'Bureau'),
('B115', 'Etage01', 'Bureau'),
('B116', 'Etage01', 'Bureau'),
('B117', 'Etage01', 'Bureau'),
('B118', 'Etage01', 'Bureau'),
('B119', 'Etage01', 'Bureau'),
('B120', 'Etage01', 'Bureau'),
('B121', 'Etage01', 'Bureau'),
('B200', 'Etage02', 'Bureau'),
('B201', 'Etage02', 'Bureau'),
('B202', 'Etage02', 'Bureau'),
('B203', 'Etage02', 'Bureau'),
('B204', 'Etage02', 'Bureau'),
('B205', 'Etage02', 'Bureau'),
('B206', 'Etage02', 'Bureau'),
('B207', 'Etage02', 'Bureau'),
('B208', 'Etage02', 'Bureau'),
('B209', 'Etage02', 'Bureau'),
('B210', 'Etage02', 'Bureau'),
('B211', 'Etage02', 'Bureau'),
('B212', 'Etage02', 'Bureau'),
('B213', 'Etage02', 'Bureau'),
('B214', 'Etage02', 'Bureau'),
('B215', 'Etage02', 'Bureau'),
('B216', 'Etage02', 'Bureau'),
('B217', 'Etage02', 'Bureau'),
('B218', 'Etage02', 'Bureau'),
('B219', 'Etage02', 'Bureau'),
('B220', 'Etage02', 'Bureau'),
('B221', 'Etage02', 'Bureau'),
('B2XX', 'Etage02', 'Bureau'),
('Impression-1er', 'Etage01', 'Couloir'),
('Impression-2eme', 'Etage02', 'Couloir'),
('Impression-Rdc', 'RDC', 'Couloir'),
('Salle-BELOUVE', 'Etage03', 'Salle de reunion'),
('Salle-LANGEVIN', 'RDC', 'Salle de reunion'),
('Salle-MAIDO', 'Etage03', 'Salle de reunion'),
('Salle-Serveur', 'RDC', 'Salle technique');

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

DROP TABLE IF EXISTS `equipement`;
CREATE TABLE IF NOT EXISTS `equipement` (
  `id_equipement` int(11) NOT NULL AUTO_INCREMENT,
  `nom_equipement` varchar(20) NOT NULL,
  `type_equipement` varchar(20) NOT NULL,
  PRIMARY KEY (`id_equipement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `imprimante`
--

DROP TABLE IF EXISTS `imprimante`;
CREATE TABLE IF NOT EXISTS `imprimante` (
  `id_imprimante` int(11) NOT NULL AUTO_INCREMENT,
  `nom_imprimante` varchar(20) NOT NULL,
  PRIMARY KEY (`id_imprimante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `prise`
--

DROP TABLE IF EXISTS `prise`;
CREATE TABLE IF NOT EXISTS `prise` (
  `id_prise` varchar(20) NOT NULL,
  `etat_fonct` varchar(20) NOT NULL,
  `etat_brassage` varchar(20) NOT NULL,
  `lieu_prise1` varchar(20) NOT NULL,
  `lieu_prise2` varchar(20) NOT NULL,
  `lieu_prise3` varchar(20) NOT NULL,
  `lieu_prise4` varchar(20) NOT NULL,
  `lieu_prise5` varchar(20) NOT NULL,
  `lieu_prise6` varchar(20) NOT NULL,
  `lieu_prise7` varchar(20) NOT NULL,
  `cable_connect` varchar(10) NOT NULL,
  `observation_prise` text NOT NULL,
  PRIMARY KEY (`id_prise`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prise`
--

INSERT INTO `prise` (`id_prise`, `etat_fonct`, `etat_brassage`, `lieu_prise1`, `lieu_prise2`, `lieu_prise3`, `lieu_prise4`, `lieu_prise5`, `lieu_prise6`, `lieu_prise7`, `cable_connect`, `observation_prise`) VALUES
('', '', '', '', 'Salle-Serveur', '', '', '', '', '', '', 'Prises a informer'),
('0.1', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B000', '', '', 'RJ45', ''),
('0.2', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B000', '', '', 'RJ11', ''),
('101.1', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B004', '', '', 'RJ45', ''),
('101.2', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B004', '', '', 'RJ11', ''),
('102.1', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B005', '', '', 'RJ45', ''),
('102.2', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B005', '', '', 'RJ11', ''),
('103.1', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B006', '', '', 'RJ45', ''),
('103.2', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B006', '', '', 'RJ11', ''),
('104.1', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B007', '', '', 'RJ45', ''),
('104.2', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B007', '', '', 'RJ11', ''),
('104.4', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B007', '', '', 'RJ11', ''),
('105.1', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B009', '', '', 'RJ45', ''),
('107.1', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B011', '', '', 'RJ45', ''),
('107.2', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B011', '', '', 'RJ11', ''),
('108.1', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B013', '', '', 'RJ45', ''),
('108.2', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B013', '', '', 'RJ11', ''),
('110.1', 'Fonctionnelle', 'Brassee', '', '', '', 'Impression-Rdc', '', '', '', 'RJ45', ''),
('110.2', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B016', '', '', 'RJ11', ''),
('111.2', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B017', '', '', 'RJ11', ''),
('111.3', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B017', '', '', 'RJ45', ''),
('111.4', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B017', '', '', 'RJ11', ''),
('112.1', 'Fonctionnelle', 'Brassee', 'Salle-LANGEVIN', '', '', '', '', '', '', 'RJ45', 'Verifier brassage'),
('112.2', 'Fonctionnelle', 'Brassee', 'Salle-LANGEVIN', '', '', '', '', '', '', 'RJ45', 'Verifier brassage'),
('113.1', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B019', '', '', 'RJ45', ''),
('113.2', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B019', '', '', 'RJ11', ''),
('113.3', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B019', '', '', 'RJ11', ''),
('113.4', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B019', '', '', 'RJ45', ''),
('114.01', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', '', 'RJ11', 'Bureau CORNUAU numÃ©ro de bureau a completer'),
('114.02', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', '', 'RJ45', 'Bureau CORNUAU numÃ©ro de bureau a completer'),
('114.1', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B0XX', '', '', 'RJ45', 'Bureau de MARRE Helene numero de bureau Ã  vÃ©rifier'),
('114.3', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B021', '', '', 'RJ11', ''),
('114/3', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B001', '', '', 'RJ45', ''),
('114/4', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B001', '', '', 'RJ11', ''),
('114/5', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B002', '', '', 'RJ45', ''),
('114/6', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B002', '', '', 'RJ11', ''),
('115.1', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B0XX', '', '', 'RJ45', 'Bureau LATCHOUMANINCHETTY numero de bureau a verifier'),
('115.2', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B0XX', '', '', 'RJ11', 'Bureau LATCHOUMANINCHETTY numero de bureau a verifier'),
('201.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B102', '', 'RJ45', 'A verifier pour debrassage'),
('201.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B102', '', 'RJ11', 'A verifier pour debrassage'),
('201.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B102', '', 'RJ45', ''),
('201.4', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B102', '', 'RJ11', ''),
('202.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B103', '', 'RJ45', ''),
('202.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B103', '', 'RJ11', ''),
('202.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B103', '', 'RJ45', 'A verifier pour debrassage'),
('202.4', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B103', '', 'RJ11', 'A verifier pour debrassage'),
('203.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B104', '', 'RJ45', ''),
('203.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B104', '', 'RJ11', ''),
('203.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B104', '', 'RJ45', ''),
('203.4', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B104', '', 'RJ11', ''),
('204.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B106', '', 'RJ45', ''),
('204.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B106', '', 'RJ11', ''),
('205.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B107', '', 'RJ45', ''),
('205.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B107', '', 'RJ11', ''),
('205.4', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B107', '', 'RJ11', ''),
('206.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B108', '', 'RJ45', ''),
('206.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B108', '', 'RJ11', ''),
('207.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B109', '', 'RJ45', ''),
('207.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B109', '', 'RJ11', ''),
('207.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B109', '', 'RJ11', ''),
('208.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B110', '', 'RJ45', ''),
('208.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B110', '', 'RJ11', ''),
('209.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B111', '', 'RJ45', ''),
('209.1B', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B209', 'RJ11', 'Doublon avec B111 a verifier avec un flux'),
('209.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B111', '', 'RJ11', ''),
('209.2B', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B209', 'RJ11', 'Doublon avec B111 a verifier avec un flux'),
('210.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B112', '', 'RJ45', ''),
('210.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B112', '', 'RJ11', ''),
('210.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B112', '', 'RJ45', ''),
('210.4', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B112', '', 'RJ11', ''),
('211.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B113', '', 'RJ45', ''),
('211.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B113', '', 'RJ11', ''),
('212.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B116', '', 'RJ45', ''),
('212.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B116', '', 'RJ11', ''),
('213.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B117', '', 'RJ45', 'A verifier pour debrassage'),
('213.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B117', '', 'RJ11', 'A verifier pour debrassage'),
('214.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B214', 'RJ45', ''),
('214.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B214', 'RJ11', ''),
('214.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B214', 'RJ45', ''),
('214.4', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B214', 'RJ11', ''),
('215.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B115', '', 'RJ45', ''),
('215.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B115', '', 'RJ11', ''),
('215.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B115', '', 'RJ45', ''),
('215.4', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B115', '', 'RJ11', ''),
('216.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B118', '', 'RJ45', ''),
('216.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B118', '', 'RJ11', ''),
('217.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B119', '', 'RJ45', ''),
('217.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B119', '', 'RJ11', ''),
('218.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B218', 'RJ45', 'L\'inventaire de B218 est a refaire pour debrasser les prises inutile'),
('218.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B218', 'RJ11', 'L\'inventaire de B218 est a refaire pour debrasser les prises inutile'),
('218.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B218', 'RJ45', 'L\'inventaire de B218 est a refaire pour debrasser les prises inutile'),
('218.4', 'NonFonctionnelle', 'NonBrassee', '', '', '', '', '', '', 'B218', 'RJ11', 'L\'inventaire de B218 est a refaire pour debrasser les prises inutile'),
('218.5', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B211', 'RJ45', ''),
('218.6', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B211', 'RJ11', ''),
('300.0', 'Fonctionnelle', 'Brassee', '', '', '', 'Impression-2eme', '', '', '', 'RJ45', ''),
('301.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B201', 'RJ45', ''),
('301.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B201', 'RJ11', ''),
('302.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B202', 'RJ45', 'Ancien bureau SG voir si une debrassage est possible'),
('303.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B2XX', 'RJ45', 'Bureau voisin de l\'ancien bureau du SG, nom a voir et prise a verifier'),
('303.2', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B0XX', '', '', 'RJ11', 'Bureau voisin de l\'ancien bureau du SG, nom a voir et prise a verifier'),
('304.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B204', 'RJ11', ''),
('304.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B204', 'RJ11', ''),
('304.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B204', 'RJ11', ''),
('305.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B207', 'RJ45', ''),
('305.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B207', 'RJ11', ''),
('305.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B206', 'RJ45', ''),
('305.4', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B206', 'RJ11', ''),
('307.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B208', 'RJ45', ''),
('307.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B208', 'RJ11', ''),
('308.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B209', 'RJ45', ''),
('308.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B209', 'RJ45', ''),
('309.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B210', 'RJ45', ''),
('309.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B210', 'RJ11', ''),
('309.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B210', 'RJ11', ''),
('310.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B211', 'RJ45', ''),
('310.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B211', 'RJ11', ''),
('311.1', '', '', '', '', '', '', '', '', 'B212', 'RJ45', 'A verifier '),
('311.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B212', 'RJ11', ''),
('311.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B212', 'RJ45', ''),
('311.4', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B212', 'RJ11', ''),
('312.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B213', 'RJ45', ''),
('312.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B213', 'RJ11', ''),
('312.4', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B213', 'RJ11', ''),
('313.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B213', 'RJ45', ''),
('313.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B213', 'RJ45', ''),
('313.3', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B215', 'RJ45', ''),
('313.4', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B215', 'RJ11', ''),
('314.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B216', 'RJ45', ''),
('314.2', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B216', 'RJ11', ''),
('315.1', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B217', 'RJ45', ''),
('6451', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B220', 'RJ11', ''),
('ACC1', 'Fonctionnelle', 'Brassee', '', '', 'Accueil', '', '', '', '', 'RJ45', ''),
('ACC2', 'Fonctionnelle', 'Brassee', '', '', 'Accueil', '', '', '', '', 'RJ11', ''),
('ACC3', 'Fonctionnelle', 'Brassee', '', '', 'Accueil', '', '', '', '', 'RJ45', ''),
('ACC4', 'Fonctionnelle', 'Brassee', '', '', 'Accueil', '', '', '', '', 'RJ11', ''),
('BELOUVE', '', '', 'Salle-BELOUVE', '', '', '', '', '', '', '', 'Prises Ã  informer'),
('INFO-ACCUEIL-COTO', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B003', '', '', 'RJ45', ''),
('MAIDO', '', '', 'Salle-MAIDO', '', '', '', '', '', '', '', 'Prises Ã  informer'),
('PriseSansNom114', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B114', '', 'RJ45', 'Prise sans nom a identifier'),
('PriseSansNom114bis', 'Fonctionnelle', 'Brassee', '', '', '', '', '', 'B114', '', 'RJ11', 'Prise sans nom a identifier'),
('PriseSansNom201', 'Fonctionnelle', 'Brassee', '', '', '', '', '', '', 'B201', 'RJ11', 'Prise telephone directeur sans nom a verifier'),
('TEL-ACCUEIL-COTO', 'Fonctionnelle', 'Brassee', '', '', '', '', 'B003', '', '', 'RJ11', '');

-- --------------------------------------------------------

--
-- Structure de la table `serveur`
--

DROP TABLE IF EXISTS `serveur`;
CREATE TABLE IF NOT EXISTS `serveur` (
  `id_serveur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_serveur` varchar(20) NOT NULL,
  PRIMARY KEY (`id_serveur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

DROP TABLE IF EXISTS `technicien`;
CREATE TABLE IF NOT EXISTS `technicien` (
  `id_tech` int(10) NOT NULL AUTO_INCREMENT,
  `nom_tech` varchar(10) NOT NULL,
  `password_tech` text NOT NULL,
  PRIMARY KEY (`id_tech`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `technicien`
--

INSERT INTO `technicien` (`id_tech`, `nom_tech`, `password_tech`) VALUES
(1, 'Tech-Esic', 'Brassage974!#BAIE'),
(3, '', ''),
(4, 'ESIC974', 'dsgfrgtrhb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
