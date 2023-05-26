-- MySQL dump 10.19  Distrib 10.3.38-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: golhisarim_adminpanel
-- ------------------------------------------------------
-- Server version	10.3.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `golhisarim_adminpanel`
--


--
-- Table structure for table `uyelik`
--

DROP TABLE IF EXISTS `uyelik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uyelik` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(50) NOT NULL,
  `parola` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kullanici_adi` (`kullanici_adi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uyelik`
--

LOCK TABLES `uyelik` WRITE;
/*!40000 ALTER TABLE `uyelik` DISABLE KEYS */;
INSERT INTO `uyelik` (`id`, `kullanici_adi`, `parola`) VALUES (1,'deniz','123456'),(5,'hasan','123456');
/*!40000 ALTER TABLE `uyelik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'golhisarim_adminpanel'
--

--
-- Dumping routines for database 'golhisarim_adminpanel'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-23 23:02:34
