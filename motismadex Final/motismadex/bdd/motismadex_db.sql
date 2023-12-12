-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 10 déc. 2023 à 23:04
-- Version du serveur : 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `motismadex_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name_account` varchar(255) DEFAULT NULL,
  `firstname_account` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `wordpass` varchar(255) DEFAULT NULL,
  `is_banned` tinyint(1) DEFAULT 0,
  `role` tinyint(1) DEFAULT 0,
  `num_dresseur` int(11) DEFAULT NULL,
  `date_creation` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `account`
--

INSERT INTO `account` (`id`, `name_account`, `firstname_account`, `mail`, `wordpass`, `is_banned`, `role`, `num_dresseur`, `date_creation`) VALUES
(2, 'toto', 'tata', 'titi@mail.fr', '$2y$10$7LIIEpLgJWJP4FD5TQGBo.07iJP4yTRUdivYqFCTr1L1kS0qgpVYS', 0, 1, NULL, '2023-12-09 18:34:05'),
(3, 'rapido', 'rapida', 'rapidi@mail.fr', '$2y$10$UW8JrCgV2kdvhlvC7rDqmOJ5e4r9WaT0oRmm3AKMf1Og.Jm9qOBQq', 0, 0, NULL, '2023-12-09 19:25:01'),
(4, 'GHADDEB', 'Youness', 'yghaddeb@yahoo.fr', '$2y$10$mpTYCV9SwmLRNNdB6vyrGu/c95Vgm9UlQdQhx2o8vGtM8xspEs32m', 0, 0, NULL, '2023-12-10 14:21:27'),
(5, 'verif', 'verif', 'verif@mail.fr', '$2y$10$9qMArEDeAmMEivjniMF8euYeVKwfkfzTvFjX5a2eo306ldm.Kj0cS', 0, 0, NULL, '2023-12-10 14:22:56'),
(6, 'Prout', 'Prout', 'Prout@gmail.com', '$2y$10$f7dgybG5xKVP6WWH7bU77u2rj9r9jPy.b0Jn2XnH1MNZ370m4c6me', 0, 0, NULL, '2023-12-10 14:23:27'),
(7, 'Marhez', 'Farid', 'Fozee@mail.fr', '$2y$10$uBUo9jZ/fMPbUT72dkdhs.cyEvUy.ClEp/Bju81QNsmPZFxWStaRy', 0, 0, NULL, '2023-12-10 15:02:55'),
(8, 'Prout', 'Prout', 'Prout', '$2y$10$nQ7I10QbSY8i8NPNAt8Irest2JGoM7Jn7OJPpUjn6o2Q8aIKVBlRm', 0, 0, NULL, '2023-12-10 15:05:02'),
(9, 'Campanale', 'Loukas', 'loukascampanale125@gmail.com', '$2y$10$LsyVaURb7y5H4nt7ABNhS.09t9JHd5btQOeUwT7Ek47riS48AAT.G', 0, 0, NULL, '2023-12-10 17:26:10'),
(10, 'Campanale', 'Loukas', 'loukascampanale1252@gmail.com', '$2y$10$UHaOLua2WsWlgOhHQ/Xkm.lCW1eFmPohNieHquKesgX/pNX3C3hhy', 0, 0, NULL, '2023-12-10 18:00:45'),
(11, 'Mourtadhoi', 'idricemtdh@gmail.com', 'idricemtdh@gmail.com', '$2y$10$8O.kDBl0JbLNhtOx3uiAFOrhW1t7QFbxmer/rZBzazecyN97jTQn6', 0, 0, NULL, '2023-12-10 18:02:25'),
(12, 'Jemap', 'Ellie', 'ellie@gmail.com', '$2y$10$L3M1LY0veWpB5HkPN20pee924sXxF2hT07e8cvxQnCxLb3z82b6Fe', 0, 0, NULL, '2023-12-10 18:38:45'),
(13, 'zaoui', 'younes', 'zaoui.younes@mail.fr', '$2y$10$wlcLQatC4m7sGawMCYuW7ObLoVcPFz7aD1J6cwhBGIBhkXq5dKReK', 0, 0, NULL, '2023-12-10 18:45:58'),
(14, 'test', 'tata', 'titi', '$2y$10$.rJaTsQ4UAF5FF..vxiTQOkP9IvYbdXKCyEOFm7WygpZ8joUW6MOC', 0, 0, NULL, '2023-12-10 18:47:56'),
(15, 'gg', 'gg', 'gg', '$2y$10$YgpMIdWCuYZKZxkpRHdeTeB2dOV3hE5w3Sx651.8gfrg.nsOXup2y', 0, 0, NULL, '2023-12-10 19:26:42'),
(16, 'zaoui', 'te', 'zaoui.younes@mail.fr', '$2y$10$3m8A89eXSVrSqfim7jiPNupNFR4xpjrIlwWLFumN8qulqZINzX2b.', 0, 0, NULL, '2023-12-10 19:38:53'),
(17, 'admin', 'admin', 'admin@mail.com', 'admin', 0, 1, NULL, '2023-12-10 22:00:09');

-- --------------------------------------------------------

--
-- Structure de la table `combat`
--

