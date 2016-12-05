-- MySQL dump 10.13  Distrib 5.5.52, for Win64 (x86)
--
-- Host: localhost    Database: resources
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
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `git_url` varchar(255) DEFAULT NULL,
  `server_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
INSERT INTO `applications` VALUES (1,1,'test','test','test');
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
  `description` text,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,1,'The tag used to indicate all typo errors.','Typo');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('i9bakaei18s4r2f12kcucdhll3466btk','::1',1480273722,'__ci_last_regenerate|i:1480273487;'),('ed8olhvtd7foudu0ev5j5cggfssi2k4r','::1',1480273521,'__ci_last_regenerate|i:1480273521;'),('134jos3ukr95iskb8u1p6a1oh54nsmkd','::1',1480274085,'__ci_last_regenerate|i:1480273804;'),('vcjj8vj50544e8rmk6r09drmvbticra2','::1',1480274444,'__ci_last_regenerate|i:1480274147;'),('dcrfjivcvo4pmm9ip9e7js3mtpd9qalv','::1',1480274773,'__ci_last_regenerate|i:1480274484;'),('rvhb8c8r4j61p9q2p4t5jksbpj6kkpvq','::1',1480274903,'__ci_last_regenerate|i:1480274837;'),('3aj0ok6iokorljfl7dp3oocfa7vonq8r','::1',1480319011,'__ci_last_regenerate|i:1480318917;'),('a6g0ki7qojieu67ca9dn2s92r44pg21v','::1',1480321187,'__ci_last_regenerate|i:1480320986;'),('6eort2sclv309p7g13m6pbm60pofd0jg','::1',1480324638,'__ci_last_regenerate|i:1480324574;'),('od8ji1s9gql2t0pcu62gidln97i3b8b4','::1',1480325273,'__ci_last_regenerate|i:1480325014;'),('b6jtnqcmaqfs0ceb0988iftoc7m2nrak','::1',1480325700,'__ci_last_regenerate|i:1480325434;'),('sjoh26hcqst070bo27m715g6iqf7iec1','::1',1480325789,'__ci_last_regenerate|i:1480325789;'),('9jhcekedeekc2mvavgsdkddkatnapqfj','::1',1480333562,'__ci_last_regenerate|i:1480333410;'),('a0o8a89tvnf5dadto2adur5fo3h9cio7','::1',1480334093,'__ci_last_regenerate|i:1480333834;'),('ecfqaud1dtenju47ep402dvqdu53o61s','::1',1480334422,'__ci_last_regenerate|i:1480334292;'),('u0vf18hghuuteg96d9r0irdorfmq840b','::1',1480334856,'__ci_last_regenerate|i:1480334601;'),('h1l7e7j2t1g1hush7jbkpvg2lsq169q1','::1',1480335214,'__ci_last_regenerate|i:1480334955;'),('guuknnhjqrcin9canissashrjrhnveqs','::1',1480335534,'__ci_last_regenerate|i:1480335259;'),('8m38rijkbfnljv87mgfluug39ven7dg0','::1',1480336090,'__ci_last_regenerate|i:1480335831;'),('7501o7no08c68aab1qgecrt84br2m3db','::1',1480336137,'__ci_last_regenerate|i:1480336136;'),('1vacbhpd34c8sh30og5tane13f0s7of0','::1',1480336501,'__ci_last_regenerate|i:1480336500;'),('d09ul08afvt4mhc4m2hdvu3na1sv2pu8','::1',1480337079,'__ci_last_regenerate|i:1480336964;'),('4tetiiu6mjv546hek13fnde0n2d1il83','::1',1480337588,'__ci_last_regenerate|i:1480337304;'),('2jpp9qp4b00b7todivjen1u3j1p6rjc7','::1',1480337812,'__ci_last_regenerate|i:1480337608;'),('9bolug33sqhlscr2cfs3jte6cmee6glm','::1',1480338188,'__ci_last_regenerate|i:1480337929;'),('7399rd5ta6ivvv6el7vlbo5fel2tf3a4','::1',1480338377,'__ci_last_regenerate|i:1480338301;'),('2vk90ptd0f0jq5d85hrsefsgutakm2fi','::1',1480339625,'__ci_last_regenerate|i:1480339368;'),('dpt37lqq5arggmat7ddjgmcb6j25o0cj','::1',1480341544,'__ci_last_regenerate|i:1480341443;class|s:19:\"alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:38:\"De gebruiker zijn status is aangepast.\";'),('m5pnm6q5nhcv6eolo7hc4hndddtafjqu','::1',1480342067,'__ci_last_regenerate|i:1480342066;'),('ocp3btselfi3luv3v94jp0fp95qnubu9','::1',1480342081,'__ci_last_regenerate|i:1480342068;class|s:19:\"alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:22:\"De login is verwijderd\";'),('cpmjmhect4b7cvm83cbe4clpvuvkk916','::1',1480343658,'__ci_last_regenerate|i:1480343398;class|s:19:\"alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:37:\"De login zijn wachtwoord is ge-reset.\";'),('mo2db99ofs4j3s6m3vh2k197n8vlon2b','::1',1480343955,'__ci_last_regenerate|i:1480343954;'),('ul3fs0m3j55ufqa0jedp0ioikpskbldn','::1',1480344074,'__ci_last_regenerate|i:1480343956;'),('fal723im2ohid2jvthg2dudcdcibnhnb','::1',1480346596,'__ci_last_regenerate|i:1480346371;'),('6vaak5pdojggutbg6bqcs9bghaueu6dc','::1',1480347403,'__ci_last_regenerate|i:1480347396;'),('7eg6dejt6n9s2qaunb7jdjiem52tocc0','::1',1480350373,'__ci_last_regenerate|i:1480350255;'),('c9hfd1pdhggmeom0920s76ngl38mef4s','::1',1480351494,'__ci_last_regenerate|i:1480351493;'),('c4rd50cpr36jgp8vhhdr2jrkcs5b64d9','::1',1480354313,'__ci_last_regenerate|i:1480354312;'),('h38u3ogcq98emjeq14a3u4hjv1d1mvd0','::1',1480354670,'__ci_last_regenerate|i:1480354630;'),('82pdpao4bai03ra4t8v2ibjj6mairl7h','::1',1480355382,'__ci_last_regenerate|i:1480355094;'),('svssq65e7lcnsldhkbljp47okhigladb','::1',1480355797,'__ci_last_regenerate|i:1480355506;'),('ihn3vi4fhp9an285b9posn8j3t55hd7t','::1',1480356176,'__ci_last_regenerate|i:1480355888;'),('rm3im4tv6ancn8qkmgubb9schirs99n7','::1',1480356587,'__ci_last_regenerate|i:1480356297;'),('od860cvibgv5867hmpn4gabh5u95id12','::1',1480356673,'__ci_last_regenerate|i:1480356672;'),('6f6g28kkn7d7thn8h4d456q2d0iqib6h','::1',1480357214,'__ci_last_regenerate|i:1480356980;'),('n86l6c1888gbd34ql8dduiopktrkh8ln','::1',1480357568,'__ci_last_regenerate|i:1480357297;'),('apeltmeuifdu2crhtpu6lm1730pnftvc','::1',1480357933,'__ci_last_regenerate|i:1480357932;'),('9n08fv7md7rs2ekt2bnfupe596rdbjcp','::1',1480359612,'__ci_last_regenerate|i:1480359611;'),('6ocd99ib3i8dk1kfaisro5vvlofld5kh','::1',1480359615,'__ci_last_regenerate|i:1480359614;'),('bohl539nhhvtq4gh1veasd4uj0qhm376','::1',1480360548,'__ci_last_regenerate|i:1480360547;'),('pnssh2hgphk37deh8bd8l73ifp7nh1st','::1',1480361154,'__ci_last_regenerate|i:1480361153;'),('roc5ch6efkf9lkplca0sjqmplq8oeesr','::1',1480362444,'__ci_last_regenerate|i:1480362263;'),('ust7jktuqqdc9pib50g1f8f1hbc6gtqc','::1',1480363808,'__ci_last_regenerate|i:1480363640;class|s:19:\"alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:25:\"Het ticket is aangemaakt.\";'),('c9qoi1kr5dbqkrd5g6am9v54fsdbo6f6','::1',1480364254,'__ci_last_regenerate|i:1480364236;'),('el4n7h24bjqh1rnki08bjg8vn9dhidca','::1',1480364933,'__ci_last_regenerate|i:1480364859;'),('g7d6g4moirkoo1st7u9thh1l8pdh3l9e','::1',1480407075,'__ci_last_regenerate|i:1480407067;class|s:19:\"alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:25:\"Het ticket is verwijderd.\";'),('gu2d83m8297n4q8i7nmjsp5v55k07sfj','::1',1480407562,'__ci_last_regenerate|i:1480407561;'),('7thc9alcv52a3jdlatmnc0n1sugctja9','::1',1480408659,'__ci_last_regenerate|i:1480408436;'),('gs5kb51fh6g2d1g8js2k2ebvtliuipeb','::1',1480408777,'__ci_last_regenerate|i:1480408776;'),('tk0utaasiptui7jvf652fjbssg7ndu0a','::1',1480409342,'__ci_last_regenerate|i:1480409215;'),('0pilfkrsso8slv5lksa3t67k3elv3gmi','::1',1480410092,'__ci_last_regenerate|i:1480410084;class|s:19:\"Alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:37:\"Het ticket is naar github verplaatst.\";'),('ec9hvbqn9cgbperhmq8ku7kfvpn6h6u9','::1',1480410700,'__ci_last_regenerate|i:1480410566;'),('dblps0u28urjn0k396c2kgrhtgt8e806','::1',1480411096,'__ci_last_regenerate|i:1480411038;'),('kivl0424okri4mjgulr24co5o40uh36f','::1',1480411807,'__ci_last_regenerate|i:1480411600;'),('cn3b6sp53kfjjd84mfbe1ic1032gt1gd','::1',1480412197,'__ci_last_regenerate|i:1480411950;'),('7l2f9evr9qm2ikht9tdrm8o89gil09co','::1',1480412607,'__ci_last_regenerate|i:1480412348;'),('0775siljk9rqgplg0g6l33ck0tl6sbq0','::1',1480412726,'__ci_last_regenerate|i:1480412675;'),('d0mv7gdk56id3udjm178kai5ngooobtq','::1',1480418802,'__ci_last_regenerate|i:1480418730;'),('9o4rcamohf4fs5un2nq7u541omgkpovm','::1',1480419467,'__ci_last_regenerate|i:1480419239;class|s:19:\"alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:25:\"Het ticket is verwijderd.\";'),('ft3rolf1gevdg6cgp9llvrdc70814633','::1',1480419615,'__ci_last_regenerate|i:1480419552;'),('ra9egdibqtmrgrcu67c38dn3njdv8mli','::1',1480420309,'__ci_last_regenerate|i:1480420117;'),('7nj5i7gl6r2hi4q6le93d36pt3gs4iek','::1',1480426302,'__ci_last_regenerate|i:1480426014;'),('4ffclo8jbopq50i0vcpc1r8aa6e4saol','::1',1480426805,'__ci_last_regenerate|i:1480426570;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('144cpg7g34d6qvpo71uo2cudeleh89hq','::1',1480429453,'__ci_last_regenerate|i:1480429180;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('ut1igdfi3v69fhrpfu31e5209kkp1lof','::1',1480429585,'__ci_last_regenerate|i:1480429515;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('qriok4tfj4r7ah6o9s440aiksespflmf','::1',1480431258,'__ci_last_regenerate|i:1480431043;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('ms9egv33ftsj54q41bi6vq9m3lu6sk1c','::1',1480431374,'__ci_last_regenerate|i:1480431373;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('b4kfi3jcpl9i425kfh85p7vmsb6hsrnn','::1',1480432314,'__ci_last_regenerate|i:1480432039;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('otjp3o9c7kcdq05ecpju8igsfk2n06u3','::1',1480432394,'__ci_last_regenerate|i:1480432393;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('b6t5620gkq5bq119f049j7hi09qfeans','::1',1480432678,'__ci_last_regenerate|i:1480432395;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('cmm9vqo9pqk2hfskj9ur9t4a9u55b1v9','::1',1480432997,'__ci_last_regenerate|i:1480432721;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('i92d1vo9bvv7vma4vpe6h99hn1vp1ei4','::1',1480433313,'__ci_last_regenerate|i:1480433030;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('4m1lqa3efl2aqultsl6fvkt2vogkut1f','::1',1480433546,'__ci_last_regenerate|i:1480433344;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('gj4m4fiiqpqd97iak60oovkt2u18ftml','::1',1480433970,'__ci_last_regenerate|i:1480433716;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}class|s:19:\"alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:25:\"De reactie is verwijderd.\";'),('j4istq3nhs1455u9a9rv6309538nle6b','::1',1480434943,'__ci_last_regenerate|i:1480434868;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('on775pisgdglvh0bg70rds217i0b54to','::1',1480435322,'__ci_last_regenerate|i:1480435216;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('cmjqqu361gv4bf8pio7tu596bvskfdfa','::1',1480436967,'__ci_last_regenerate|i:1480436966;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('nmip0ccbq8g08gobvk8lj7jvmgl01qv6','::1',1480439673,'__ci_last_regenerate|i:1480439517;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('svh20kp6o4rof2rhgo56est9oop6oogu','::1',1480440197,'__ci_last_regenerate|i:1480439915;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('181p4e78dkmq78r88ntro06m2ifiatpg','::1',1480440320,'__ci_last_regenerate|i:1480440223;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('70bfms0i4r8hsa5u66ot5mmrafdiede7','::1',1480440920,'__ci_last_regenerate|i:1480440759;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('sc2ovcr0kj331jekvlv89l90tss6rqvi','::1',1480443276,'__ci_last_regenerate|i:1480443249;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('ig6b36n5sar7onbuljo77vgl8rl9oa0b','::1',1480443973,'__ci_last_regenerate|i:1480443744;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('tkbe8givrgd128lcifa8p3dd04fre8pv','::1',1480444135,'__ci_last_regenerate|i:1480444105;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('5iibfeugq8q28bnjg4ue2efic967j60g','::1',1480447063,'__ci_last_regenerate|i:1480446805;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('dbellq7f9vn9sg9c3g2kfqagpndgrgbn','::1',1480447121,'__ci_last_regenerate|i:1480447119;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('2mhftie2us5calsot4dm88rlnvsvpo8v','::1',1480448035,'__ci_last_regenerate|i:1480447893;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('7215gl6rgch4n08jgo9vm1fiqg7m8v9e','::1',1480448619,'__ci_last_regenerate|i:1480448422;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('kg0nh6ql82tfa1mvn27i9odku5k8thf2','::1',1480449078,'__ci_last_regenerate|i:1480448786;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}class|s:19:\"Alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:37:\"Het ticket is naar github verplaatst.\";'),('5cq2lc298av5m7dvik0sg319lgf7gr1r','::1',1480449264,'__ci_last_regenerate|i:1480449101;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}class|s:19:\"alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:28:\"De applicatie is verwijderd.\";'),('kukd9moa920q7agvkcce96rbc9g58q11','::1',1480508519,'__ci_last_regenerate|i:1480508502;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('aup0sn1dcc3vc0simbjissv5m2sqvldv','::1',1480508963,'__ci_last_regenerate|i:1480508836;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('lm0454s552c6pm53k0rs1tefbh8u6ho2','::1',1480509345,'__ci_last_regenerate|i:1480509194;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('240imtv42dqvcqthjlsmee5vifdhpiva','::1',1480509729,'__ci_last_regenerate|i:1480509547;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('0b6sp0fjuglulfol4j8lrdgcsrh7b075','::1',1480510024,'__ci_last_regenerate|i:1480509862;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('5h5m7ft20gka268nmqo5j2d3baba69uh','::1',1480510470,'__ci_last_regenerate|i:1480510310;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('r786423pd97lipll3ru4psqs2f05o28h','::1',1480510921,'__ci_last_regenerate|i:1480510646;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('mne1cuok1ciosamrl6bul51b8mfbnjpf','::1',1480511135,'__ci_last_regenerate|i:1480510961;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('a1s9g4jaj3cg1ci59n97kd6eq8fvdclf','::1',1480622522,'__ci_last_regenerate|i:1480622253;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('f3l7ge2i3l54e409mb32rbdt63s5t6le','::1',1480622697,'__ci_last_regenerate|i:1480622573;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('f4ic52l19cn0hlp1aahapqo34ndlj8um','::1',1480735467,'__ci_last_regenerate|i:1480735288;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('d7jjb1nip9v1ft9uogfo2tl8ush9715u','::1',1480735935,'__ci_last_regenerate|i:1480735860;'),('niku4uobr7go9fuu0c45p63mq4hlbl3l','::1',1480735942,'__ci_last_regenerate|i:1480735869;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('h54g32krft3ka4jr90hqnr87qbg8v1a3','::1',1480736016,'__ci_last_regenerate|i:1480736015;'),('ioj65be4krchrosi72egv2u576632tgc','::1',1480736625,'__ci_last_regenerate|i:1480736511;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('ik95gbe7k9dsjppgsn0ssrmkog3nmove','::1',1480752468,'__ci_last_regenerate|i:1480752170;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('3iduuj7b6tukdrlsr8efmv6th1ptu00c','::1',1480752803,'__ci_last_regenerate|i:1480752503;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('ld57e95mi8igkam9v06pnft84rqd62tn','::1',1480752997,'__ci_last_regenerate|i:1480752862;'),('3ujpcq1p1rtt7fbi0k9e6jr5ua8u638t','::1',1480883054,'__ci_last_regenerate|i:1480883054;'),('kcabtm0ug4v87vi82msju81rtp0lbcj2','::1',1480884400,'__ci_last_regenerate|i:1480884356;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('tdmv576qjhtuoqede4mjg4gspstomdas','::1',1480918946,'__ci_last_regenerate|i:1480918832;class|s:18:\"alert alert-danger\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:61:\"Your have the maximum login attempts. Try again in 5 minutes.\";'),('kbcq77ksfiu2cpi41qtkibvrrjha4783','::1',1480919354,'__ci_last_regenerate|i:1480919171;class|s:18:\"alert alert-danger\";__ci_vars|a:2:{s:5:\"class\";s:3:\"new\";s:7:\"message\";s:3:\"new\";}message|s:61:\"Your have the maximum login attempts. Try again in 5 minutes.\";'),('nbl5gs2gafm7g65m9273u2e37ls815nn','::1',1480919754,'__ci_last_regenerate|i:1480919753;class|s:18:\"alert alert-danger\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:61:\"Your have the maximum login attempts. Try again in 5 minutes.\";'),('7ng3vbstmur1unjjjs7rsri8b4h4nmn4','::1',1480920300,'__ci_last_regenerate|i:1480920179;'),('l9k93furjp0lot7pa81s0e95fnefnlop','::1',1480926040,'__ci_last_regenerate|i:1480926029;'),('vvpl635e78ormlgcogbeic52rsjg5fk0','::1',1480927592,'__ci_last_regenerate|i:1480927585;'),('omh8g8mf6j35hhc0f7eb4a2km08gqii9','::1',1480927991,'__ci_last_regenerate|i:1480927990;'),('9oi230tb46ffjf082kvv3lde9n56phhr','::1',1480928640,'__ci_last_regenerate|i:1480928615;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('1naqte166psrr2erc311qr4s2i8idptl','::1',1480929260,'__ci_last_regenerate|i:1480929253;logged_in|a:3:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";}'),('ogr939inki38eopi2kaii3o237vt6415','::1',1480929868,'__ci_last_regenerate|i:1480929868;'),('1bb8aoeuhs5qkku73rgqs23rpej2pl32','::1',1480930027,'__ci_last_regenerate|i:1480930027;'),('lcbkgnkessk7e3kav37k7htqt7sb0v1j','::1',1480930157,'__ci_last_regenerate|i:1480930157;'),('lv3v6e691tnhk5hv45jrd41h9ig3di4g','::1',1480930167,'__ci_last_regenerate|i:1480930159;logged_in|a:4:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";s:4:\"role\";s:5:\"Admin\";}'),('8ion9lje63havj1oauiqr0lf3qce31pc','::1',1480930719,'__ci_last_regenerate|i:1480930719;'),('0g58td30oe5ltjek4v4mk3mn462nhgve','::1',1480930878,'__ci_last_regenerate|i:1480930878;'),('qgev50a4d7h4kbjai6kcp6m7glb11jnt','::1',1480931227,'__ci_last_regenerate|i:1480931227;'),('k5ra0mtmv4ef3fqpof89pliv161065di','::1',1480931384,'__ci_last_regenerate|i:1480931228;logged_in|a:4:{s:2:\"id\";i:1;s:4:\"name\";s:11:\"Tim Joosten\";s:5:\"email\";s:17:\"Topairy@gmail.com\";s:5:\"roles\";a:2:{i:0;s:5:\"Admin\";i:1;s:4:\"Test\";}}');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_permissions`
