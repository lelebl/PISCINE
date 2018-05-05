-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 05 Mai 2018 à 17:52
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
  `diplome` enum('Master-1','Master-2','Licence','Bac','Bac+1','Bac+2','Bac+3','Bac+4','Bac+5') NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `associations` set('BDE','BDS','Caves','Yacht','BDA','AEIP','FEDE','SDI','NOISE','JOBSERVICE','ENTREPRINE','MUSIQUE') NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `description` text NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id`, `ecole`, `diplome`, `domaine`, `associations`, `date_debut`, `date_fin`, `description`, `username`) VALUES
(2, 'Ieseg', 'Master-1', 'Commerce', 'AEIP,FEDE,MUSIQUE', '2018-05-10', '2018-05-15', 'Yolo', 'chachou'),
(3, 'DCU', 'Bac+3', 'Ingenerie', 'BDS,Caves', '2017-09-01', '2018-02-01', 'Super ecole en irlande', 'manouel'),
(4, 'DCU', 'Bac+3', 'Ingenerie', 'BDE,Caves,Yacht', '2018-05-18', '2018-05-24', 'Super cool', 'lele'),
(5, 'ECE', 'Master-2', 'Ingenerie', 'BDE', '2018-05-12', '2018-05-23', '', 'manouel');

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
  `photo` varchar(100) NOT NULL DEFAULT 'user.png',
  `image_fond` varchar(100) NOT NULL,
  `competences` set('Pack Office','C','C++','Java','HTML/CSS','Espagnol','Anglais','Allemand','Matlab','Gestion de projet','Analyse financière','Design Thinking','Prototypage','Big Data','BlockChain','Entreprenariat','SQL','Leadership','Linux','Web Design','WordPress','Applications mobiles') NOT NULL,
  `interets` set('Ingénérie','Animaux','Sport','Musique','Voyage','Cuisine','Jardinage','Médecine','Astro-physique','Mode','Voyage','Dessin','Peinture','Sculpture','Astrologie','Jeux vidéo','Cinéma','Réseaux sociaux','Architechture') NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `informations`
--

INSERT INTO `informations` (`nom`, `prenom`, `date_naissance`, `telephone`, `sexe`, `promo`, `pays`, `cp`, `adresse`, `profession`, `type`, `photo`, `image_fond`, `competences`, `interets`, `resume`, `email`, `password`, `username`, `id`, `reset_token`, `reset_at`, `remember_token`, `admin`, `ville`) VALUES
('Thiroloix', 'Emmanuelle', '1996-11-07', '0676916066', 'F', 'ING1', 'France', 92300, '12 rue Edouard Vaillant', 'Etudiant(e) Licence', 'auteur', 'emmanuelle.jpg', '', 'C,C++,HTML/CSS,SQL,Leadership,Linux', '', 'bonjour je suis emmanuelle j''aime smoothie plusque tout et ca me saoule ce projet', 'emmanuelle.thiroloix@gmail.com', '10012012', 'manouel', 7, NULL, NULL, 'IUONr0poT9vbpTkzeqMW9i5gbHd4ZYHZTfQ9v6TSKFIzKXXaZ0NjwvQAvISIZgnkVBAuuPXZKeDEDTGxAuEyChfkgiGtZFSlVNGxthtqgNzFF46h3cH69Jbf0yQov8RYQE1MGVbmV3AyDnbcLp1ev23mfkQo1WHa98FgYni6jjJWxfnp2fWIURtWMitkfoZ1cF1zsfRUsnV6zpviK9w86WrZGENmZ4rahAvKHN6MxY63x1CHBxB9al0DjV', NULL, 'Levallois'),
('Blanchard', 'Lea', '1995-05-29', '06 89 76 87 66', 'F', 'ING3', 'France', 75008, '18 place de la Madeleine', 'Etudiant(e) Licence', 'auteur', 'user.png', '', 'Pack Office,C,C++,Java', 'Ingénérie,Animaux,Sport', '', 'lea.blanchard@edu.ece.fr', 'lele', 'lele', 9, NULL, NULL, NULL, NULL, 'Paris'),
('Decary ', 'Charlotte', '1997-05-02', '07 88 98 77 66', 'F', 'ING5', 'France', 75116, '11 rue de sontay', 'Etudiant(e) Master', 'administrateur', 'charlotte_decary.jpeg', '', 'Analyse financière,Design Thinking,Prototypage,Big Data', 'Voyage,Mode,Dessin', '', 'charlotte.decary@edu.ece.fr', 'charlotte', 'chacha', 10, NULL, NULL, NULL, NULL, 'Paris');

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
  `état` enum('accepté','refusé','en_cour') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
