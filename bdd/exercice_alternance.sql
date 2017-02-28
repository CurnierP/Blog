-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 05 Septembre 2016 à 00:44
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `exercice_alternance`
--

-- --------------------------------------------------------

--
-- Structure de la table `actu`
--

CREATE TABLE IF NOT EXISTS `actu` (
  `id_actu` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id_actu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `actu`
--

INSERT INTO `actu` (`id_actu`, `titre`, `description`, `image`, `date`) VALUES
(10, 'Match amical Italie France', 'Le Jeudi 1er septembre l''Italie et la France se sont affrontées au cours d''un match amical. 		\r\nQui c''est soldé par une victoire 3-1 de l''équipe de France grâce à des buts de Martial, Giroud et Kurzawa et Pellé pour l''Italie.', 'http://medias.lequipe.fr/match/football/2369-2362/500', '2016-09-05 00:34:59'),
(11, 'Fin du mercato', 'Le mercato est fini depuis le 31 août minuit. 		\r\nDans les dernières heures du mercato l''OGC Nice, a acheté le buteur italien Mario Balotelli et, a obtenu le prêt de l''ancien joueur de Montpellier Younès Belhanda. 		', 'http://files.ogcnice.com/images/pages/menu/logo-ogcnice.png', '2016-09-05 00:39:13'),
(12, 'Qualification pour la coupe du monde 2018', 'Les phases de qualifications pour la coupe du monde qui va se jouer en Russie au court de l''année 2018, ont commencé ce dimanche 4 septembre pour la zone Europe.		\r\n		', 'https://upload.wikimedia.org/wikipedia/fr/f/f7/FIFA_World_Cup_2018_Logo.png', '2016-09-05 00:42:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
