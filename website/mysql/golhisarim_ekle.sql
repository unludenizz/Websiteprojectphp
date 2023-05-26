-- MySQL dump 10.19  Distrib 10.3.38-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: golhisarim_ekle
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
-- Current Database: `golhisarim_ekle`
--


--
-- Table structure for table `fotolar`
--

DROP TABLE IF EXISTS `fotolar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fotolar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firma_id` int(11) NOT NULL,
  `firma_ismi` varchar(150) NOT NULL,
  `firma_resim` varchar(255) NOT NULL,
  `ekleme_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `firma_resim_sayisi` int(11) NOT NULL DEFAULT 0,
  `kullanici` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `firma_id` (`firma_id`),
  CONSTRAINT `fotolar_ibfk_1` FOREIGN KEY (`firma_id`) REFERENCES `kabuledilen_sektor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=366 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fotolar`
--

LOCK TABLES `fotolar` WRITE;
/*!40000 ALTER TABLE `fotolar` DISABLE KEYS */;
INSERT INTO `fotolar` (`id`, `firma_id`, `firma_ismi`, `firma_resim`, `ekleme_tarihi`, `firma_resim_sayisi`, `kullanici`) VALUES (358,67,'adliye','img/kullanicifotograflari/67-2023-05-08 19:25:37.png','2023-05-08 16:25:37',1,'deniz'),(359,67,'adliye','img/kullanicifotograflari/67-2023-05-08 19:25:48.png','2023-05-08 16:25:49',1,'deniz'),(360,67,'adliye','img/kullanicifotograflari/67-2023-05-08 19:26:35.png','2023-05-08 16:26:35',1,'deniz'),(361,67,'adliye','img/kullanicifotograflari/67-2023-05-08 19:27:08.png','2023-05-08 16:27:08',1,'deniz'),(362,67,'adliye','img/kullanicifotograflari/67-2023-05-08 19:27:24.png','2023-05-08 16:27:24',1,'deniz'),(363,67,'adliye','img/kullanicifotograflari/67-2023-05-08 19:31:39.png','2023-05-08 16:31:39',1,'deniz'),(365,67,'adliye','img/kullanicifotograflari/67-2023-05-22 21:03:30_67-2023-05-22 21:03:30_0.png','2023-05-22 18:03:30',1,'deniz');
/*!40000 ALTER TABLE `fotolar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guncellefirma`
--

DROP TABLE IF EXISTS `guncellefirma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guncellefirma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firma_id` int(11) NOT NULL,
  `firma_ismi` varchar(50) NOT NULL,
  `firma_sahip` varchar(50) NOT NULL,
  `firma_tel` varchar(50) NOT NULL,
  `firma_adres` varchar(500) NOT NULL,
  `firma_eposta` varchar(50) NOT NULL,
  `firma_turu` varchar(50) NOT NULL,
  `guncelismi` varchar(50) NOT NULL,
  `guncelsahip` varchar(50) NOT NULL,
  `gunceltel` varchar(50) NOT NULL,
  `gunceladres` varchar(500) NOT NULL,
  `gunceleposta` varchar(50) NOT NULL,
  `guncelturu` varchar(50) NOT NULL,
  `kullanici` varchar(50) NOT NULL,
  `firma_ekle_tarih` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guncellefirma`
--

