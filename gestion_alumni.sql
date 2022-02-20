-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 17 jan. 2019 à 18:36
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_alumni`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `auteur` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `contenu` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `auteur`, `image`, `description`, `contenu`, `date`) VALUES
(2, 'Exemple d\'actualite', 'Khalil', 'CSS3_logo_and_wordmark.svg.png', 'Je suis une actualité', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla ', '2018-12-16 22:31:23'),
(3, 'Projet d\'extention', 'Ben Omar', '15.png', 'voici un autre exemple ', 'qkllslxlmxlxmlxx <br>\r\nkodùkùcdcùcclclcùlxcù<br>\r\nqkllslxlmxlxmlxx <br>\r\nkodùkùcdcùcclclcùlxcù<br>qkllslxlmxlxmlxx <br>\r\nkodùkùcdcùcclclcùlxcù<br>qkllslxlmxlxmlxx <br>\r\nkodùkùcdcùcclclcùlxcù<br>qkllslxlmxlxmlxx <br>\r\nkodùkùcdcùcclclcùlxcù<br>qkllslxlmxlxmlxx <br>\r\nkodùkùcdcùcclclcùlxcù<br>qkllslxlmxlxmlxx <br>\r\nkodùkùcdcùcclclcùlxcù<br>qkllslxlmxlxmlxx <br>\r\nkodùkùcdcùcclclcùlxcù<br>qkllslxlmxlxmlxx <br>\r\nkodùkùcdcùcclclcùlxcù<br>qkllslxlmxlxmlxx <br>\r\nkodùkùcdcùcclclcùlxcù<br>qkllslxlmxlxmlxx <br>\r\nkodùkùcdcùcclclcùlxcù<br>qkllslxlmxlxmlxx <br>\r\nkodùkùcdcùcclclcùlxcù<br>qkllslxlmxlxmlxx <br>\r\nkodùkùcdcùcclclcùlxcù<br>qkllslxlmxlxmlxx <br>\r\n', '2018-10-19 19:57:16'),
(6, 'SDM', 'ML%DFML', '0.png', 'LMFDMLDFM', '?KLJDFJJYYKTODFOMLDFML%ERP¨P¨KL¨KODFVOKDJTRJBK?BVKZERKLKLXCVKLCBVKOPOZERPOCVCVM?LVC?.DFG', '2018-11-24 17:41:18');

-- --------------------------------------------------------

--
-- Structure de la table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `contact` int(11) NOT NULL,
  `password` varchar(250) NOT NULL,
  `cpassword` varchar(250) NOT NULL,
  `genre` varchar(250) NOT NULL,
  `fonction` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin_info`
--

INSERT INTO `admin_info` (`id`, `avatar`, `prenom`, `nom`, `username`, `adresse`, `contact`, `password`, `cpassword`, `genre`, `fonction`) VALUES
(23, 'EasySelfieFront20170612_07_16_12.jpg', 'Ibrahima Ibnu Omar', 'Diaw', 'ibrahimadiaw1997@gmail.com', 'Keur Madiabel', 777933516, 'diaw', 'diaw', 'Masculin', 'Etudiant');

-- --------------------------------------------------------

--
-- Structure de la table `ajout_evenement`
--

