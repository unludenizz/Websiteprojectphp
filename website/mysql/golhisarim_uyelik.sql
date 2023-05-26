-- MySQL dump 10.19  Distrib 10.3.38-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: golhisarim_uyelik
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
-- Current Database: `golhisarim_uyelik`
--


--
-- Table structure for table `guncellekullanici`
--

DROP TABLE IF EXISTS `guncellekullanici`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guncellekullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kullanici` varchar(25) NOT NULL,
  `guncelmail` varchar(50) NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guncellekullanici`
--

LOCK TABLES `guncellekullanici` WRITE;
/*!40000 ALTER TABLE `guncellekullanici` DISABLE KEYS */;
/*!40000 ALTER TABLE `guncellekullanici` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kullanicilar` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `parola` varchar(150) NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT current_timestamp(),
  `token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kullanici_adi` (`kullanici_adi`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kullanicilar`
--

LOCK TABLES `kullanicilar` WRITE;
/*!40000 ALTER TABLE `kullanicilar` DISABLE KEYS */;
INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `email`, `parola`, `kayit_tarihi`, `token`) VALUES (32,'hasan','fener_hs@hotmail.com','$2y$10$bHzfRv7oy3.a0vDQ8aLvhui/N9Fiwr4Vhz/qqnR0nFT4Fnyb61Cp.','2023-04-18 16:08:35','3vc074OtXcE7kOg2CerjGKOBmXFB6r'),(34,'kertenkele','kertenkele@hotmail.com','$2y$10$ToTcAHxyKf5haRvk83jHV.uBX581w7kdZRh4DQiBCDnq1Pr2AqRY6','2023-04-19 21:30:30',NULL),(40,'deniz','iletisim@golhisarim.com.tr','$2y$10$iO7L9EaSpH6DFfEsyCXLGOCVOVuc/Al0.Qd7BOoHWv0o2FhbJnAVe','2023-05-02 16:36:33','5T1mNovm61O1FxfFi2SBUK78AyOGYA'),(41,'mucahit','mg@mucahitgunay.com.tr','$2y$10$RVGpAFggmd4ZJzeELDWogekgAsYtKYKSBx6CBvDZu6FWGkMMUNVHK','2023-05-03 20:07:26',NULL),(42,'deniz1','denizzz@gmail.com','$2y$10$LMFcR0SZKD4BXJwUeq8TEOGxnwNK6GanK1voSUyBqkdouHJsMCiS2','2023-05-04 13:18:46',NULL),(43,'deniz31za','deniz31za@gmail.com','$2y$10$aTdPYNyS4xrPJJgbmnRs1uqNzyPtbL6upgJx9.sBnLh6THs.d/.Bi','2023-05-18 17:07:10',NULL);
/*!40000 ALTER TABLE `kullanicilar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'golhisarim_uyelik'
--

--
-- Dumping routines for database 'golhisarim_uyelik'
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
