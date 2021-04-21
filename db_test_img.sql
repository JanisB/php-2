-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_test
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `img`
--

DROP TABLE IF EXISTS `img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `img` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `img`
--

LOCK TABLES `img` WRITE;
/*!40000 ALTER TABLE `img` DISABLE KEYS */;
INSERT INTO `img` VALUES (1,'img/img3.png'),(2,'img/img4.png'),(3,'img/img5.png'),(4,'img/img3.png'),(5,'img/img5.png'),(6,'img/img3.png'),(7,'img/img4.png'),(8,'img/img3.png'),(9,'img/img5.png'),(10,'img/img3.png'),(11,'img/img3.png'),(12,'img/img3.png'),(13,'img/img3.png'),(14,'img/img3.png'),(15,'img/img5.png'),(16,'img/img3.png'),(17,'img/img4.png'),(18,'img/img3.png'),(19,'img/img5.png'),(20,'img/img3.png'),(21,'img/img3.png'),(22,'img/img5.png'),(23,'img/img3.png'),(24,'img/img4.png'),(25,'img/img3.png'),(26,'img/img5.png'),(27,'img/img3.png'),(28,'img/img3.png'),(29,'img/img5.png'),(30,'img/img3.png'),(31,'img/img4.png'),(32,'img/img3.png'),(33,'img/img5.png'),(34,'img/img3.png'),(35,'img/img3.png'),(36,'img/img5.png'),(37,'img/img3.png'),(38,'img/img4.png'),(39,'img/img3.png'),(40,'img/img5.png'),(41,'img/img3.png'),(42,'img/img3.png'),(43,'img/img5.png'),(44,'img/img3.png'),(45,'img/img4.png'),(46,'img/img3.png'),(47,'img/img5.png'),(48,'img/img3.png'),(49,'img/img3.png'),(50,'img/img5.png'),(51,'img/img3.png'),(52,'img/img4.png'),(53,'img/img3.png'),(54,'img/img5.png'),(55,'img/img3.png'),(56,'img/img3.png'),(57,'img/img5.png'),(58,'img/img3.png'),(59,'img/img4.png'),(60,'img/img3.png'),(61,'img/img5.png'),(62,'img/img3.png');
/*!40000 ALTER TABLE `img` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-21 16:44:49
