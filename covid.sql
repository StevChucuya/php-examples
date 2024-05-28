-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: covid
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

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
-- Table structure for table `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `edad` int(11) NOT NULL,
  `talla_m` decimal(10,2) NOT NULL,
  `peso_kg` decimal(10,2) NOT NULL,
  `sintoma_tos` char(1) NOT NULL,
  `sintoma_fiebre` char(1) NOT NULL,
  `sintoma_disnea` char(1) NOT NULL,
  `sintoma_dolormuscular` char(1) NOT NULL,
  `sintoma_gripe` char(1) NOT NULL,
  `sintoma_presionalta` char(1) NOT NULL,
  `sintoma_fatiga` char(1) NOT NULL,
  `sintoma_garraspera` char(1) NOT NULL,
  `ultima_fecha_vacunacion` date DEFAULT NULL,
  `resultado` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pacientes`
--

LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` VALUES (1,'NICKY','SALOMON',23,1.67,56.00,'1','1','1','1','0','0','0','1','2024-02-02',''),(2,'Hulk','Senatino',115,32.00,15.00,'1','1','1','1','1','1','1','1','2005-12-20',''),(3,'Dina','Jhon',99,90.00,90.00,'1','1','1','1','1','1','1','1','1001-12-20',''),(4,'Jhon???!!','Hulk',99,99.00,99.00,'1','1','1','1','1','1','1','1','1004-12-13',''),(5,'Benjamin','Pari',19,1.65,62.30,'2','1','2','2','1','2','1','2','2022-04-05',''),(6,'yonathan','flores',20,180.00,70.00,'1','1','1','1','1','1','1','1','2023-10-12',''),(7,'ROGER','zapata',20,1.75,20.00,'0','0','0','0','0','0','1','1','2020-02-02',''),(8,'Mirko','Faundes',18,178.00,84.00,'0','1','0','0','0','0','0','1','2021-04-12',''),(9,'yonthan','flores',20,180.00,70.00,'0','0','0','0','0','0','0','0','2023-10-15',''),(10,'1','11',1,1.00,1.00,'1','1','1','1','1','1','1','1','2020-12-17',''),(11,'Celestino','Humire',20,1.70,70.00,'0','0','0','0','0','0','0','0','2019-10-30',''),(12,'Jhon','Acero',18,1.70,55.00,'0','0','0','0','0','0','0','0','2024-06-02',''),(13,'julio','lizandro',18,1.70,63.00,'1','1','0','0','1','0','1','1','2020-02-05',''),(14,'andres','herbas',20,1.70,68.00,'1','1','0','0','1','0','1','0','2021-05-04',''),(15,'2','2',2,2.00,2.00,'1','1','1','1','0','0','0','0','2021-02-01',''),(16,'gandy','humiri',18,1.68,92.00,'0','0','0','0','0','0','0','0','2003-03-02',''),(17,'1','1',1,1.00,1.00,'1','1','1','1','1','1','1','1','1999-12-14',''),(18,'Stev','Chucuya',18,160.00,45.00,'1','0','0','0','0','0','0','0','2005-11-13',''),(19,'Jhon','Acero',18,1.70,55.00,'0','1','0','1','0','0','1','0','2024-02-02',''),(20,'Jhon','Acero',18,1.70,55.00,'0','0','0','0','0','0','0','0','2024-02-02',''),(21,'Jhon','Acero',18,1.70,55.00,'0','0','0','0','0','0','0','0','2024-02-02',''),(22,'456','45',11,1.00,1.00,'1','1','1','1','1','1','1','1','2021-02-01','');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-28 17:08:47
