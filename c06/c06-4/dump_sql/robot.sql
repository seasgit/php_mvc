-- phpMyAdmin SQL Dump
-- version 5.2.1
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Base de données : `db_robots`
--

-- --------------------------------------------------------

--
-- Structure de la table `robot`
--

CREATE TABLE `robot` (
  `id` int(2) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `numero` int(3) NOT NULL,
  `secteur_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `robot`
--

INSERT INTO `robot` (`id`, `nom`, `numero`, `secteur_id`) VALUES
(1, 'Lucius', 12, 4),
(2, 'Agrippa', 35, 4),
(3, 'Marcus', 123, 2),
(4, 'Titus', 18, 9),
(5, 'Flavius', 15, 1),
(6, 'Claudius', 55, 10),
(7, 'Octavius', 60, 4),
(8, 'Cornellia', 35, 7),
(9, 'Livia', 35, 3),
(10, 'Gaius', 2, 8),
(11, 'Julia', 111, 7),
(12, 'Septima', 48, 3);


--
-- Index pour la table `robot`
--
ALTER TABLE `robot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_robot_secteur` (`secteur_id`);

--
-- AUTO_INCREMENT pour la table `robot`
--
ALTER TABLE `robot`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `robot`
--
ALTER TABLE `robot`
  ADD CONSTRAINT `fk_robot_secteur` FOREIGN KEY (`secteur_id`) REFERENCES `secteur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;