CREATE TABLE `combat` (
  `id` int(11) NOT NULL,
  `id_dresseur` int(11) DEFAULT NULL,
  `post` text DEFAULT NULL,
  `pokemonA` int(11) DEFAULT NULL,
  `vote_pokemonA` int(11) DEFAULT 0,
  `pokemonB` int(11) DEFAULT NULL,
  `vote_pokemonB` int(11) DEFAULT 0,
  `likes` int(11) DEFAULT NULL,
  `date_creation` timestamp NULL DEFAULT current_timestamp(),
  `hide` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `combat`
--

INSERT INTO `combat` (`id`, `id_dresseur`, `post`, `pokemonA`, `vote_pokemonA`, `pokemonB`, `vote_pokemonB`, `likes`, `date_creation`, `hide`) VALUES
(1, 1, 'cque tu veux', 1, 0, 3, 0, NULL, '2023-12-10 19:37:26', NULL),
(2, 1, 'azy', 1, 0, 3, 0, NULL, '2023-12-10 19:37:50', NULL),
(3, 6, 'Eh oui florizarre ta  perdu  ', 1, 0, 3, 0, NULL, '2023-12-10 19:38:58', NULL),
(4, 12, 'et oui', 1, 0, 3, 0, NULL, '2023-12-10 19:39:09', NULL),
(5, 1, 'je me demande', 1, 0, 3, 0, NULL, '2023-12-10 21:12:18', NULL),
(6, 1, '???', 1, 0, 3, 0, NULL, '2023-12-10 21:12:30', NULL),
(7, 1, 'salut', 1, 0, 3, 0, NULL, '2023-12-10 21:15:07', NULL),
(8, 1, 'je capte mal', 1, 0, 3, 0, NULL, '2023-12-10 21:16:53', NULL),
(9, 1, 'je capte bien', 1, 0, 3, 0, NULL, '2023-12-10 21:17:47', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_combat`
--

CREATE TABLE `commentaire_combat` (
  `id` int(11) NOT NULL,
  `id_combat` int(11) DEFAULT NULL,
  `id_dresseur` int(11) DEFAULT NULL,
  `commentaire` text DEFAULT NULL,
  `hide` tinyint(1) DEFAULT NULL,
  `date_creation` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_like`
--

CREATE TABLE `commentaire_like` (
  `id` int(11) NOT NULL,
  `id_dresseur` int(11) DEFAULT NULL,
  `id_commentaire` int(11) DEFAULT NULL,
  `liked` tinyint(1) DEFAULT NULL,
  `date_creation` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dresseur`
--

CREATE TABLE `dresseur` (
  `id` int(11) NOT NULL,
  `name_dresseur` varchar(255) DEFAULT NULL,
  `picture` int(11) DEFAULT NULL,
  `pokedollars` int(11) DEFAULT NULL,
  `fight` int(11) DEFAULT 0,
  `captured` int(11) DEFAULT 0,
  `encounter` int(11) DEFAULT 0,
  `hide` tinyint(1) DEFAULT 0,
  `num_account` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `dresseur`
--

INSERT INTO `dresseur` (`id`, `name_dresseur`, `picture`, `pokedollars`, `fight`, `captured`, `encounter`, `hide`, `num_account`) VALUES
(1, 'Aera', 3, NULL, 0, 0, 0, 0, 2),
(2, 'rapido', 3, NULL, 0, 0, 0, 0, 3),
(3, 'Prout', 6, NULL, 0, 0, 0, 0, 8),
(4, 'RatonRaleur', 6, NULL, 0, 0, 0, 0, 9),
(5, 'RatonRaleur2', 7, NULL, 0, 0, 0, 0, 10),
(6, 'idricealy', 6, NULL, 0, 0, 0, 0, 11),
(7, 'VerifAccount', 6, NULL, 0, 0, 0, 0, 5),
(8, 'Ellie', 1, NULL, 0, 0, 0, 0, 12),
(9, 'test', 6, NULL, 0, 0, 0, 0, 13),
(10, 'Sazert', 6, NULL, 0, 0, 0, 0, 14),
(11, 'GG', 5, NULL, 0, 0, 0, 0, 15),
(12, 'tegege', 3, NULL, 0, 0, 0, 0, 16);

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id` int(11) NOT NULL,
  `historique_action` varchar(255) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_dresseur` int(11) DEFAULT NULL,
  `num_account` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pokedex`
--

CREATE TABLE `pokedex` (
  `id` int(11) NOT NULL,
  `num_pokemon` int(11) DEFAULT NULL,
  `numero_pokedex` int(11) DEFAULT NULL,
  `region` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `nomAnglais` varchar(255) NOT NULL,
  `typeA` varchar(255) NOT NULL,
  `typeB` varchar(255) DEFAULT NULL,
  `taille` decimal(5,2) DEFAULT NULL,
  `poids` decimal(5,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `lien_img` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `pokedex`
--

INSERT INTO `pokedex` (`id`, `num_pokemon`, `numero_pokedex`, `region`, `nom`, `nomAnglais`, `typeA`, `typeB`, `taille`, `poids`, `description`, `lien_img`) VALUES
(1, 1, 1, 'Kanto', 'Bulbizarre', ' Bulbasaur ', ' Plante ', ' Poison', 0.70, 6.90, ' Bulbizarre a une graine sur son dos. Il absorbe les rayons du soleil pour faire doucement pousser la graine. ', ' https://www.pokepedia.fr/images/thumb/e/ef/Bulbizarre-RFVF.png/250px-Bulbizarre-RFVF.png'),
(2, 2, 2, 'Kanto', 'Herbizarre', ' Ivysaur ', ' Plante ', ' Poison', 1.00, 13.00, ' Lorsqu\'il commence à se prélasser au soleil, ça signifie que son bourgeon va éclore, donnant naissance à une fleur. ', ' https://www.pokepedia.fr/images/thumb/4/44/Herbizarre-RFVF.png/250px-Herbizarre-RFVF.png'),
(3, 3, 3, 'Kanto', 'Florizarre', ' Venusaur ', ' Plante ', ' Poison', 2.00, 100.00, ' Une belle fleur se trouve sur le dos de Florizarre. Le parfum de cette fleur peut apaiser les gens. ', ' https://www.pokepedia.fr/images/thumb/4/42/Florizarre-RFVF.png/250px-Florizarre-RFVF.png'),
(4, 4, 4, 'Kanto', 'Salamèche', ' Charmander ', ' Feu ', ' ', 0.60, 8.50, ' La flamme qui brûle au bout de sa queue indique l\'humeur de ce Pokémon. Elle vacille lorsque Salamèche est content. ', ' https://www.pokepedia.fr/images/thumb/8/89/Salam%C3%A8che-RFVF.png/250px-Salam%C3%A8che-RFVF.png'),
(5, 5, 5, 'Kanto', 'Reptincel', ' Charmeleon ', ' Feu ', ' ', 1.10, 19.00, ' S\'il rencontre un ennemi puissant, il devient agressif et la flamme au bout de sa queue s\'embrase et prend une couleur bleu clair. ', ' https://www.pokepedia.fr/images/thumb/6/64/Reptincel-RFVF.png/250px-Reptincel-RFVF.png'),
(6, 6, 6, 'Kanto', 'Dracaufeu', ' Charizard ', ' Feu ', ' Vol', 1.70, 90.50, ' Il peut fondre la roche de son souffle brûlant. Il est souvent la cause d\'énormes incendies. ', ' https://www.pokepedia.fr/images/thumb/1/17/Dracaufeu-RFVF.png/250px-Dracaufeu-RFVF.png'),
(7, 7, 7, 'Kanto', 'Carapuce', ' Squirtle ', ' Eau ', ' ', 0.50, 9.00, ' La forme ronde de sa carapace et ses rainures lui permettent d\'améliorer son hydrodynamisme. Ce Pokémon nage extrêmement vite. ', ' https://www.pokepedia.fr/images/thumb/c/cc/Carapuce-RFVF.png/250px-Carapuce-RFVF.png'),
(8, 8, 8, 'Kanto', 'Carabaffe', ' Wartortle ', ' Eau ', ' ', 1.00, 22.50, ' Attaqué, il cache sa tête dans sa carapace, mais son corps trop gros ne peut y tenir en entier.', ' https://www.pokepedia.fr/images/thumb/2/2a/Carabaffe-RFVF.png/250px-Carabaffe-RFVF.png'),
(9, 9, 9, 'Kanto', 'Tortank', ' Blastoise ', ' Eau ', ' ', 1.60, 85.50, ' Les canons sur sa coquille tirent des jets d\'eau capables de percer même de l\'acier trempé! ', ' https://www.pokepedia.fr/images/thumb/2/24/Tortank-RFVF.png/250px-Tortank-RFVF.png'),
(10, 1, 152, 'Johto', 'Germignon', ' Chikorita ', ' Plante ', ' ', 0.90, 6.40, ' Un doux parfum émane des feuilles placées sur sa tête. Il est très doux et il aime dormir au soleil. ', ' https://www.pokepedia.fr/images/thumb/1/1f/Germignon-HGSS.png/250px-Germignon-HGSS.png'),
(11, 2, 153, 'Johto', 'Macronium', ' Bayleef ', ' Plante ', ' ', 1.20, 15.80, ' Une odeur épicée provient de son cou. Si on la respire, cette odeur donne envie de se battre. ', ' https://www.pokepedia.fr/images/thumb/d/db/Macronium-HGSS.png/250px-Macronium-HGSS.png'),
(12, 3, 154, 'Johto', 'Méganium', ' Meganium ', ' Plante ', ' ', 1.80, 100.50, ' Le parfum de la fleur de Méganium émet un parfum relaxant pour atténuer l\'agressivité de l\'ennemi. ', ' https://www.pokepedia.fr/images/thumb/2/2a/M%C3%A9ganium-HGSS.png/250px-M%C3%A9ganium-HGSS.png'),
(13, 4, 155, 'Johto', 'Héricendre', ' Cyndaquil ', ' Feu ', ' ', 0.50, 7.90, ' Héricendre se protège en faisant jaillir des flammes de son dos. Ces flammes peuvent être violentes si le Pokémon est en colère. ', ' https://www.pokepedia.fr/images/thumb/8/86/H%C3%A9ricendre-LPA.png/250px-H%C3%A9ricendre-LPA.png'),
(14, 5, 156, 'Johto', 'Feurisson', ' Quilava ', ' Feu ', ' ', 0.90, 19.00, ' Feurisson utilise son incroyable agilité pour éviter les attaques, tout en enflammant ses ennemis. ', ' https://www.pokepedia.fr/images/thumb/8/8a/Feurisson-HGSS.png/250px-Feurisson-HGSS.png'),
(15, 6, 157, 'Johto', 'Typhlosion', ' Typhlosion ', ' Feu ', ' ', 1.70, 79.50, ' Typhlosion se cache derrière un chatoyant nuage, il peut générer des rafales explosives qui réduisent tout en cendres. ', ' https://www.pokepedia.fr/images/thumb/8/8b/Typhlosion-HGSS.png/250px-Typhlosion-HGSS.png'),
(16, 7, 158, 'Johto', 'Kaiminus', ' Totodile ', ' Eau ', ' ', 0.60, 9.50, ' Malgré son tout petit corps, ce Pokémon mordille les gens pour jouer, sans se rendre compte que sa morsure peut gravement blesser. ', ' https://www.pokepedia.fr/images/thumb/b/b9/Kaiminus-HGSS.png/250px-Kaiminus-HGSS.png'),
(17, 8, 159, 'Johto', 'Crocrodil', ' Croconaw ', ' Eau ', ' ', 1.10, 25.00, ' Une fois que Crocrodil a refermé sa mâchoire sur son ennemi, il est impossible de le faire lâcher prise. ', ' https://www.pokepedia.fr/images/thumb/3/3c/Crocrodil-HGSS.png/250px-Crocrodil-HGSS.png'),
(18, 9, 160, 'Johto', 'Aligatueur', ' Feraligatr ', ' Eau ', ' ', 2.30, 88.80, ' Quand Aligatueur mord avec sa puissante mâchoire, il secoue sa tête pour déchiqueter sa pauvre victime. ', ' https://www.pokepedia.fr/images/thumb/d/d9/Aligatueur-HGSS.png/250px-Aligatueur-HGSS.png'),
(19, 1, 252, 'Hoenn', 'Arcko', ' Treecko ', ' Plante ', ' ', 0.50, 5.00, ' Arcko est doté de petits crochets sous les pattes, ce qu\'il lui permet de grimper aux murs. ', ' https://www.pokepedia.fr/images/thumb/9/93/Arcko-ROSA.png/250px-Arcko-ROSA.png'),
(20, 2, 253, 'Hoenn', 'Massko', ' Grovyle ', ' Plante ', ' ', 0.90, 21.60, ' Les feuilles qui poussent sur le corps de Massko sont bien pratiques lorsqu\'il veut se camoufler dans la forêt. ', ' https://www.pokepedia.fr/images/thumb/f/fe/Massko-RS.png/250px-Massko-RS.png'),
(21, 3, 254, 'Hoenn', 'Jungko', ' Sceptile ', ' Plante ', ' ', 1.70, 52.20, ' Les feuilles qui poussent sur le corps de Jungko sont extrêmement tranchantes. Ce Pokémon est très agile. ', ' https://www.pokepedia.fr/images/thumb/d/d3/Jungko-RS.png/250px-Jungko-RS.png'),
(22, 4, 255, 'Hoenn', 'Poussifeu', ' Torchic ', ' Feu ', ' ', 0.40, 2.50, ' Poussifeu ne lâche pas son Dresseur d\'une semelle, marchant maladroitement derrière lui.', ' https://www.pokepedia.fr/images/thumb/5/5d/Poussifeu-ROSA.png/250px-Poussifeu-ROSA.png'),
(23, 5, 256, 'Hoenn', 'Galifeu', ' Combusken ', ' Feu ', ' Combat', 0.90, 19.50, 'Les jambes de Galifeu sont capables de donner 10 coups de pied en 1 seconde.', ' https://www.pokepedia.fr/images/thumb/7/7c/Galifeu-RS.png/250px-Galifeu-RS.png'),
(24, 6, 257, 'Hoenn', 'Braségali', ' Blaziken ', ' Feu ', ' Combat', 1.90, 52.00, ' Au combat, Braségali envoie ses flammes ardentes de ses poignets. Il fait preuve d\'un courage exceptionnel. ', ' https://www.pokepedia.fr/images/thumb/0/07/Bras%C3%A9gali-RS.png/250px-Bras%C3%A9gali-RS.png'),
(25, 7, 258, 'Hoenn', 'Gobou', ' Mudkip ', ' Eau ', ' ', 0.40, 7.60, ' La nageoire sur la tête de Gobou lui sert de radar hypersensible. Il l\'utilise pour sentir les mouvements de l\'eau et de l\'air. ', ' https://www.pokepedia.fr/images/thumb/7/7e/Gobou-ROSA.png/250px-Gobou-ROSA.png'),
(26, 8, 259, 'Hoenn', 'Flobio', ' Marshtomp ', ' Eau ', ' Sol', 0.70, 28.00, ' Le corps de Flobio est enveloppé par un film fin et collant qui lui permet de vivre hors de l\'eau. ', ' https://www.pokepedia.fr/images/thumb/e/e1/Flobio-RS.png/250px-Flobio-RS.png'),
(27, 9, 260, 'Hoenn', 'Laggron', ' Swampert ', ' Eau ', ' Sol', 1.60, 81.90, ' Laggron est très fort. Tellement fort qu\'il peut aisément tirer un rocher pesant plus d\'une tonne/  ', ' https://www.pokepedia.fr/images/thumb/6/68/Laggron-RS.png/250px-Laggron-RS.png'),
(28, 1, 387, 'Sinnoh', 'Tortipouss', ' Turtwig ', ' Plante ', ' ', 0.40, 10.20, ' Son corps produit de l\'oxygène par photosynthèse. La feuille sur sa tête flétrit quand il a soif. ', ' https://www.pokepedia.fr/images/thumb/f/f0/Tortipouss-DEPS.png/250px-Tortipouss-DEPS.png'),
(29, 2, 388, 'Sinnoh', 'Boskara', ' Grotle ', ' Plante ', ' ', 1.10, 97.00, ' Il sait d\'instinct où trouver une source d\'eau pure. Il y transporte d\'autres Pokémon sur son dos. ', ' https://www.pokepedia.fr/images/thumb/a/ad/Boskara-DEPS.png/250px-Boskara-DEPS.png'),
(30, 3, 389, 'Sinnoh', 'Torterra', ' Torterra ', ' Plante ', ' Sol', 2.20, 310.00, ' Il arrive que de petits Pokémon se rassemblent sur son dos immobile pour y faire leur nid. ', ' https://www.pokepedia.fr/images/thumb/b/b3/Torterra-DEPS.png/250px-Torterra-DEPS.png'),
(31, 4, 390, 'Sinnoh', 'Ouisticram', ' Chimchar ', ' Feu ', ' ', 0.50, 6.20, ' La flamme de son postérieur brûle grâce à un gaz de son estomac. Elle faiblit quand il ne va pas bien. ', ' https://www.pokepedia.fr/images/thumb/7/76/Ouisticram-DEPS.png/250px-Ouisticram-DEPS.png'),
(32, 5, 391, 'Sinnoh', 'Chimpenfeu', ' Monferno ', ' Feu ', ' Combat', 0.90, 22.00, ' Il attaque en prenant appui sur les murs et les plafonds. Sa queue ardente n\'est pas son seul atout. ', ' https://www.pokepedia.fr/images/thumb/2/2b/Chimpenfeu-DEPS.png/250px-Chimpenfeu-DEPS.png'),
(33, 6, 392, 'Sinnoh', 'Simiabraz', ' Infernape ', ' Feu ', ' Combat', 1.20, 55.00, ' Il fait voltiger ses ennemis grâce à sa vitesse et son style de combat spécial qui utilise ses quatre membres. ', ' https://www.pokepedia.fr/images/thumb/4/4b/Simiabraz-DEPS.png/250px-Simiabraz-DEPS.png'),
(34, 7, 393, 'Sinnoh', 'Tiplouf', ' Piplup ', ' Eau ', ' ', 0.40, 5.20, ' Il est fier et déteste accepter la nourriture qu\'on lui offre. Son pelage épais le protège du froid. ', ' https://www.pokepedia.fr/images/thumb/c/c2/Tiplouf-DEPS.png/250px-Tiplouf-DEPS.png'),
(35, 8, 394, 'Sinnoh', 'Prinplouf', ' Prinplup ', ' Eau ', ' ', 0.80, 23.00, ' C\'est un Pokémon solitaire. Un seul coup de ses puissantes ailes peut briser un arbre en deux. ', ' https://www.pokepedia.fr/images/thumb/c/c5/Prinplouf-DEPS.png/250px-Prinplouf-DEPS.png'),
(36, 9, 395, 'Sinnoh', 'Pingoléon', ' Empoleon ', ' Eau ', ' Acier', 1.70, 84.50, ' Les trois cornes de son bec sont le symbole de sa force. Celles du chef sont plus grosses que les autres. ', ' https://www.pokepedia.fr/images/thumb/1/14/Pingol%C3%A9on-DEPS.png/250px-Pingol%C3%A9on-DEPS.png'),
(37, 1, 495, 'Unys', 'Vipélierre', ' Snivy ', ' Plante ', ' ', 0.60, 8.10, ' Il laisse sa queue prendre le soleil pour sa photosynthèse. Quand il est malade, sa queue pend tristement. ', ' https://www.pokepedia.fr/images/thumb/6/67/Vip%C3%A9lierre-NB2.png/250px-Vip%C3%A9lierre-NB2.png'),
(38, 2, 496, 'Unys', 'Lianaja', ' Servine ', ' Plante ', ' ', 0.80, 16.00, ' Il court comme s\'il glissait sur le sol. Il déroute l\'ennemi par ses mouvements et l\'assomme d\'un coup de liane. ', ' https://www.pokepedia.fr/images/thumb/c/c0/Lianaja-NB.png/250px-Lianaja-NB.png'),
(39, 3, 497, 'Unys', 'Majaspic', ' Serperior ', ' Plante ', ' ', 3.30, 63.00, ' Il ne donnera tout son potentiel que contre un ennemi puissant indifférent à son regard écrasant de noblesse. ', ' https://www.pokepedia.fr/images/thumb/5/55/Majaspic-NB.png/250px-Majaspic-NB.png'),
(40, 4, 498, 'Unys', 'Gruikui', ' Tepig ', ' Feu ', ' ', 0.50, 9.90, ' Il adore se goinfrer de Baies grillées, mais il lui arrive de les réduire en cendres dans son excitation. ', ' https://www.pokepedia.fr/images/thumb/8/81/Gruikui-NB2.png/250px-Gruikui-NB2.png'),
(41, 5, 499, 'Unys', 'Grotichon', ' Pignite ', ' Feu ', ' Combat', 1.00, 55.50, ' Quand le feu dans son corps s\'embrase, sa vitesse et son agilité augmentent. En cas d\'urgence, il crache de la fumée. ', ' https://www.pokepedia.fr/images/thumb/6/69/Grotichon-NB.png/250px-Grotichon-NB.png'),
(42, 6, 500, 'Unys', 'Roitiflam', ' Emboar ', ' Feu ', ' Combat', 1.60, 150.00, ' Il a une barbe enflammée. Il maîtrise des techniques de combat au corps à corps rapides et puissantes. ', ' https://www.pokepedia.fr/images/thumb/c/c7/Roitiflam-NB.png/250px-Roitiflam-NB.png'),
(43, 7, 501, 'Unys', 'Moustillon', ' Oshawott ', ' Eau ', ' ', 0.50, 5.90, ' Il combat avec le coupillage de son ventre. Il peut parer un assaut et immédiatement contre-attaquer. ', ' https://www.pokepedia.fr/images/thumb/b/b4/Moustillon-LPA.png/250px-Moustillon-LPA.png'),
(44, 8, 502, 'Unys', 'Mateloutre', ' Dewott ', ' Eau ', ' ', 0.80, 24.50, ' Chaque Mateloutre a sa propre technique d\'escrime au coupillage, acquise grâce à un entraînement drastique. ', ' https://www.pokepedia.fr/images/thumb/8/82/Mateloutre-NB.png/250px-Mateloutre-NB.png'),
(45, 9, 503, 'Unys', 'Clamiral', ' Samurott ', ' Eau ', ' ', 1.50, 94.60, ' Il dissimule de grandes lames qu\'il dégaine en un éclair des fourreaux de ses pattes antérieures. ', ' https://www.pokepedia.fr/images/thumb/6/64/Clamiral-NB.png/250px-Clamiral-NB.png'),
(46, 1, 650, 'Kalos', 'Marisson', ' Chespin ', ' Plante ', ' ', 0.40, 9.00, ' Lorsqu\'il rassemble ses forces, les piquants souples qui recouvrent sa tête deviennent si durs et acérés qu\'ils pourraient transpercer un rocher. ', ' https://www.pokepedia.fr/images/thumb/c/ce/Marisson-XY.png/250px-Marisson-XY.png'),
(47, 2, 651, 'Kalos', 'Boguérisse', ' Quilladin ', ' Plante ', ' ', 0.70, 29.00, ' La carapace qui recouvre son corps le protège des attaques adverses, et ses piquants lui permettent de contre-attaquer. ', ' https://www.pokepedia.fr/images/thumb/5/5d/Bogu%C3%A9risse-XY.png/250px-Bogu%C3%A9risse-XY.png'),
(48, 3, 652, 'Kalos', 'Blindépique', ' Chesnaught ', ' Plante ', ' Combat', 1.60, 90.00, ' Il est si puissant qu\'il pourrait renverser un char de 50 t d\'un seul assaut. Il se sert de son corps comme d\'un bouclier pour protéger ses alliés. ', ' https://www.pokepedia.fr/images/thumb/e/eb/Blind%C3%A9pique-XY.png/250px-Blind%C3%A9pique-XY.png'),
(49, 4, 653, 'Kalos', 'Feunnec', ' Fennekin ', ' Feu ', ' ', 0.40, 9.40, ' En cas de coup de fatigue, il grignote des rameaux pour recharger ses batteries. Ses oreilles dégagent une chaleur qui dépasse les 200°C. ', ' https://www.pokepedia.fr/images/thumb/6/62/Feunnec-XY.png/250px-Feunnec-XY.png'),
(50, 5, 654, 'Kalos', 'Roussil', ' Braixen ', ' Feu ', ' ', 1.00, 14.50, ' Il allume la branche plantée dans sa queue en la frottant contre son pelage et s\'en sert en combat. ', ' https://www.pokepedia.fr/images/thumb/8/86/Roussil-XY.png/250px-Roussil-XY.png'),
(51, 6, 655, 'Kalos', 'Goupelin', ' Delphox ', ' Feu ', ' Psy', 1.50, 39.00, ' Peut prédire l\'avenir s\'il se concentre en fixant la flamme qui danse au bout de sa canne. ', ' https://www.pokepedia.fr/images/thumb/f/fd/Goupelin-XY.png/250px-Goupelin-XY.png'),
(52, 7, 656, 'Kalos', 'Grenousse', ' Froakie ', ' Eau ', ' ', 0.30, 7.00, ' Il protège son corps en l\'entourant d\'une mousse délicate. Malgré son apparence insouciante, ce Pokémon est en fait constamment à l\'affût. ', ' https://www.pokepedia.fr/images/thumb/8/82/Grenousse-XY.png/250px-Grenousse-XY.png'),
(53, 8, 657, 'Kalos', 'Croâporal', ' Frogadier ', ' Eau ', ' ', 0.60, 10.90, ' Il est capable de lancer des pierres recouvertes de mousse avec une précision suffisante pour toucher une canette vide à 30 m. ', ' https://www.pokepedia.fr/images/thumb/6/62/Cro%C3%A2poral-XY.png/250px-Cro%C3%A2poral-XY.png'),
(54, 9, 658, 'Kalos', 'Amphinobi', ' Greninja ', ' Eau ', ' Ténèbre', 1.50, 40.00, ' Il transforme des jets d\'eau sous pression en redoutables shuriken. Une fois lancés, ils tournent si vite qu\'ils peuvent même couper le métal. ', ' https://www.pokepedia.fr/images/thumb/7/75/Amphinobi-XY.png/250px-Amphinobi-XY.png'),
(55, 1, 722, 'Alola', 'Brindibou', ' Rowlet ', ' Plante ', ' Vol', 0.30, 1.50, ' Il s\'approche de ses ennemis en glissant dans les airs sans faire le moindre bruit, puis leur assène de puissants coups de patte. ', ' https://www.pokepedia.fr/images/thumb/2/23/Brindibou-LPA.png/250px-Brindibou-LPA.png'),
(56, 2, 723, 'Alola', 'Efflèche', ' Dartrix ', ' Plante ', ' Vol', 0.70, 16.00, ' Légèrement vaniteux, il aime prendre soin de ses ailes quand il en a le temps. Il refuse parfois de se battre si ses plumes sont trop sales. ', ' https://www.pokepedia.fr/images/thumb/b/b4/Effl%C3%A8che-SL.png/250px-Effl%C3%A8che-SL.png'),
(57, 3, 724, 'Alola', 'Archèduc', ' Decidueye ', ' Plante ', ' Spectre', 1.60, 36.60, ' Les plumes de ses ailes lui servent de flèches. Sa précision au tir est si grande qu\'il peut atteindre un gravillon à 100 m. ', ' https://www.pokepedia.fr/images/thumb/7/70/Arch%C3%A9duc-SL.png/250px-Arch%C3%A9duc-SL.png'),
(58, 4, 725, 'Alola', 'Flamiaou', ' Litten ', ' Feu ', ' ', 0.40, 4.30, ' Les poils qu\'il avale pendant sa toilette brûlent et forment une flamme dans son ventre. Celle-ci change selon sa façon dont il la recrache. ', ' https://www.pokepedia.fr/images/thumb/6/6c/Flamiaou-USUL.png/250px-Flamiaou-USUL.png'),
(59, 5, 726, 'Alola', 'Matoufeu', ' Torracat ', ' Feu ', ' ', 0.70, 25.00, ' Il porte à son cou une cloche de feu. Lorsqu\'il crache des flammes, cette dernière se met à tinter bruyamment. ', ' https://www.pokepedia.fr/images/thumb/8/8b/Matoufeu-SL.png/250px-Matoufeu-SL.png'),
(60, 6, 727, 'Alola', 'Félinferno', ' Incineroar ', ' Feu ', ' Ténèbre', 1.80, 83.00, ' Un Pokémon brutal qui n\'en fait qu\'à sa tête. Selon son humeur du moment, il lui arrive d\'ignorer sciemment les ordres de son Dresseur. ', ' https://www.pokepedia.fr/images/thumb/0/02/F%C3%A9linferno-SL.png/250px-F%C3%A9linferno-SL.png'),
(61, 7, 728, 'Alola', 'Otaquin', ' Popplio ', ' Eau ', ' ', 0.40, 7.50, ' Connu pour son tempérament de battant, il rassemble l\'eau de son corps au bout de son museau en un ballon qu\'il projette sur l\'ennemi. ', ' https://www.pokepedia.fr/images/thumb/6/62/Otaquin-USUL.png/250px-Otaquin-USUL.png'),
(62, 8, 729, 'Alola', 'Otarlette', ' Brionne ', ' Eau ', ' ', 0.60, 17.50, ' Danseur hors-pair, il produit des ballons d\'eau à la chaîne afin d\'éclabousser l\'adversaire lors d\'un impitoyable ballet funeste. ', ' https://www.pokepedia.fr/images/thumb/f/f8/Otarlette-SL.png/250px-Otarlette-SL.png'),
(63, 9, 730, 'Alola', 'Oratoria', ' Primarina ', ' Eau ', ' Fée', 1.80, 44.00, ' Il contrôle ses ballons d\'eau par son chant, dont la mélodie, apprise auprès de ses semblables, se transmet de génération en génération. ', ' https://www.pokepedia.fr/images/thumb/2/26/Oratoria-SL.png/250px-Oratoria-SL.png'),
(64, 1, 810, 'Galar', 'Ouistempo', ' Grookey ', ' Plante ', ' ', 0.30, 5.00, ' Le rythme qu\'il crée en tapant avec son bâton très spécial génère des ondes sonores qui ont le pouvoir de vivifier les plantes. ', ' https://www.pokepedia.fr/images/thumb/e/e1/Ouistempo-EB.png/250px-Ouistempo-EB.png'),
(65, 2, 811, 'Galar', 'Badabouin', ' Thwackey ', ' Plante ', ' ', 0.70, 14.00, ' Les Badabouin qui parviennent à suivre le rythme le plus effréné avec leurs bâtons sont les plus respectés par leurs camarades. ', ' https://www.pokepedia.fr/images/thumb/7/78/Badabouin-EB.png/250px-Badabouin-EB.png'),
(66, 3, 812, 'Galar', 'Gorythmic', ' Rillaboom ', ' Plante ', ' ', 2.10, 90.00, ' Il contrôle le pouvoir de sa souche singulière en tapant en rythme dessus. Il se bat en manipulant des racines. ', ' https://www.pokepedia.fr/images/thumb/1/1e/Gorythmic-EB.png/250px-Gorythmic-EB.png'),
(67, 4, 813, 'Galar', 'Flambino', ' Scorbunny ', ' Feu ', ' ', 0.30, 4.50, ' Il court pour augmenter sa température et faire circuler l\'énergie incandescente dans son corps. Il peut ainsi déployer toute sa puissance. ', ' https://www.pokepedia.fr/images/thumb/c/c6/Flambino-EB.png/250px-Flambino-EB.png'),
(68, 5, 814, 'Galar', 'Lapyro', ' Raboot ', ' Feu ', ' ', 0.60, 9.00, ' Son pelage épais lui permet de mieux résister au froid et d\'augmenter la température de ses capacités Feu. ', ' https://www.pokepedia.fr/images/thumb/8/89/Lapyro-EB.png/250px-Lapyro-EB.png'),
(69, 6, 815, 'Galar', 'Pyrobut', ' Cinderace ', ' Feu ', ' ', 1.40, 33.00, ' Il drible avec des pierres pour en faire des ballons enflammés, avant de tirer sur ses adversaires pour les brûler. ', ' https://www.pokepedia.fr/images/thumb/6/6d/Pyrobut-EB.png/250px-Pyrobut-EB.png'),
(70, 7, 816, 'Galar', 'Larméléon', ' Sobble ', ' Eau ', ' ', 0.30, 4.00, ' Quand il a peur, il pleure des larmes contenant une substance lacrymogène d\'une puissance équivalente à celle de cent oignons. ', ' https://www.pokepedia.fr/images/thumb/2/2c/Larm%C3%A9l%C3%A9on-EB.png/250px-Larm%C3%A9l%C3%A9on-EB.png'),
(71, 8, 817, 'Galar', 'Arrozard', ' Drizzile ', ' Eau ', ' ', 0.70, 11.50, ' Il crée des bombes à eau grâce au liquide qu\'il sécrète avec la paume de ses mains. Il s\'en sert dans les combats où la stratégie prime. ', ' https://www.pokepedia.fr/images/thumb/e/ee/Arrozard-EB.png/250px-Arrozard-EB.png'),
(72, 9, 818, 'Galar', 'Lézargus', ' Inteleon ', ' Eau ', ' ', 1.90, 45.20, ' Il a plus d\'un tour dans son sac : il peut tirer des gerbes d\'eau du bout de ses doigts et planer dans les airs grâce à ses membranes dorsales. ', ' https://www.pokepedia.fr/images/thumb/2/22/L%C3%A9zargus-EB.png/250px-L%C3%A9zargus-EB.png'),
(73, 1, 906, 'Paldea', 'Poussacha', ' Sprigatito ', ' Plante ', ' ', 0.40, 4.10, ' Ce Pokémon lave assidûment son visage pour éviter qu\'il ne s\'assèche. La composition de son pelage soyeux est proche de celle des plantes. ', ' https://www.pokepedia.fr/images/thumb/5/51/Poussacha-EV.png/250px-Poussacha-EV.png'),
(74, 2, 907, 'Paldea', 'Matourgeon', ' Floragato ', ' Plante ', ' ', 0.90, 12.20, ' Il manie avec habileté la liane dissimulée sous ses longs poils et frappe ses adversaires avec le bourgeon dur situé à son extrémité. ', ' https://www.pokepedia.fr/images/thumb/c/c3/Matourgeon-EV.png/250px-Matourgeon-EV.png'),
(75, 3, 908, 'Paldea', 'Miascarade', ' Meowscarada ', ' Plante ', ' Ténèbre', 1.50, 31.20, ' Il se sert de la réverbération de la lumière sur la fourrure de sa cape pour camoufler sa tige, ce qui donne l\'illusion que sa fleur flotte dans les airs. ', ' https://www.pokepedia.fr/images/thumb/e/e9/Miascarade-EV.png/250px-Miascarade-EV.png'),
(76, 4, 909, 'Paldea', 'Chochodile', ' Fuecoco ', ' Feu ', ' ', 0.40, 9.80, ' Il s\'allonge sur des pierres chaudes et produit de l\'énergie de type Feu grâce à la chaleur absorbée par ses écailles rectangulaires. ', ' https://www.pokepedia.fr/images/thumb/6/6c/Chochodile-EV.png/250px-Chochodile-EV.png'),
(77, 5, 910, 'Paldea', 'Crocrogril', ' Crocalor ', ' Feu ', ' ', 1.00, 30.70, ' La boule de feu en forme d\'œuf qui surmonte sa tête résulte de la fusion entre son énergie de type Feu et son trop-plein de vitalité. ', ' https://www.pokepedia.fr/images/thumb/e/e9/Crocogril-EV.png/250px-Crocogril-EV.png'),
(78, 6, 911, 'Paldea', 'Flâmigator', ' Skeledirge ', ' Feu ', ' Spectre', 1.60, 326.50, ' Quand il chante, son oiseau de feu change de forme. Cet oiseau serait né lorsqu\'une âme a pris possession de sa boule de feu. ', ' https://www.pokepedia.fr/images/thumb/d/d9/Fl%C3%A2migator-EV.png/250px-Fl%C3%A2migator-EV.png'),
(79, 7, 912, 'Paldea', 'Coiffeton', ' Quaxly ', ' Eau ', ' ', 0.50, 6.10, ' Originaire d\'une contrée lointaine, il est venu s\'installer dans la région il y a longtemps. Ses ailes sécrètent un gel qui repousse l\'eau et les saletés. ', ' https://www.pokepedia.fr/images/thumb/5/57/Coiffeton-EV.png/250px-Coiffeton-EV.png'),
(80, 8, 913, 'Paldea', 'Canarbello', ' Quaxwell ', ' Eau ', ' ', 1.20, 21.50, ' Ils courent dans les hauts-fonds pour renforcer les muscles de leurs pattes et rivalisent entre eux pour voir qui a le coup de pied le plus élégant. ', ' https://www.pokepedia.fr/images/thumb/f/f0/Canarbello-EV.png/250px-Canarbello-EV.png'),
(81, 9, 914, 'Paldea', 'Palmaval', ' Quaquaval ', ' Eau ', ' Combat', 1.80, 61.90, ' Il peut propulser un camion dans les airs d\'un simple coup de pied. Ses puissantes pattes lui permettent aussi d\'exécuter des danses insolites. ', ' https://www.pokepedia.fr/images/thumb/9/9f/Palmaval-EV.png/250px-Palmaval-EV.png');

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `id_dresseur` int(11) DEFAULT NULL,
  `id_combat` int(11) DEFAULT NULL,
  `vote_pokemonA` tinyint(1) DEFAULT NULL,
  `vote_pokemonB` tinyint(1) DEFAULT NULL,
  `date_creation` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `num_dresseur` (`num_dresseur`);

--
-- Index pour la table `combat`
--
ALTER TABLE `combat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dresseur` (`id_dresseur`),
  ADD KEY `pokemonA` (`pokemonA`),
  ADD KEY `pokemonB` (`pokemonB`);

--
-- Index pour la table `commentaire_combat`
--
ALTER TABLE `commentaire_combat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_combat` (`id_combat`),
  ADD KEY `id_dresseur` (`id_dresseur`);

--
-- Index pour la table `commentaire_like`
--
ALTER TABLE `commentaire_like`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_like` (`id_dresseur`,`id_commentaire`),
  ADD KEY `id_commentaire` (`id_commentaire`);

--
-- Index pour la table `dresseur`
--
ALTER TABLE `dresseur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `num_account` (`num_account`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pokedex`
--
ALTER TABLE `pokedex`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_vote` (`id_dresseur`,`id_combat`),
  ADD KEY `id_combat` (`id_combat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `combat`
--
ALTER TABLE `combat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `commentaire_like`
--
ALTER TABLE `commentaire_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `dresseur`
--
ALTER TABLE `dresseur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
