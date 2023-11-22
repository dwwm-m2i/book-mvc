-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 22 nov. 2023 à 07:57
-- Version du serveur : 11.1.3-MariaDB
-- Version de PHP : 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php-recap`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `isbn` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `published_at` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `price`, `discount`, `isbn`, `author`, `published_at`, `image`) VALUES
(4, 'Illo deleniti commodi ex.', 29, 18, '7445094667310', 'Arthur Allard', '1991-07-23', 'uploads/01.jpg'),
(6, 'Quam iusto natus eos.', 62, 11, '9478341825490', 'Théodore Francois', '2013-02-09', 'uploads/03.jpg'),
(7, 'Natus possimus modi sint hic ut tempore.', 68, 10, '0873356029069', 'René Joly', '1996-01-30', 'uploads/06.jpg'),
(8, 'Maxime vel ut similique.', 25, 10, '0593548548504', 'Henriette Gomes', '1975-08-20', 'uploads/05.jpg'),
(10, 'Enim et omnis aliquid.', 60, 14, '1223719243691', 'Louise Guyon', '1994-04-24', 'uploads/05.jpg'),
(11, 'Test', 50, 10, '1234567890', 'Toto', '2023-01-01', 'uploads/06.jpg'),
(12, 'Super', 99, NULL, '1234567890', 'abc', '2023-12-09', 'uploads/06.jpg'),
(13, 'Test', 54, NULL, '1234567890', 'toto', '2023-01-01', 'uploads/06.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `message`) VALUES
(1, 'Fiorella', 'Un message'),
(2, 'Matt', 'Un autre message'),
(8, 'Fiorella', 'Mon messageeeee'),
(11, '&lt;script&gt;alert(&#039;Ok&#039;);&lt;/script&gt;', 'Messageeeeeeeee');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `duration`, `image`) VALUES
(1, 'Shrek Forever After', 93, 'https://image.tmdb.org/t/p/original/6HrfPZtKcGmX2tUWW3cnciZTaSD.jpg'),
(2, 'Planes', 91, 'https://image.tmdb.org/t/p/original/9uqCaPEIep4iBG3U4AqSP20LGjq.jpg'),
(3, 'La Pat\' Patrouille', 85, 'https://image.tmdb.org/t/p/original/iuEmUPqigSBFdu8vRZvVA4parQg.jpg'),
(4, 'Gran Turismo', 95, 'https://image.tmdb.org/t/p/original/vRIHkkuI6FKqUHPJbABbNLRM3VI.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `token`) VALUES
(1, 'Fiorella', '', '', NULL),
(2, 'Toto', '', '', NULL),
(3, 'abc', '', '', NULL),
(4, 'def', '', '', NULL),
(5, 'def', '', '', NULL),
(6, 'Matthieu', 'matthieu@boxydev.com', '$2y$10$Bmu62i6alTqTeGPfvnAPA..bdQQbqsntw7UOwnrhPOhIoG9GdvhOS', '9ec596061c65a7169000f21667b737e311a0c420507b102fe95a51af9a91054bade437a18cdd7adc8f3b93c975954be81d90a9713c2bb3c92b7df10c981ae439'),
(7, '', 'aaa@aaa.fr', '$2y$10$5abv0CqYPOlIp53x18hihew0MUaoZuOzA2dOv4qFUfbihb2j25L8C', NULL),
(8, 'Fiorella', 'fiorella@boxydev.com', '$2y$10$9kYlyRh3aFMPFqcgPXtzpuOgGPuwerkEEw2vwreUDBLjk17maY38u', NULL),
(9, 'Test', 'test@boxydev.com', '$2y$10$CAX8O6RDmCxePVkH0YB6ueJ4n8vNocp.GpoGHMQUb/fgcXi3Nl64e', '18aa80989ea62e6019615df399ffba9dfbb333b75b08035d39504827b71f649fd13e11ce91194738dbfad6a298defda1b4221be1b4a930d5665905d54bf7199a');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
