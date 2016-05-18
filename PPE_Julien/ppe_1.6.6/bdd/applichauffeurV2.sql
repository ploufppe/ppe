-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Mer 11 Mai 2016 à 21:58
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `applichauffeur`
--

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur`
--

CREATE TABLE IF NOT EXISTS `chauffeur` (
  `CHFID` int(11) NOT NULL AUTO_INCREMENT,
  `CHFNOM` char(32) DEFAULT NULL,
  `CHFPRENOM` char(32) DEFAULT NULL,
  `CHFTEL` char(32) DEFAULT NULL,
  `CHFMAIL` char(32) DEFAULT NULL,
  `CHFCOORDGPS` char(32) DEFAULT NULL,
  PRIMARY KEY (`CHFID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100 ;

--
-- Contenu de la table `chauffeur`
--

INSERT INTO `chauffeur` (`CHFID`, `CHFNOM`, `CHFPRENOM`, `CHFTEL`, `CHFMAIL`, `CHFCOORDGPS`) VALUES
(2, 'Bernard\r\n', 'Matt', '065233658', 'ArrayBernard\r\n@MESGUEN.bzh', NULL),
(3, 'Garnier\r\n', 'L', '069983302', 'ArrayGarnier\r\n@MESGUEN.bzh', NULL),
(4, 'Dubois\r\n', 'Evan\r\n', '060584887', 'ArrayDubois\r\n@MESGUEN.bzh', NULL),
(5, 'Faure\r\n', 'Louis\r\n', '063707764', 'ArrayFaure\r\n@MESGUEN.bzh', NULL),
(6, 'Thomas\r\n', 'Tom\r\n', '063660565', 'ArrayThomas\r\n@MESGUEN.bzh', NULL),
(7, 'Rousseau\r\n', 'Maxime\r\n', '060784497', 'ArrayRousseau\r\n@MESGUEN.bzh', NULL),
(8, 'Robert\r\n', 'Arthur\r\n', '061466997', 'ArrayRobert\r\n@MESGUEN.bzh', NULL),
(9, 'Blanc\r\n', 'Thomas\r\n', '069428882', 'ArrayBlanc\r\n@MESGUEN.bzh', NULL),
(10, 'Richard\r\n', 'Yanis\r\n', '067892929', 'ArrayRichard\r\n@MESGUEN.bzh', NULL),
(11, 'Guerin\r\n', 'Alexandre\r\n', '061435184', 'ArrayGuerin\r\n@MESGUEN.bzh', NULL),
(12, 'Petit\r\n', 'Th', '069380981', 'ArrayPetit\r\n@MESGUEN.bzh', NULL),
(13, 'Muller\r\n', 'Hugo\r\n', '063666880', 'ArrayMuller\r\n@MESGUEN.bzh', NULL),
(14, 'Durand\r\n', 'Enzo\r\n', '067677541', 'ArrayDurand\r\n@MESGUEN.bzh', NULL),
(15, 'Henry\r\n', 'Nathan\r\n', '063310524', 'ArrayHenry\r\n@MESGUEN.bzh', NULL),
(16, 'Leroy\r\n', 'Antoine\r\n', '064674366', 'ArrayLeroy\r\n@MESGUEN.bzh', NULL),
(17, 'Roussel\r\n', 'Gabriel\r\n', '067565427', 'ArrayRoussel\r\n@MESGUEN.bzh', NULL),
(18, 'Moreau\r\n', 'Cl', '064111685', 'ArrayMoreau\r\n@MESGUEN.bzh', NULL),
(19, 'Nicolas\r\n', 'Florentin\r\n', '067221874', 'ArrayNicolas\r\n@MESGUEN.bzh', NULL),
(20, 'Simon\r\n', 'Jules\r\n', '061399155', 'ArraySimon\r\n@MESGUEN.bzh', NULL),
(21, 'Perrin\r\n', 'Baptiste\r\n', '068523808', 'ArrayPerrin\r\n@MESGUEN.bzh', NULL),
(22, 'Laurent\r\n', 'Paul\r\n', '068972083', 'ArrayLaurent\r\n@MESGUEN.bzh', NULL),
(23, 'Morin\r\n', 'Alexis\r\n', '067342085', 'ArrayMorin\r\n@MESGUEN.bzh', NULL),
(24, 'Lefebvre\r\n', 'Noah\r\n', '060791055', 'ArrayLefebvre\r\n@MESGUEN.bzh', NULL),
(25, 'Mathieu\r\n', 'Mathis\r\n', '067871662', 'ArrayMathieu\r\n@MESGUEN.bzh', NULL),
(26, 'Michel\r\n', 'Ethan\r\n', '068334980', 'ArrayMichel\r\n@MESGUEN.bzh', NULL),
(27, 'Clement\r\n', 'Quentin\r\n', '061584694', 'ArrayClement\r\n@MESGUEN.bzh', NULL),
(28, 'Garcia\r\n', 'Maxence\r\n', '068731899', 'ArrayGarcia\r\n@MESGUEN.bzh', NULL),
(29, 'Gauthier\r\n', 'Pierre\r\n', '061709033', 'ArrayGauthier\r\n@MESGUEN.bzh', NULL),
(30, 'David\r\n', 'Valentin\r\n', '067866215', 'ArrayDavid\r\n@MESGUEN.bzh', NULL),
(31, 'Dumont\r\n', 'Julien\r\n', '063912382', 'ArrayDumont\r\n@MESGUEN.bzh', NULL),
(32, 'Bertrand\r\n', 'Romain\r\n', '064847286', 'ArrayBertrand\r\n@MESGUEN.bzh', NULL),
(33, 'Lopez\r\n', 'Adam\r\n', '061569649', 'ArrayLopez\r\n@MESGUEN.bzh', NULL),
(34, 'Roux\r\n', 'Victor\r\n', '062673135', 'ArrayRoux\r\n@MESGUEN.bzh', NULL),
(35, 'Fontaine\r\n', 'Mohamed\r\n', '064537687', 'ArrayFontaine\r\n@MESGUEN.bzh', NULL),
(36, 'Vincent\r\n', 'Nicolas\r\n', '063910257', 'ArrayVincent\r\n@MESGUEN.bzh', NULL),
(37, 'Chevalier\r\n', 'Nolan\r\n', '064538506', 'ArrayChevalier\r\n@MESGUEN.bzh', NULL),
(38, 'Fournier\r\n', 'Tim', '067492469', 'ArrayFournier\r\n@MESGUEN.bzh', NULL),
(39, 'Robin\r\n', 'Mathieu\r\n', '066423569', 'ArrayRobin\r\n@MESGUEN.bzh', NULL),
(40, 'Morel\r\n', 'Tristan\r\n', '066367392', 'ArrayMorel\r\n@MESGUEN.bzh', NULL),
(41, 'Masson\r\n', 'Anthony\r\n', '062950571', 'ArrayMasson\r\n@MESGUEN.bzh', NULL),
(42, 'Girard\r\n', 'Antonin\r\n', '069350463', 'ArrayGirard\r\n@MESGUEN.bzh', NULL),
(43, 'Sanchez\r\n', 'Lorenzo\r\n', '069491355', 'ArraySanchez\r\n@MESGUEN.bzh', NULL),
(44, 'Andre\r\n', 'Gabin\r\n', '069068542', 'ArrayAndre\r\n@MESGUEN.bzh', NULL),
(45, 'Gerard\r\n', 'J', '060132759', 'ArrayGerard\r\n@MESGUEN.bzh', NULL),
(46, 'Lefevre\r\n', 'Dylan\r\n', '061083848', 'ArrayLefevre\r\n@MESGUEN.bzh', NULL),
(47, 'Nguyen\r\n', 'Kevin\r\n', '067016046', 'ArrayNguyen\r\n@MESGUEN.bzh', NULL),
(48, 'Mercier\r\n', 'Constant\r\n', '061461495', 'ArrayMercier\r\n@MESGUEN.bzh', NULL),
(49, 'Boyer\r\n', 'Esteban\r\n', '061287880', 'ArrayBoyer\r\n@MESGUEN.bzh', NULL),
(50, 'Dupont\r\n', 'Dorian\r\n', '060797087', 'ArrayDupont\r\n@MESGUEN.bzh', NULL),
(51, 'Lambert\r\n', 'Diego\r\n', '069799840', 'ArrayLambert\r\n@MESGUEN.bzh', NULL),
(52, 'Lemaire\r\n', 'Kyllian\r\n', '068427095', 'ArrayLemaire\r\n@MESGUEN.bzh', NULL),
(53, 'Bonnet\r\n', 'Samuel\r\n', '061823887', 'ArrayBonnet\r\n@MESGUEN.bzh', NULL),
(54, 'Duval\r\n', 'Florian\r\n', '061941892', 'ArrayDuval\r\n@MESGUEN.bzh', NULL),
(55, 'Francois\r\n', 'Thibault\r\n', '069915948', 'ArrayFrancois\r\n@MESGUEN.bzh', NULL),
(56, 'Joly\r\n', 'Adrien\r\n', '060374829', 'ArrayJoly\r\n@MESGUEN.bzh', NULL),
(57, 'Martinez\r\n', 'Benjamin\r\n', '062773508', 'ArrayMartinez\r\n@MESGUEN.bzh', NULL),
(58, 'Roger\r\n', 'Corentin\r\n', '069939349', 'ArrayRoger\r\n@MESGUEN.bzh', NULL),
(59, 'Bourgeois\r\n', 'Eric\r\n', '066465466', 'ArrayBourgeois\r\n@MESGUEN.bzh', NULL),
(60, 'Roche\r\n', 'Kylian\r\n', '062201929', 'ArrayRoche\r\n@MESGUEN.bzh', NULL),
(61, 'Renaud\r\n', 'Mehdi\r\n', '060744140', 'ArrayRenaud\r\n@MESGUEN.bzh', NULL),
(62, 'Roy\r\n', 'No', '069319547', 'ArrayRoy\r\n@MESGUEN.bzh', NULL),
(63, 'Lemoine\r\n', 'R', '064532597', 'ArrayLemoine\r\n@MESGUEN.bzh', NULL),
(64, 'Noel\r\n', 'Simon\r\n', '065326894', 'ArrayNoel\r\n@MESGUEN.bzh', NULL),
(65, 'Picard\r\n', 'Titouan\r\n', '067750159', 'ArrayPicard\r\n@MESGUEN.bzh', NULL),
(66, 'Meyer\r\n', 'Robin\r\n', '068396551', 'ArrayMeyer\r\n@MESGUEN.bzh', NULL),
(67, 'Gaillard\r\n', 'Bastien\r\n', '063929455', 'ArrayGaillard\r\n@MESGUEN.bzh', NULL),
(68, 'Lucas\r\n', 'Kilian\r\n', '065731567', 'ArrayLucas\r\n@MESGUEN.bzh', NULL),
(69, 'Philippe\r\n', 'Killian\r\n', '069208741', 'ArrayPhilippe\r\n@MESGUEN.bzh', NULL),
(70, 'Meunier\r\n', 'Lilian\r\n', '069518193', 'ArrayMeunier\r\n@MESGUEN.bzh', NULL),
(71, 'Leclercq\r\n', 'Martin\r\n', '065900014', 'ArrayLeclercq\r\n@MESGUEN.bzh', NULL),
(72, 'Jean\r\n', 'Amine\r\n', '060741535', 'ArrayJean\r\n@MESGUEN.bzh', NULL),
(73, 'Lacroix\r\n', 'Guillaume\r\n', '069331754', 'ArrayLacroix\r\n@MESGUEN.bzh', NULL),
(74, 'Perez\r\n', 'L', '060191737', 'ArrayPerez\r\n@MESGUEN.bzh', NULL),
(75, 'Fabre\r\n', 'Malo\r\n', '061396929', 'ArrayFabre\r\n@MESGUEN.bzh', NULL),
(76, 'Marchand\r\n', '', '068230041', 'ArrayMarchand\r\n@MESGUEN.bzh', NULL),
(77, 'Dupuis\r\n', 'Davy\r\n', '061536003', 'ArrayDupuis\r\n@MESGUEN.bzh', NULL),
(78, 'Dufour\r\n', 'L', '063773193', 'ArrayDufour\r\n@MESGUEN.bzh', NULL),
(79, 'Olivier\r\n', 'Renaud\r\n', '065451843', 'ArrayOlivier\r\n@MESGUEN.bzh', NULL),
(80, 'Blanchard\r\n', 'Bruno\r\n', '067632473', 'ArrayBlanchard\r\n@MESGUEN.bzh', NULL),
(81, 'Rodriguez\r\n', 'Timoth', '069947547', 'ArrayRodriguez\r\n@MESGUEN.bzh', NULL),
(82, 'Marie\r\n', 'F', '066667428', 'ArrayMarie\r\n@MESGUEN.bzh', NULL),
(83, 'Da silva\r\n', 'Rom', '065006201', 'ArrayDa silva\r\n@MESGUEN.bzh', NULL),
(84, 'Barbier\r\n', 'Yohan\r\n', '064930774', 'ArrayBarbier\r\n@MESGUEN.bzh', NULL),
(85, 'Hubert\r\n', 'Gilbert\r\n', '068962269', 'ArrayHubert\r\n@MESGUEN.bzh', NULL),
(86, 'Brun\r\n', 'Colin\r\n', '062214550', 'ArrayBrun\r\n@MESGUEN.bzh', NULL),
(87, 'Louis\r\n', 'Marwane\r\n', '065407095', 'ArrayLouis\r\n@MESGUEN.bzh', NULL),
(88, 'Dumas\r\n', 'Gaspard\r\n', '068450531', 'ArrayDumas\r\n@MESGUEN.bzh', NULL),
(89, 'Charles\r\n', 'Aaron\r\n', '061623939', 'ArrayCharles\r\n@MESGUEN.bzh', NULL),
(90, 'Brunet\r\n', '', '060927647', 'ArrayBrunet\r\n@MESGUEN.bzh', NULL),
(91, 'Guillot\r\n', 'Gr', '065284723', 'ArrayGuillot\r\n@MESGUEN.bzh', NULL),
(92, 'Schmitt\r\n', 'C', '065064898', 'ArraySchmitt\r\n@MESGUEN.bzh', NULL),
(93, 'Riviere\r\n', 'Zacharis\r\n', '063518640', 'ArrayRiviere\r\n@MESGUEN.bzh', NULL),
(94, 'Leroux\r\n', 'Amaury\r\n', '061355607', 'ArrayLeroux\r\n@MESGUEN.bzh', NULL),
(95, 'Le gall\r\n', 'Fabrice\r\n', '069991084', 'ArrayLe gall\r\n@MESGUEN.bzh', NULL),
(96, 'Colin\r\n', 'David\r\n', '066299232', 'ArrayColin\r\n@MESGUEN.bzh', NULL),
(97, 'Guillaume\r\n', 'Jordan\r\n', '067870043', 'ArrayGuillaume\r\n@MESGUEN.bzh', NULL),
(98, 'Fernandez\r\n', 'Rayane\r\n', '063402706', 'ArrayFernandez\r\n@MESGUEN.bzh', NULL),
(99, 'Adam\r\n', 'Alban', '065140407', 'ArrayAdam\r\n@MESGUEN.bzh', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE IF NOT EXISTS `commune` (
  `VILID` int(11) NOT NULL AUTO_INCREMENT,
  `VILNOM` char(32) DEFAULT NULL,
  PRIMARY KEY (`VILID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=201 ;

--
-- Contenu de la table `commune`
--

INSERT INTO `commune` (`VILID`, `VILNOM`) VALUES
(1, 'Arzano\r\n'),
(2, 'Audierne\r\n'),
(3, 'Bannalec\r\n'),
(4, 'Baye\r\n'),
(5, 'B'),
(6, 'Berrien\r\n'),
(7, 'Beuzec-Cap-Sizun\r\n'),
(8, 'Bodilis\r\n'),
(9, 'Bohars\r\n'),
(10, 'Bolazec\r\n'),
(11, 'Botmeur\r\n'),
(12, 'Botsorhel\r\n'),
(13, 'Bourg-Blanc\r\n'),
(14, 'Brasparts\r\n'),
(15, 'Br'),
(16, 'Brennilis\r\n'),
(17, 'Brest\r\n'),
(18, 'Briec\r\n'),
(19, 'Brignogan-Plages\r\n'),
(20, 'Camaret-sur-Mer\r\n'),
(21, 'Carantec\r\n'),
(22, 'Carhaix-Plouguer\r\n'),
(23, 'Cast\r\n'),
(24, 'Ch'),
(25, 'Ch'),
(26, 'Cl'),
(27, 'Cl'),
(28, 'Cl'),
(29, 'Clohars-Carno'),
(30, 'Clohars-Fouesnant\r\n'),
(31, 'Le Clo'),
(32, 'Le Clo'),
(33, 'Coat-M'),
(34, 'Collorec\r\n'),
(35, 'Combrit\r\n'),
(36, 'Commana\r\n'),
(37, 'Concarneau\r\n'),
(38, 'Confort-Meilars\r\n'),
(39, 'Le Conquet\r\n'),
(40, 'Coray\r\n'),
(41, 'Crozon\r\n'),
(42, 'Daoulas\r\n'),
(43, 'Din'),
(44, 'Dirinon\r\n'),
(45, 'Douarnenez\r\n'),
(46, 'Le Drennec\r\n'),
(47, 'Edern\r\n'),
(48, 'Elliant\r\n'),
(49, 'Ergu'),
(50, 'Esquibien\r\n'),
(51, 'Le Faou\r\n'),
(52, 'La Feuill'),
(53, 'Le Folgo'),
(54, 'La Forest-Landerneau\r\n'),
(55, 'La For'),
(56, 'Fouesnant\r\n'),
(57, 'Garlan\r\n'),
(58, 'Gouesnach\r\n'),
(59, 'Gouesnou\r\n'),
(60, 'Gou'),
(61, 'Goulien\r\n'),
(62, 'Goulven\r\n'),
(63, 'Gourlizon\r\n'),
(64, 'Guengat\r\n'),
(65, 'Guerlesquin\r\n'),
(66, 'Guiclan\r\n'),
(67, 'Guiler-sur-Goyen\r\n'),
(68, 'Guilers\r\n'),
(69, 'Guilligomarc''h\r\n'),
(70, 'Guilvinec\r\n'),
(71, 'Guima'),
(72, 'Guimiliau\r\n'),
(73, 'Guipavas\r\n'),
(74, 'Guipronvel\r\n'),
(75, 'Guiss'),
(76, 'Hanvec\r\n'),
(77, 'Henvic\r\n'),
(78, 'H'),
(79, 'Huelgoat\r\n'),
(80, ''),
(81, ''),
(82, ''),
(83, ''),
(84, 'Irvillac\r\n'),
(85, 'Le Juch\r\n'),
(86, 'Kergloff\r\n'),
(87, 'Kerlaz\r\n'),
(88, 'Kerlouan\r\n'),
(89, 'Kernilis\r\n'),
(90, 'Kernou'),
(91, 'Kersaint-Plabennec\r\n'),
(92, 'Lampaul-Guimiliau\r\n'),
(93, 'Lampaul-Plouarzel\r\n'),
(94, 'Lampaul-Ploudalm'),
(95, 'Lanarvily\r\n'),
(96, 'Land'),
(97, 'Landeleau\r\n'),
(98, 'Landerneau\r\n'),
(99, 'Land'),
(200, 'Argol\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `documentation`
--

CREATE TABLE IF NOT EXISTS `documentation` (
  `DOCID` int(11) NOT NULL AUTO_INCREMENT,
  `TRNNUM` int(11) NOT NULL,
  `TYPDOCID` char(32) NOT NULL,
  `DOCURL` char(32) DEFAULT NULL,
  PRIMARY KEY (`DOCID`),
  KEY `I_FK_DOCUMENTATION_TOURNEE` (`TRNNUM`),
  KEY `I_FK_DOCUMENTATION_TYPEDOCUMENTATION` (`TYPDOCID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE IF NOT EXISTS `etape` (
  `TRNNUM` int(11) NOT NULL,
  `ETPID` int(11) NOT NULL AUTO_INCREMENT,
  `LIEUID` int(11) NOT NULL,
  `ETPHREMIN` datetime DEFAULT NULL,
  `ETPHREMAX` datetime DEFAULT NULL,
  `ETPHREDEBUT` datetime DEFAULT NULL,
  `ETPHREFIN` datetime DEFAULT NULL,
  `ETPNBPALLIV` smallint(6) DEFAULT NULL,
  `ETPNBPALLIVEUR` smallint(6) DEFAULT NULL,
  `ETPNBPALCHARG` smallint(6) DEFAULT NULL,
  `ETPNBPALCHARGEUR` smallint(6) DEFAULT NULL,
  `ETPNBPALRECU` smallint(6) DEFAULT NULL,
  `ETPETATLIV` char(32) DEFAULT NULL,
  `ETPCOMMENTAIRE` char(32) DEFAULT NULL,
  `ETPVAL` char(32) DEFAULT NULL,
  `ETPKM` char(32) DEFAULT NULL,
  PRIMARY KEY (`TRNNUM`,`ETPID`),
  KEY `I_FK_ETAPE_TOURNEE` (`TRNNUM`),
  KEY `I_FK_ETAPE_LIEU` (`LIEUID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `etape`
--

INSERT INTO `etape` (`TRNNUM`, `ETPID`, `LIEUID`, `ETPHREMIN`, `ETPHREMAX`, `ETPHREDEBUT`, `ETPHREFIN`, `ETPNBPALLIV`, `ETPNBPALLIVEUR`, `ETPNBPALCHARG`, `ETPNBPALCHARGEUR`, `ETPNBPALRECU`, `ETPETATLIV`, `ETPCOMMENTAIRE`, `ETPVAL`, `ETPKM`) VALUES
(2, 1, 89, '2016-05-13 12:00:00', '2016-05-13 16:30:00', NULL, '2016-05-13 14:25:00', NULL, NULL, NULL, NULL, NULL, NULL, 'bien', NULL, NULL),
(8, 7, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 2, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 6, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 4, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 3, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 5, 65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE IF NOT EXISTS `lieu` (
  `LIEUID` int(11) NOT NULL AUTO_INCREMENT,
  `VILID` int(11) NOT NULL,
  `LIEUNOM` char(32) DEFAULT NULL,
  PRIMARY KEY (`LIEUID`),
  KEY `I_FK_LIEU_COMMUNE` (`VILID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

--
-- Contenu de la table `lieu`
--

INSERT INTO `lieu` (`LIEUID`, `VILID`, `LIEUNOM`) VALUES
(1, 32, 'Arvor-Roc''h'),
(2, 17, 'Maez-Menez'),
(3, 91, 'K'),
(4, 26, 'Kelenn-LeLouet'),
(5, 43, 'Traezh-Kistin'),
(6, 15, 'Kroaz-Raden'),
(7, 63, 'Melen-Beg'),
(8, 59, 'Karreg-Hir'),
(9, 26, 'Tor-K'),
(10, 34, 'Kozh-Aber'),
(11, 7, 'Bihan-Bod'),
(12, 15, 'Kae-Bras'),
(13, 81, 'Kastell-Karn'),
(14, 76, 'Kelenn-Froud'),
(15, 22, 'Karreg-Koad'),
(16, 92, 'Gwazh-Kistin'),
(17, 7, 'Maen-Poull'),
(18, 39, 'K'),
(19, 10, 'Bevoez-Gwasked'),
(20, 91, 'Menez-Bevoez'),
(21, 6, 'Gougo'),
(22, 24, 'Kroaz-Lan'),
(23, 69, 'Maen-Lez'),
(24, 12, 'Kistin-Tre'),
(25, 76, 'Gwenn-Gwern'),
(26, 31, 'Stank-Goueled'),
(27, 200, 'Rest-Hen'),
(28, 55, 'Maez-Stivell'),
(29, 18, 'Karreg-Gwern'),
(30, 60, 'Yen-Roc''h'),
(31, 3, 'K'),
(32, 20, 'Bod-Mor'),
(33, 32, 'Tor-Feunteun'),
(34, 11, 'Krec''h-Tor'),
(35, 78, 'Hent-Govel'),
(36, 7, 'Lez-Bihan'),
(37, 18, 'Minic''hi-Penn'),
(38, 83, 'LeLouet-Roc''h'),
(39, 25, 'Bezv-Kelenn'),
(40, 15, 'Melen-Menez'),
(41, 76, 'Derv-Bre'),
(42, 78, 'Feunteun-Karn'),
(43, 44, 'Stank-Baz'),
(44, 46, 'Hent-Lenn'),
(45, 5, 'Kemper-Iliz'),
(46, 94, 'Lenn-Minic''hi'),
(47, 34, 'Loc''h-Ti'),
(48, 98, 'Tre-Kozh'),
(49, 7, 'Tevenn-Haleg'),
(50, 32, 'Feunteun-Gwic'),
(51, 97, 'Roz-Rest'),
(52, 72, 'Gwern-Krec''h'),
(53, 80, 'Iliz-Goueled'),
(54, 93, 'Melen-Gouver'),
(55, 31, 'Lenn-Tor'),
(56, 68, 'Bevoez-Traezh'),
(57, 25, 'Meur-Raden'),
(58, 74, 'Maen-Gougo'),
(59, 37, 'Lenn-Du'),
(60, 86, 'Kroaz-Gwern'),
(61, 43, 'Hen-Krec''h'),
(62, 78, 'Aber-Bras'),
(63, 16, 'Argoad-Tor'),
(64, 26, 'Gougo'),
(65, 32, 'Feunteun-Kistin'),
(66, 4, 'St'),
(67, 65, 'St'),
(68, 88, 'Goueled-Killi'),
(69, 92, 'Maez-Lan'),
(70, 52, 'Leti-Gwic'),
(71, 87, 'Gwic-Minic''hi'),
(72, 71, 'Bihan-Gouver'),
(73, 25, 'Killi-Tor'),
(74, 21, 'Lan-Karreg'),
(75, 81, 'Kelenn-Tor'),
(76, 77, 'Uhel-Bezv'),
(77, 30, 'Gougo'),
(78, 13, 'Loc''h-Kelenn'),
(79, 47, 'Minic''hi-Yeun'),
(80, 4, 'Yen-Karreg'),
(81, 6, 'Gwern-Stivell'),
(82, 26, 'LeLouet-Lez'),
(83, 84, 'Karn-Poull'),
(84, 53, 'Bihan-Leti'),
(85, 55, 'Gwern-Du'),
(86, 61, 'Minic''hi-Uhel'),
(87, 93, 'Melen-Skav'),
(88, 24, 'Karn-Maez'),
(89, 75, 'Beg-Gwenn'),
(90, 18, 'Skav-Roc''h'),
(91, 75, 'Haleg-Avelek'),
(92, 17, 'Karreg-Porzh'),
(93, 67, 'Haleg-Lez'),
(94, 97, 'Arvor-Tevenn'),
(95, 28, 'Rest-St'),
(96, 32, 'Lan-Lok'),
(97, 31, 'Killi-Gwic'),
(98, 97, 'Karreg-Bezv'),
(99, 53, 'Lenn-Lenn'),
(100, 14, 'Poull-LeLouet');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `PHOID` int(11) NOT NULL AUTO_INCREMENT,
  `TRNNUM` int(11) NOT NULL,
  `ETPID` char(32) NOT NULL,
  `PHOURL` char(32) DEFAULT NULL,
  PRIMARY KEY (`PHOID`),
  KEY `I_FK_PHOTO_ETAPE` (`TRNNUM`,`ETPID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `test1`
--

CREATE TABLE IF NOT EXISTS `test1` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `info` char(20) NOT NULL,
  PRIMARY KEY (`numero`),
  UNIQUE KEY `info` (`info`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Structure de la table `test2`
--

CREATE TABLE IF NOT EXISTS `test2` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `info` char(20) NOT NULL,
  PRIMARY KEY (`numero`),
  UNIQUE KEY `info` (`info`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Structure de la table `tournee`
--

CREATE TABLE IF NOT EXISTS `tournee` (
  `TRNNUM` int(11) NOT NULL AUTO_INCREMENT,
  `VEHIMMAT` char(32) NOT NULL,
  `CHFID` int(11) NOT NULL,
  `TRNDTE` date NOT NULL,
  `TRNCOMMENTAIRE` char(32) DEFAULT NULL,
  `TRNPECCHAUFFEUR` datetime NOT NULL,
  `TRNARCHAUFFEUR` char(32) DEFAULT NULL,
  PRIMARY KEY (`TRNNUM`),
  KEY `I_FK_TOURNEE_VEHICULE` (`VEHIMMAT`),
  KEY `I_FK_TOURNEE_CHAUFFEUR` (`CHFID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

--
-- Contenu de la table `tournee`
--

INSERT INTO `tournee` (`TRNNUM`, `VEHIMMAT`, `CHFID`, `TRNDTE`, `TRNCOMMENTAIRE`, `TRNPECCHAUFFEUR`, `TRNARCHAUFFEUR`) VALUES
(45, 'CJ378KT', 4, '2016-03-09', 'salut', '2016-03-26 23:10:00', NULL),
(46, 'DQ081IH', 7, '2016-04-22', 'coucou', '2016-04-29 15:00:00', NULL),
(47, 'DQ081IH', 7, '2016-04-22', 'coucou', '2016-04-29 15:00:00', NULL),
(48, 'AM779QG', 2, '2016-05-02', 'Tapez votre texte!', '0000-00-00 00:00:00', NULL),
(50, 'AM779QG', 2, '2016-05-02', 'Tapez votre texte!', '0000-00-00 00:00:00', NULL),
(51, 'AM779QG', 2, '2016-05-02', 'Tapez votre texte!', '0000-00-00 00:00:00', NULL),
(52, 'AM779QG', 2, '2016-05-02', 'Tapez votre texte!', '2016-03-04 00:00:00', NULL),
(53, 'AM779QG', 2, '2016-05-02', 'Tapez votre texte!', '2016-03-04 00:00:00', NULL),
(54, 'AM779QG', 2, '2016-05-02', 'Tapez votre texte!', '0000-00-00 00:00:00', NULL),
(55, 'DS570JY', 2, '2016-05-02', 'Tapez votre texte!', '0000-00-00 00:00:00', NULL),
(56, 'DS570JY', 5, '2016-05-02', 'Tapez votre texte!', '0000-00-00 00:00:00', NULL),
(57, 'DS570JY', 5, '2016-05-02', 'Tapez votre texte!', '0000-00-00 00:00:00', NULL),
(58, 'DS570JY', 5, '2016-05-02', 'Tapez votre texte!', '0000-00-00 00:00:00', NULL),
(59, 'DS570JY', 5, '2016-05-02', 'Tapez votre texte!', '2016-05-02 19:05:41', NULL),
(60, 'AM779QG', 15, '2016-05-02', 'salut', '2016-05-02 19:06:38', NULL),
(61, 'AM779QG', 2, '2016-05-02', 'top', '2016-05-02 19:22:36', NULL),
(62, 'AM779QG', 2, '2016-05-02', 'top moumoutte', '2016-05-02 19:23:56', NULL),
(63, 'DQ081IH', 19, '2016-05-02', 'trop', '2016-05-02 19:25:32', NULL),
(64, 'DM094IC', 12, '2016-05-11', 'bien', '2016-05-11 20:35:07', NULL),
(65, 'CP717QZ', 14, '2016-05-13', 'super', '2016-05-11 20:35:56', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `typedocumentation`
--

CREATE TABLE IF NOT EXISTS `typedocumentation` (
  `TYPDOCID` int(11) NOT NULL AUTO_INCREMENT,
  `TYPDOCLIB` char(32) DEFAULT NULL,
  PRIMARY KEY (`TYPDOCID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE IF NOT EXISTS `vehicule` (
  `VEHIMMAT` char(32) NOT NULL,
  `VEHNOM` char(32) DEFAULT NULL,
  PRIMARY KEY (`VEHIMMAT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`VEHIMMAT`, `VEHNOM`) VALUES
('AM779QG', 'MERCEDES_AXOR'),
('AO824ZM', 'MAN_TGX'),
('AP653ZJ', 'RENAULT_KERAX'),
('AQ469VT', 'MAN_TGX'),
('AX172SH', 'RENAULT_MIDLUM'),
('AX752FJ', 'RENAULT_KERAX'),
('BN204KV', 'RENAULT_KERAX'),
('BO170FI', 'MERCEDES_AXOR'),
('CJ378KT', 'RENAULT_MIDLUM'),
('CP717QZ', 'RENAULT_KERAX'),
('CQ793LM', 'MERCEDES_AXOR'),
('DH064QV', 'MERCEDES_AXOR'),
('DM094IC', 'RENAULT_MIDLUM'),
('DP695ZW', 'RENAULT_KERAX'),
('DQ081IH', 'MAN_TGX'),
('DR254AQ', 'RENAULT_MIDLUM'),
('DS570JY', 'RENAULT_MIDLUM'),
('EX162CV', 'RENAULT_KERAX'),
('FB174JQ', 'MAN_TGX'),
('FC584WO', 'MAN_TGX'),
('FI045SX', 'MERCEDES_AXOR'),
('FS123MQ', 'RENAULT_MIDLUM'),
('FV700ZW', 'MERCEDES_AXOR'),
('GE371UB', 'MERCEDES_AXOR'),
('GE951HC', 'MERCEDES_AXOR'),
('GH562YW', 'RENAULT_MIDLUM'),
('GL832QK', 'RENAULT_MIDLUM'),
('GQ922IV', 'MAN_TGX'),
('GQ956NI', 'RENAULT_KERAX'),
('HB350QJ', 'MAN_TGX'),
('HD033VQ', 'MERCEDES_AXOR'),
('HE714MM', 'RENAULT_KERAX'),
('HG054AI', 'RENAULT_MIDLUM'),
('HJ529WM', 'MAN_TGX'),
('HK324RW', 'MERCEDES_AXOR'),
('HQ798CP', 'MERCEDES_AXOR'),
('HS323YW', 'MAN_TGX'),
('HV900KC', 'RENAULT_KERAX'),
('IB696WE', 'MERCEDES_AXOR'),
('IE136OV', 'MERCEDES_AXOR'),
('IL306UY', 'MERCEDES_AXOR'),
('IP746LP', 'RENAULT_MIDLUM'),
('IX967IS', 'MERCEDES_AXOR'),
('JE048CF', 'MAN_TGX'),
('JE482UR', 'RENAULT_MIDLUM'),
('JH489UW', 'MAN_TGX'),
('JS533JC', 'RENAULT_MIDLUM'),
('JZ948KV', 'MERCEDES_AXOR'),
('KC145VG', 'RENAULT_MIDLUM'),
('KN877JD', 'RENAULT_MIDLUM'),
('LY592OM', 'MERCEDES_AXOR'),
('MI830HI', 'RENAULT_KERAX'),
('MK885RN', 'RENAULT_KERAX'),
('MP566WZ', 'RENAULT_MIDLUM'),
('NR933GO', 'RENAULT_KERAX'),
('NV817QQ', 'MERCEDES_AXOR'),
('NZ112MR', 'RENAULT_KERAX'),
('OG381SU', 'RENAULT_KERAX'),
('ON550YX', 'MAN_TGX'),
('OU729EA', 'MAN_TGX'),
('OZ485FZ', 'MAN_TGX'),
('PB998KD', 'MAN_TGX'),
('PP197JO', 'RENAULT_MIDLUM'),
('PR686KF', 'RENAULT_KERAX'),
('PR723FV', 'RENAULT_MIDLUM'),
('PX752XD', 'RENAULT_KERAX'),
('PZ363OW', 'MAN_TGX'),
('RH596LQ', 'MAN_TGX'),
('RI548CP', 'RENAULT_KERAX'),
('RX716OT', 'RENAULT_KERAX'),
('SA271KW', 'RENAULT_MIDLUM'),
('SH860DY', 'RENAULT_MIDLUM'),
('SJ939RR', 'RENAULT_KERAX'),
('SM404NU', 'RENAULT_MIDLUM'),
('SY409TA', 'MAN_TGX'),
('TB286RM', 'MERCEDES_AXOR'),
('TC091NW', 'MERCEDES_AXOR'),
('TD067IJ', 'RENAULT_KERAX'),
('TK656BL', 'RENAULT_KERAX'),
('TL042KW', 'MAN_TGX'),
('TM848FG', 'MAN_TGX'),
('TN791KQ', 'RENAULT_MIDLUM'),
('TT253GZ', 'RENAULT_KERAX'),
('TU083GW', 'RENAULT_MIDLUM'),
('TW208PE', 'RENAULT_MIDLUM'),
('UZ095NR', 'RENAULT_KERAX'),
('VO707RG', 'MERCEDES_AXOR'),
('VU046XM', 'RENAULT_MIDLUM'),
('VW396LH', 'MAN_TGX'),
('WC599VY', 'RENAULT_KERAX'),
('WQ630KI', 'MAN_TGX'),
('WS323QP', 'MERCEDES_AXOR'),
('XO280VU', 'MAN_TGX'),
('XZ470GQ', 'MERCEDES_AXOR'),
('YC119UC', 'MERCEDES_AXOR'),
('YF288IV', 'RENAULT_KERAX'),
('YJ992SU', 'MAN_TGX'),
('YN672XG', 'RENAULT_KERAX'),
('ZD926EW', 'MAN_TGX'),
('ZS487GF', 'MERCEDES_AXOR');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