CREATE TABLE `ajout_evenement` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `auteur` varchar(250) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `contenu` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ajout_evenement`
--

INSERT INTO `ajout_evenement` (`id`, `titre`, `auteur`, `image`, `description`, `contenu`, `date`) VALUES
(2, 'Projet de fin cycle', 'M Thiam', 'developper-ajax.jpg', 'blzmddmepdcldpqsdqsd', 'dspddlddldldkldldkldfdsdfsdsdlsdlwxcclsdlsdlxldsl<br>																																																						Invitation																		\r\n																																																																				', '2018-10-20 20:22:37'),
(4, 'Projet d\'extension ', 'bla', 'CSS3_logo_and_wordmark.svg.png', 'psdlsd', 'lqsllqqm appélé M Diop', '2018-10-20 20:21:51');

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `name`, `msg`, `date`) VALUES
(10, 'khalil', 'salut', '2018-12-18 08:46:53'),
(11, 'khalil', 'salut coma tu vas', '2018-12-18 08:47:15'),
(12, 'khalil', 'hii', '2018-12-18 08:57:56'),
(13, 'khalil', 'salut tout le monde', '2018-12-18 11:44:05'),
(14, 'Awa Pouye', 'oui salut coma vous allez', '2018-12-18 11:45:33'),
(19, 'Cheikh Ibrahima GUEYE', 'salut', '2018-12-20 00:31:26'),
(20, 'Awa Pouye', 'SALUT Cheikh', '2018-12-20 00:35:41'),
(21, 'khalil', 'salut mes chers', '2018-12-20 00:36:08'),
(22, 'Cheikh Ibrahima GUEYE', 'slt Diaw', '2019-01-11 17:03:27'),
(31, 'Ibrahima  Diaw', 'weih slt gueye', '2019-01-11 17:04:10'),
(32, 'Ibrahima  Diaw', 'salut', '2019-01-13 10:31:20'),
(33, 'Cheikh Ibrahima GUEYE', 'slt khalil Diaw', '2019-01-13 10:31:38');

-- --------------------------------------------------------

--
-- Structure de la table `login_membre`
--

CREATE TABLE `login_membre` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `login_membre`
--

INSERT INTO `login_membre` (`id`, `prenom`, `nom`, `email`, `password`, `cpassword`, `profile`) VALUES
(1, 'Ibrahima', 'Diaw', 'ibrahimadiaw1997@gmail.com', 'diaw', 'diaw', 'admin'),
(2, 'Awa ', 'Pouye', 'awapouyesaly02@gmail.com', 'pouye', 'pouye', 'alumni'),
(3, 'Ibrahima', 'Diaw', 'khalildiaw1997@gmail.com', 'diaw', 'diaw', 'alumni');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `naissance` varchar(250) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `promo` int(11) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `telephone` int(11) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `genre` varchar(250) NOT NULL,
  `universite` varchar(250) NOT NULL,
  `filiere` varchar(250) NOT NULL,
  `encours_de_poursuite` varchar(250) NOT NULL,
  `etablissement` varchar(255) NOT NULL,
  `adresse_etablissement` varchar(255) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `temps` varchar(255) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `contrat` varchar(255) NOT NULL,
  `fourchette` varchar(255) NOT NULL,
  `type_travail` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `salaire` varchar(255) NOT NULL,
  `activation` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `prenom`, `nom`, `naissance`, `adresse`, `promo`, `avatar`, `telephone`, `mail`, `password`, `genre`, `universite`, `filiere`, `encours_de_poursuite`, `etablissement`, `adresse_etablissement`, `specialite`, `temps`, `societe`, `contrat`, `fourchette`, `type_travail`, `lieu`, `salaire`, `activation`) VALUES
(23, 'Cheikh Ibrahim ', 'Gueye', '1996-08-08', 'Dakar', 2016, 'IMG_0137.JPG', 776629133, 'cheikhibrahimagueye151@gmail.com', 'khalil', 'Masculin', 'Universit&eacute; de Thi&egrave;s', 'MIO', 'Employé d\'un service', '', '', '', '5 mois', 'Sonatel Dakar', 'CDD et Technicien Informatique', '45000000', '', '', '', 'oui'),
(24, '   Awa ', 'Pouye', '1995-11-17', 'Saly', 2016, 'IMG-20181101-WA0078[1].jpg', 778471731, 'awapouyesaly02@gmail.com', 'pouye', 'F&eacute;minin', 'Universit&eacute; de Thi&egrave;s', 'MIO', 'Employé indépendant', '', '', '', 'juste apr&eacute;s la licence', '', '', '', 'Directrice d\'un service', 'Saly', '25000000', 'oui'),
(26, 'Babacar', 'Ndiaye', '1994-11-02', 'Walo', 2014, 'FB_IMG_15410924340165032.jpg', 771877918, 'babsgeo18@gmail.com', 'babs', 'Masculin', 'Universit&eacute; de Thi&egrave;s ', 'Management informatis&eacute; des organisations', 'Etudiant(e)', 'Universit&eacute; de Thi&egrave;s ', 'Thi&egrave;s ', 'Banque finance et Assurance', '0', '', '', '', '', '', '', 'oui'),
(28, 'Ousseynou', 'Seck', '1993-11-28', 'Rufisque', 2014, 'IMG_20181027_160837.jpg', 773189568, 'ousseynouseck346@gmail.com', '', 'Masculin', 'Universit&eacute; de Thi&egrave;s', 'Management du tourisme et de l\'h&ocirc;tellerie', 'Etudiant(e)', 'Master en direction h&ocirc;teli&egrave;re et restauration ', 'The Ostelea school of Tourism and Hospitality', 'H&ocirc;tellerie et Restauration', '3mois', '', '', '', '', '', '', 'oui'),
(29, 'Cheikh ', 'Kebe ', '1996-10-21', '282 avenue des gr&eacute;sillons ', 2015, '', 634879587, 'Luptg95@gmail.com ', '', 'Masculin', 'Institut Galil&eacute;e ', 'Informatique', 'Etudiant(e)', 'Institut Galil&eacute;e ', 'Paris ', 'Informatique ', '0', '', '', '', '', '', '', 'oui'),
(30, 'Mamadou', 'Dia', '1995-02-20', 'Thies', 2015, '', 771297079, 'diapape446@gmail.com', '', 'Masculin', 'Universit&eacute; de Thies', 'Management Informatis&eacute; des Organisations', 'Etudiant(e)', 'Universit&eacute; de Thies', 'Au S&eacute;n&eacute;gal', 'Banque Finance et Assurace', '2 mois', '', '', '', '', '', '', 'oui'),
(31, 'Mback&eacute;', 'Niass', '1990-07-29', 'Mbour/M&eacute;dine ', 2015, '', 775094126, 'mbacken2@gmail.com', '', 'Masculin', 'Universit&eacute; de Thi&egrave;s ', 'Management du tourisme et de l\'h&ocirc;tellerie ', 'Etudiant(e)', 'Universit&eacute; de Thi&egrave;s ', 'Thi&egrave;s ', 'Domaine du tourisme et du voyage ', 'J\'ai &eacute;t&eacute; s&eacute;lectionn&eacute; pour le Master juste apr&egrave;s l\'obtention de ma licence ', '', '', '', '', '', '', 'oui'),
(32, 'habibou', 'DIEDHIOU', '1994-05-05', 'Dakar', 2015, '', 770602265, 'habibodh@gmail.com', '', 'Masculin', 'Universite de Thies', 'LMIO', 'Etudiant(e)', '', '', '', '', '', '', '', '', '', '', 'oui'),
(33, 'Ndeye khady', 'Faye', '1994-10-14', 'Mbour3/Thi&egrave;s', 2014, '', 2147483647, 'nkfaye94@gmail.com', '', 'F&eacute;minin', 'universit&eacute; de Thi&egrave;s', 'MIO', 'Etudiant(e)', 'IMAN', 'A Dakar en face UCAD', 'Audit-controle de gestion', 'Une ann&eacute;e', '', '', '', '', '', '', 'oui'),
(34, 'Daniel ', 'Dieme', '1994-03-08', 'Universit&eacute; de Thies ', 2015, '', 775323680, 'danielsylvain9@gmail.com', '', 'Masculin', 'UFR SES', 'Management du Tourisme et de L&rsquo;hot ', 'Etudiant(e)', 'UFR SES ', 'Thies ', 'Management des Activit&eacute;s Touristiques et Culturelles ', 'Deux mois ', '', '', '', '', '', '', 'oui'),
(35, 'Mamadou Dione', 'POUYE', '1989-09-23', 'Bargny Darou1', 2012, '', 774025881, 'Mamadoudione.pouye@univ-thies.sn', '', 'Masculin', 'Universit&eacute; de Thies', 'Management informatis&eacute; des Organisations', 'Employé d\'un service', '', '', '', '6 mois', 'International Staffing Company', 'Prestataire de service', '', '', '', '', 'oui'),
(70, 'Olson', 'BOISGUENE', '06/03/1988', 'HAITI', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, 'Angello', 'TIMEAU', '04/01/1989', 'HAITI', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, 'Fedrice', 'ROMAIN', '12/09/1988', 'HAITI', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, 'Aminata', 'WAGUE', '03/03/1991', 'DAKAR', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, 'Marie-Anne', 'CHAMPAGNE', '06/12/1989', 'HAITI', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, 'Momath', 'THIAM', '20/03/1991', 'KEUR SABASSY THIAM', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, 'Alexandra', 'MOISE', '04/05/1989', 'HAITI', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, 'Combé', 'SECK', '02/01/1990', 'DAKAR', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 'Mbaye Diouf', 'SARR', '10/12/1989', 'THIES', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(79, 'Emilie Hélène Nguénar', 'DIOUF', '05/04/1988', 'DAKAR', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 'Abdou', 'DIENE', '01/05/1989', 'YEUMBEUL', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, 'Yacine', 'CISSE', '01/01/1989', 'NGANDA', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, 'Khadim Rassoul', 'NDEYE', '02/05/1990', 'MBACKE', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, 'Soda', 'DIA', '30/12/1987', 'NDONDOL WOLOF', 2011, '', 0, '', '', 'Féminin', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, 'Papa Amadou', 'FALL', '05/11/1989', 'THIES', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, 'Silly', 'CAMARA', '13/10/1988', 'MALEME NIANI', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, 'Saliou', 'MBALLO', '13/08/1990', 'THIES', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(87, 'Mame Diarra Bousso', 'DIAGNE', '18/02/1986', 'THIES', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, 'Mame Mbathie', 'SECK', '16/10/1990', 'KAOLACK', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, 'Amadou', 'DIALLO', '15/01/1988', 'BOYO SECK', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, 'Mamadou', 'KANE', '20/12/1989', 'THIES', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, 'Babacar', 'DIA', '09/02/88', 'Sébikhotane', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, 'Maïmouna Gora', 'DIAGNE', '05/06/89', 'Thiallé', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, 'Mamadou Lamarana', 'DIALLO', '01/01/89', 'Mbédiéne', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, 'Ndèye Ndoumbé', 'MBOUP', '20/12/89', 'Pire', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, 'Rama', 'TINE', '06/10/1989', 'Thiès', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(96, 'Arona', 'FALL', '11/04/1989', 'Dakar', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(97, 'El Hadji', 'THIAM', '10/11/1990', 'Gankette Guente', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(98, 'Abdou Khadre', 'MBAYE', '28/10/1989', 'Louga', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(99, 'Serigne', 'DIOP', '01/02/86', 'Pire', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(100, 'Aliou', 'NDIAYE', '08/08/1989', 'Thiamène', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(101, 'Mame Diarra Bousso', 'DIAGNE', '18/02/1986', 'THIES', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(102, 'Mariètou', 'DIENG', '17/02/1992', 'SAINT-LOUIS', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(103, 'Mamadou Awa', 'KANOUTE', '05/12/86', 'Dakar', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(104, 'Marième Soda', 'NDIAYE', '29/10/1989', 'DAKAR', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(105, 'Dieynaba', 'DOUCOURE', '10/02/1987', 'DIOURBEL', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(106, 'Abdou', 'NIANG', '07/05/1989', 'TAIBA MBAYE', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(107, 'Sidy Mouhamed', 'DIENG', '27/05/1987', 'TAMBACOUNDA', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(108, 'Ousmane Thiendella', 'FALL', '20/07/1990', 'DIAMAGUENE', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(109, 'Aminata', 'MANGANE', '02/12/1988', 'LALANE', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(110, 'Astou', 'COULIBALY', '13/12/1988', 'SOKONE', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(111, 'Aïssatou Ndiack', 'SOW', '24/02/1990', 'Saint-Louis', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(112, 'Ndèye Diouldé', 'SOW', '30/01/1991', 'THIES', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(113, 'Siga', 'SENGHOR', '31/07/87', 'Diofior', 2011, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(114, 'Kalidou', 'BA', '17/02/1989', 'SANDIARA', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(115, 'Binetou', 'BADJI', '07/10/1994', 'PIKINE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(116, 'Amath', 'BITEYE', '25/09/1989', 'MBITEYENE WALO', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(117, 'Coumba', 'DIAGNE', '22/03/1995', 'PIKINE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(118, 'Aminata', 'DIALLO', '15/06/1990', 'MBORO', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(119, 'Kéba', 'DIALLO', '07/06/1993', 'KEUR YORO KHODIA', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(120, 'Rouguiyatou', 'DIALLO', '11/07/1989', 'MEDINA GOUNASS', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(121, 'Bocar', 'DIAW', '17/05/1992', 'DAKAR', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(122, 'Tanor', 'DIENG', '27/08/1993', 'KHOMBOLE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(123, 'Yacine', 'DIEYE', '06/09/1990', 'SAINT LOUIS', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(124, 'Diamilatou', 'DIOP', '29/11/1991', 'FATICK', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(125, 'Insa', 'DIOP', '25/02/1988', 'DIAMEGUENE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(126, 'Ramata', 'DIOP', '30/11/1990', 'NGAYE NGAYE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(127, 'Sokhna Diarra', 'DIOP', '09/08/1993', 'SAINT LOUIS', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(128, 'Malick', 'DIOUF', '04/08/1992', 'KHAOUL GODAGUENE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(129, 'Mansour', 'DIOUF', '26/03/1993', 'BAMBEY', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(130, 'Papa Mamour', 'DIOUF', '03/01/1989', 'TAMBACOUNDA', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(131, 'Seynabou', 'DIOUF', '11/01/1991', 'DAKAR', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(132, 'Simeon Basse', 'DIOUF', '28/09/1988', 'THIES', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(133, 'Souleymane', 'DIOUF', '28/10/1990', 'NOFLAYE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(134, 'Moussa', 'FADE', '22/06/1987', 'KINSHASA', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(135, 'Adji Soda', 'FALL', '02/07/1989', 'FATICK', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(136, 'Modou Yéro', 'FALL', '15/08/1989', 'GAE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(137, 'Sokhna', 'FALL', '15/03/1988', 'PIKINE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(138, 'Jean Marie Samba', 'FAYE', '04/08/1988', 'MBOUR', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(139, 'Mor Kébé', 'FAYE', '20/10/1991', 'THIES R', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(140, 'Ndèye Khady', 'FAYE', '14/10/1994', 'SIPANE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(141, 'Ndeye Yacine', 'FAYE', '01/01/1990', 'THIES', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(142, 'Astou', 'LEYE', '22/11/1990', 'NDOYENNE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(143, 'Astou', 'LEYE', '07/08/1988', 'NDEREPPE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(144, 'Dieynaba', 'GAYE', '01/01/1992', 'NIANDANE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(145, 'Oumar', 'GUEYE', '19/12/1990', 'PIKINE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(146, 'Sokhna Awa', 'GUEYE', '09/06/1991', 'SAINT-LOUIS', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(147, 'Batouly Ousmane', 'MBAYE', '03/05/1994', 'PETE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(148, 'Mohamed Abdoulaye', 'MBAYE', '13/08/1992', 'DAKAR', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(149, 'Fatou', 'MBAYE', '06/03/1992', 'Keur Ibra Maty', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(150, 'Ibrahima', 'NDAW', '18/07/1992', 'MECKHE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(151, 'Amy', 'NDIAYE', '01/03/1993', 'LAM-LAM', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(152, 'Khady', 'NDIAYE', '19/05/1989', 'POPENGUINE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(153, 'Médoune', 'NDIAYE', '20/09/1990', 'THIES', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(154, 'Tening', 'NDIAYE', '25/01/1991', 'YABO YABO', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(155, 'Aminata', 'SAMB', '11/11/1991', 'THIES', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(156, 'Cheikhou', 'SANKHARE', '14/08/1995', 'AMADJI', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(157, 'Papa Oumar', 'SONKO', '02/01/1985', 'DJILACOUNE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(158, 'Farmata', 'SOUKHOUNA', '20/04/1989', 'OUAOUNDE', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(159, 'Ndiawar Abdoulaye', 'TEUW', '30/08/1992', 'DAKAR', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(160, 'Abdoul Youssouf', 'THIAM', '04/06/1992', 'PODOR', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(161, 'Dominique', 'TISSEIRA', '21/06/1992', 'THIES', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(162, 'Fatou', 'WADE', '01/01/1990', 'THIENABA', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(163, 'Fatou Yacine', 'DIOP', '01/10/1987', 'YEUMBEUL', 2014, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(164, 'El Hadij Yaram', 'SAMB', '02/02/1991', 'SAKAL', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(165, 'Soda', 'DIA', '30/12/1987', 'NDONDOL WOLOF', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(166, 'Cherif', 'MBODJI', '10/04/1989', 'MBOUR', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(167, 'Amadou', 'GUEYE', '01/08/1988', 'SAINT-LOUIS', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(168, 'Safietou', 'FALL', '14/06/1992', 'TIVAOUANE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(169, 'Alioune Aboutalib', 'LO', '14/11/1992', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(170, 'Mayouk', 'FALL', '14/05/1991', 'SAINT-LOUIS', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(171, 'Penda', 'DIAKHATE', '30/09/1991', 'GUEDIAWAYE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(172, 'Malick', 'NIANG', '14/07/1988', 'PIKINE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(173, 'Mamadou Dione', 'POUYE', '23/09/1989', 'RUFISQUE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(174, 'Galaye', 'CISSE', '10/02/1992', 'THIADIAYE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(175, 'Mamadou', 'SENE', '04/071986', 'BANJUL', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(176, 'Mamadou Lamarana', 'DIALLO', '01/01/1989', 'MBEDIENE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(177, 'Sokhna Khady', 'GUEYE', '07/03/1987', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(178, 'Awa', 'SECK', '24/10/1991', 'KEBEMER', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(179, 'Cheikhhouna', 'CISSE', '26/10/1987', 'LOUGA', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(180, 'Abdou khadre', 'MBAYE', '28/01/1989', 'LOUGA', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(181, 'Ibrahima', 'SARR', '01/11/1987', 'RICHARD-TOLL', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(182, 'Ndeye Deguene', 'KEBE', '01/10/1988', 'DAKAR', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(183, 'Abdou', 'NIANG', '19/05/1986', 'TAIBA MBAYE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(184, 'Adja Fatou', 'NDIAYE', '31/10/1989', 'RUFISQUE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(185, 'Rama', 'TINE', '06/10/1989', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(186, 'Serigne', 'DIOP', '01/02/1986', 'PIRE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(187, 'Fatou', 'NDIM', '07/09/1990', 'MECKHE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(188, 'Arona', 'FALL', '11/04/1989', 'DAKAR', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(189, 'Ameth', 'THIAM', '12/05/1992', 'NDIAGNE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(190, 'Mor', 'FALL', '12/08/1998', 'DABEL THIAMENE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(191, 'Mama', 'DABO', '07/04/1991', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(192, 'Modou', 'DIOP', '18/08/1988', 'DAKAR', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(193, 'Djiby Marième', 'BA', '28/10/1987', 'SAKAL', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194, 'Adama', 'FALL', '04/12/1987', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(195, 'Alioune', 'NDIAYE', '08/08/1989', 'THIAMENE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(196, 'Mariéme Soda', 'NDIAYE', '29/10/1989', 'DAKAR', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(197, 'Adja Ndèye Fatou', 'DIAW', '01/09/1989', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(198, 'Marietou', 'DIENG', '17/02/1992', 'SAINT-LOUIS', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(199, 'Maimouna', 'DIALLO', '28/01/1991', 'SEBIKOTANE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(200, 'Dieynaba', 'DOUCOURE', '10/02/1987', 'DIOURBEL', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(201, 'Mame Cheikh', 'DIOP', '22/08/1993', 'SAINT-LOUIS', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(202, 'El Hadij', 'THIAM', '10/11/1990', 'GANKETTE GUENTE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(203, 'Aminata', 'MANGANE', '02/12/1988', 'LALANE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(204, 'Ousmane Thiendella', 'FALL', '20/07/1990', 'DIAMAGUENE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(205, 'Galaye', 'FALL', '18/02/1989', 'OULINGARA', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(206, 'Fatoumata', 'KANTE', '14/07/1990', 'KEUR ALASSANE KHODIA', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(207, 'Aïssatou', 'NDIAYE', '16/05/1989', 'SOKONE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(208, 'Dior', 'SOURANG', '06/12/1989', 'PODOR', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(209, 'Mamadou Lamine', 'DIAKHATE', '05/04/1988', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(210, 'Coumba', 'DIAW', '29/10/1989', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(211, 'Abdoulaye', 'CISSE', '28/03/1992', 'SEDHIOU', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(212, 'Elhadij Madiop', 'GAYE', '03/01/1991', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(213, 'Sokhna', 'DIOP', '01/01/1991', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(214, 'Anta', 'MBENGUE', '03/02/1993', 'KEUR SIDY MBENGUE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(215, 'Salif', 'SALL', '06/01/1991', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(216, 'Abdoul Karim', 'DIALLO', '15/06/1989', 'SINTHIOU MALEME', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(217, 'Dioulde', 'SOW', '30/01/1991', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(218, 'Ramatoulaye', 'GUEYE', '06/11/1989', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(219, 'Seyni', 'SECK', '07/05/1900', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(220, 'Aissatou Ndiack', 'SOW', '24/02/1990', 'SAINT-LOUIS', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(221, 'Fatou', 'DIOP', '28/10/1991', 'GUEDIAWAYE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(222, 'Pape Djibril', 'MBOW', '20/06/1990', 'DAKAR', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(223, 'Ndeye Ndoumbe', 'MBOUP', '20/12/1989', 'PIRE', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(224, 'Mouhamadou Moustapha', 'GUEYE', '12/07/1989', 'THIES', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(225, 'Cheikh', 'FAYE', '30/07/1988', 'MEDINA GOUNASS', 2013, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(227, 'Ibrahima', 'Diaw', '1997-11-16', 'Keur Madiabel', 2016, '', 776629133, 'khalildiaw1997@gmail.com', 'diaw', 'Masculin', 'Universit&eacute; de Thi&egrave;s', 'MIO', 'Etudiant(e)', '', '', '', '', '', '', '', '', '', '', 'oui'),
(228, 'Ibrahima', 'Diaw', '1997-11-16', 'Keur Madiabel', 2016, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `from` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sujet` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `open` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `from`, `email`, `sujet`, `message`, `date`, `open`) VALUES
(2, 'Ibrahima Diaw', 'ibrahimadiaw1997@gmail.com', 'Fête bou nekh', 'c\'est le jour de la tamkharite', '2018-09-20 11:59:16', 1),
(4, 'Awa Pouye', 'awapouyesaly51@gmail.com', 'PFC', 'Ibrahima tu peux m\'envoyer le document', '2018-09-20 12:27:41', 0);

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `id` int(11) NOT NULL,
  `entreprise` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `secteur` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `mission` text NOT NULL,
  `date_debut` date NOT NULL,
  `contrat` varchar(255) NOT NULL,
  `duree` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `competence` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`id`, `entreprise`, `description`, `secteur`, `site`, `slogan`, `titre`, `mission`, `date_debut`, `contrat`, `duree`, `ville`, `profil`, `niveau`, `competence`, `date`) VALUES
