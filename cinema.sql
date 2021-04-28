-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 28 avr. 2021 à 11:30
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `masalle`
--

DROP TABLE IF EXISTS `masalle`;
CREATE TABLE IF NOT EXISTS `masalle` (
  `idmasalle` int(11) NOT NULL AUTO_INCREMENT,
  `col_ligne` varchar(100) DEFAULT 'col_ligne',
  `col1` varchar(100) DEFAULT 'D',
  `col2` varchar(100) DEFAULT 'D',
  `col3` varchar(100) DEFAULT 'D',
  `col4` varchar(100) DEFAULT 'D',
  `col5` varchar(100) DEFAULT 'D',
  `col6` varchar(100) DEFAULT 'D',
  `col7` varchar(100) DEFAULT 'D',
  `col8` varchar(100) DEFAULT 'D',
  `col9` varchar(100) DEFAULT 'D',
  PRIMARY KEY (`idmasalle`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `masalle`
--

INSERT INTO `masalle` (`idmasalle`, `col_ligne`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `col9`) VALUES
(1, 'Ligne1', 'D', 'D', 'D', 'D', 'D', 'R', 'R', 'R', 'R'),
(2, 'Ligne2', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D'),
(3, 'Ligne3', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D'),
(4, 'Ligne4', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D'),
(5, 'Ligne5', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D'),
(6, 'Ligne6', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D'),
(7, 'Ligne7', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D'),
(8, 'Ligne8', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D', 'D');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