--

DROP TABLE IF EXISTS `login_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_permissions` (
  `id` int(11) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `permissions_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_permissions`
--

LOCK TABLES `login_permissions` WRITE;
/*!40000 ALTER TABLE `login_permissions` DISABLE KEYS */;
INSERT INTO `login_permissions` VALUES (NULL,1,1),(NULL,1,2);
/*!40000 ALTER TABLE `login_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'Admin','Administrator role'),(2,'Test','Testing group');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reactions`
--

DROP TABLE IF EXISTS `reactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reactions`
--

LOCK TABLES `reactions` WRITE;
/*!40000 ALTER TABLE `reactions` DISABLE KEYS */;
INSERT INTO `reactions` VALUES (1,NULL,'ik ben een test comment');
/*!40000 ALTER TABLE `reactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reactions_ticket`
--

DROP TABLE IF EXISTS `reactions_ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reactions_ticket` (
  `id` int(11) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `reactions_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reactions_ticket`
--

LOCK TABLES `reactions_ticket` WRITE;
/*!40000 ALTER TABLE `reactions_ticket` DISABLE KEYS */;
/*!40000 ALTER TABLE `reactions_ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignee_id` int(11) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text,
  `category_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `application_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tickets_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (1,1,'test','test',1,1,1),(2,0,'test','testfgsdfgsdfgsdfgdfg',1,1,1),(3,1,'test','test',1,0,1);
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `blocked` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Topairy','Tim Joosten',0,'e10adc3949ba59abbe56e057f20f883e','Topairy@gmail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-05 10:54:07
