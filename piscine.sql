-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 05 mai 2018 à 17:04
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `piscine`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(10) NOT NULL,
  `date` datetime(6) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `id_post` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

CREATE TABLE `emploi` (
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
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emploi`
--

INSERT INTO `emploi` (`intitule`, `type`, `avantages`, `salaire`, `secteur`, `langues`, `lieu`, `diplome`, `qualites`, `exigences`, `id`) VALUES
('Vendeur', 'CDD', 'Tickets restaurant', '10euros de l\'heure', 'Vente', 'Francais, anglais', 'Paris', 'Pas de diplome requis', 'Sociable, aimable', 'Non', 1),
('Responsable des ventes', 'CDD', 'Tickets restaurant et remboursement pass navigo', '10euros de l\'heure', 'Vente', 'Francais, anglais', 'Paris', 'Pas de diplome requis', 'Sociable, aimable', 'Non', 2),
('Freelance content researcher', 'Stage', 'Club de sport', '80 a 100 euros par mois', 'Formation', 'Anglais, Espagnol, Francais', 'Paris', 'Grandes Ecoles', 'Passioné de culture, maitrise des langues', 'Non', 3),
('Recruteur de donateur', 'CDI', 'remboursement titre de transport', '13euros de lheure', 'Prospection', 'Francais', 'Paris', 'Pas de diplome requis', 'Esprit equipe', 'Non', 4),
('Office manager', 'CDD Temps plein', 'Tickets restaurant', '15000 a 20000 par an', 'Administration', 'Anglais, Francais', 'Paris', 'BTS', 'Expérience office manager', 'Bilingue', 5),
('Startup objets connectés', 'Stage', 'Remboursement titre de transport', 'Pas payé', 'Ingénierie', 'Anglais, Francais', 'Paris', 'Grandes ecoles ingénieurs', 'Expérience', 'Motivé', 6);

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `poste` varchar(30) NOT NULL,
  `entreprise` varchar(30) NOT NULL,
  `lieu` varchar(30) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `description` varchar(50) NOT NULL,
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`poste`, `entreprise`, `lieu`, `date_debut`, `date_fin`, `description`, `id`, `username`) VALUES
('Stage', 'Mobil\'Affiche', 'Paris', '2012-05-08', '2012-06-10', 'Stage', 1, 'lele'),
('Stage', 'BHV Marais', 'Paris', '2016-01-08', '2016-03-06', 'Stage de vente', 2, 'lele'),
('Secrétaire generale', 'BDE Lutece', 'Paris', '2018-04-01', '2019-04-01', 'Gestion du bde ECE paris', 3, 'manouel'),
('Développeur web', 'Crystal Société Avocats', 'Paris 16', '2017-03-05', '2017-06-16', 'Developpement d\'un site web', 4, 'manouel'),
('Stage', 'GreenFlex', 'Paris', '2017-10-01', '2017-12-28', 'Stage', 5, 'chachou'),
('Stage', 'Unilever Food Solutions', 'Londres', '2017-12-05', '2018-02-06', 'Stage a l\'etranger', 6, 'chachou');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(10) NOT NULL,
  `ecole` varchar(20) NOT NULL,
  `diplome` enum('Master-1','Master-2','Licence','Bac','Bac+1','Bac+2','Bac+3','Bac+4','Bac+5') NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `associations` set('BDE','BDS','Caves','Yacht','BDA','AEIP','FEDE','SDI','NOISE','JOBSERVICE','ENTREPRINE','MUSIQUE') NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `description` text NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `ecole`, `diplome`, `domaine`, `associations`, `date_debut`, `date_fin`, `description`, `username`) VALUES
(2, 'Ieseg', 'Master-1', 'Commerce', 'AEIP,FEDE,MUSIQUE', '2018-05-10', '2018-05-15', 'Yolo', 'chachou'),
(3, 'DCU', 'Bac+3', 'Ingenerie', 'BDS,Caves', '2017-09-01', '2018-02-01', 'Super ecole en irlande', 'manouel'),
(4, 'DCU', 'Bac+3', 'Ingenerie', 'BDE,Caves,Yacht', '2018-05-18', '2018-05-24', 'Super cool', 'lele'),
(5, 'ECE', 'Master-2', 'Ingenerie', 'BDE', '2018-05-12', '2018-05-23', '', 'manouel'),
(6, 'sqde', 'Bac+2', 'da', 'BDS', '2233-03-23', '2233-03-23', 'sefezf', 'chachou');

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
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
  `id` int(10) NOT NULL,
  `reset_token` varchar(60) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `ville` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `informations`
--

INSERT INTO `informations` (`nom`, `prenom`, `date_naissance`, `telephone`, `sexe`, `promo`, `pays`, `cp`, `adresse`, `profession`, `type`, `photo`, `image_fond`, `competences`, `interets`, `resume`, `email`, `password`, `username`, `id`, `reset_token`, `reset_at`, `remember_token`, `admin`, `ville`) VALUES
('Thiroloix', 'Emmanuelle', '1996-11-07', '0676916066', 'F', 'ING1', 'France', 92300, '12 rue Edouard Vaillant', 'Etudiant(e) Licence', 'auteur', 'emmanuelle.jpg', '', 'C,C++,HTML/CSS,SQL,Leadership,Linux', '', 'bonjour je suis emmanuelle j\'aime smoothie plusque tout et ca me saoule ce projet', 'emmanuelle.thiroloix@gmail.com', '10012012', 'manouel', 7, NULL, NULL, 'IUONr0poT9vbpTkzeqMW9i5gbHd4ZYHZTfQ9v6TSKFIzKXXaZ0NjwvQAvISIZgnkVBAuuPXZKeDEDTGxAuEyChfkgiGtZFSlVNGxthtqgNzFF46h3cH69Jbf0yQov8RYQE1MGVbmV3AyDnbcLp1ev23mfkQo1WHa98FgYni6jjJWxfnp2fWIURtWMitkfoZ1cF1zsfRUsnV6zpviK9w86WrZGENmZ4rahAvKHN6MxY63x1CHBxB9al0DjV', NULL, 'Levallois'),
('Blanchard', 'Lea', '1995-05-29', '06 89 76 87 66', 'F', 'ING3', 'France', 75008, '18 place de la Madeleine', 'Etudiant(e) Licence', 'auteur', 'user.png', '', 'Pack Office,C,C++,Java', 'Ingénérie,Animaux,Sport', '', 'lea.blanchard@edu.ece.fr', 'lele', 'lele', 9, NULL, NULL, NULL, NULL, 'Paris'),
('Decary ', 'Charlotte', '1997-05-02', '07 88 98 77 66', 'F', 'ING5', 'France', 75116, '11 rue de sontay', 'Etudiant(e) Master', 'administrateur', 'charlotte_decary.jpeg', '', 'Analyse financière,Design Thinking,Prototypage,Big Data', 'Voyage,Mode,Dessin', '', 'charlotte.decary@edu.ece.fr', 'charlotte', 'chacha', 10, NULL, NULL, NULL, NULL, 'Paris');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) NOT NULL,
  `id_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `id` int(11) NOT NULL,
  `mp_expediteur` int(11) NOT NULL,
  `mp_receveur` int(11) NOT NULL,
  `mp_titre` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mp_text` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mp_time` int(11) NOT NULL,
  `mp_lu` enum('0','1') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `date` datetime(6) NOT NULL,
  `type` enum('Ajout','Emploi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `partages`
--

CREATE TABLE `partages` (
  `id` int(10) NOT NULL,
  `membre_id` int(10) NOT NULL,
  `id_post` int(10) NOT NULL,
  `heure` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

CREATE TABLE `possede` (
  `membre_id` int(10) NOT NULL,
  `id_experience` int(10) NOT NULL,
  `id_formation` int(10) NOT NULL,
  `id_partage` int(10) NOT NULL,
  `id_post` int(10) NOT NULL,
  `id_emploi` int(11) NOT NULL,
  `id_commentaire` int(10) NOT NULL,
  `id_notification` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `membre_id` int(10) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `heure` datetime(6) NOT NULL,
  `sentiment` varchar(200) NOT NULL,
  `fichier` varchar(255) NOT NULL COMMENT 'liens des images ou videos que l''utilisateur souhaite partager ',
  `lieu` varchar(100) NOT NULL,
  `username` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `membre_id`, `texte`, `heure`, `sentiment`, `fichier`, `lieu`, `username`) VALUES
(1, 0, 'zoeijqsdjqmdkfjqsmdlkf,sdlmkf,ds', '0000-00-00 00:00:00.000000', 'Humeur', '', '', 'chachou'),
(2, 0, 'qsfqsdf', '0000-00-00 00:00:00.000000', 'Fatigué(e)', '', '', 'manouel'),
(3, 0, 'CHARLOTTE DECARY LEA BLANCHARD EMMANUELLE THIROLOIX', '0000-00-00 00:00:00.000000', 'Humeur', '', '', 'lele');

-- --------------------------------------------------------

--
-- Structure de la table `relations`
--

CREATE TABLE `relations` (
  `id` int(10) NOT NULL,
  `id_recoit` int(10) NOT NULL,
  `id_envoie` int(10) NOT NULL,
  `état` enum('accepté','refusé','en_cour') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `emploi`
--
ALTER TABLE `emploi`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partages`
--
ALTER TABLE `partages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `membre_id` (`membre_id`);

--
-- Index pour la table `possede`
--
ALTER TABLE `possede`
  ADD PRIMARY KEY (`membre_id`,`id_experience`,`id_formation`),
  ADD KEY `membre_id` (`membre_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `emploi`
--
ALTER TABLE `emploi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `partages`
--
ALTER TABLE `partages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
