-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 02 mai 2018 à 11:51
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
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(10) NOT NULL,
  `ecole` varchar(20) NOT NULL,
  `diplome` varchar(20) NOT NULL,
  `domaine` varchar(20) NOT NULL,
  `associations` varchar(100) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `description` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `photo` varchar(100) NOT NULL,
  `image_fond` varchar(100) NOT NULL,
  `competences` set('Pack Office','C','C++','Java','HTML/CSS','Espagnol','Anglais','Allemand','Matlab','Gestion de projet','Analyse financière','Design Thinking','Prototypage','Big Data','BlockChain','Entreprenariat','SQL','Leadership','Linux','Web Design','WordPress','Applications mobiles') NOT NULL,
  `interets` set('Sport','Musique','Voyage','Cuisine') NOT NULL,
  `resume` longtext NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `id` int(10) NOT NULL,
  `confirmation_token` varchar(60) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `reset_token` varchar(60) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `informations`
--

INSERT INTO `informations` (`nom`, `prenom`, `date_naissance`, `telephone`, `sexe`, `promo`, `pays`, `cp`, `adresse`, `profession`, `type`, `photo`, `image_fond`, `competences`, `interets`, `resume`, `email`, `password`, `username`, `id`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`, `remember_token`, `admin`) VALUES
('', '', NULL, '', '', '', '', 0, '', '', '', '', '', 'HTML/CSS,Espagnol,Anglais,Allemand,Matlab,Gestion de projet,Analyse financière,BlockChain', '', '', '', '', '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
('Blanchard', 'Léa', '1997-05-10', '0672219012', 'M', 'ING3', 'France', 75015, '26 rue desnouettes', 'Etudiant(e) Licence', 'auteur', 'https://pixabay.com/fr/ballon-tour-en-montgolfi%C3%A8re-mission-2331488/', 'https://pixabay.com/fr/ballon-tour-en-montgolfi%C3%A8re-mission-2331488/', 'C++,Java,HTML/CSS,Espagnol,Anglais', '', 'coucou moi cest lele je suis a l\'ece', '', '', '', 2, NULL, NULL, NULL, NULL, NULL, NULL);

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
  `sentiment` enum('content(e)','énervé(e)','fier(e)','fatigué(e)','calme','ravi(e)','en pleine forme','festif(ve)','motivé(e)','nostalgique','malade','décu(e)','serein(e)','desespéré(e)','furieux(se)','fort(e)','prêt(e)','reconnaissant(e)','stressé(e)','') NOT NULL,
  `fichier` varchar(255) NOT NULL COMMENT 'liens des images ou videos que l''utilisateur souhaite partager '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `relations`
--

CREATE TABLE `relations` (
  `id` int(10) NOT NULL,
  `id_recoit` int(10) NOT NULL,
  `id_envoie` int(10) NOT NULL,
  `état` enum('accepté','refusé') NOT NULL
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
