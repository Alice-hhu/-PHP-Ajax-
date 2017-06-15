-- MySQL dump 10.13  Distrib 5.6.29, for osx10.8 (x86_64)
--
-- Host: localhost    Database: street
-- ------------------------------------------------------
-- Server version	5.6.29

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
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity`
--

LOCK TABLES `activity` WRITE;
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;
INSERT INTO `activity` VALUES (1,'è¡—åŒºæ´»åŠ¨1','è¡—åŒºæ´»åŠ¨111','2017-04-28'),(3,'è¡—åŒºæ´»åŠ¨2','è¡—åŒºæ´»åŠ¨222','2017-04-28'),(4,'è¡—åŒºæ´»åŠ¨3','è¡—åŒºæ´»åŠ¨3','2017-04-28'),(5,'è¡—åŒºæ´»åŠ¨4','è¡—åŒºæ´»åŠ¨4','2017-04-28'),(11,'è¡—åŒºæ´»åŠ¨5','è¡—åŒºæ´»åŠ¨5','2017-04-28'),(12,'â€œå¤§è¡—å°è±¡æ¢¦æƒ³åŒè¡Œâ€é¦–å±Šæ‰‹æœºæ‘„å½±å¤§èµ›','â€œå¤§è¡—å°è±¡æ¢¦æƒ³åŒè¡Œâ€é¦–å±Šæ‰‹æœºæ‘„å½±å¤§èµ›','2017-05-02');
/*!40000 ALTER TABLE `activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `imgPath` varchar(100) DEFAULT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'åˆ›ä¸šé‚¦','upload/149328662855adb1f0922cf.jpg','æœ€æ‡‚åˆ›ä¸šè€…ï¼Œç¦»èµ„æœ¬æœ€è¿‘','2017-04-27'),(3,'æ‹“è’æ—','upload/149328666955b18f271faf0.gif','é›†åŠžå…¬ã€è¥é”€ã€å­µåŒ–åŠŸèƒ½ä¸‰ä½ä¸€ä½“çš„ä¼ä¸šå‘å±•ç”Ÿæ€åœˆ','2017-04-27'),(4,'æ´‹è‘±æŠ•','upload/149328669055bb29cd76b19.gif','æ´‹è‘±æŠ•è‡´åŠ›äºŽä¸ºåˆ›ä¸šè€…æ‰“é€ ä¸€ä¸ªå…¨æ–¹ä½ã€å®½é¢†åŸŸã€å¤šå…ƒåŒ–çš„åˆ›æŠ•æœåŠ¡å¹³å°','2017-04-27'),(5,'å¯å¯è±†åˆ›æ–°å­µåŒ–å¹³å°','upload/1493286713568cd5343f525.gif','å¯å¯è±†åˆ›æ–°å­µåŒ–å¹³å°éš¶å±žäºŽæ´›å¯å¯åˆ›æ–°è®¾è®¡é›†å›¢','2017-04-27'),(6,'ä¸­ç§‘é‡‘','upload/149328673256b2ab8db9bea.jpg','ä¸ºç§‘æŠ€ä¼ä¸šæä¾›å¤šå…ƒåŒ–ã€å¤šå±‚æ¬¡ã€å…¨æ–¹ä½çš„é‡‘èžæœåŠ¡','2017-04-27'),(7,'ç¡¬æ´¾ç©ºé—´','upload/149328676456f35bf25b14c.jpg','ç¡¬æ´¾ç©ºé—´ä½äºŽä¸­å…³æ‘åˆ›ä¸šå¤§è¡—ï¼Œç”±åˆ›ä¸šå¤§è¡—è¿è¥ç®¡ç†å…¬å¸æµ·ç½®ç§‘åˆ›åˆ›åŠž','2017-04-27'),(8,'è½¦åº“å’–å•¡','upload/14932868025382d949c32e6.gif','æˆç«‹äºŽ2011å¹´4æœˆï¼Œæ˜¯ä¸­å…³æ‘åˆ›ä¸šå¤§è¡—ä¸Šæœ€æ—©çš„ä¸€æ‰¹åˆ›ä¸šä¸»é¢˜å’–å•¡åŽ…ä¹‹ä¸€','2017-04-27'),(9,'3Wå’–å•¡','upload/14932868215382d939c6df0.gif','äº’è”ç½‘ä¸»é¢˜é¦†ï¼Œæ——ä¸‹åŒ…å«3Wå’–å•¡é¦†ã€3Wåˆ›æ–°ä¼ åª’ã€3Wå­µåŒ–å™¨ã€3WåŸºé‡‘ã€æ‹‰å‹¾æ‹›è˜','2017-04-27'),(10,'Binggoå’–å•¡','upload/14932868425382d8f746dae.gif','ä¸€å®¶ä»¥å’–å•¡å’Œç©ºé—´ä¸ºè½½ä½“ï¼Œåˆ©ç”¨ç¾¤æ™ºï¼Œè·¨ç•Œåˆ›æ–°çš„åˆ›æ–°åž‹å­µåŒ–å™¨','2017-04-28'),(11,'å¤©ä½¿æ±‡','upload/149334715353ab76be33b4d.gif','å¤©ä½¿æ±‡','2017-04-28');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `imgPath` varchar(100) DEFAULT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (2,'[å¤§è¡—è®¿è°ˆ] å¯¹è¯Founders Spaceåˆ›å§‹äºº','upload/149334586458abb87502963.jpg','3æœˆ15æ—¥ï¼Œç”±åŒ—äº¬å¤§å­¦åˆ›ä¸šè®­ç»ƒè¥ã€ä¸­ä¿¡å‰æ²¿ç»æµŽä¸Žä¸­å…³æ‘åˆ›ä¸šå¤§è¡—è”åˆä¸»åŠžçš„â€œåˆ›ä¸šæ€å¥”ç¡…è°·é¡¶çº§å­µåŒ–å™¨Founde','2017-04-28'),(5,'2017æ¢¦æƒ³è€…å¸‚é›†æ´»åŠ¨åŒ—äº¬ç«™é¦–å‘','upload/149334587258abb87502963.jpg','2017æ¢¦æƒ³è€…å¸‚é›†æ´»åŠ¨åŒ—äº¬ç«™é¦–å‘','2017-04-28'),(6,'ä¸­å¤®ç¤¾ä¼šä¸»ä¹‰å­¦é™¢æ°‘ä¸»å…šæ´¾å¹²éƒ¨åˆ°è®¿åˆ›ä¸šå¤§è¡—','upload/149334588258abb87502963.jpg','ä¸­å¤®ç¤¾ä¼šä¸»ä¹‰å­¦é™¢æ°‘ä¸»å…šæ´¾å¹²éƒ¨åˆ°è®¿åˆ›ä¸šå¤§è¡—','2017-04-28'),(7,'å…¨å›½å¦‡è”é¢†å¯¼è°ƒç ”ä¸­å…³æ‘åˆ›ä¸šå¤§è¡—','upload/149334588958abb87502963.jpg','å…¨å›½å¦‡è”é¢†å¯¼è°ƒç ”ä¸­å…³æ‘åˆ›ä¸šå¤§è¡—','2017-04-28'),(9,'ä¸­å…³æ‘åˆ›ä¸šè€…çž„å‡†ç—›ç‚¹æŠ¢å…ˆæœº','upload/149334589658abb87502963.jpg','ä¸­å…³æ‘åˆ›ä¸šè€…çž„å‡†ç—›ç‚¹æŠ¢å…ˆæœº','2017-04-28'),(10,'æ°‘é©ä¸­å¤®å»ºè¨€ï¼šæ­å»ºé’å¹´åˆ›ä¸šå°±ä¸šæœåŠ¡å¹³å°','upload/149334590258abb87502963.jpg','æ°‘é©ä¸­å¤®å»ºè¨€ï¼šæ­å»ºé’å¹´åˆ›ä¸šå°±ä¸šæœåŠ¡å¹³å°','2017-04-28'),(13,'[å¤§è¡—è®¿è°ˆ] å¯¹è¯Founders Spaceåˆ›å§‹äºº','upload/149335866158abb87502963.jpg','3æœˆ15æ—¥ï¼Œç”±åŒ—äº¬å¤§å­¦åˆ›ä¸šè®­ç»ƒè¥ã€ä¸­ä¿¡å‰æ²¿ç»æµŽä¸Žä¸­å…³æ‘åˆ›ä¸šå¤§è¡—è”åˆä¸»åŠžçš„â€œåˆ›ä¸šæ€å¥”ç¡…è°·é¡¶çº§å­µåŒ–å™¨Founde','2017-04-28');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'alice','111','alice@sina.com'),(2,'','222','shi@qq.com'),(3,'','222','shilu@qq.com'),(4,'shilu','222','shilu@qq.com'),(5,'tom','111','tom@qq.com'),(6,'jack','111','jack@qq.com'),(7,'lucy','111','lucy@qq.com'),(8,'mike','111','mike@qq.com'),(9,'xidada','xidada','xidada@qq.com'),(10,'lilei','lilei','lilei@qq.com');
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

-- Dump completed on 2017-05-02  9:40:15
