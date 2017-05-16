SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
-- Base de données :  `project`
-- Structure de la table `person`

CREATE TABLE `autoroute` (
  `codeA` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  'km' int (10)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Contenu de la table `person`

INSERT INTO 'autoroute' ('codeA', 'name') VALUES
(1, 'test2', 150);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `person`
--
ALTER TABLE `autoroute`
  ADD PRIMARY KEY (`codeA`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `person`
--
ALTER TABLE `autoroute`
  MODIFY `codeA` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
