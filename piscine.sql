-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 30 avr. 2018 à 10:48
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `piscine`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `login` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `naissance` date NOT NULL,
  `pays` enum('France','Angleterre','Irlande','Espagne') NOT NULL,
  `cp` int(5) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `type` enum('auteur','admin','','') NOT NULL,
  `photo` varchar(255) NOT NULL,
  `tel` int(10) NOT NULL,
  `image_fond` varchar(255) NOT NULL,
  `competences` varchar(255) NOT NULL,
  `interets` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `formation` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`login`);
