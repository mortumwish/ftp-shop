-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: ftp
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pathToImage` varchar(500) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `nameOfItem` varchar(100) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `session_id` int DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  `article` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (1,'https://sun9-49.userapi.com/s/v1/ig2/6C5dsMHu9fbVpnnu2dQJ_cDrxr_7z_H4YXBCvnTqRNryLrpD-1FE5PgDfynm77J1RWZ5exOTxajDVOBdbewqHoXr.jpg?size=1024x1024&quality=96&type=album','FTP x BSFU','BSFU WORK SHIRT(BLACK)',56,3,1,'X-Small','0000000001'),(2,'https://sun9-49.userapi.com/s/v1/ig2/6C5dsMHu9fbVpnnu2dQJ_cDrxr_7z_H4YXBCvnTqRNryLrpD-1FE5PgDfynm77J1RWZ5exOTxajDVOBdbewqHoXr.jpg?size=1024x1024&quality=96&type=album','FTP x BSFU','BSFU WORK SHIRT(BLACK)',56,1,1,'Small','0000000001'),(3,'https://sun2.tattelecom-nbc.userapi.com/s/v1/ig2/xnBbS_RILYG7pQeEEfqzpZQC2bHjQsXK3O8LuEA1Rbf4UMFe7h7ZMMcRksmRdk-zF1Ms13vAVkZVHMKMjw_SYySd.jpg?size=1024x1024&quality=96&type=album','FTP x BSFU','BSFU WORK SHIRT(BLACK)',56,1,1,'X-Small','0000000002'),(4,'https://sun2.tattelecom-nbc.userapi.com/s/v1/ig2/xnBbS_RILYG7pQeEEfqzpZQC2bHjQsXK3O8LuEA1Rbf4UMFe7h7ZMMcRksmRdk-zF1Ms13vAVkZVHMKMjw_SYySd.jpg?size=1024x1024&quality=96&type=album','FTP x BSFU','BSFU WORK SHIRT(BLACK)',56,2,1,'Small','0000000002');
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `amount_new` BEFORE INSERT ON `cart` FOR EACH ROW BEGIN
IF (new.amount is NULL) THEN
  SET new.amount=1;
END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pathToImage` varchar(500) NOT NULL,
  `pathToSecondImage` varchar(500) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `nameOfItem` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` int NOT NULL,
  `small` int NOT NULL,
  `medium` int NOT NULL,
  `large` int NOT NULL,
  `xlarge` int NOT NULL,
  `xxlarge` int NOT NULL,
  `article` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'https://sun9-49.userapi.com/s/v1/ig2/6C5dsMHu9fbVpnnu2dQJ_cDrxr_7z_H4YXBCvnTqRNryLrpD-1FE5PgDfynm77J1RWZ5exOTxajDVOBdbewqHoXr.jpg?size=1024x1024&quality=96&type=album','https://sun9-61.userapi.com/s/v1/ig2/D11U6nG3vfKnK4lNO5jemguKC8vM3TCi48ZqThvEsg-gAerVRpg9JGZ8JeOR0KOMdNwD4GBRIDbcOZGzp0g3rMBt.jpg?size=1024x1024&quality=96&type=album','FTP x BSFU','BSFU WORK SHIRT(BLACK)','COTTON TWILL SHORT SLEEVE BUTTON UP. FRONT CHEST PATCH POCKETS WITH REMOVABLE PEN. ALL OVER STRIPE PRINT.',56,50,50,50,50,50,'0000000001'),(2,'https://sun2.tattelecom-nbc.userapi.com/s/v1/ig2/xnBbS_RILYG7pQeEEfqzpZQC2bHjQsXK3O8LuEA1Rbf4UMFe7h7ZMMcRksmRdk-zF1Ms13vAVkZVHMKMjw_SYySd.jpg?size=1024x1024&quality=96&type=album','https://sun9-34.userapi.com/s/v1/ig2/7T3RmboJlDpzslk_umRdsjgV5mtVIPwm5noJjAfJ8BFVNGHyfTfjcSjhz3dsHIvN_i6PXMHXN4D-tkSJ2rp6MnO4.jpg?size=1024x1024&quality=96&type=album','FTP x BSFU','BSFU WORK SHIRT(BLACK)','COTTON TWILL SHORT SLEEVE BUTTON UP. FRONT CHEST PATCH POCKETS WITH REMOVABLE PEN. ALL OVER STRIPE PRINT.',56,50,50,50,50,50,'0000000002');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `session_key` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `session_key_UNIQUE` (`session_key`)
) ENGINE=InnoDB AUTO_INCREMENT=493 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES (1,'se9gn7imk9n9euebm7i8s0q842');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'ftp'
--

--
-- Dumping routines for database 'ftp'
--
/*!50003 DROP PROCEDURE IF EXISTS `amount_delete` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `amount_delete`(idOfRow int)
BEGIN
set SQL_SAFE_UPDATES = 0;
	start transaction;
		if(select amount from cart where id = idOfRow) <= 0 then
			delete from cart where id = idOfRow;
            COMMIT;
		else
			rollback;
		end if;
set SQL_SAFE_UPDATES = 1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-01 18:27:13
