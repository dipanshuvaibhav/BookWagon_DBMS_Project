-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: bookwagondb
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
-- Table structure for table `admindb`
--

DROP TABLE IF EXISTS `admindb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admindb` (
  `AdminID` varchar(10) NOT NULL,
  `AdminUsername` varchar(45) NOT NULL,
  `AdminFirstName` varchar(20) NOT NULL,
  `AdminLastName` varchar(20) NOT NULL,
  `AdminPassword` varchar(45) NOT NULL,
  `Remark` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`AdminID`),
  UNIQUE KEY `AdminUsername_UNIQUE` (`AdminUsername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admindb`
--

LOCK TABLES `admindb` WRITE;
/*!40000 ALTER TABLE `admindb` DISABLE KEYS */;
INSERT INTO `admindb` VALUES ('AD0001','dipanshu.vaibhav','Dipanshu','Vaibhav','qwert12345',NULL),('AD0002','deep.patel','Deep','Patel','qwqw1212',NULL),('AD0003','sayari.pal','Sayari','Pal','erer3311',NULL),('AD0004','ansh.tyagi','Ansh','Tyagi','tiktok',NULL);
/*!40000 ALTER TABLE `admindb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authordb`
--

DROP TABLE IF EXISTS `authordb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `authordb` (
  `AuthorID` varchar(10) NOT NULL,
  `AuthorFirstName` varchar(20) NOT NULL,
  `AuthorLastName` varchar(20) NOT NULL,
  `AuthorMobile` varchar(10) NOT NULL,
  `AuthorEmail` varchar(50) NOT NULL,
  `AuthorCity` varchar(5) NOT NULL,
  `NBooksWritten` int NOT NULL,
  `AuthorCountry` varchar(5) NOT NULL,
  `Remark` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`AuthorID`),
  UNIQUE KEY `AuthorMobile_UNIQUE` (`AuthorMobile`),
  UNIQUE KEY `AuthorEmail_UNIQUE` (`AuthorEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authordb`
--

LOCK TABLES `authordb` WRITE;
/*!40000 ALTER TABLE `authordb` DISABLE KEYS */;
/*!40000 ALTER TABLE `authordb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookavailability`
--

DROP TABLE IF EXISTS `bookavailability`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookavailability` (
  `BookID` varchar(10) NOT NULL,
  `BookName` varchar(45) NOT NULL,
  `Status` varchar(2) NOT NULL,
  `CustomerType` varchar(2) NOT NULL,
  `MG_ID` varchar(2) NOT NULL,
  `LatestAvailability` date NOT NULL,
  `Remark` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`BookID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookavailability`
--

LOCK TABLES `bookavailability` WRITE;
/*!40000 ALTER TABLE `bookavailability` DISABLE KEYS */;
/*!40000 ALTER TABLE `bookavailability` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookdb`
--

DROP TABLE IF EXISTS `bookdb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookdb` (
  `BookID` varchar(10) NOT NULL,
  `BookName` varchar(20) NOT NULL,
  `ISBN` varchar(10) NOT NULL,
  `Price` float NOT NULL,
  `BookYear` year NOT NULL,
  `PurchaseDate` date NOT NULL,
  `TimesIssued` int NOT NULL,
  `BookRating` decimal(2,1) NOT NULL,
  `AuthorFirstName` varchar(20) NOT NULL,
  `AuthorLastName` varchar(20) NOT NULL,
  `AuthorID` varchar(10) NOT NULL,
  `ClubNo` varchar(10) NOT NULL,
  `Remark` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`BookID`),
  UNIQUE KEY `ISBN_UNIQUE` (`ISBN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookdb`
--

LOCK TABLES `bookdb` WRITE;
/*!40000 ALTER TABLE `bookdb` DISABLE KEYS */;
/*!40000 ALTER TABLE `bookdb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `citydb`
--

DROP TABLE IF EXISTS `citydb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `citydb` (
  `CityCode` varchar(5) NOT NULL,
  `CityName` varchar(45) NOT NULL,
  `Remark` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`CityCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citydb`
--

LOCK TABLES `citydb` WRITE;
/*!40000 ALTER TABLE `citydb` DISABLE KEYS */;
/*!40000 ALTER TABLE `citydb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clubdb`
--

DROP TABLE IF EXISTS `clubdb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clubdb` (
  `ClubNo` varchar(5) NOT NULL,
  `ClubName` varchar(20) NOT NULL,
  `City` varchar(5) NOT NULL,
  `Location` varchar(45) NOT NULL,
  `NEmployee` int NOT NULL,
  `Remark` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ClubNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clubdb`
--

LOCK TABLES `clubdb` WRITE;
/*!40000 ALTER TABLE `clubdb` DISABLE KEYS */;
/*!40000 ALTER TABLE `clubdb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customerdb`
--

DROP TABLE IF EXISTS `customerdb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customerdb` (
  `CustomerID` varchar(10) NOT NULL,
  `CustomerFirstName` varchar(20) NOT NULL,
  `CustomerLastName` varchar(20) NOT NULL,
  `CustomerMobile` varchar(10) NOT NULL,
  `CustomerEmail` varchar(45) NOT NULL,
  `City` varchar(5) NOT NULL,
  `ClubNo` varchar(5) NOT NULL,
  `MembershipDate` date NOT NULL,
  `MembershipExpiry` date NOT NULL,
  `ValidYear` int NOT NULL,
  `NTitlesIssued` int NOT NULL,
  `Remarks` varchar(45) DEFAULT NULL,
  `CustomerUsername` varchar(45) NOT NULL,
  `CustomerPassword` varchar(45) NOT NULL,
  PRIMARY KEY (`CustomerID`),
  UNIQUE KEY `CustomerMobile_UNIQUE` (`CustomerMobile`),
  UNIQUE KEY `CustomerEmail_UNIQUE` (`CustomerEmail`),
  UNIQUE KEY `CustomerUsername_UNIQUE` (`CustomerUsername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customerdb`
--

LOCK TABLES `customerdb` WRITE;
/*!40000 ALTER TABLE `customerdb` DISABLE KEYS */;
/*!40000 ALTER TABLE `customerdb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employeedb`
--

DROP TABLE IF EXISTS `employeedb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employeedb` (
  `EmployeeID` varchar(10) NOT NULL,
  `EmployeeFirstName` varchar(20) NOT NULL,
  `EmployeeLastName` varchar(20) NOT NULL,
  `EmployeeMobile` varchar(10) NOT NULL,
  `EmployeeEmail` varchar(45) NOT NULL,
  `City` varchar(5) NOT NULL,
  `ClubNo` varchar(5) NOT NULL,
  `Remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`EmployeeID`),
  UNIQUE KEY `EmployeeMobile_UNIQUE` (`EmployeeMobile`),
  UNIQUE KEY `EmployeeEmail_UNIQUE` (`EmployeeEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employeedb`
--

LOCK TABLES `employeedb` WRITE;
/*!40000 ALTER TABLE `employeedb` DISABLE KEYS */;
/*!40000 ALTER TABLE `employeedb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guestdb`
--

DROP TABLE IF EXISTS `guestdb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guestdb` (
  `GuestID` varchar(10) NOT NULL,
  `GuestFirstName` varchar(20) NOT NULL,
  `GuestLastName` varchar(20) NOT NULL,
  `GuestMobile` varchar(10) NOT NULL,
  `GuestEmail` varchar(45) NOT NULL,
  `City` varchar(5) NOT NULL,
  `ClubNo` varchar(5) NOT NULL,
  `VisitDate` date NOT NULL,
  `LastVisit` date NOT NULL,
  `Remark` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`GuestID`),
  UNIQUE KEY `GuestMobile_UNIQUE` (`GuestMobile`),
  UNIQUE KEY `GuestEmail_UNIQUE` (`GuestEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guestdb`
--

LOCK TABLES `guestdb` WRITE;
/*!40000 ALTER TABLE `guestdb` DISABLE KEYS */;
/*!40000 ALTER TABLE `guestdb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issuedbookdb`
--

DROP TABLE IF EXISTS `issuedbookdb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `issuedbookdb` (
  `BookID` varchar(10) NOT NULL,
  `BookName` varchar(45) NOT NULL,
  `IssueDate` date NOT NULL,
  `CustomerID` varchar(10) NOT NULL,
  `ClubNo` varchar(5) NOT NULL,
  `DaysIssued` int NOT NULL,
  `DueDate` date NOT NULL,
  `Remark` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`BookID`),
  UNIQUE KEY `CustomerID_UNIQUE` (`CustomerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issuedbookdb`
--

LOCK TABLES `issuedbookdb` WRITE;
/*!40000 ALTER TABLE `issuedbookdb` DISABLE KEYS */;
/*!40000 ALTER TABLE `issuedbookdb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lendersdb`
--

DROP TABLE IF EXISTS `lendersdb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lendersdb` (
  `LenderID` varchar(10) NOT NULL,
  `CustomerID` varchar(10) NOT NULL,
  `NTitlesLent` int NOT NULL,
  `Remark` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`LenderID`),
  UNIQUE KEY `CustomerID_UNIQUE` (`CustomerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lendersdb`
--

LOCK TABLES `lendersdb` WRITE;
/*!40000 ALTER TABLE `lendersdb` DISABLE KEYS */;
/*!40000 ALTER TABLE `lendersdb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publisherdb`
--

DROP TABLE IF EXISTS `publisherdb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publisherdb` (
  `PublisherID` varchar(10) NOT NULL,
  `PublisherName` varchar(45) NOT NULL,
  `PublisherMobile` varchar(10) NOT NULL,
  `PublisherEmail` varchar(45) NOT NULL,
  `PublisherHQCity` varchar(5) NOT NULL,
  `NTitlesPublished` int NOT NULL,
  `PublisherHQCountry` varchar(10) NOT NULL,
  `Remark` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`PublisherID`),
  UNIQUE KEY `PublisherMobile_UNIQUE` (`PublisherMobile`),
  UNIQUE KEY `PublisherEmail_UNIQUE` (`PublisherEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publisherdb`
--

LOCK TABLES `publisherdb` WRITE;
/*!40000 ALTER TABLE `publisherdb` DISABLE KEYS */;
/*!40000 ALTER TABLE `publisherdb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-06 18:38:30
