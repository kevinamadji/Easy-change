-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 06 Mai 2019 à 13:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dbeasychange`
--

-- --------------------------------------------------------

--
-- Structure de la table `organisme`
--

CREATE TABLE IF NOT EXISTS `organisme` (
  `idOrganisme` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `matricule` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `code_postale` varchar(45) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `mail` varchar(45) NOT NULL,
  PRIMARY KEY (`idOrganisme`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `organisme`
--

INSERT INTO `organisme` (`idOrganisme`, `nom`, `matricule`, `adresse`, `code_postale`, `ville`, `tel`, `mail`) VALUES
(3, 'BOUYGUE', '25316202', '140 Rue des champs elysees', '75012', 'Paris', '0523165242', 'bouygue@test.fr'),
(4, 'CAF', '53737673', 'rtfyguhijokpl', '568523', 'Bordeaux', '636363633', 'dfgetg@gjgjtuj.fr'),
(5, 'MISSION LOCALE', '53763737', 'ufukluomiù', '', '', '', ''),
(6, 'SERVICE IMPOT', '676788', 'gufk,tkntb', '53737', 'Lille', '537637', 'ghjhjk@trytu.com'),
(7, 'CPAM', '852585', 'errrrrrrtzrtttrjryr', '788678373', 'Marseille', '8677376737', 'gdgfhg,@gdfygh.com'),
(8, 'LA POSTE', '446454', 'ctvjnk', '777', 'New York', '564646', 'dsddfxfgchvgvv');

-- --------------------------------------------------------

--
-- Structure de la table `situation`
--

CREATE TABLE IF NOT EXISTS `situation` (
  `idSituation` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`idSituation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `situation`
--

INSERT INTO `situation` (`idSituation`, `libelle`) VALUES
(1, 'Célibataire'),
(2, 'Marié(e)'),
(3, 'Divorcé(e)');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE IF NOT EXISTS `statut` (
  `id_statut` int(11) NOT NULL AUTO_INCREMENT,
  `statut` varchar(15) NOT NULL,
  PRIMARY KEY (`id_statut`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `statut`
--

INSERT INTO `statut` (`id_statut`, `statut`) VALUES
(1, 'En Cours'),
(2, 'Traitement'),
(3, 'Réalisé');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `date_naissance` date NOT NULL,
  `tel` varchar(40) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `code_postale` varchar(40) NOT NULL,
  `ville` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `justificatif_domicile` varchar(40) NOT NULL,
  `photo` varchar(40) NOT NULL,
  `id_situation` int(11) NOT NULL,
  PRIMARY KEY (`idUser`,`id_situation`),
  KEY `idUser` (`idUser`),
  KEY `fk_users_situation1_idx` (`id_situation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idUser`, `nom`, `prenom`, `date_naissance`, `tel`, `adresse`, `code_postale`, `ville`, `mail`, `password`, `justificatif_domicile`, `photo`, `id_situation`) VALUES
(14, 'TOUMBOU-DANI', 'Andy', '1998-08-01', '0782213451', '11 Allée du BATAILLON HILDEVERT', '93160', 'NOISY-LE-GRAND', 'Andy91', '$2y$10$gvNE5OTFkHBbL5.zIaZncOq1P/dwPRBW.9pvuPv12pCKGox./LK2W', 'justif', 'IMG_6394.JPG', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user_organisme`
--

CREATE TABLE IF NOT EXISTS `user_organisme` (
  `users_id` int(11) NOT NULL DEFAULT '0',
  `organisme_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`users_id`,`organisme_id`),
  KEY `fk_users_has_organisme_organisme1_idx` (`organisme_id`),
  KEY `fk_users_has_organisme_users_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user_organisme`
--

INSERT INTO `user_organisme` (`users_id`, `organisme_id`) VALUES
(14, 3),
(14, 4),
(14, 5);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_situation1` FOREIGN KEY (`id_situation`) REFERENCES `situation` (`idSituation`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user_organisme`
--
ALTER TABLE `user_organisme`
  ADD CONSTRAINT `fk_users_has_organisme_organisme1` FOREIGN KEY (`organisme_id`) REFERENCES `organisme` (`idOrganisme`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_organisme_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
