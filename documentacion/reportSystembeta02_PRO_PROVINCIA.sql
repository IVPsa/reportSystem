-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 192.168.10.10    Database: reportSystembeta02
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `PRO_PROVINCIA`
--

DROP TABLE IF EXISTS `PRO_PROVINCIA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PRO_PROVINCIA` (
  `PRO_COD` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PRO_NOMBRE` varchar(23) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRO_REG_COD` int(10) unsigned NOT NULL,
  PRIMARY KEY (`PRO_COD`),
  KEY `pro_provincia_pro_reg_cod_foreign` (`PRO_REG_COD`),
  CONSTRAINT `pro_provincia_pro_reg_cod_foreign` FOREIGN KEY (`PRO_REG_COD`) REFERENCES `REG_REGION` (`REG_COD`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PRO_PROVINCIA`
--

LOCK TABLES `PRO_PROVINCIA` WRITE;
/*!40000 ALTER TABLE `PRO_PROVINCIA` DISABLE KEYS */;
INSERT INTO `PRO_PROVINCIA` VALUES (1,'Arica',15),(2,'Parinacota',15),(3,'Iquique',1),(4,'Tamarugal',1),(5,'Antofagasta',2),(6,'El Loa',2),(7,'Tocopilla',2),(8,'Copiapó',3),(9,'Chañaral',3),(10,'Huasco',3),(11,'Elqui',4),(12,'Choapa',4),(13,'Limarí',4),(14,'Valparaíso',5),(15,'Isla de Pascua',5),(16,'Los Andes',5),(17,'Petorca',5),(18,'Quillota',5),(19,'San Antonio',5),(20,'San Felipe de Aconcagua',5),(21,'Marga Marga',5),(22,'Cachapoal',6),(23,'Cardenal Caro',6),(24,'Colchagua',6),(25,'Talca',7),(26,'Cauquenes',7),(27,'Curicó',7),(28,'Linares',7),(29,'Concepción',8),(30,'Arauco',8),(31,'Biobío',8),(32,'Ñuble',8),(33,'Cautín',9),(34,'Malleco',9),(35,'Valdivia',14),(36,'Ranco',14),(37,'Llanquihue',10),(38,'Chiloé',10),(39,'Osorno',10),(40,'Palena',10),(41,'Coihaique',11),(42,'Aisén',11),(43,'Capitán Prat',11),(44,'General Carrera',11),(45,'Magallanes',12),(46,'Antártica Chilena',12),(47,'Tierra del Fuego',12),(48,'Última Esperanza',12),(49,'Santiago',13),(50,'Cordillera',13),(51,'Chacabuco',13),(52,'Maipo',13),(53,'Melipilla',13),(54,'Talagante',13);
/*!40000 ALTER TABLE `PRO_PROVINCIA` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-18 19:22:07
