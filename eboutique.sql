-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 29 Janvier 2016 à 14:47
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `nom`, `imageURL`, `description`, `prix`, `quantite`, `id_licence`, `id_categorie`, `id_sous_categorie`) VALUES
(1, 'Master Sword', 'http://www.medievalcollectibles.com/images/Product/large/MC-YC-719BL.png', 'Epee légendaire que Link à utilisé pour défaire le mal en Hyrule.\r\nReproduction original', 120, 0, 1, 1, 2),
(2, 'Lame secrete', 'http://media.begeek.fr/2012/07/Lame-secr%C3%A8te-02.jpg', 'Lame utilisé par tous les assassins. Tres discretes elle permet d''effectuer des assassinat sans attirer l''attention.', 50, 2, 8, 1, 2),
(3, 'Sabre Laser', 'http://www.toutesvosrepliques.com/boutique/images_produits/sabrea-z.jpg', 'SABRE LASER', 150, 1, 9, 1, 2),
(5, 'Blaster Laser', 'http://vignette4.wikia.nocookie.net/fr.starwars/images/a/a2/Pistolet_blaster_lourd_DL-44.jpg/revision/latest?cb=20151003191219', 'Bla bla bla', 150, 15, 9, 2, 4),
(6, 'Bouclier Hylien', 'http://ekladata.com/WlIvisem79konrw8PGT3hxiFQpY.jpg', 'Bouclier de Link', 200, 0, 1, 3, 9),
(7, 'Épée de Trafalgar Law', 'http://litbimg.rightinthebox.com/images/384x384/201303/fhgqhi1364539504725.jpg', 'L''épée du capitaine Trafalgar Law', 70, 4, 2, 1, 2),
(8, 'Épée de Roronoa Zoro', 'http://pmcdn.priceminister.com/photo/one-piece-3-katanas-zoro-shusui-wado-kitetsu-epee-sabre-962513628_ML.jpg', 'Les trois épée de Roronoa Zoro le chasseur de pirate et membre de l''équipage du chapeau de paille', 300, 0, 2, 1, 2),
(9, 'Épée-canne de Brook', 'http://one.nbstatic.fr/uploaded/20151023/2917229/__00001_Canne-epee-BROOK-ONE-PIECE-MANGA.JPG', 'La fameuse épée-canne de Brook, le membre squelette de l''équipage du chapeau de paille', 50, 50, 2, 1, 2),
(10, 'Shuriken', 'http://www.toutesvosrepliques.com/boutique/images_produits/zF6633_1.jpg', 'Shuriken utilisé par les ninja de tous les villages.\r\n\r\nLots de 10 shuriken.', 10, 200, 3, 2, 6),
(11, 'Kunai', 'http://www.kamehashop.fr/66-94-large_default/naruto-kunai-arme-de-ninja.jpg', 'Kunai utilisé par les ninjas venant de tous les villages', 10, 180, 3, 2, 6),
(12, 'Hache Tomahawk ', 'http://www.toutesvosrepliques.com/boutique/images_produits/zs9488a1.jpg', 'Réplique du Tomahawk  utilisé par Connor Kenway inspiré du jeu Assassin''s Creed 3.', 40, 1, 8, 1, 2),
(13, 'Epée d''Altair', 'http://www.toutesvosrepliques.com/boutique/images_produits/w5832i1.jpg', 'Reproduction de l''épée d''Altair inspiré du jeu vidéo &quot;Assassin''s Creed&quot;', 60, 50, 8, 1, 2),
(14, 'Couteaux à lancer d''Altair ', 'http://www.toutesvosrepliques.com/boutique/images_produits/p1020469-z.jpg', 'Reproduction des couteaux à lancer d''Altair inspiré du célèbre jeu vidéo &quot;Assassins Creed&quot;. Jeu de 2 couteaux. ', 20, 80, 8, 2, 6),
(15, 'Katana Zanpakuto Zaraki Kenpachi', 'http://www.toutesvosrepliques.com/boutique/images_produits/zs507t.jpg', 'Katana de Kenpachi Zaraki, il est le seul capitaine qui ne connaisse pas le nom de son zanpakuto. ', 70, 0, 4, 1, 2),
(16, 'KATANA ESPADA STARK', 'http://www.toutesvosrepliques.com/boutique/images_produits/js924bk-0002.jpg', 'Reproduction du katana de Stark dans &quot;Bleach&quot;', 50, 43, 4, 1, 2),
(17, 'BANKAI LONGUE NOUVELLE GENERATION', 'http://www.toutesvosrepliques.com/boutique/images_produits/sh543-0005.jpg', 'Réplique à l''identique du bankai nouvelle génération d''ichigo vu dans les derniers épisodes.', 70, 25, 4, 1, 2),
(18, 'Epée de Kirito Dark Répulser Sword Art Online', 'http://www.toutesvosrepliques.com/boutique/images_produits/image561a.jpg', 'Reproduction tout en acier de l''épée Dark Repulser de Kirigaya Kazuto Kirito personnage principal masculin de l''histoire de Sword Art Online.', 95, 4, 6, 1, 2),
(19, 'Epée Asuna', 'http://www.toutesvosrepliques.com/boutique/images_produits/zs9496-3.jpg', 'Réplique de l''épée d''Asuna dans Sword Art Online', 100, 48, 6, 1, 2),
(20, 'EPEE KIRITO Elucidator Sword Art Online', 'http://www.toutesvosrepliques.com/boutique/images_produits/image554b.jpg', 'Reproduction tout en acier de l''épée Elucidator de Kirigaya Kazuto Kirito personnage principal masculin de l''histoire de Sword Art Online.', 94, 25, 6, 1, 2),
(21, 'SORA-KEYBLADE ', 'http://www.toutesvosrepliques.com/boutique/images_produits/kingdomkey_keyblade_5401-z.jpg', 'La meilleure version de fabrication de la Keyblade de Sora dans le jeu vidéo &quot;Kingdom Hearts&quot; ', 60, 19, 5, 1, 1),
(22, 'Keyblade - Souvenir Perdu', 'http://www.toutesvosrepliques.com/boutique/images_produits/cle1.jpg', 'Souvenir perdu est une Keyblade apparaissant tout au long de la série Kingdom Hearts. ', 70, 60, 5, 1, 1),
(23, 'Kylo Ren Force FX Lightsaber ', 'http://www.toutesvosrepliques.com/boutique/images_produits/sabrelaserstarwarsepisode7.jpg', 'Réplique du sabre laser par Hasbro avec halo lumineux bleu et fonctions allumage et extinction réalistes. ', 350, 5, 9, 1, 2),
(24, 'ANAKIN SKYWALKER LIGHTSABER LAME', 'http://pmcdn.priceminister.com/photo/star-wars-sabre-laser-ultimate-fx-anakin-skywalker-to-darth-vader-961758643_L.jpg', 'Réplique du sabre laser par Hasbro avec halo lumineux bleu et fonctions allumage et extinction réalistes. ', 170, 20, 9, 1, 2),
(25, 'Baguette lumineuse Voldemort ', 'http://www.toutesvosrepliques.com/boutique/images_produits/9874_l-z.jpg', 'Agitez la, elle s''allume. Agitez la à nouveau et elle s''éteint !', 50, 34, 11, 2, 11),
(26, 'Baguette bronze Albus Dumbledore', 'http://www.toutesvosrepliques.com/boutique/images_produits/8503-z.jpg', 'Magnifique réplique en bronze de la baguette de Albus Dumbledore, livrée en luxueux présentoir bois.', 175, 15, 11, 2, 11),
(27, 'Baguette Lucius Malfoy', 'http://www.toutesvosrepliques.com/boutique/images_produits/8208-z.jpg', 'Réplique en résine peinte à la main de la baguette de Lucius Malfoy. ', 35, 20, 11, 2, 11),
(28, 'Baguette bronze Harry Potter', 'http://www.toutesvosrepliques.com/boutique/images_produits/8501-z.jpg', 'Réplique en bronze de la baguette de Harry Potter, livrée en luxueux présentoir bois.', 175, 20, 11, 2, 11),
(29, 'Baguette Severus Snape', 'http://ecx.images-amazon.com/images/I/514weNNTQKL._SX425_.jpg', 'Cette baguette est une réplique en résine de la baguette du Professeur Snape. ', 35, 20, 11, 2, 11),
(30, 'Epée Gryffondor', 'http://static.fnac-static.com/multimedia/Images/FR/MC/3d/e6/e1/14804541/1507-1.jpg#3c57d31d-8cef-4b3e-8e7a-813044119ded', 'Réplique à l''échelle 1/1 taille env. 85 cm de l''épée de Godric Gryffondor, finement détaillée avec cristaux (artificiels) sertis. ', 220, 5, 11, 1, 2),
(31, 'Chapeau de paille de Luffy', 'http://jeveuxseduire.fr/wp-content/uploads/2015/09/draguer-le-chapeau-paille-luffy-taille-reelle_2.jpg', 'Chapeau de paille de Monkey D Luffy qui lui a été donné par Shanks le Roux lui même', 10000, 1, 2, 4, 12),
(36, 'azery', 'aezr', 'lambda', 20, 0, 1, 1, 1);

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
  `descriptif` text NOT NULL,
  `date_commande` date NOT NULL,
  `prix_commande` int(11) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `FK_commande_id_users` (`id_users`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `numero_commande`, `descriptif`, `date_commande`, `prix_commande`, `id_users`) VALUES
