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
-- Table structure for table `REG_REGION`
--

DROP TABLE IF EXISTS `REG_REGION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `REG_REGION` (
  `REG_COD` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `REG_NOMBRE` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ISO_3166_2_CL` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`REG_COD`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `REG_REGION`
--

LOCK TABLES `REG_REGION` WRITE;
/*!40000 ALTER TABLE `REG_REGION` DISABLE KEYS */;
INSERT INTO `REG_REGION` VALUES (1,'Tarapacá','CL-TA'),(2,'Antofagasta','CL-AN'),(3,'Atacama','CL-AT'),(4,'Coquimbo','CL-CO'),(5,'Valparaíso','CL-VS'),(6,'Región del Libertador Gral. Bernardo O’Higgins','CL-LI'),(7,'Región del Maule','CL-ML'),(8,'Región del Biobío','CL-BI'),(9,'Región de la Araucanía','CL-AR'),(10,'Región de Los Lagos','CL-LL'),(11,'Región Aisén del Gral. Carlos Ibáñez del Campo','CL-AI'),(12,'Región de Magallanes y de la Antártica Chilena','CL-MA'),(13,'Región Metropolitana de Santiago','CL-RM'),(14,'Región de Los Ríos','CL-LR'),(15,'Arica y Parinacota','CL-AP');
/*!40000 ALTER TABLE `REG_REGION` ENABLE KEYS */;
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
