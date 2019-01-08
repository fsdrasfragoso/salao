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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Combo Blindagem Dos Fios Plastica Semi Definitiva + Botox',5,125.00,5,'2018-12-20','2019-05-24','public/r01aYudWxpPI20bedH2s02e2ZFJjEjvqKh0bVTKj.jpeg',1,'2019-01-08 19:57:58','2019-01-08 19:57:58'),(2,'Cadiveu Plastica Dos Fios Selagem Térmica 3x1000ml',5,249.00,5,'2019-01-06','2020-07-15','public/gQHfrEqnugg4I9Ga3LKQVpwYlpDRyGW2fwfEwW1I.webp',1,'2019-01-08 20:01:33','2019-01-08 20:01:33'),(3,'Forever Liss Escova Progressiva Power 3d System Sem Formol',5,210.00,5,'2018-02-05','2020-12-10','public/R8Vw6s1XtRX2PLd7aVMyCleJUBJT4IGkXd6T9VqG.webp',1,'2019-01-08 20:04:10','2019-01-08 20:04:10'),(4,'Progressiva Borabella Não Chore Mais A Melhor Sem Formol 2x1',5,201.00,5,'2019-08-01','2021-04-02','public/d0itGf7lnriyoo7mkOzSADeggYpyNqwv6ldahP6f.webp',1,'2019-01-08 20:07:17','2019-01-08 20:07:17'),(5,'Richée Bioplástica Escova Progressiva + Nanobtx',5,256.00,5,'2018-11-29','2020-02-01','public/vn5q25akP5eGLLuE7fQRASAOiBSLbSCPSXsh1sZh.webp',1,'2019-01-08 20:39:44','2019-01-08 20:39:44'),(6,'Zap Professional Escova Progressiva',5,120.00,5,'2018-05-04','2021-04-05','storage/public/BHuS3aj7uFGdzyM6GLhNMnJFo0jGqtHPOf7B9m7H.webp',1,'2019-01-08 20:48:25','2019-01-08 20:48:25'),(7,'Selagem Plastica Dos Fios Blindagem Semi Definitiva P2 Frete',5,160.00,5,'2018-04-05','2021-04-08','storage/public/C8MrhDhq0KzQVdjSDdkZdO031aUB9FKqCPPGjUx7.webp',1,'2019-01-08 20:54:14','2019-01-08 20:54:14'),(8,'G Hair Perfect Blond Escova Progressiva Kit',5,260.00,5,'2019-12-04','2021-10-22','storage/public/8cWJ53sxJjfZCykrHxiPWbWdNpDz72VHiQ2GjxFK.webp',1,'2019-01-08 21:01:47','2019-01-08 21:01:47'),(9,'Kit Com 3 Escovas Progressivas De Chuveiro Instant Liss 200',5,350.00,5,'2018-08-15','2020-04-03','storage/public/YbJECgX00dFwyO9F7T1uXdzGOGL7DxLCO6GtJCZR.webp',1,'2019-01-08 21:03:44','2019-01-08 21:03:44'),(10,'Kit Selagem Térmica Selafio Efeito Liso Absoluto',5,200.00,5,'2018-05-05','2020-12-12','storage/public/b9HgAPsWvEeTJNkofYIVhP2jj7tnqhTuc1Xulnlw.webp',1,'2019-01-08 21:05:15','2019-01-08 21:05:15'),(11,'Combo Progressiva Maria Escandalosa Btox White+btx Matizador',5,150.00,5,'2019-01-08','2021-11-11','storage/public/wGNNEEDBCkN9Ig0K0lKGHF9y2ig0obU5R0BKwSrE.webp',1,'2019-01-08 21:06:36','2019-01-08 21:06:36'),(12,'Combo Plástica Dos Fios Selagem Progressiva + Botox',5,120.00,5,'2018-08-07','2019-10-03','storage/public/eANGJFaHqUiFiHn4rM7CRQEWFGa6rdM2rxU44nYQ.webp',1,'2019-01-08 21:08:48','2019-01-08 21:08:48');
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

-- Dump completed on 2019-01-08 15:36:34