(16, 7958, 'Lame secrete : 1, Épée de Roronoa Zoro : 1, Kylo Ren Force FX Lightsaber  : 1,  : 1', '2016-01-27', 700, 2),
(17, 1433, 'Epée de Kirito Dark Répulser Sword Art Online : 1, Epée Asuna : 1', '2016-01-27', 195, 3),
(18, 5542, 'Master Sword : 490, Épée de Roronoa Zoro : 30', '2016-01-28', 67800, 3),
(19, 3862, 'Master Sword : 1, Bouclier Hylien : 21', '2016-01-28', 4320, 3),
(20, 4156, 'Épée de Trafalgar Law : 30, Katana Zanpakuto Zaraki Kenpachi : 5, EPEE KIRITO Elucidator Sword Art Online : 10, Baguette lumineuse Voldemort  : 3', '2016-01-29', 3540, 4),
(21, 4458, 'Kunai : 20, azery : 1', '2016-01-29', 220, 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `titre_commentaire`, `commentaire`, `id_article`, `id_users`) VALUES
(1, 'Bonne état', 'Reçu en très bonne état, et dans les temps, très bonne qualité', 1, 1),
(2, 'Bon état', 'Reçu dans les temps en très bonne état', 6, 11);

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
(6, 'http://img15.hostingpics.net/pics/55519275A.gif', 'Sword Art Online'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

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
(7, 'Colliers', 4),
(8, 'Anneaux', 4),
(9, 'Bracelets', 4),
(10, 'Lourd', 3),
(11, 'Baguette', 2),
(12, 'Chapeau', 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_users`, `image_profil`, `nom`, `prenom`, `pseudo`, `admin`, `email`, `age`, `mot_de_passe`, `numero_rue`, `rue`, `ville`, `code_postal`) VALUES
(1, 'https://pixabay.com/static/uploads/photo/2012/04/26/19/43/profile-42914_960_720.png', 'LEPIEZ', 'Nicolas', 'admin', 1, 'admin@gmail.com', 18, 'd033e22ae348aeb5660fc2140aec35850c4da997', 8, 'Avenue Abbé Barbedet', 'Acigné', 35690),
(2, 'https://pixabay.com/static/uploads/photo/2012/04/26/19/43/profile-42914_960_720.png', 'PREMIER', 'Utilisateur', 'User', 0, 'user@gmail.com', NULL, '12dea96fec20593566ab75692c9949596833adc9', 7, 'Avenue abbé barbedet', 'Acigné', 35690),
(3, 'https://pixabay.com/static/uploads/photo/2012/04/26/19/43/profile-42914_960_720.png', 'Darth', 'Vader', 'Darth', 0, 'vader.darth@empire.com', 0, '3d09ba44760d450f0971fb182d8911721f6e01fa', 8, 'rue de la republique', 'Andor', 60000),
(4, '', 'lambert', 'tom', 'kaminari', 0, 'tom_lambert@outlook.fr', 19, '77e4c401984e5d311e746b4f0797a24e3276f694', 5, 'rue des trois ursulines', 'may/orne', 14320),
(5, 'https://pixabay.com/static/uploads/photo/2012/04/26/19/43/profile-42914_960_720.png', 'Truc', 'Much', 'TrucMuch', 0, 'truc@much.com', 20, 'f1bf487dfacd62a83348e53dcc370b8d1128e98c', 8, 'rue des trucs', 'Rennes', 35000),
(6, 'https://pixabay.com/static/uploads/photo/2012/04/26/19/43/profile-42914_960_720.png', 'azerty', 'ytreza', 'azertyu', 0, 'azerty@azerty.com', 20, '9cf95dacd226dcf43da376cdb6cbba7035218921', 5, 'rue d''azerty', 'Caen', 14000),
(7, 'https://pixabay.com/static/uploads/photo/2012/04/26/19/43/profile-42914_960_720.png', 'Toto', 'Tata', 'Tota', 0, 'tota@toto.com', 50, '96543c464bc8f00d27413fcb1965984e271915b3', 5, 'rue des toto', 'ToTown', 80502),
(9, 'https://pixabay.com/static/uploads/photo/2012/04/26/19/43/profile-42914_960_720.png', 'Lambert', 'Tom', 'Tom-san', 0, 'tom@gmail.com', 20, '1d5f29d807ee33b3f42481108436c7026584cb3d', 8, 'rue des toms', 'TomTown', 14320),
(10, 'https://pixabay.com/static/uploads/photo/2012/04/26/19/43/profile-42914_960_720.png', '', '', '', 0, '', 0, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '', '', 0),
(11, 'https://pixabay.com/static/uploads/photo/2012/04/26/19/43/profile-42914_960_720.png', 'azerty', 'azerty', 'tata', 0, 'toto@gmail.com', 20, '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 5, 'rue de toto', 'Rennes', 35000);

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
