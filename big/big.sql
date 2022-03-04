-- MySQL dump 10.13  Distrib 5.7.26, for Win64 (x86_64)
--
-- Host: localhost    Database: big
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `discuss`
--

DROP TABLE IF EXISTS `discuss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discuss` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `content` varchar(200) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `like_count` int(11) DEFAULT '0',
  `reply_count` int(11) DEFAULT '0',
  `like_user` varchar(1000) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discuss`
--

LOCK TABLES `discuss` WRITE;
/*!40000 ALTER TABLE `discuss` DISABLE KEYS */;
INSERT INTO `discuss` VALUES (9,'伍兹永远滴神！！！','啦啦啦','admin',1639410525,3,1,'xiaowang,admin,ycy,0'),(11,'测试贴','test','ycy',1640187959,3,1,'xiaowang,admin,ycy,0'),(12,'大的要来了','。。。','xiaowang',1640226394,1,1,'xiaowang,0'),(13,'+1+1','无','xiaowang',1640228062,1,0,'admin,0'),(14,'打分贴','？','xiaowang',1640228109,1,0,'admin,0'),(15,'翻页','水\r\n','xiaowang',1640228128,0,1,'0');
/*!40000 ALTER TABLE `discuss` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reply` (
  `reply_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discuss_id` int(10) unsigned NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `like_count` int(10) unsigned DEFAULT '0',
  `like_user` varchar(1000) COLLATE utf8_unicode_ci DEFAULT '0',
  PRIMARY KEY (`reply_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reply`
--

LOCK TABLES `reply` WRITE;
/*!40000 ALTER TABLE `reply` DISABLE KEYS */;
INSERT INTO `reply` VALUES (1,'8888888针不辍',1,'admin',1640053240,0,'0'),(2,'我是2楼',1,'admin',1640062368,0,'0'),(3,'？',1,'admin',1640062627,0,'0'),(4,'！！！',1,'admin',1640063285,0,'0'),(5,'test',1,'admin',1640063605,0,'0'),(6,'',1,'admin',1640064792,0,'0'),(7,'顶',1,'admin',1640068510,0,'0'),(8,'芜湖',10,'admin',1640184383,0,'0'),(9,'顶',10,'admin',1640184683,0,'0'),(10,'啊对对对',9,'ycy',1640185351,1,'xiaowang,0'),(11,'顶顶！！',11,'xiaowang',1640225922,1,'xiaowang,0'),(12,'别睡太死\r\n',12,'xiaowang',1640227623,1,'xiaowang,0');
/*!40000 ALTER TABLE `reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `e-mail` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('admin','123','123456789@163.com'),('ycy','123456',NULL),('xiaowang','666666',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-30 14:50:29