(3, 'Digital Tech', '	        		      je suis le descriptif de l\'entreprise\r\n	        	        	        	        	        	        ', 'je suis un secteur', 'www.portailalumni.000webhostapp.com', 'je suis un slogan', 'Assistant Marketing', '	        		 	        		 	 je suis une mission       		\r\n	        	     	        	     	        	     ', '2018-11-07', 'CDD', 'Entre 3 mois et 6 mois', 'Dakar', '	        		     	        		     je suis un profil	        		\r\n	        	        	        	        	        	        ', 'Licence', 'Informatique, Mathematique, Système d\'information', '2018-12-01 01:52:53');

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE `partenaire` (
  `id` int(11) NOT NULL,
  `civilite` varchar(30) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `identifiant` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `entreprise` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `partenaire`
--

INSERT INTO `partenaire` (`id`, `civilite`, `prenom`, `nom`, `poste`, `tel`, `identifiant`, `password`, `entreprise`) VALUES
(9, 'M.', 'Cheikh Ibrahima', 'Gueye', 'Directeur', 777933516, 'khalildiaw@gmail.com', 'diaw', 'Digital Tech'),
(10, 'Mme', 'AWA ', 'Pouye', 'Directrice', 778471731, 'awadigitech@gmail.com', 'pouye', 'pouye'),
(12, 'Mme', 'Coumba', 'sarr', 'Directrice', 124323, 'mafemme@gmail.com', 'coumba', 'Digital Tech');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `country`, `gender`, `password`, `status`) VALUES
(2, 'Awa Pouye', 'awapouyesaly02@gmail.com', 'Saly', 'Féminin', '1345', 0),
(3, 'Cheikh Ibrahima GUEYE', 'cheikhibrahimagueye151@gmail.com', 'Dakar', 'Masculin', '1234', 0),
(4, 'Ibrahima Diaw', 'khalildiaw1997@gmail.com', 'Keur Madiabel', 'Masculin', 'diaw', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ajout_evenement`
--
ALTER TABLE `ajout_evenement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login_membre`
--
ALTER TABLE `login_membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identifiant` (`identifiant`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `ajout_evenement`
--
ALTER TABLE `ajout_evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `login_membre`
--
ALTER TABLE `login_membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
