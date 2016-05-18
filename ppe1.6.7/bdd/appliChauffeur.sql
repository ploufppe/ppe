-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 28 Janvier 2016 à 15:20
-- Version du serveur: 5.5.46
-- Version de PHP: 5.4.45-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `appliChauffeur`
--

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur`
--

CREATE TABLE IF NOT EXISTS `chauffeur` (
  `CHFID` char(32) NOT NULL,
  `CHFNOM` char(32) DEFAULT NULL,
  `CHFPRENOM` char(32) DEFAULT NULL,
  `CHFTEL` char(32) DEFAULT NULL,
  `CHFMAIL` char(32) DEFAULT NULL,
  PRIMARY KEY (`CHFID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chauffeur`
--

INSERT INTO `chauffeur` (`CHFID`, `CHFNOM`, `CHFPRENOM`, `CHFTEL`, `CHFMAIL`) VALUES
('0', 'Martin\n', 'Dimitri\n', '067317405', 'ArrayMartin\n@Caponant.BZH'),
('1', 'Legrand\n', 'Lucas\n', '064814832', 'ArrayLegrand\n@Caponant.BZH'),
('10', 'Richard\n', 'Yanis\n', '060670386', 'ArrayRichard\n@Caponant.BZH'),
('11', 'Guerin\n', 'Alexandre\n', '067829149', 'ArrayGuerin\n@Caponant.BZH'),
('12', 'Petit\n', 'Th?o\n', '068930843', 'ArrayPetit\n@Caponant.BZH'),
('13', 'Muller\n', 'Hugo\n', '068663268', 'ArrayMuller\n@Caponant.BZH'),
('14', 'Durand\n', 'Enzo\n', '061972553', 'ArrayDurand\n@Caponant.BZH'),
('15', 'Henry\n', 'Nathan\n', '069306125', 'ArrayHenry\n@Caponant.BZH'),
('16', 'Leroy\n', 'Antoine\n', '063751781', 'ArrayLeroy\n@Caponant.BZH'),
('17', 'Roussel\n', 'Gabriel\n', '065253917', 'ArrayRoussel\n@Caponant.BZH'),
('18', 'Moreau\n', 'Cl?ment\n', '061853736', 'ArrayMoreau\n@Caponant.BZH'),
('19', 'Nicolas\n', 'Florentin\n', '062892209', 'ArrayNicolas\n@Caponant.BZH'),
('2', 'Bernard\n', 'Matt?o\n', '066689837', 'ArrayBernard\n@Caponant.BZH'),
('20', 'Simon\n', 'Jules\n', '064257008', 'ArraySimon\n@Caponant.BZH'),
('21', 'Perrin\n', 'Baptiste\n', '067802155', 'ArrayPerrin\n@Caponant.BZH'),
('22', 'Laurent\n', 'Paul\n', '060722585', 'ArrayLaurent\n@Caponant.BZH'),
('23', 'Morin\n', 'Alexis\n', '063216018', 'ArrayMorin\n@Caponant.BZH'),
('24', 'Lefebvre\n', 'Noah\n', '063177424', 'ArrayLefebvre\n@Caponant.BZH'),
('25', 'Mathieu\n', 'Mathis\n', '064231143', 'ArrayMathieu\n@Caponant.BZH'),
('26', 'Michel\n', 'Ethan\n', '063994626', 'ArrayMichel\n@Caponant.BZH'),
('27', 'Clement\n', 'Quentin\n', '062125342', 'ArrayClement\n@Caponant.BZH'),
('28', 'Garcia\n', 'Maxence\n', '064507784', 'ArrayGarcia\n@Caponant.BZH'),
('29', 'Gauthier\n', 'Pierre\n', '061086327', 'ArrayGauthier\n@Caponant.BZH'),
('3', 'Garnier\n', 'L?o\n', '068423437', 'ArrayGarnier\n@Caponant.BZH'),
('30', 'David\n', 'Valentin\n', '065619613', 'ArrayDavid\n@Caponant.BZH'),
('31', 'Dumont\n', 'Julien\n', '062395521', 'ArrayDumont\n@Caponant.BZH'),
('32', 'Bertrand\n', 'Romain\n', '068632249', 'ArrayBertrand\n@Caponant.BZH'),
('33', 'Lopez\n', 'Adam\n', '069231328', 'ArrayLopez\n@Caponant.BZH'),
('34', 'Roux\n', 'Victor\n', '067562282', 'ArrayRoux\n@Caponant.BZH'),
('35', 'Fontaine\n', 'Mohamed\n', '068951346', 'ArrayFontaine\n@Caponant.BZH'),
('36', 'Vincent\n', 'Nicolas\n', '068686319', 'ArrayVincent\n@Caponant.BZH'),
('37', 'Chevalier\n', 'Nolan\n', '065585826', 'ArrayChevalier\n@Caponant.BZH'),
('38', 'Fournier\n', 'Tim?o\n', '061558011', 'ArrayFournier\n@Caponant.BZH'),
('39', 'Robin\n', 'Mathieu\n', '062931882', 'ArrayRobin\n@Caponant.BZH'),
('4', 'Dubois\n', 'Evan\n', '061119536', 'ArrayDubois\n@Caponant.BZH'),
('40', 'Morel\n', 'Tristan\n', '062380076', 'ArrayMorel\n@Caponant.BZH'),
('41', 'Masson\n', 'Anthony\n', '063868443', 'ArrayMasson\n@Caponant.BZH'),
('42', 'Girard\n', 'Antonin\n', '062703262', 'ArrayGirard\n@Caponant.BZH'),
('43', 'Sanchez\n', 'Lorenzo\n', '063736677', 'ArraySanchez\n@Caponant.BZH'),
('44', 'Andre\n', 'Gabin\n', '065697988', 'ArrayAndre\n@Caponant.BZH'),
('45', 'Gerard\n', 'J?r?my\n', '069553411', 'ArrayGerard\n@Caponant.BZH'),
('46', 'Lefevre\n', 'Dylan\n', '068550264', 'ArrayLefevre\n@Caponant.BZH'),
('47', 'Nguyen\n', 'Kevin\n', '065269005', 'ArrayNguyen\n@Caponant.BZH'),
('48', 'Mercier\n', 'Constant\n', '067733321', 'ArrayMercier\n@Caponant.BZH'),
('49', 'Boyer\n', 'Esteban\n', '063193746', 'ArrayBoyer\n@Caponant.BZH'),
('5', 'Faure\n', 'Louis\n', '069323148', 'ArrayFaure\n@Caponant.BZH'),
('50', 'Dupont\n', 'Dorian\n', '062580141', 'ArrayDupont\n@Caponant.BZH'),
('51', 'Lambert\n', 'Diego\n', '064160429', 'ArrayLambert\n@Caponant.BZH'),
('52', 'Lemaire\n', 'Kyllian\n', '064342175', 'ArrayLemaire\n@Caponant.BZH'),
('53', 'Bonnet\n', 'Samuel\n', '065078262', 'ArrayBonnet\n@Caponant.BZH'),
('54', 'Duval\n', 'Florian\n', '060182773', 'ArrayDuval\n@Caponant.BZH'),
('55', 'Francois\n', 'Thibault\n', '068153313', 'ArrayFrancois\n@Caponant.BZH'),
('56', 'Joly\n', 'Adrien\n', '067432774', 'ArrayJoly\n@Caponant.BZH'),
('57', 'Martinez\n', 'Benjamin\n', '069504673', 'ArrayMartinez\n@Caponant.BZH'),
('58', 'Roger\n', 'Corentin\n', '069359541', 'ArrayRoger\n@Caponant.BZH'),
('59', 'Bourgeois\n', 'Eric\n', '062151304', 'ArrayBourgeois\n@Caponant.BZH'),
('6', 'Thomas\n', 'Tom\n', '069715395', 'ArrayThomas\n@Caponant.BZH'),
('60', 'Roche\n', 'Kylian\n', '066183515', 'ArrayRoche\n@Caponant.BZH'),
('61', 'Renaud\n', 'Mehdi\n', '063902507', 'ArrayRenaud\n@Caponant.BZH'),
('62', 'Roy\n', 'No', '062811160', 'ArrayRoy\n@Caponant.BZH'),
('63', 'Lemoine\n', 'R?mi\n', '067129370', 'ArrayLemoine\n@Caponant.BZH'),
('64', 'Noel\n', 'Simon\n', '066752946', 'ArrayNoel\n@Caponant.BZH'),
('65', 'Picard\n', 'Titouan\n', '065528531', 'ArrayPicard\n@Caponant.BZH'),
('66', 'Meyer\n', 'Robin\n', '061383194', 'ArrayMeyer\n@Caponant.BZH'),
('67', 'Gaillard\n', 'Bastien\n', '063650870', 'ArrayGaillard\n@Caponant.BZH'),
('68', 'Lucas\n', 'Kilian\n', '061407260', 'ArrayLucas\n@Caponant.BZH'),
('69', 'Philippe\n', 'Killian\n', '061076695', 'ArrayPhilippe\n@Caponant.BZH'),
('7', 'Rousseau\n', 'Maxime\n', '061320753', 'ArrayRousseau\n@Caponant.BZH'),
('70', 'Meunier\n', 'Lilian\n', '061263656', 'ArrayMeunier\n@Caponant.BZH'),
('71', 'Leclercq\n', 'Martin\n', '068512263', 'ArrayLeclercq\n@Caponant.BZH'),
('72', 'Jean\n', 'Amine\n', '060331848', 'ArrayJean\n@Caponant.BZH'),
('73', 'Lacroix\n', 'Guillaume\n', '061093069', 'ArrayLacroix\n@Caponant.BZH'),
('74', 'Perez\n', 'L?onard\n', '066558822', 'ArrayPerez\n@Caponant.BZH'),
('75', 'Fabre\n', 'Malo\n', '065893305', 'ArrayFabre\n@Caponant.BZH'),
('76', 'Marchand\n', '?louan\n', '066796137', 'ArrayMarchand\n@Caponant.BZH'),
('77', 'Dupuis\n', 'Davy\n', '069761864', 'ArrayDupuis\n@Caponant.BZH'),
('78', 'Dufour\n', 'L?on\n', '069246894', 'ArrayDufour\n@Caponant.BZH'),
('79', 'Olivier\n', 'Renaud\n', '067272065', 'ArrayOlivier\n@Caponant.BZH'),
('8', 'Robert\n', 'Arthur\n', '061803023', 'ArrayRobert\n@Caponant.BZH'),
('80', 'Blanchard\n', 'Bruno\n', '063719416', 'ArrayBlanchard\n@Caponant.BZH'),
('81', 'Rodriguez\n', 'Timoth?e\n', '065445116', 'ArrayRodriguez\n@Caponant.BZH'),
('82', 'Marie\n', 'F?lix\n', '069719955', 'ArrayMarie\n@Caponant.BZH'),
('83', 'Da silva\n', 'Rom?o\n', '068505777', 'ArrayDa silva\n@Caponant.BZH'),
('84', 'Barbier\n', 'Yohan\n', '067330140', 'ArrayBarbier\n@Caponant.BZH'),
('85', 'Hubert\n', 'Gilbert\n', '065571916', 'ArrayHubert\n@Caponant.BZH'),
('86', 'Brun\n', 'Colin\n', '061231940', 'ArrayBrun\n@Caponant.BZH'),
('87', 'Louis\n', 'Marwane\n', '069957452', 'ArrayLouis\n@Caponant.BZH'),
('88', 'Dumas\n', 'Gaspard\n', '061299620', 'ArrayDumas\n@Caponant.BZH'),
('89', 'Charles\n', 'Aaron\n', '067703374', 'ArrayCharles\n@Caponant.BZH'),
('9', 'Blanc\n', 'Thomas\n', '065505928', 'ArrayBlanc\n@Caponant.BZH'),
('90', 'Brunet\n', '?mile\n', '062914146', 'ArrayBrunet\n@Caponant.BZH'),
('91', 'Guillot\n', 'Gr?gory\n', '060860827', 'ArrayGuillot\n@Caponant.BZH'),
('92', 'Schmitt\n', 'C?dric\n', '063794094', 'ArraySchmitt\n@Caponant.BZH'),
('93', 'Riviere\n', 'Zacharis\n', '067245058', 'ArrayRiviere\n@Caponant.BZH'),
('94', 'Leroux\n', 'Amaury\n', '063336241', 'ArrayLeroux\n@Caponant.BZH'),
('95', 'Le gall\n', 'Fabrice\n', '063874734', 'ArrayLe gall\n@Caponant.BZH'),
('96', 'Colin\n', 'David\n', '065528313', 'ArrayColin\n@Caponant.BZH'),
('97', 'Guillaume\n', 'Jordan\n', '064172427', 'ArrayGuillaume\n@Caponant.BZH'),
('98', 'Fernandez\n', 'Rayane\n', '064768094', 'ArrayFernandez\n@Caponant.BZH'),
('99', 'Adam\n', 'Alban', '063456221', 'ArrayAdam\n@Caponant.BZH');

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE IF NOT EXISTS `commune` (
  `VILID` char(32) NOT NULL,
  `VILNOM` char(32) DEFAULT NULL,
  PRIMARY KEY (`VILID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commune`
--

INSERT INTO `commune` (`VILID`, `VILNOM`) VALUES
('0', 'Argol\n'),
('1', 'Arzano\n'),
('10', 'Bolazec\n'),
('11', 'Botmeur\n'),
('12', 'Botsorhel\n'),
('13', 'Bourg-Blanc\n'),
('14', 'Brasparts\n'),
('15', 'Br?l?s\n'),
('16', 'Brennilis\n'),
('17', 'Brest\n'),
('18', 'Briec\n'),
('19', 'Brignogan-Plages\n'),
('2', 'Audierne\n'),
('20', 'Camaret-sur-Mer\n'),
('21', 'Carantec\n'),
('22', 'Carhaix-Plouguer\n'),
('23', 'Cast\n'),
('24', 'Ch?teaulin\n'),
('25', 'Ch?teauneuf-du-Faou\n'),
('26', 'Cl?den-Cap-Sizun\n'),
('27', 'Cl?den-Poher\n'),
('28', 'Cl?der\n'),
('29', 'Clohars-Carno?t\n'),
('3', 'Bannalec\n'),
('30', 'Clohars-Fouesnant\n'),
('31', 'Le Clo?tre-Pleyben\n'),
('32', 'Le Clo?tre-Saint-Th?gonnec\n'),
('33', 'Coat-M?al\n'),
('34', 'Collorec\n'),
('35', 'Combrit\n'),
('36', 'Commana\n'),
('37', 'Concarneau\n'),
('38', 'Confort-Meilars\n'),
('39', 'Le Conquet\n'),
('4', 'Baye\n'),
('40', 'Coray\n'),
('41', 'Crozon\n'),
('42', 'Daoulas\n'),
('43', 'Din?ault\n'),
('44', 'Dirinon\n'),
('45', 'Douarnenez\n'),
('46', 'Le Drennec\n'),
('47', 'Edern\n'),
('48', 'Elliant\n'),
('49', 'Ergu?-Gab?ric\n'),
('5', 'B?nodet\n'),
('50', 'Esquibien\n'),
('51', 'Le Faou\n'),
('52', 'La Feuill?e\n'),
('53', 'Le Folgo?t\n'),
('54', 'La Forest-Landerneau\n'),
('55', 'La For?t-Fouesnant\n'),
('56', 'Fouesnant\n'),
('57', 'Garlan\n'),
('58', 'Gouesnach\n'),
('59', 'Gouesnou\n'),
('6', 'Berrien\n'),
('60', 'Gou?zec\n'),
('61', 'Goulien\n'),
('62', 'Goulven\n'),
('63', 'Gourlizon\n'),
('64', 'Guengat\n'),
('65', 'Guerlesquin\n'),
('66', 'Guiclan\n'),
('67', 'Guiler-sur-Goyen\n'),
('68', 'Guilers\n'),
('69', 'Guilligomarc''h\n'),
('7', 'Beuzec-Cap-Sizun\n'),
('70', 'Guilvinec\n'),
('71', 'Guima?c\n'),
('72', 'Guimiliau\n'),
('73', 'Guipavas\n'),
('74', 'Guipronvel\n'),
('75', 'Guiss?ny\n'),
('76', 'Hanvec\n'),
('77', 'Henvic\n'),
('78', 'H?pital-Camfrout\n'),
('79', 'Huelgoat\n'),
('8', 'Bodilis\n'),
('80', '?le-de-Batz\n'),
('81', '?le-de-Sein\n'),
('82', '?le-Mol?ne\n'),
('83', '?le-Tudy\n'),
('84', 'Irvillac\n'),
('85', 'Le Juch\n'),
('86', 'Kergloff\n'),
('87', 'Kerlaz\n'),
('88', 'Kerlouan\n'),
('89', 'Kernilis\n'),
('9', 'Bohars\n'),
('90', 'Kernou?s\n'),
('91', 'Kersaint-Plabennec\n'),
('92', 'Lampaul-Guimiliau\n'),
('93', 'Lampaul-Plouarzel\n'),
('94', 'Lampaul-Ploudalm?zeau\n'),
('95', 'Lanarvily\n'),
('96', 'Land?da\n'),
('97', 'Landeleau\n'),
('98', 'Landerneau\n'),
('99', 'Land?vennec\n');

-- --------------------------------------------------------

--
-- Structure de la table `documentation`
--

CREATE TABLE IF NOT EXISTS `documentation` (
  `DOCID` char(32) NOT NULL,
  `TRNNUM` char(32) NOT NULL,
  `TYPDOCID` char(32) NOT NULL,
  `DOCURL` char(32) DEFAULT NULL,
  PRIMARY KEY (`DOCID`),
  KEY `I_FK_DOCUMENTATION_TOURNEE` (`TRNNUM`),
  KEY `I_FK_DOCUMENTATION_TYPEDOCUMENTATION` (`TYPDOCID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE IF NOT EXISTS `etape` (
  `TRNNUM` char(32) NOT NULL,
  `ETPID` char(32) NOT NULL,
  `LIEUID` char(32) NOT NULL,
  `ETPHREMIN` datetime DEFAULT NULL,
  `ETPHREMAX` datetime DEFAULT NULL,
  `ETPHREDEBUT` datetime DEFAULT NULL,
  `ETPHREFIN` datetime DEFAULT NULL,
  `ETPNBPALLIV` smallint(6) DEFAULT NULL,
  `ETPNBPALLIVEUR` smallint(6) DEFAULT NULL,
  `ETPNBPALCHARG` smallint(6) DEFAULT NULL,
  `ETPNBPALCHARGEUR` datetime DEFAULT NULL,
  `ETPCHEQUE` smallint(6) DEFAULT NULL,
  `ETPETATLIV` char(32) DEFAULT NULL,
  `ETPCOMMENTAIRE` char(32) DEFAULT NULL,
  `ETPVAL` char(32) DEFAULT NULL,
  `ETPKM` int(11) DEFAULT NULL,
  PRIMARY KEY (`TRNNUM`,`ETPID`),
  KEY `I_FK_ETAPE_TOURNEE` (`TRNNUM`),
  KEY `I_FK_ETAPE_LIEU` (`LIEUID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE IF NOT EXISTS `lieu` (
  `LIEUID` char(32) NOT NULL,
  `VILID` char(32) NOT NULL,
  `LIEUNOM` char(32) DEFAULT NULL,
  `LIEUCOORDGPS` char(32) DEFAULT NULL,
  PRIMARY KEY (`LIEUID`),
  KEY `I_FK_LIEU_COMMUNE` (`VILID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lieu`
--

INSERT INTO `lieu` (`LIEUID`, `VILID`, `LIEUNOM`, `LIEUCOORDGPS`) VALUES
('0', '77', 'Roz \r\n-Gwic \r\n', '3262'),
('1', '87', 'Plou\r\n-Kozh  \r\n', '1586'),
('10', '41', 'Faou \r\n-Poull \r\n', '2240'),
('11', '29', 'Hen \r\n-Froud \r\n', '779'),
('12', '49', 'Hir \r\n-Lan\r\n', '4856'),
('13', '42', 'Yeun \r\n-Tevenn \r\n', '563'),
('14', '86', 'Killi \r\n-Du \r\n', '1495'),
('15', '3', 'Yen-Kae \r\n', '3746'),
('16', '40', 'Melen \r\n-St?r \r\n', '908'),
('17', '6', 'Enez  \r\n-Kae \r\n', '4077'),
('18', '71', 'Loc''h \r\n-Krec''h\r\n', '1844'),
('19', '17', 'Mor \r\n-Du \r\n', '305'),
('2', '45', 'Ruz \r\n-Lok \r\n', '2010'),
('20', '64', 'Minic''hi \r\n-Stank \r\n', '3054'),
('21', '62', 'Du \r\n-Hir \r\n', '1183'),
('22', '88', 'Loc''h \r\n-St?r \r\n', '3287'),
('23', '81', 'Traezh  \r\n-Tor \r\n', '459'),
('24', '29', 'Lan\r\n-Gwic \r\n', '1294'),
('25', '51', 'Bezv \r\n-Faou \r\n', '1884'),
('26', '45', 'Kelenn \r\n-Feunteun  \r\n', '823'),
('27', '40', 'Avon \r\n-Kuzh \r\n', '4207'),
('28', '23', 'Gwenn \r\n-Goueled \r\n', '627'),
('29', '26', 'Kastell \r\n-Gougo?v \r\n', '1178'),
('3', '73', 'Roc''h \r\n-Glaz \r\n', '628'),
('30', '32', 'Bod \r\n-Tevenn \r\n', '4455'),
('31', '76', 'Traezh  \r\n-Bihan \r\n', '1548'),
('32', '5', 'Rest \r\n-Liorzh\r\n', '1054'),
('33', '77', 'Tevenn \r\n-Arvor \r\n', '4067'),
('34', '52', 'Karreg \r\n-Froud \r\n', '4179'),
('35', '97', 'Penn \r\n-Gwic \r\n', '2483'),
('36', '17', 'Geun\r\n-Poull  \r\n', '2576'),
('37', '23', 'Skav \r\n-Roz \r\n', '548'),
('38', '11', 'LeLouet \r\n-Govel \r\n', '4997'),
('39', '13', 'Arvor \r\n-Minic''hi \r\n', '2012'),
('4', '67', 'Gwazh \r\n-Meur \r\n', '1032'),
('40', '15', 'Enez  \r\n-Menez \r\n', '190'),
('41', '46', 'Ti \r\n-Kelenn \r\n', '624'),
('42', '93', 'Poull \r\n-Roc''h \r\n', '1908'),
('43', '98', 'Kozh  \r\n-Dour \r\n', '134'),
('44', '44', 'Iliz \r\n-Penn \r\n', '3899'),
('45', '55', 'Porzh \r\n-Ti \r\n', '4294'),
('46', '25', 'Mor \r\n-Hir \r\n', '4914'),
('47', '76', 'Liorzh\r\n-Minic''hi \r\n', '1851'),
('48', '13', 'Dour \r\n-Kelenn \r\n', '3701'),
('49', '49', 'Gwern \r\n-Avelek \r\n', '1557'),
('5', '56', 'K?r \r\n-Kae \r\n', '4318'),
('50', '78', 'Hent \r\n-Govel \r\n', '4013'),
('51', '41', 'Tre\r\n-Gwasked \r\n', '2161'),
('52', '14', 'Kroaz \r\n-Minic''hi \r\n', '4597'),
('53', '3', 'Loc''h \r\n-Kistin \r\n', '2414'),
('54', '72', 'Porzh \r\n-Bras \r\n', '4206'),
('55', '82', 'K?r \r\n-Avelek \r\n', '1065'),
('56', '46', 'Avon \r\n-Poull \r\n', '1587'),
('57', '86', 'Raden \r\n-Stank \r\n', '1864'),
('58', '97', 'Bod \r\n-Plou\r\n', '491'),
('59', '19', 'Froud \r\n-Hir \r\n', '3563'),
('6', '28', 'Penn \r\n-Maez \r\n', '4079'),
('60', '19', 'Gwic \r\n-Froud \r\n', '4671'),
('61', '38', 'St?r \r\n-K?r \r\n', '4909'),
('62', '62', 'Yen-Feunteun  \r\n', '2872'),
('63', '31', 'Kozh  \r\n-Roc''h \r\n', '4654'),
('64', '22', 'Arvor \r\n-Geun\r\n', '3848'),
('65', '67', 'Liorzh\r\n-Tevenn \r\n', '1547'),
('66', '59', 'Dour \r\n-Ruz \r\n', '1346'),
('67', '30', 'Baz\r\n-Avelek \r\n', '4339'),
('68', '58', 'Dour \r\n-Stank \r\n', '4119'),
('69', '81', 'Gouver \r\n-Lan\r\n', '1779'),
('7', '12', 'Killi \r\n-Kemper \r\n', '1406'),
('70', '87', 'Liorzh\r\n-Glaz \r\n', '914'),
('71', '15', 'Stivell \r\n-Garzh \r\n', '2618'),
('72', '32', 'Koad\r\n-Ti \r\n', '483'),
('73', '81', 'Baz\r\n-Gwasked \r\n', '604'),
('74', '55', 'Du \r\n-Du \r\n', '1576'),
('75', '76', 'Melen \r\n-Traezh  \r\n', '4491'),
('76', '4', 'Avelek \r\n-Koad\r\n', '2942'),
('77', '67', 'Yen-Bihan \r\n', '3024'),
('78', '54', 'Kroaz \r\n-Melen \r\n', '3331'),
('79', '32', 'Maen \r\n-Froud \r\n', '4957'),
('8', '88', 'Govel \r\n-Bezv \r\n', '4898'),
('80', '77', 'Iliz \r\n-Avon \r\n', '1494'),
('81', '39', 'Gwic \r\n-Kuzh \r\n', '4038'),
('82', '85', 'Leti \r\n-Tevenn \r\n', '1180'),
('83', '65', 'Traezh  \r\n-Skav \r\n', '4017'),
('84', '55', 'Lok \r\n-Baz\r\n', '1140'),
('85', '87', 'Derv \r\n-Argoad \r\n', '3644'),
('86', '56', 'Melen \r\n-Lok \r\n', '123'),
('87', '83', 'Garzh \r\n-Gougo?v \r\n', '1670'),
('88', '64', 'Glaz \r\n-Geun\r\n', '1880'),
('89', '30', 'Meur \r\n-Hen \r\n', '1845'),
('9', '10', 'Bod \r\n-Tevenn \r\n', '643'),
('90', '58', 'Hir \r\n-Kistin \r\n', '159'),
('91', '88', 'Gouver \r\n-Gwenn \r\n', '2918'),
('92', '14', 'Skav \r\n-Bras \r\n', '3713'),
('93', '50', 'Yeun \r\n-Koad\r\n', '3640'),
('94', '91', 'Gwasked \r\n-Gwazh \r\n', '1290'),
('95', '78', 'Garzh \r\n-Stivell \r\n', '2759'),
('96', '86', 'Kemper \r\n-Tre\r\n', '1640'),
('97', '56', 'Kroaz \r\n-Kemper \r\n', '4028'),
('98', '66', 'Kelenn \r\n-Koad\r\n', '3514'),
('99', '54', 'Avon \r\n-Bod \r\n', '1194');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `PHOID` char(32) NOT NULL,
  `TRNNUM` char(32) NOT NULL,
  `ETPID` char(32) NOT NULL,
  `PHOURL` char(32) DEFAULT NULL,
  PRIMARY KEY (`PHOID`),
  KEY `I_FK_PHOTO_ETAPE` (`TRNNUM`,`ETPID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tournee`
--

CREATE TABLE IF NOT EXISTS `tournee` (
  `TRNNUM` char(32) NOT NULL,
  `VEHIMMAT` char(32) NOT NULL,
  `CHFID` char(32) NOT NULL,
  `TRNCOMMENTAIRE` char(32) DEFAULT NULL,
  `TRNPECCHAUFFEUR` char(32) DEFAULT NULL,
  `TRNDTE` datetime DEFAULT NULL,
  PRIMARY KEY (`TRNNUM`),
  KEY `I_FK_TOURNEE_VEHICULE` (`VEHIMMAT`),
  KEY `I_FK_TOURNEE_CHAUFFEUR` (`CHFID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typedocumentation`
--

CREATE TABLE IF NOT EXISTS `typedocumentation` (
  `TYPDOCID` char(32) NOT NULL,
  `TYPDOCLIB` char(32) DEFAULT NULL,
  PRIMARY KEY (`TYPDOCID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `LOGID` int(11) NOT NULL,
  `LOGNOM` char(32) DEFAULT NULL,
  `LOGMP` char(32) DEFAULT NULL,
  PRIMARY KEY (`LOGID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`LOGID`, `LOGNOM`, `LOGMP`) VALUES
(1, 'Lucas', 'P@ssword'),
(2, 'Julien', 'P@ssword');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE IF NOT EXISTS `vehicule` (
  `VEHIMMAT` char(32) NOT NULL,
  `VEHNOM` char(32) DEFAULT NULL,
  PRIMARY KEY (`VEHIMMAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`VEHIMMAT`, `VEHNOM`) VALUES
('AR164WJ', 'RENAULT_KERAX'),
('BR806PL', 'RENAULT_KERAX'),
('BU870SI', 'MAN_TGX'),
('CH188TQ', 'RENAULT_KERAX'),
('CJ495OF', 'MERCEDES_AXOR'),
('CO285QD', 'MERCEDES_AXOR'),
('EH917CV', 'MERCEDES_AXOR'),
('EK206ZX', 'RENAULT_MIDLUM'),
('ER406RV', 'MAN_TGX'),
('ET506VP', 'RENAULT_MIDLUM'),
('FC694BN', 'MERCEDES_AXOR'),
('FF414WE', 'RENAULT_MIDLUM'),
('FJ435UL', 'MAN_TGX'),
('FL508KV', 'MAN_TGX'),
('GK346ZL', 'RENAULT_MIDLUM'),
('GK386HR', 'MAN_TGX'),
('GL468VK', 'MERCEDES_AXOR'),
('GP739PF', 'MERCEDES_AXOR'),
('GQ787PJ', 'RENAULT_KERAX'),
('GW194SV', 'RENAULT_MIDLUM'),
('HD264VN', 'RENAULT_MIDLUM'),
('HL604KQ', 'RENAULT_KERAX'),
('HM107YU', 'RENAULT_KERAX'),
('HY874TC', 'MAN_TGX'),
('HZ043IV', 'MERCEDES_AXOR'),
('ID293AV', 'RENAULT_MIDLUM'),
('IP485CI', 'MERCEDES_AXOR'),
('IQ913PM', 'RENAULT_KERAX'),
('IV684FR', 'MERCEDES_AXOR'),
('IY607DD', 'RENAULT_MIDLUM'),
('JB143NJ', 'MERCEDES_AXOR'),
('JG026UE', 'RENAULT_KERAX'),
('JI780UG', 'MAN_TGX'),
('JJ402ZM', 'MERCEDES_AXOR'),
('KB920DP', 'RENAULT_KERAX'),
('KC100HO', 'MERCEDES_AXOR'),
('KK295CK', 'MAN_TGX'),
('KT104JH', 'RENAULT_KERAX'),
('KU225RE', 'RENAULT_MIDLUM'),
('LA347KZ', 'RENAULT_MIDLUM'),
('LG243BB', 'RENAULT_MIDLUM'),
('LZ200CR', 'MAN_TGX'),
('MA807HG', 'MAN_TGX'),
('MB198CK', 'RENAULT_KERAX'),
('MG316NY', 'MERCEDES_AXOR'),
('MK830UW', 'MERCEDES_AXOR'),
('ML866DX', 'RENAULT_MIDLUM'),
('MQ135NP', 'MERCEDES_AXOR'),
('ND259LS', 'MERCEDES_AXOR'),
('NG378XQ', 'RENAULT_MIDLUM'),
('NH207VW', 'MERCEDES_AXOR'),
('NT246MJ', 'MERCEDES_AXOR'),
('PB461FZ', 'MERCEDES_AXOR'),
('PF824ZA', 'MAN_TGX'),
('PJ633ZR', 'MAN_TGX'),
('PN023SU', 'MAN_TGX'),
('PR987ON', 'RENAULT_MIDLUM'),
('PV839PM', 'RENAULT_KERAX'),
('QA019VB', 'RENAULT_MIDLUM'),
('QI837ZW', 'RENAULT_MIDLUM'),
('QR920EQ', 'RENAULT_KERAX'),
('QT326RM', 'RENAULT_KERAX'),
('QU155GR', 'MAN_TGX'),
('RH912DR', 'RENAULT_KERAX'),
('RJ530ZP', 'MERCEDES_AXOR'),
('RS532NV', 'MAN_TGX'),
('RT298HY', 'MERCEDES_AXOR'),
('RU734VY', 'RENAULT_MIDLUM'),
('SB157EK', 'MERCEDES_AXOR'),
('SD909NF', 'RENAULT_KERAX'),
('SQ088XO', 'RENAULT_MIDLUM'),
('SQ923WP', 'RENAULT_MIDLUM'),
('SR660JD', 'MERCEDES_AXOR'),
('SV253PM', 'MERCEDES_AXOR'),
('TR018TX', 'RENAULT_KERAX'),
('TT850SX', 'RENAULT_KERAX'),
('UB869NL', 'MAN_TGX'),
('UC444TE', 'RENAULT_MIDLUM'),
('UJ210QG', 'RENAULT_MIDLUM'),
('UT482JW', 'RENAULT_MIDLUM'),
('UW500FF', 'RENAULT_KERAX'),
('UX590MA', 'RENAULT_MIDLUM'),
('VB060WC', 'MAN_TGX'),
('VE585IO', 'MAN_TGX'),
('VF880IR', 'RENAULT_KERAX'),
('VO209ZT', 'RENAULT_MIDLUM'),
('WE112RL', 'RENAULT_KERAX'),
('WR756WL', 'RENAULT_KERAX'),
('XK703JX', 'RENAULT_KERAX'),
('XP392XS', 'MERCEDES_AXOR'),
('XP978SX', 'RENAULT_MIDLUM'),
('XQ940AN', 'MERCEDES_AXOR'),
('XZ291SG', 'RENAULT_KERAX'),
('YO832IX', 'RENAULT_KERAX'),
('YR061LT', 'RENAULT_KERAX'),
('YW322XF', 'MERCEDES_AXOR'),
('ZO403PE', 'MERCEDES_AXOR'),
('ZO684YH', 'MERCEDES_AXOR'),
('ZW971CU', 'RENAULT_MIDLUM'),
('ZZ855DQ', 'RENAULT_KERAX');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `documentation`
--
ALTER TABLE `documentation`
  ADD CONSTRAINT `DOCUMENTATION_ibfk_1` FOREIGN KEY (`TRNNUM`) REFERENCES `tournee` (`TRNNUM`),
  ADD CONSTRAINT `DOCUMENTATION_ibfk_2` FOREIGN KEY (`TYPDOCID`) REFERENCES `typedocumentation` (`TYPDOCID`);

--
-- Contraintes pour la table `etape`
--
ALTER TABLE `etape`
  ADD CONSTRAINT `ETAPE_ibfk_1` FOREIGN KEY (`TRNNUM`) REFERENCES `tournee` (`TRNNUM`),
  ADD CONSTRAINT `ETAPE_ibfk_2` FOREIGN KEY (`LIEUID`) REFERENCES `lieu` (`LIEUID`);

--
-- Contraintes pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD CONSTRAINT `LIEU_ibfk_1` FOREIGN KEY (`VILID`) REFERENCES `commune` (`VILID`);

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `PHOTO_ibfk_1` FOREIGN KEY (`TRNNUM`, `ETPID`) REFERENCES `etape` (`TRNNUM`, `ETPID`);

--
-- Contraintes pour la table `tournee`
--
ALTER TABLE `tournee`
  ADD CONSTRAINT `TOURNEE_ibfk_1` FOREIGN KEY (`VEHIMMAT`) REFERENCES `vehicule` (`VEHIMMAT`),
  ADD CONSTRAINT `TOURNEE_ibfk_2` FOREIGN KEY (`CHFID`) REFERENCES `chauffeur` (`CHFID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
