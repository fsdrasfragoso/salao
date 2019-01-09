-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: salao
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estoque` int(11) NOT NULL,
  `preco` double(8,2) NOT NULL,
  `classificacao` int(11) NOT NULL,
  `fabricacao` date DEFAULT NULL,
  `validade` date DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produtos_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `produtos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Lixa Send Mandril: Fina, Media E Grossa - 100 Unidades',100,102.00,5,'2019-01-01','2020-02-28','public/p2RWk1dmNGqW4f8jmC4D4Rhx3U3Ccozuwn7klF4V.webp',3,'2019-01-08 20:49:42','2019-01-08 20:49:42'),(2,'Kit Manicure Polygel + Primer + Pó Acrílico + Cabine Led',5,286.00,5,'2019-01-02','2020-03-18','public/Er5bcMJ54nkEnJH8jYSrVSkrDaxugH74JQqB4cWI.webp',3,'2019-01-08 20:53:33','2019-01-08 20:53:33'),(3,'17 Espátula Inox + 17 Palito 2 Pontas Inox Missbela Atacado',5,199.00,5,'2019-01-02','2020-01-14','public/PrFzrx0zCjVvLd18mkAQbJw2GOQRi03UPBAQ45zI.webp',3,'2019-01-08 20:55:22','2019-01-08 20:55:22'),(4,'Palito Madeira Manicure Missbela - Atacado',1000,118.00,5,'2019-01-10','2019-07-19','public/ZjCp8P5dkkZW3MQkya8dSzZ4vnyQXjMnQSivBrws.webp',3,'2019-01-08 20:58:06','2019-01-08 20:58:06'),(5,'Kit Unha Reposição Produtos Gel Acrigel Fibra Manicure Salão',5,204.00,5,'2019-01-10','2020-02-12','public/EwTQplntV9dt7R4WlhbVlXtoM2geLYaR9thRd46q.webp',3,'2019-01-08 21:01:14','2019-01-08 21:01:14'),(6,'500 Unid Refil Bits Lixa Unha Elétrica Manicure # 180 Fina',5,205.00,5,'2019-01-17','2020-07-16','public/o75OcIFriMOq6gVoW8sgOBpo24TMVRQdBmBrtWeU.webp',3,'2019-01-08 21:04:26','2019-01-08 21:04:26'),(7,'Kit Gel Lina Manicure C/ 11 Produtos + Mini Cabine Led Uv 6w',5,171.00,5,'2019-01-17','2020-10-15','public/7WKNXxOFUtXcUWGWRm4l5X6EiKCXA1IwAUa1N2B2.webp',3,'2019-01-08 21:07:49','2019-01-08 21:07:49'),(8,'2.500 Mini Lixa De Unha Parda 8cm Missbela - Atacado',5,209.00,5,'2019-01-24','2020-09-15','storage/public/ACcIKV869sVpSuqtctnxFgGnWSoJrWCgCU7NuF3W.webp',3,'2019-01-08 21:11:56','2019-01-08 21:11:56'),(9,'Pincel Para Unhas Polygel Espatula Ponta Dupla',5,95.00,5,'2019-01-17','2021-10-26','storage/public/HLZBlZdgVNjCmBLDopXtJYc0jMwYeWuy9xRIYvsO.webp',3,'2019-01-08 21:14:12','2019-01-08 21:14:12'),(10,'Cola Para Unha Postiça Acrigel Sorriso Kit Produtos Manicure',5,97.00,5,'2019-01-31','2020-11-28','storage/public/RqLa8tEbARW5WKrmnUxfh2tVqcgNq4kraF2afvVc.webp',3,'2019-01-08 21:15:57','2019-01-08 21:15:57');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-08 15:39:43
