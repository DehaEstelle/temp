-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 08 Mars 2020 à 07:31
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admi_name` varchar(20) NOT NULL,
  `admi_pass` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `admi_name`, `admi_pass`) VALUES
(1, 'user', '124'),
(2, 'administrateur', 'admin'),
(3, 'gestionnaire', 'gestion');

-- --------------------------------------------------------

--
-- Structure de la table `fichiers`
--

CREATE TABLE IF NOT EXISTS `fichiers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `emplacement` varchar(60) NOT NULL,
  `employe` varchar(20) NOT NULL,
  `jour` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Contenu de la table `fichiers`
--

INSERT INTO `fichiers` (`id`, `nom`, `emplacement`, `employe`, `jour`) VALUES
(41, 'tasso.jpg', 'fichier/tasso.jpg', 'tasso', '2019-11-01'),
(42, 'tasso.jpg', 'fichier/tasso.jpg', 'admin', '2019-11-01'),
(43, 'Cameramon-oeuvre.png', 'fichier/Cameramon-oeuvre.png', 'toto', '2019-11-01'),
(44, 'Cameramon-oeuvre.png', 'fichier/Cameramon-oeuvre.png', 'admin', '2019-11-01'),
(45, 'tasso.jpg', 'fichier/tasso.jpg', 'admin', '2019-11-01'),
(46, 'SAMUEL.xlsx', 'fichier/SAMUEL.xlsx', 'user', '2019-11-03'),
(47, 'Recette.docx', 'fichier/Recette.docx', 'administrateur', '2019-11-04'),
(48, 'Devoir SQL.docx', 'fichier/Devoir SQL.docx', 'admin', '2019-11-07'),
(49, 'Cameramon-oeuvre.png', 'fichier/Cameramon-oeuvre.png', 'admin', '2019-11-29'),
(50, 'Capture dâ€™Ã©cran (63).png', 'fichier/Capture dâ€™Ã©cran (63).png', 'admin', '2020-02-06'),
(51, 'Cameramon-oeuvre.png', 'fichier/Cameramon-oeuvre.png', 'admin', '2020-02-06'),
(52, 'Cameramon-oeuvre.png', 'fichier/Cameramon-oeuvre.png', 'to', '2020-02-06'),
(53, 'PHP_session.pdf', 'fichier/PHP_session.pdf', 'admin', '2020-03-08');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `profession` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_pass`, `profession`) VALUES
(2, 'admin', 'admin', ''),
(5, 'azert', 'azert', 'Directeur'),
(6, 'ab', 'ab', ''),
(7, 'ab', 'ab', 'secer'),
(8, 'to', 'passi', 'ss'),
(9, 'TOTO LÃ©a', 'TASSO', 'PRO'),
(10, 'user', 'user', 'agent tontine');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
