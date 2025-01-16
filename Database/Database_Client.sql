-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: streaming_clients
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `name_client` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `service_type` varchar(1000) DEFAULT NULL,
  `username_client` varchar(100) DEFAULT NULL,
  `password_client` varchar(255) DEFAULT NULL,
  `start_date` varchar(100) DEFAULT NULL,
  `start_month` varchar(100) DEFAULT NULL,
  `end_date` varchar(100) DEFAULT NULL,
  `end_month` varchar(100) DEFAULT NULL,
  `monthly_payment` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Jose Gutierrez','Sin #','hbomax','Jose Gutierrez','0939','2025-01-09','Enero','2025-02-09','Febrero',100),(2,'Danny Tercero','81446081','netflix','Dante9','8586','2025-01-14','Enero','2025-02-14','Febrero',120),(3,'Jesly Andreina','81121096','netflix','Andreina','1136','2025-01-14','Enero','2025-02-14','Febrero',120),(5,'Mary Ruiz','84792959','netflix','Mary Ruiz','Privada','2025-01-11','Enero','2025-02-11','Febrero',120),(6,'Jonathan Lopez','84533561','netflix','Jonathan Lopez','5140','2025-01-02','Enero','2025-02-02','Febrero',120),(7,'Allison Ayala','78682592','netflix','Allison Ayala','0664','2025-01-23','Enero','2025-02-23','Febrero',120),(8,'Uriel Pérez','76419460','netflix','Uriel Perez','9460','2024-12-20','Diciembre','2025-01-20','Enero',120),(9,'Jennifer Cano','Sin #','netflix','Jennifer Cano','0054','2024-12-18','Diciembre','2025-01-18','Enero',120),(10,'Luiz Ruiz','Sin #','netflix','Luis Ruiz','Privada','2025-01-12','Enero','2025-02-12','Febrero',120),(11,'Cinthya Rosas','57246640','crunchyroll','Cinthya Rosas','Privada','2024-12-18','Diciembre','2025-01-18','Enero',60),(12,'Maureling Martinez','84815352','crunchyroll','Maureling Martinez','Privada','2025-01-02','Enero','2025-02-02','Febrero',60),(13,'Marcos Chavarria','58329769','crunchyroll','Marcos Chavarria','Privada','2025-01-15','Enero','2025-02-15','Febrero',60),(14,'Marvin Villareina','81727236','crunchyroll','Marvin Villareina','Privada','2025-01-15','Enero','2025-02-15','Febrero',60),(15,'Tommy Bonilla','57089298','netflix','Tommy','Privada','2025-01-12','Enero','2025-02-12','Febrero',120),(16,'Marjorie Davila','87709263','hbomax','Marjorie D.','9263','2025-01-12','Enero','2025-02-12','Febrero',100),(21,'Marvin Villareina','#','netflix','Marvin Villareina','7236','2025-01-15','Enero','2025-02-15','Febrero',120),(22,'Marvin Villareina','#','hbomax','Marvin Vi.','7236','2025-01-15','Enero','2025-02-15','Febrero',100);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-16 17:05:36
