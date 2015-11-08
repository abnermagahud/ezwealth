-- MySQL dump 10.13  Distrib 5.5.42, for Linux (x86_64)
--
-- Host: localhost    Database: 
-- ------------------------------------------------------
-- Server version	5.5.42-cll

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
-- Current Database: `ezwealth_db`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `ezwealth_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ezwealth_db`;

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcement` (
  `announcement_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `contents` longtext NOT NULL,
  `date_created` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`announcement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcement`
--

LOCK TABLES `announcement` WRITE;
/*!40000 ALTER TABLE `announcement` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bank_accounts`
--

DROP TABLE IF EXISTS `bank_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bank_accounts` (
  `bank_account_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  PRIMARY KEY (`bank_account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank_accounts`
--

LOCK TABLES `bank_accounts` WRITE;
/*!40000 ALTER TABLE `bank_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `bank_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buyecredit`
--

DROP TABLE IF EXISTS `buyecredit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buyecredit` (
  `buyecredit_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `reference_number` varchar(255) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `amount` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`buyecredit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buyecredit`
--

LOCK TABLES `buyecredit` WRITE;
/*!40000 ALTER TABLE `buyecredit` DISABLE KEYS */;
INSERT INTO `buyecredit` VALUES (1,1,'over-the-counter','','','test','test',1000,0,'','2015-04-20');
/*!40000 ALTER TABLE `buyecredit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `capture_page`
--

DROP TABLE IF EXISTS `capture_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `capture_page` (
  `capture_page_id` int(11) NOT NULL AUTO_INCREMENT,
  `capture_image` varchar(255) NOT NULL,
  `page_location` varchar(255) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  PRIMARY KEY (`capture_page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capture_page`
--

LOCK TABLES `capture_page` WRITE;
/*!40000 ALTER TABLE `capture_page` DISABLE KEYS */;
INSERT INTO `capture_page` VALUES (1,'assets/new-capture-page-images/aim.jpg','assets/new-capture-page-html/aim','aim'),(2,'assets/new-capture-page-images/biogreen.jpg','assets/new-capture-page-html/biogreen','biogreen'),(3,'assets/new-capture-page-images/bwl.jpg','assets/new-capture-page-html/bwl','bwl'),(4,'assets/new-capture-page-images/dxn.jpg','assets/new-capture-page-html/dxn','dxn'),(5,'assets/new-capture-page-images/ezwealth.jpg','assets/new-capture-page-html/ezwealth','ezwealth'),(6,'assets/new-capture-page-images/gfox.jpg','assets/new-capture-page-html/gfox','gfox'),(7,'assets/new-capture-page-images/goldlife.jpg','assets/new-capture-page-html/goldlife','goldlife'),(8,'assets/new-capture-page-images/organo.jpg','assets/new-capture-page-html/organo','organo'),(9,'assets/new-capture-page-images/royale.jpg','assets/new-capture-page-html/royale','royale'),(10,'assets/new-capture-page-images/sante.jpg','assets/new-capture-page-html/sante','sante'),(11,'assets/new-capture-page-images/tpc.jpg','assets/new-capture-page-html/tpc','tpc'),(12,'assets/new-capture-page-images/unoprime.jpg','assets/new-capture-page-html/unoprime','unoprime'),(13,'assets/new-capture-page-images/amaze.jpg','assets/new-capture-page-html/amaze','amaze'),(14,'assets/new-capture-page-images/beauty.jpg','assets/new-capture-page-html/beauty','beauty'),(15,'assets/new-capture-page-images/carman.jpg','assets/new-capture-page-html/carman','carman'),(16,'assets/new-capture-page-images/coffee.jpg','assets/new-capture-page-html/coffee','coffee'),(17,'assets/new-capture-page-images/real.jpg','assets/new-capture-page-html/real','real'),(18,'assets/new-capture-page-images/top_secret.jpg','assets/new-capture-page-html/secret','secret'),(19,'assets/new-capture-page-images/aff.jpg','assets/new-capture-page-html/affiliate','aff'),(20,'assets/new-capture-page-images/money.jpg','assets/new-capture-page-html/money','money');
/*!40000 ALTER TABLE `capture_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commission`
--

DROP TABLE IF EXISTS `commission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commission` (
  `commission_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) NOT NULL,
  `referrer_id` bigint(20) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  PRIMARY KEY (`commission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commission`
--

LOCK TABLES `commission` WRITE;
/*!40000 ALTER TABLE `commission` DISABLE KEYS */;
INSERT INTO `commission` VALUES (1,3,1,'Premium','750');
/*!40000 ALTER TABLE `commission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_sales`
--

DROP TABLE IF EXISTS `company_sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_sales` (
  `company_sales_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `commission` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`company_sales_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_sales`
--

LOCK TABLES `company_sales` WRITE;
/*!40000 ALTER TABLE `company_sales` DISABLE KEYS */;
INSERT INTO `company_sales` VALUES (1,3,'Premium','2500','750','2015-04-14');
/*!40000 ALTER TABLE `company_sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `e_credit`
--

DROP TABLE IF EXISTS `e_credit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `e_credit` (
  `ecredit_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ecredit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `e_credit`
--

LOCK TABLES `e_credit` WRITE;
/*!40000 ALTER TABLE `e_credit` DISABLE KEYS */;
/*!40000 ALTER TABLE `e_credit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ecredit_logs`
--

DROP TABLE IF EXISTS `ecredit_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ecredit_logs` (
  `ecredit_logs_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) NOT NULL,
  `to` varchar(255) NOT NULL,
  `receiver_id` bigint(20) NOT NULL,
  `sender_id` bigint(20) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ecredit_logs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ecredit_logs`
--

LOCK TABLES `ecredit_logs` WRITE;
/*!40000 ALTER TABLE `ecredit_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `ecredit_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `landing_page`
--

DROP TABLE IF EXISTS `landing_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `landing_page` (
  `landing_page_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) NOT NULL,
  `header_image` varchar(255) NOT NULL,
  `footer_image` varchar(255) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `youtube_id_1` varchar(100) NOT NULL,
  `youtube_id_2` varchar(100) NOT NULL,
  `youtube_id_3` varchar(100) NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `redirect_image_1` varchar(255) NOT NULL,
  `redirect_image_2` varchar(255) NOT NULL,
  `redirect_link_1` varchar(255) NOT NULL,
  `redirect_link_2` varchar(255) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `title3` varchar(255) NOT NULL,
  `title4` varchar(255) NOT NULL,
  `feature_image_1` varchar(255) NOT NULL,
  `feature_image_2` varchar(255) NOT NULL,
  `feature_image_3` varchar(255) NOT NULL,
  `feature_image_4` varchar(255) NOT NULL,
  `description_image_1` text NOT NULL,
  `description_image_2` text NOT NULL,
  `description_image_3` text NOT NULL,
  `description_image_4` text NOT NULL,
  `background_color` varchar(100) NOT NULL,
  `font_color` varchar(100) NOT NULL,
  `footer_title_1` varchar(255) NOT NULL,
  `footer_title_2` varchar(255) NOT NULL,
  `footer_content_1` text NOT NULL,
  `footer_content_2` text NOT NULL,
  PRIMARY KEY (`landing_page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `landing_page`
--

LOCK TABLES `landing_page` WRITE;
/*!40000 ALTER TABLE `landing_page` DISABLE KEYS */;
/*!40000 ALTER TABLE `landing_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leads`
--

DROP TABLE IF EXISTS `leads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leads` (
  `lead_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  PRIMARY KEY (`lead_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leads`
--

LOCK TABLES `leads` WRITE;
/*!40000 ALTER TABLE `leads` DISABLE KEYS */;
INSERT INTO `leads` VALUES (1,1,'maejairose@yahoo.com','09476001446'),(2,1,'ofeliaformaran02@gmail.com','09088130059'),(3,1,'Cestams44@gmail.com','09066596232'),(4,1,'mlmbusinessideas@gmail.com','09985100794'),(5,1,'iamcoachlowel@gmail.com','09213783114'),(6,1,'maejairose@yahoo.com','09476001446'),(7,1,'babesnomore@yahoo.com','0'),(8,1,'takeshi@gmail.com','0'),(9,1,'louren.jovito@gmail.com','09254796747'),(10,1,'norenjack@yahoo.com','09228024023'),(11,1,'wengrevillosa@gmail.com','09076850058'),(12,1,'kristianpaolo4@gmail.com','09497145955');
/*!40000 ALTER TABLE `leads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `member_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `referred_by` varchar(255) NOT NULL,
  `registration_date` date NOT NULL,
  `activation_date` date NOT NULL,
  `expiration_date` date NOT NULL,
  `account_status` varchar(255) NOT NULL,
  `has_website` int(11) NOT NULL DEFAULT '0',
  `type` varchar(255) NOT NULL,
  `total_income` bigint(20) NOT NULL,
  `total_encashed` bigint(20) NOT NULL,
  `balance` bigint(20) NOT NULL,
  `get_response_key` varchar(255) NOT NULL,
  `subscription` varchar(255) NOT NULL,
  `capture_page_limit` int(11) NOT NULL,
  `getresponse_affiliate` varchar(255) NOT NULL,
  `ecredit_balance` bigint(20) NOT NULL DEFAULT '0',
  `converted_amount` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'ezwealth','ezwealth','ezwealth','ezwealth','099999999','customerservice@ezwealthpages.com','','ezwealth','2015-04-01','2015-04-01','2017-04-01','1',1,'member',750,0,750,'121c39da1b05439f9c801642d6bc6b2b','basic',30,'',0,0),(2,'admin','44l97d7*','De Jesus','Rommel','','rgdejesus12@gmail.com','','','0000-00-00','0000-00-00','0000-00-00','1',0,'admin',0,0,0,'','',0,'',0,0),(3,'imcoachalvin','ezwealth','Cortez','Alvin Jhunne','09985100794','mlmbusinessideas@gmail.com','','ezwealth','2015-04-07','2015-04-14','2016-04-14','1',1,'member',0,0,0,'','premium',30,'webaffz',0,0),(4,'founder','skinny123','Magdadaro','Lowel','09213783114','iamcoachlowel@gmail.com','','ezwealth','2015-04-11','2015-04-19','2016-04-19','1',1,'member',0,0,0,'','premium',30,'freedemo',0,0),(5,'med777','mommyko23','galicia','medie','09476001446','maejairose@yahoo.com','','ezwealth','2015-04-12','0000-00-00','0000-00-00','0',0,'member',0,0,0,'','basic',0,'rommeldejesus',0,0),(6,'lorenoops','boplegs143','jovito','louren','09254796747','louren.jovito@gmail.com','','ezwealth','2015-04-16','0000-00-00','0000-00-00','0',0,'member',0,0,0,'','',0,'rommeldejesus',0,0),(7,'weng01','weng01','revillosa','roel','09076850058','wengrevillosa@gmail.com','','ezwealth','2015-04-26','0000-00-00','0000-00-00','0',0,'member',0,0,0,'','',0,'rommeldejesus',0,0),(8,'kristianpaolo4','09204085955','revillosa','Kristian paolo','09497145955','kristianpaolo4@gmail.com','','ezwealth','2015-04-26','0000-00-00','0000-00-00','0',0,'member',0,0,0,'','',0,'rommeldejesus',0,0);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members_capture_page`
--

DROP TABLE IF EXISTS `members_capture_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members_capture_page` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) NOT NULL,
  `capture_page_id` int(11) NOT NULL,
  `youtube_video_id` varchar(255) NOT NULL,
  `redirect_url` varchar(255) NOT NULL,
  `campaign_name` varchar(100) NOT NULL,
  `close_redirect_url` varchar(255) NOT NULL,
  `use_form` int(11) NOT NULL DEFAULT '0',
  `webform` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members_capture_page`
--

LOCK TABLES `members_capture_page` WRITE;
/*!40000 ALTER TABLE `members_capture_page` DISABLE KEYS */;
INSERT INTO `members_capture_page` VALUES (1,1,1,'sdfsdfsdfsdf','','','',1,'sdfsdfsdfsdfsdfsdf');
/*!40000 ALTER TABLE `members_capture_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `message_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `payment_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) NOT NULL,
  `payment_for` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `processor` varchar(255) DEFAULT NULL,
  `reference_number` varchar(255) DEFAULT NULL,
  `sender_name` varchar(255) DEFAULT NULL,
  `notes` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `proof_of_payment` varchar(255) DEFAULT NULL,
  `amount` bigint(20) DEFAULT '0',
  `date` date NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` VALUES (1,5,'basic','paypal','Paypal','000000','medie galicia','max restaurant attendees',0,'1gfoxx.jpg',0,'0000-00-00'),(2,3,'premium','bank','BPI','jnafafa','Alvin','dadaf',1,'projecthouse.jpg',0,'0000-00-00'),(6,4,'premium','',NULL,NULL,NULL,'',1,NULL,0,'0000-00-00');
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paypal`
--

DROP TABLE IF EXISTS `paypal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paypal` (
  `paypal_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `paypal_email` varchar(255) NOT NULL,
  PRIMARY KEY (`paypal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paypal`
--

LOCK TABLES `paypal` WRITE;
/*!40000 ALTER TABLE `paypal` DISABLE KEYS */;
/*!40000 ALTER TABLE `paypal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `primary_capture_page`
--

DROP TABLE IF EXISTS `primary_capture_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `primary_capture_page` (
  `primary_capture_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `capture_page_id` bigint(20) NOT NULL,
  `member_id` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`primary_capture_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `primary_capture_page`
--

LOCK TABLES `primary_capture_page` WRITE;
/*!40000 ALTER TABLE `primary_capture_page` DISABLE KEYS */;
INSERT INTO `primary_capture_page` VALUES (1,1,1,1),(2,2,1,1),(3,10,4,1),(4,3,4,1),(5,8,3,1),(6,1,3,1),(7,2,3,1),(8,3,3,1),(9,4,3,1),(10,5,3,1),(11,6,3,1),(12,7,3,1),(13,9,3,1),(14,10,3,1),(15,11,3,1),(16,12,3,1),(17,16,3,1),(18,13,3,1),(19,14,3,1),(20,18,3,1),(21,15,3,1),(22,17,3,1),(23,20,3,1),(24,19,3,1);
/*!40000 ALTER TABLE `primary_capture_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referrals`
--

DROP TABLE IF EXISTS `referrals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `referrals` (
  `referral_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `referrer_member_id` bigint(20) NOT NULL,
  `referred_member_id` bigint(20) NOT NULL,
  PRIMARY KEY (`referral_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referrals`
--

LOCK TABLES `referrals` WRITE;
/*!40000 ALTER TABLE `referrals` DISABLE KEYS */;
INSERT INTO `referrals` VALUES (1,1,3),(2,1,4),(3,1,5),(4,1,6),(5,1,7),(6,1,8);
/*!40000 ALTER TABLE `referrals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transfer`
--

DROP TABLE IF EXISTS `transfer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transfer` (
  `transfer_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) NOT NULL,
  `transfer_mode` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `transfer_date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`transfer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transfer`
--

LOCK TABLES `transfer` WRITE;
/*!40000 ALTER TABLE `transfer` DISABLE KEYS */;
/*!40000 ALTER TABLE `transfer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-02  1:00:01
