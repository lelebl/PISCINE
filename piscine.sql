-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 02 Mai 2018 à 23:20
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `piscine`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` datetime(6) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `id_post` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

CREATE TABLE IF NOT EXISTS `emploi` (
  `intitule` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `avantages` varchar(255) NOT NULL,
  `salaire` varchar(255) NOT NULL,
  `secteur` varchar(255) NOT NULL,
  `langues` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `diplome` varchar(255) NOT NULL,
  `qualites` varchar(255) NOT NULL,
  `exigences` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `poste` varchar(30) NOT NULL,
  `entreprise` varchar(30) NOT NULL,
  `lieu` varchar(30) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `description` varchar(50) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ecole` varchar(20) NOT NULL,
  `diplome` varchar(20) NOT NULL,
  `domaine` varchar(20) NOT NULL,
  `associations` varchar(100) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `description` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE IF NOT EXISTS `informations` (
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `telephone` text NOT NULL,
  `sexe` enum('M','F') NOT NULL,
  `promo` enum('ING1','ING2','ING3','ING4','ING5','ING6','Autre') NOT NULL,
  `pays` enum('France','Angleterre','Irlande','Espagne') NOT NULL,
  `cp` int(5) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `profession` enum('Etudiant(e) Licence','Etudiant(e) Master','Etudiant(e) Apprenti','Etudiant(e) en cherche d''un Stage','Enseignant','Employé de l''école') NOT NULL,
  `type` enum('auteur','administrateur') NOT NULL,
  `photo` varchar(100) NOT NULL,
  `image_fond` varchar(100) NOT NULL,
  `competences` set('Pack Office','C','C++','Java','HTML/CSS','Espagnol','Anglais','Allemand','Matlab','Gestion de projet','Analyse financière','Design Thinking','Prototypage','Big Data','BlockChain','Entreprenariat','SQL','Leadership','Linux','Web Design','WordPress','Applications mobiles') NOT NULL,
  `interets` set('Sport','Musique','Voyage','Cuisine') NOT NULL,
  `resume` longtext NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `reset_token` varchar(60) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `ville` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `informations`
--

INSERT INTO `informations` (`nom`, `prenom`, `date_naissance`, `telephone`, `sexe`, `promo`, `pays`, `cp`, `adresse`, `profession`, `type`, `photo`, `image_fond`, `competences`, `interets`, `resume`, `email`, `password`, `username`, `id`, `reset_token`, `reset_at`, `remember_token`, `admin`, `ville`) VALUES
('Thiroloix', 'Emmanuelle', NULL, '', 'F', 'ING1', 'France', 92300, '12 rue Edouard Vaillant', 'Etudiant(e) Licence', 'auteur', '', '', '', '', '', 'emmanuelle.thiroloix@gmail.com', 'Almarem01', 'manouel', 7, NULL, NULL, NULL, NULL, 'Levallois');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_post` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE IF NOT EXISTS `messagerie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mp_expediteur` int(11) NOT NULL,
  `mp_receveur` int(11) NOT NULL,
  `mp_titre` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mp_text` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mp_time` int(11) NOT NULL,
  `mp_lu` enum('0','1') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `texte` varchar(255) NOT NULL,
  `date` datetime(6) NOT NULL,
  `type` enum('Ajout','Emploi') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `partages`
--

CREATE TABLE IF NOT EXISTS `partages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `membre_id` int(10) NOT NULL,
  `id_post` int(10) NOT NULL,
  `heure` datetime(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `membre_id` (`membre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

CREATE TABLE IF NOT EXISTS `possede` (
  `membre_id` int(10) NOT NULL,
  `id_experience` int(10) NOT NULL,
  `id_formation` int(10) NOT NULL,
  `id_partage` int(10) NOT NULL,
  `id_post` int(10) NOT NULL,
  `id_emploi` int(11) NOT NULL,
  `id_commentaire` int(10) NOT NULL,
  `id_notification` int(10) NOT NULL,
  PRIMARY KEY (`membre_id`,`id_experience`,`id_formation`),
  KEY `membre_id` (`membre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `membre_id` int(10) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `heure` datetime(6) NOT NULL,
  `sentiment` enum('content(e)','énervé(e)','fier(e)','fatigué(e)','calme','ravi(e)','en pleine forme','festif(ve)','motivé(e)','nostalgique','malade','décu(e)','serein(e)','desespéré(e)','furieux(se)','fort(e)','prêt(e)','reconnaissant(e)','stressé(e)','') NOT NULL,
  `fichier` varchar(255) NOT NULL COMMENT 'liens des images ou videos que l''utilisateur souhaite partager ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `relations`
--

CREATE TABLE IF NOT EXISTS `relations` (
  `id` int(10) NOT NULL,
  `id_recoit` int(10) NOT NULL,
  `id_envoie` int(10) NOT NULL,
  `état` enum('accepté','refusé') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
