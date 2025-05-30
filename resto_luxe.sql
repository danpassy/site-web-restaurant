-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 29 mai 2023 à 00:39
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `resto_luxe`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Nom_Client` varchar(100) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Confirme_Password` varchar(60) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Reponse` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Nom_Client`, `Password`, `Confirme_Password`, `Question`, `Reponse`) VALUES
('Zachee', '14789azerty', '14789azerty', 'Quelle est ton sport préféré ? ', 'Football'),
('Theo', 'wxcfreza', 'wxcfreza', 'Quelle est ta couleur préféré ?', 'blanc'),
('Dan', 'jouebien', 'jouebien', 'Quelle est ton sport préféré ? ', 'Handball'),
('Jean', '12587410', '12587410', 'Quelle est ton sport préféré ? ', 'Cyclisme');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
