-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 24 Janvier 2016 à 22:35
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `eboutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `imageURL` varchar(250) NOT NULL,
  `description` text,
  `prix` float DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `id_licence` int(11) DEFAULT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_sous_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `FK_articles_id_licenses` (`id_licence`),
  KEY `FK_articles_id_categorie` (`id_categorie`),
  KEY `FK_articles_id_sous_categorie` (`id_sous_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `nom`, `imageURL`, `description`, `prix`, `quantite`, `id_licence`, `id_categorie`, `id_sous_categorie`) VALUES
(1, 'Master Sword', 'http://www.medievalcollectibles.com/images/Product/large/MC-YC-719BL.png', 'Epee légendaire que Link à utilisé pour défaire le mal en Hyrule.\r\nReproduction original', 120, 30, 1, 1, 2),
(2, 'Lame secrete', 'http://media.begeek.fr/2012/07/Lame-secr%C3%A8te-02.jpg', 'Lame utilisé par tous les assassins. Tres discretes elle permet d''effectuer des assassinat sans attirer l''attention.', 50, 50, 8, 1, 2),
(3, 'Sabre Laser', 'http://static.hitek.fr/img/actualite/w_sabre-laser-dark-vador.jpg', 'SABRE LASER', 1000, 1, 9, 1, 2),
(5, 'Blaster Laser', 'http://vignette4.wikia.nocookie.net/fr.starwars/images/a/a2/Pistolet_blaster_lourd_DL-44.jpg/revision/latest?cb=20151003191219', 'Bla bla bla', 150, 15, 9, 2, 4),
(6, 'Bouclier Hylien', 'http://ekladata.com/WlIvisem79konrw8PGT3hxiFQpY.jpg', 'Bouclier de Link', 200, 50, 1, 3, 11),
(7, 'Épée de Trafalgar Law', 'http://litbimg.rightinthebox.com/images/384x384/201303/fhgqhi1364539504725.jpg', 'L''épée du capitaine Trafalgar Law', 70, 20, 2, 1, 2),
(8, 'Épée de Roronoa Zoro', 'http://pmcdn.priceminister.com/photo/one-piece-3-katanas-zoro-shusui-wado-kitetsu-epee-sabre-962513628_ML.jpg', 'Les trois épée de Roronoa Zoro le chasseur de pirate et membre de l''équipage du chapeau de paille', 300, 10, 2, 1, 2),
(9, 'Épée-canne de Brook', 'http://one.nbstatic.fr/uploaded/20151023/2917229/__00001_Canne-epee-BROOK-ONE-PIECE-MANGA.JPG', 'La fameuse épée-canne de Brook, le membre squelette de l''équipage du chapeau de paille', 50, 50, 2, 1, 2),
(10, 'Shuriken', 'http://www.toutesvosrepliques.com/boutique/images_produits/zF6633_1.jpg', 'Shuriken utilisé par les ninja de tous les villages', 10, 500, 3, 2, 6),
(11, 'Kunai', 'http://www.kamehashop.fr/66-94-large_default/naruto-kunai-arme-de-ninja.jpg', 'Kunai utilisé par les ninjas venant de tous les villages', 10, 250, 3, 2, 6);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `imageURL` varchar(255) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `imageURL`, `nom`) VALUES
(1, 'http://www.icone-gif.com/icone/armes/epees/download/epees-icone-012.ico', 'Armes Mêlées'),
(2, 'http://www.icone-png.com/png/17/16753.png', 'Armes Distances'),
(3, 'http://www.icone-png.com/png/49/48667.png', 'Boucliers'),
(4, 'http://vignette4.wikia.nocookie.net/zelda/images/8/87/Ic%C3%B4ne_Bracelet_Goron_OOT3D.png/revision/latest?cb=20151025221441&path-prefix=fr', 'Accesoires');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `numero_commande` int(11) DEFAULT NULL,
  `date_commande` date DEFAULT NULL,
  `prix_commande` int(11) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `FK_commande_id_users` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `titre_commentaire` varchar(255) NOT NULL,
  `commentaire` text,
  `id_article` int(11) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `FK_commentaire_id_article` (`id_article`),
  KEY `FK_commentaire_id_users` (`id_users`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `titre_commentaire`, `commentaire`, `id_article`, `id_users`) VALUES
