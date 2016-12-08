-- MySQL dump 10.13  Distrib 5.5.52, for Win64 (x86)
--
-- Host: localhost    Database: activisme_be
-- ------------------------------------------------------
-- Server version	5.5.52

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
-- Table structure for table `pivot_login_permissions`
--

DROP TABLE IF EXISTS `pivot_login_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pivot_login_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `permissions_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pivot_login_permissions`
--

LOCK TABLES `pivot_login_permissions` WRITE;
/*!40000 ALTER TABLE `pivot_login_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `pivot_login_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pivot_reactions_ticket`
--

DROP TABLE IF EXISTS `pivot_reactions_ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pivot_reactions_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL,
  `reactions_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pivot_reactions_ticket`
--

LOCK TABLES `pivot_reactions_ticket` WRITE;
/*!40000 ALTER TABLE `pivot_reactions_ticket` DISABLE KEYS */;
INSERT INTO `pivot_reactions_ticket` VALUES (1,1,1);
/*!40000 ALTER TABLE `pivot_reactions_ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sign_begrotingstekort`
--

DROP TABLE IF EXISTS `sign_begrotingstekort`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sign_begrotingstekort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `finding` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sign_begrotingstekort`
--

LOCK TABLES `sign_begrotingstekort` WRITE;
/*!40000 ALTER TABLE `sign_begrotingstekort` DISABLE KEYS */;
/*!40000 ALTER TABLE `sign_begrotingstekort` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sign_zorgsector`
--

DROP TABLE IF EXISTS `sign_zorgsector`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sign_zorgsector` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `geboortedatum` varchar(255) DEFAULT NULL,
  `leeftijd` varchar(4) DEFAULT NULL,
  `stad` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sign_zorgsector`
--

LOCK TABLES `sign_zorgsector` WRITE;
/*!40000 ALTER TABLE `sign_zorgsector` DISABLE KEYS */;
/*!40000 ALTER TABLE `sign_zorgsector` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_applications`
--

DROP TABLE IF EXISTS `sys_applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `git_url` varchar(255) DEFAULT NULL,
  `server_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_applications`
--

LOCK TABLES `sys_applications` WRITE;
/*!40000 ALTER TABLE `sys_applications` DISABLE KEYS */;
INSERT INTO `sys_applications` VALUES (1,1,'test','test','test'),(2,1,'test','test','test');
/*!40000 ALTER TABLE `sys_applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_categories`
--

DROP TABLE IF EXISTS `sys_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_categories`
--

LOCK TABLES `sys_categories` WRITE;
/*!40000 ALTER TABLE `sys_categories` DISABLE KEYS */;
INSERT INTO `sys_categories` VALUES (1,1,'Typo','used to indicate typo');
/*!40000 ALTER TABLE `sys_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_permissions`
--

DROP TABLE IF EXISTS `sys_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_permissions`
--

LOCK TABLES `sys_permissions` WRITE;
/*!40000 ALTER TABLE `sys_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_reactions`
--

DROP TABLE IF EXISTS `sys_reactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_reactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_reactions`
--

LOCK TABLES `sys_reactions` WRITE;
/*!40000 ALTER TABLE `sys_reactions` DISABLE KEYS */;
INSERT INTO `sys_reactions` VALUES (1,1,'qdsfqdsfdfdsd');
/*!40000 ALTER TABLE `sys_reactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_sessions`
--

DROP TABLE IF EXISTS `sys_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`,`ip_address`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sessions`
--

LOCK TABLES `sys_sessions` WRITE;
/*!40000 ALTER TABLE `sys_sessions` DISABLE KEYS */;
INSERT INTO `sys_sessions` VALUES ('g78d8t3rnosbahktv19vp5ej6h21op16','::1',1481161275,'__ci_last_regenerate|i:1481161260;logged_in|a:4:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"topairy@gmail.com\";s:5:\"roles\";a:0:{}}class|N;message|N;'),('p853siq1oh5jt10s2if9r1jo6rn1c484','::1',1481154784,'__ci_last_regenerate|i:1481154708;logged_in|a:4:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"topairy@gmail.com\";s:5:\"roles\";a:0:{}}');
/*!40000 ALTER TABLE `sys_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_tickets`
--

DROP TABLE IF EXISTS `sys_tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignee_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `application_id` int(11) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_tickets`
--

LOCK TABLES `sys_tickets` WRITE;
/*!40000 ALTER TABLE `sys_tickets` DISABLE KEYS */;
INSERT INTO `sys_tickets` VALUES (1,1,1,0,2,'fdgdf','gdfgfdgdfsg'),(2,1,1,0,2,'fdgdf','gdfgfdgdfsg');
/*!40000 ALTER TABLE `sys_tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_users`
--

DROP TABLE IF EXISTS `sys_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blocked` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_users`
--

LOCK TABLES `sys_users` WRITE;
/*!40000 ALTER TABLE `sys_users` DISABLE KEYS */;
INSERT INTO `sys_users` VALUES (1,0,'Topairy','Tim Joosten','18ec094ae94bb2d7cd2d7b7c6eda8af5','topairy@gmail.com');
/*!40000 ALTER TABLE `sys_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-08  3:07:05
