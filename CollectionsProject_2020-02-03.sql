# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: CollectionsProject
# Generation Time: 2020-02-03 14:38:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Dragons
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Dragons`;

CREATE TABLE `Dragons` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Rider` varchar(100) DEFAULT NULL,
  `Colour` varchar(100) DEFAULT NULL,
  `Attack` int(20) DEFAULT NULL,
  `Speed` int(20) DEFAULT NULL,
  `Firepower` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Dragons` WRITE;
/*!40000 ALTER TABLE `Dragons` DISABLE KEYS */;

INSERT INTO `Dragons` (`id`, `Name`, `Rider`, `Colour`, `Attack`, `Speed`, `Firepower`)
VALUES
	(1,'Toothless','Hiccup','Black',15,20,14),
	(2,'Stormfly','Astrid','Blue',50,25,18),
	(3,'Meatlug','Fishlegs','Brown',19,30,17),
	(4,'Hookfang','Snotlout','Red',25,14,20);

/*!40000 ALTER TABLE `Dragons` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