(1, 'Bonne état', 'Reçu en très bonne état, et dans les temps, très bonne qualité', 1, 1),
(2, 'Pas tout à fait satisfait', 'Prix un peu élevé pour la qualité de l''article !!! Reçu dans les temps', 7, 4),
(3, 'Magnifique', 'Article magnifique, arrivé dans les temps, exactement ce que je recherchais !', 7, 2),
(4, 'Bon état', 'Arrivé dans les temps et en bonne état, un peu petit ceci dit', 6, 2);

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE IF NOT EXISTS `contient` (
  `id_article` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  PRIMARY KEY (`id_article`,`id_commande`),
  KEY `FK_contient_id_commande` (`id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `licences`
--

CREATE TABLE IF NOT EXISTS `licences` (
  `id_licence` int(11) NOT NULL AUTO_INCREMENT,
  `imageURL` varchar(255) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_licence`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `licences`
--

INSERT INTO `licences` (`id_licence`, `imageURL`, `nom`) VALUES
(1, 'http://i18.servimg.com/u/f18/11/22/11/96/1575010.gif', 'The Legend of Zelda'),
(2, 'http://i1113.photobucket.com/albums/k508/agung_wisudhatama/One%20Piece%20Icon%20Gif/one-piece-ace.gif', 'One Piece'),
(3, 'http://orig00.deviantart.net/0098/f/2009/186/e/1/naruto_bijuu_form_icon_by_scratch_the_hedgie.gif', 'Naruto'),
(4, 'http://orig12.deviantart.net/0a03/f/2009/064/0/8/bankai_hollow_ichigo_by_liv2ride.gif', 'Bleach'),
(5, 'http://i264.photobucket.com/albums/ii185/Naruto_Shippuuden_Lover/Kingdom%20Hearts/KingdomKeyGIF.gif', 'Kingdom Heart'),
(6, 'http://a.deviantart.net/avatars/c/h/chey175.gif?2', 'Fairy Tail'),
(7, 'http://www.finalfantasykingdom.net/4/YellowChocobo.gif', 'Final Fantasy'),
(8, 'http://www.rw-designer.com/cursor-view/61037.gif', 'Assassin''s Creed'),
(9, 'http://pixeljoint.com/files/icons/vaderflow.gif', 'Star Wars'),
(10, 'http://orig02.deviantart.net/64e7/f/2013/356/f/8/free_poro_icon___feed_me__by_lokkerd-d65a1pt.gif', 'League of Legend'),
(11, 'http://harrypotter.augrandbazar.com/Gifs/Gifs1/harrypotterdrole.gif', 'Harry Potter');

-- --------------------------------------------------------

--
-- Structure de la table `sous_categories`
--

CREATE TABLE IF NOT EXISTS `sous_categories` (
  `id_sous_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sous_categorie`),
  KEY `FK_sous_categories_id_categorie` (`id_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `sous_categories`
--

INSERT INTO `sous_categories` (`id_sous_categorie`, `nom`, `id_categorie`) VALUES
(1, 'Contondantes', 1),
(2, 'Tranchantes', 1),
(3, 'Longues', 1),
(4, 'Armes à feu', 2),
(5, 'Arcs', 2),
(6, 'Armes de jets', 2),
(8, 'Colliers', 4),
(9, 'Anneaux', 4),
(10, 'Bracelets', 4),
(11, 'Lourd', 3),
(12, 'Baguette', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `image_profil` varchar(250) NOT NULL,
  `nom` varchar(35) DEFAULT NULL,
  `prenom` varchar(35) DEFAULT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `mot_de_passe` varchar(100) DEFAULT NULL,
  `numero_rue` int(11) NOT NULL,
  `rue` varchar(25) DEFAULT NULL,
  `ville` varchar(25) DEFAULT NULL,
  `code_postal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_users`, `image_profil`, `nom`, `prenom`, `pseudo`, `admin`, `email`, `age`, `mot_de_passe`, `numero_rue`, `rue`, `ville`, `code_postal`) VALUES
(1, 'https://pixabay.com/static/uploads/photo/2012/04/26/19/43/profile-42914_960_720.png', 'LEPIEZ', 'Nicolas', 'admin', 1, 'admin@gmail.com', 18, 'admin', 8, 'Avenue Abbé Barbedet', 'Acigné', 35690),
(2, 'https://pixabay.com/static/uploads/photo/2012/04/26/19/43/profile-42914_960_720.png', 'PREMIER', 'Utilisateur', 'User', 0, 'user@gmail.com', NULL, 'user', 7, 'Avenue abbé barbedet', 'Acigné', 35690),
(4, 'https://pixabay.com/static/uploads/photo/2012/04/26/19/43/profile-42914_960_720.png', 'Darth', 'Vader', 'Darth', 0, 'vader.darth@empire.com', 0, 'dark', 8, 'rue de la republique', 'Andor', 60000);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `FK_articles_id_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`),
  ADD CONSTRAINT `FK_articles_id_licenses` FOREIGN KEY (`id_licence`) REFERENCES `licences` (`id_licence`),
  ADD CONSTRAINT `FK_articles_id_sous_categorie` FOREIGN KEY (`id_sous_categorie`) REFERENCES `sous_categories` (`id_sous_categorie`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_commande_id_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_commentaire_id_article` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`),
  ADD CONSTRAINT `FK_commentaire_id_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `FK_contient_id_article` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`),
  ADD CONSTRAINT `FK_contient_id_commande` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`);

--
-- Contraintes pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD CONSTRAINT `FK_sous_categories_id_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