LOCK TABLES `guncellefirma` WRITE;
/*!40000 ALTER TABLE `guncellefirma` DISABLE KEYS */;
/*!40000 ALTER TABLE `guncellefirma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kabuledilen_sektor`
--

DROP TABLE IF EXISTS `kabuledilen_sektor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kabuledilen_sektor` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `firma_ismi` varchar(50) NOT NULL,
  `firma_sahip` varchar(50) NOT NULL,
  `firma_tel` varchar(50) NOT NULL,
  `firma_adres` varchar(500) NOT NULL,
  `firma_eposta` varchar(50) NOT NULL,
  `firma_turu` varchar(50) NOT NULL,
  `firma_resim` varchar(500) NOT NULL,
  `kullanici` varchar(50) NOT NULL,
  `firma_ekle_tarih` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `firma_ismi` (`firma_ismi`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kabuledilen_sektor`
--

LOCK TABLES `kabuledilen_sektor` WRITE;
/*!40000 ALTER TABLE `kabuledilen_sektor` DISABLE KEYS */;
INSERT INTO `kabuledilen_sektor` (`id`, `firma_ismi`, `firma_sahip`, `firma_tel`, `firma_adres`, `firma_eposta`, `firma_turu`, `firma_resim`, `kullanici`, `firma_ekle_tarih`) VALUES (49,'denizzadaa','DENIZ','55555555555','Horzum, Cumhuriyet Cd., 15400 golhisar/Burdur','den@hotmail.com','yeme-icme','img/resimsiz.png','deniz1','2023-05-04 15:12:58'),(58,'çiğ köfte bankası','firmaekledeneme','05123456789','konya selçuklu dumlupınar','firmaekle@hotmail.com','yeme-icme','img/kullanicifotograflari/58-2023-05-05 16:10:08.jpeg','hasan','2023-05-05 14:44:37'),(67,'adliye','adliye','55555555555','Merkez Camii, Cumhuriyet Cd. No:221, 15400 Gölhisar/Burdur','den@hotmail.com','resmi-kurumlar','img/resimsiz.png','deniz','2023-05-05 22:28:30'),(68,'alyamoda','alyamoda','55555555555','Çeşme, Hürriyet Cd. no:7/A, 15400 Gölhisar/Burdur','den@hotmail.com','giyim-moda','img/resimsiz.png','deniz','2023-05-05 22:28:32'),(69,'anılyurt','anılyurt','55555555555','Pazar, Mehmet Akif Ersoy Blv., 15400 Gölhisar/Burdur','den@hotmail.com','konaklama-turizm','img/resimsiz.png','deniz','2023-05-05 22:28:34'),(70,'banka','banka','55555555555','Fatih, Yaprak Sk. No:2, 15400 Gölhisar/Burdur','denfghj@hotmail.com','banka-ve-finans','img/resimsiz.png','deniz','2023-05-05 22:28:35'),(71,'hastane','hastane','55555555555','Fatih, Cumhuriyet Cad., 15400 Gölhisar/Burdur','den@hotmail.com','saglik','img/resimsiz.png','deniz','2023-05-05 22:28:37'),(72,'insaat','insaat','55555555555','Merkez Camii, Beşparmak Sk. No:34, 15400 Karapınar/Gölhisar/Burdur','denfghj@hotmail.com','insaat','img/resimsiz.png','deniz','2023-05-05 22:28:39'),(73,'migros','migros','55555555555','Pazar, Cumhuriyet Cd. No:47/01 D:02, 15400 Gölhisar/Burdur','migros@hotmail.com','hizmet-sektoru','img/resimsiz.png','deniz','2023-05-05 22:28:39'),(74,'mobilya','mobilya','55555555555','Pazar, MERKEZCAMİİ, Mehmet Akif Ersoy Blv. NO 143, 15400 Gölhisar/Burdur','denfghj@hotmail.com','ev-bahce-ve-dekorasyon','img/resimsiz.png','deniz','2023-05-05 22:28:40'),(75,'okul','okul','55555555555','Merkez Camii, HAMDİ YAZIR CADDESİ NO 8, 15400 Gölhisar/Burdur','den@hotmail.com','egitim','img/resimsiz.png','deniz','2023-05-05 22:28:40'),(77,'sanayi','sanayi','55555555555','Konak Mh, Mehmet Akif Ersoy Blv. No:242, 15400 Gölhisar/Burdur','den@hotmail.com','otomotiv','img/resimsiz.png','deniz','2023-05-05 22:28:41'),(78,'yemen','yemen','55555555555','Çeşme, Cumhuriyet Cd. No:122, 15400 Gölhisar/Burdur','den@hotmail.com','iletisim','img/resimsiz.png','deniz','2023-05-05 22:28:42'),(80,'Magnolya Yemek Evi','DENİZ BEY','0531693152','Ayşe kadın Mah. Burdur/Gölhisar','denizmagnolyayemek31@gmail.com','yeme-icme','img/resimsiz.png','deniz31za','2023-05-18 17:10:26');
/*!40000 ALTER TABLE `kabuledilen_sektor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kabuledilenfotolar`
--

DROP TABLE IF EXISTS `kabuledilenfotolar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kabuledilenfotolar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firma_id` int(11) NOT NULL,
  `firma_ismi` varchar(150) NOT NULL,
  `firma_resim` varchar(500) NOT NULL,
  `ekleme_tarihi` datetime NOT NULL DEFAULT current_timestamp(),
  `firma_resim_sayisi` int(11) NOT NULL,
  `kullanici` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kabuledilenfotolar`
--

LOCK TABLES `kabuledilenfotolar` WRITE;
/*!40000 ALTER TABLE `kabuledilenfotolar` DISABLE KEYS */;
INSERT INTO `kabuledilenfotolar` (`id`, `firma_id`, `firma_ismi`, `firma_resim`, `ekleme_tarihi`, `firma_resim_sayisi`, `kullanici`) VALUES (68,58,'çiğ köfte bankası','img/kullanicifotograflari/58-2023-05-05 16:10:08.jpeg','2023-05-05 16:10:46',1,'hasan'),(69,58,'çiğ köfte bankası','img/kullanicifotograflari/58-2023-05-05 16:17:55.jpeg','2023-05-05 16:18:27',1,'hasan'),(70,58,'çiğ köfte bankası','img/kullanicifotograflari/58-2023-05-05 16:18:08.jpeg','2023-05-05 16:18:29',1,'hasan'),(71,58,'çiğ köfte bankası','img/kullanicifotograflari/58-2023-05-05 16:18:13.jpeg','2023-05-05 16:18:31',1,'hasan'),(73,67,'adliye','img/kullanicifotograflari/67-2023-05-08 19:32:14.png','2023-05-09 02:27:41',1,'deniz');
/*!40000 ALTER TABLE `kabuledilenfotolar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sektorekle`
--

DROP TABLE IF EXISTS `sektorekle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sektorekle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firma_ismi` varchar(100) NOT NULL,
  `firma_sahip` varchar(50) NOT NULL,
  `firma_tel` varchar(25) NOT NULL,
  `firma_adres` varchar(500) NOT NULL,
  `firma_eposta` varchar(50) NOT NULL,
  `firma_turu` varchar(50) NOT NULL,
  `kullanici` varchar(150) NOT NULL,
  `firma_ekle_tarih` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=224 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sektorekle`
--

LOCK TABLES `sektorekle` WRITE;
/*!40000 ALTER TABLE `sektorekle` DISABLE KEYS */;
/*!40000 ALTER TABLE `sektorekle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'golhisarim_ekle'
--

--
-- Dumping routines for database 'golhisarim_ekle'
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
