# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: matt_collection
# Generation Time: 2020-02-06 15:30:16 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table dragons
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dragons`;

CREATE TABLE `dragons` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `rider` varchar(255) NOT NULL DEFAULT '',
  `colour` varchar(255) NOT NULL DEFAULT '',
  `attack` int(20) unsigned NOT NULL,
  `speed` int(20) unsigned NOT NULL,
  `firepower` int(20) unsigned NOT NULL,
  `images` varchar(255) NOT NULL DEFAULT 'Images/toothless.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `dragons` WRITE;
/*!40000 ALTER TABLE `dragons` DISABLE KEYS */;

INSERT INTO `dragons` (`id`, `name`, `rider`, `colour`, `attack`, `speed`, `firepower`, `images`)
VALUES
	(1,'Toothless','Hiccup','Black',15,20,14,'Images/toothless.jpg'),
	(2,'Stormfly','Astrid','Blue',50,25,18,'Images/stormfly.jpg'),
	(3,'Meatlug','Fishlegs','Brown',19,30,17,'Images/meatlug.jpg'),
	(4,'Hookfang','Snotlout','Red',25,14,20,'Images/hookfang.jpg');

/*!40000 ALTER TABLE `dragons` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
