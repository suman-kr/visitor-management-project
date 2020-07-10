-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.17.04.1

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
-- Table structure for table `FACULTY`
--

DROP TABLE IF EXISTS `FACULTY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FACULTY` (
  `FID_NO` int(5) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `DEPARTMENT` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`FID_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FACULTY`
--

LOCK TABLES `FACULTY` WRITE;
/*!40000 ALTER TABLE `FACULTY` DISABLE KEYS */;
INSERT INTO `FACULTY` VALUES (12093,'NAVNEETHA','C.S.E'),(12098,'SWETHA KV','C.S.E'),(12345,'SHERLY NOEL','C.S.E.'),(12478,'SAVITHA S','C.S.E'),(12875,'KASHIF AHMED','EEE'),(12905,'HARISH P','MECH'),(12914,'PREETHI V','ECE'),(12925,'SMRITHY REKHA','MECH'),(12974,'PREETHI','C.S.E'),(12975,'KARTHIK NM','CVL');
/*!40000 ALTER TABLE `FACULTY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LOG`
--

DROP TABLE IF EXISTS `LOG`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LOG` (
  `ID` int(10) DEFAULT NULL,
  `IN_TIME` datetime DEFAULT NULL,
  `OUT_TIME` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LOG`
--

LOCK TABLES `LOG` WRITE;
/*!40000 ALTER TABLE `LOG` DISABLE KEYS */;
INSERT INTO `LOG` VALUES (15413,'2017-11-16 15:48:02','2017-11-16 15:48:12'),(12323,'2017-11-16 14:51:39','2017-11-16 15:57:04');
/*!40000 ALTER TABLE `LOG` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NON_TEACHING_STAFF`
--

DROP TABLE IF EXISTS `NON_TEACHING_STAFF`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `NON_TEACHING_STAFF` (
  `NID_NO` int(11) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `PHONE` int(10) DEFAULT NULL,
  `DESIGNATION` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`NID_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NON_TEACHING_STAFF`
--

LOCK TABLES `NON_TEACHING_STAFF` WRITE;
/*!40000 ALTER TABLE `NON_TEACHING_STAFF` DISABLE KEYS */;
INSERT INTO `NON_TEACHING_STAFF` VALUES (21478,'avinash',847845698,'canteen staff'),(25457,'madhav',856971478,'canteen staff'),(25987,'KAMLESH',856974524,'canteen manager'),(27125,'sweta',842323455,'plumber'),(29865,'madhu',842343857,'electrician'),(29876,'suyash',842345698,'cleaning staff');
/*!40000 ALTER TABLE `NON_TEACHING_STAFF` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `OFFICE`
--

DROP TABLE IF EXISTS `OFFICE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `OFFICE` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(40) DEFAULT NULL,
  `DESIGNATION` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `OFFICE`
--

LOCK TABLES `OFFICE` WRITE;
/*!40000 ALTER TABLE `OFFICE` DISABLE KEYS */;
INSERT INTO `OFFICE` VALUES (33333,'Y. Swathi','HOD-CSE','cmrit123');
/*!40000 ALTER TABLE `OFFICE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SECURITY`
--

DROP TABLE IF EXISTS `SECURITY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SECURITY` (
  `SID_NO` int(5) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `PHONE` int(11) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`SID_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SECURITY`
--

LOCK TABLES `SECURITY` WRITE;
/*!40000 ALTER TABLE `SECURITY` DISABLE KEYS */;
INSERT INTO `SECURITY` VALUES (12341,'S. Vishwanath',987654323,'cmrit123'),(12344,'R. Chandra',234567,'1234');
/*!40000 ALTER TABLE `SECURITY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `STUDENT`
--

DROP TABLE IF EXISTS `STUDENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `STUDENT` (
  `STID_NO` int(5) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `USN` varchar(12) DEFAULT NULL,
  `DEPARTMENT` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`STID_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `STUDENT`
--

LOCK TABLES `STUDENT` WRITE;
/*!40000 ALTER TABLE `STUDENT` DISABLE KEYS */;
INSERT INTO `STUDENT` VALUES (14004,'DHEERAJ','1CR15ME048','MECH'),(14034,'AMIT','1CR15CV099','CIVIL'),(14334,'GOURAV SHARMA','1CR15IS030','ISE'),(14337,'ANAMIKA','1CR15TE101','TCE'),(14397,'DISHA TIWARI','1CR15TE030','TCE'),(14432,'KUSHAGRA','1CR15EC087','ECE'),(14434,'SHRUTI SAXENA','1CR15IS099','ISE'),(14823,'SUBHASHIS GUPTA','1CR15CS157','COMPUTER SCIENCE'),(14956,'AVINASH','1CR15CS187','COMPUTER SCIENCE'),(15413,'SUMAN KUMAR','1CR15CS193','COMPUTER SCIENCE');
/*!40000 ALTER TABLE `STUDENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TIMING`
--

DROP TABLE IF EXISTS `TIMING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TIMING` (
  `ID` int(11) DEFAULT NULL,
  `IN_TIME` datetime DEFAULT NULL,
  `OUT_TIME` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TIMING`
--

LOCK TABLES `TIMING` WRITE;
/*!40000 ALTER TABLE `TIMING` DISABLE KEYS */;
INSERT INTO `TIMING` VALUES (18896,'2017-11-16 14:29:27',NULL),(14283,'2017-11-16 14:40:39',NULL),(3456,'2017-11-16 14:51:05',NULL);
/*!40000 ALTER TABLE `TIMING` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `VISITOR`
--

DROP TABLE IF EXISTS `VISITOR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `VISITOR` (
  `NAME` varchar(40) DEFAULT NULL,
  `ID_NO` int(11) NOT NULL,
  `PHONE_NO` int(11) DEFAULT NULL,
  `ADDRESS` text,
  `PURPOSE` varchar(30) DEFAULT NULL,
  `ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VISITOR`
--

LOCK TABLES `VISITOR` WRITE;
/*!40000 ALTER TABLE `VISITOR` DISABLE KEYS */;
INSERT INTO `VISITOR` VALUES ('suman',3456,4567867,'BANGALORE','FHGHG',12344),('anup',9876,98765432,'SLV PG,KUNDALHALLI,BANGALORE','DELIVERY',12341),('AAAHH',12323,111,'LKJLKJ','KJJK',12344),('manish',12345,933040401,'kundalhalli,BANGALORE','DELIVERY',12341),('venu srivastav',18896,809224131,'kundalhalli,BANGALORE','DELIVERY',12344),('aditya',56897,987654569,'kundalhalli,BANGALORE','DELIVERY',12341),('Yash',95913,959136,'banaglore','enq',12344),('suman',876543,987655422,'BANGALORE','DELIVERY',12341);
/*!40000 ALTER TABLE `VISITOR` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `time`
--

DROP TABLE IF EXISTS `time`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `time` (
  `id` int(11) DEFAULT NULL,
  `in_time` datetime DEFAULT NULL,
  `o_t` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `time`
--

LOCK TABLES `time` WRITE;
/*!40000 ALTER TABLE `time` DISABLE KEYS */;
INSERT INTO `time` VALUES (15413,'2017-11-11 23:46:26',NULL),(15413,'2017-11-11 23:46:51',NULL);
/*!40000 ALTER TABLE `time` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER OUT_TIME BEFORE UPDATE ON time 
     FOR EACH ROW BEGIN             
     IF NEW.id=NEW.id THEN
     SET NEW.o_t = SYSDATE();
     END IF;
     END */;;
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

-- Dump completed on 2017-11-18  2:11:47
