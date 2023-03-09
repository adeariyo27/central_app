/*
SQLyog Ultimate v10.3 
MySQL - 5.5.68-MariaDB : Database - central_app
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`central_app` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `central_app`;

/*Table structure for table `bukutamu_daftar_kunjungan` */

DROP TABLE IF EXISTS `bukutamu_daftar_kunjungan`;

CREATE TABLE `bukutamu_daftar_kunjungan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `no_tlp` varchar(128) NOT NULL,
  `tanggal` datetime NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `keperluan` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bukutamu_daftar_kunjungan` */

insert  into `bukutamu_daftar_kunjungan`(`id`,`nama`,`no_tlp`,`tanggal`,`alamat`,`pekerjaan`,`keperluan`) values (11,'Marno','2147483647','2021-03-23 10:48:00','Petobo','Pengacara','Sidang perkara 28 dan 29 permohonan'),(12,'FELIS MANURUNG, SH','2147483647','2021-03-25 09:51:00','Jl.Setia Budi','Advokat','Ambil Salinan Putusan'),(13,'Marno','2147483647','2021-03-25 12:35:00','Petobo','Pengacara','Mengikuti sidang'),(31,'Nasrul Jamaludin, SH','081247411167','2021-04-13 11:01:00','Jl.Panjaitan','Advokat','Sidang perkara 03'),(32,'Mohammad Sholeh','087887414126','2021-04-13 11:04:00','Toli Toli','Advokat','Sidang perkara 03'),(33,'Milan kartika','081242057076','2021-04-13 11:13:00','Btn palupi blok bs3','Pegawai negeri sipil','Sidang perkara 03'),(34,'AZIZ T, SH., MH','08114220678','2021-04-14 08:50:00','Jl. Griya ranggong sakinah blk B No 2','Advokat','Sidang'),(35,'Erik Cahyono','','2021-04-15 10:42:00','Jln. Kenari perumnas tinggede','Pengacara','Sidang'),(36,'Gerry pamungkas','081218784000','2021-04-20 10:13:00','Jl. Gaga 1','Mahasiswa','Sidang PK'),(37,'Moh. Tri Astomo','','2021-04-20 10:16:00','Kp. Pisangan','Wiraswasta','Sidang PK'),(38,'Harpen pandapotana','082369962424','2021-04-20 10:22:00','Komp. The mansion','Pengacara','Sidang PK'),(39,'Lisar Wirailhami, S.H., M.H','08114448322','2021-04-21 08:28:00','Jl.Gunung Sari','Advokat','Sidang perkara no 07'),(40,'Guntur','082187621577','2021-04-21 08:53:00','Tanauge','PNS','Sidang Perkara 29'),(41,'Moh Juanda','081242953967','2021-04-21 11:17:00','Toli toli','Advokat','sidang pk no 01'),(42,'Khasogi hamonangan','081212762088','2021-04-22 08:50:00','Jl. Lapatta, perum the green forest blok n no.11','Advokat','Sidang'),(43,'I gusti made suabawa','085239969419','2021-04-22 08:54:00','Sindang sari , toili barat','Kepala desa','Sidang'),(44,'I gusti made suabawa','085239969419','2021-04-22 08:54:00','Sindang sari , toili barat','Kepala desa','Sidang'),(45,'Muhamad','085823269910','2021-04-22 08:55:00','Karya makmur','Sekdes','Sidang'),(46,'Muhamad','085823269910','2021-04-22 08:55:00','Karya makmur','Sekdes','Sidang'),(47,'Kadek sudiarta','082347146596','2021-04-22 08:58:00','Desa pandanwangi','Pns','Sidang'),(48,'Denu patta eppe','082194145208','2021-04-22 09:12:00','Jl. Karajalemba','Advokat','Sidang'),(49,'Muhammad safri yasin','085145861999','2021-04-28 10:12:00','Jalan dayo dara btn lagarutu','Konstruksi','Sidang'),(50,'Anop Sinapa','082244319365','2021-04-29 09:43:00','Lembobaru','PNS','Sidang 08'),(51,'Andi Iswan Wahid','','2021-04-29 09:45:00','Morowali','PNS','Sidang 08'),(52,'Benilemba','','2021-04-29 09:47:00','Tinompo','PNS','Sidang 08'),(53,'Anop Sinapa','082244319365','2021-05-06 10:14:00','Lembobaru','PNS','Sidang'),(54,'Anita','085255811299','2021-05-10 10:13:00','Jl.Ongka Malino','Advokay','Sidang pk 11'),(55,'Erik Cahyono','085256039322','2021-05-10 10:58:00','Jln. Kenari perumnas tinggede','Pengacara','Sidang pk 09'),(56,'Anita','085255811299','2021-05-18 09:23:00','Jl.Ongka Malino','Advokay','Sidang pk 11'),(57,'Marno','08114584577','2021-05-18 09:41:00','Petobo','Pengacara','Sidang pk 15'),(58,'Hardianah udji Mallawan SE','082188023433','2021-05-18 10:31:00','Setia budi','PNS','Sidang pk 15'),(59,'Yonatan Tandi BUA','081253892830','2021-05-18 10:58:00','Jl anoa','Advokat','sidang pk 10'),(60,'Anita','085255811299','2021-05-27 10:20:00','Jl.Ongka Malino','Advokat','Sidang perkara 11'),(61,'Marno','08114584577','2021-06-10 09:21:00','Petobo','Pengacara','Pk no 18/G/2021'),(62,'Royal Langgeroni, SH, MH','082344115404','2021-06-15 09:53:00','Poso','Advokat','Sidang'),(63,'Takaendengan, sH','082291919931','2021-06-15 09:55:00','Poso','Advokat','Sidang pk 23'),(64,'Febrianto,SH','082188455501','2021-06-15 10:29:00','Jl.perdos','Advokat','Sidang pk 03'),(65,'Milan kartika','081242057076','2021-06-15 10:56:00','Btn palupi blok bs3','Pegawai negeri sipil','Sidang 03 '),(66,'Yonatan Tandi BUA','081253892830','2021-06-23 08:53:00','Jl anoa','Advokat','sidang pk 10'),(67,'I Gusti made suabawa','085239969419','2021-06-23 09:57:00','Banggai','PNS','Sidang pk 10'),(68,'Erik Cahyono','085256039322','2021-06-23 10:56:00','Marawola','Advokat','Sidang pk 09'),(69,'Anggreani  Landegawa','082293607093','2021-06-23 10:59:00','Beteleme','Karyawan Honorer','sidang pk no 13, 14'),(70,'Novriyadiansyah','081245222785','2021-06-30 09:21:00','Jl. Lasoso no.12','Advokat','Sidang'),(71,'Ida nurita','0811462281','2021-06-30 09:34:00','Jl. Anggur no. 45','Advokat','Sidang'),(72,'Ridla Lateka','08525697673','2021-07-01 09:10:00','Poso','PNS','Sidang'),(73,'Sudirman sinolidi','-','2021-07-01 09:12:00','Poso','Petani','Sidang'),(74,'Andi Iswan Wahid','0813417727007','2021-07-01 09:20:00','Kolonadale','PNS','Sidang'),(75,'Rahmuddin hammadong','081341062885','2021-07-01 09:23:00','Baolan','Advokat','Sidang'),(76,'Anggreani Landegawa','082293607093','2021-07-01 09:26:00','Beteleme','PNS','Sidang'),(77,'Fajrin SH','082124017456','2021-07-01 09:40:00','Tawanjuka','Advokat','Sidang'),(78,'Triyanto Wiguna','082393509920','2021-07-06 09:10:00','Jl.Maleo','PNS','Konsultasi'),(79,'Royal Langgeroni, SH, MH','082344115404','2021-07-06 09:25:00','Poso','Advokat','Sidang'),(80,'Nofertian Tarasendo','0-','2021-07-06 09:27:00','Malino','Advokat','Sidang'),(81,'Agung Susanto','085241044140','2021-07-06 10:26:00','Lasoani','Advokat','Sidang'),(82,'Febrianto','082188455501','2021-09-01 10:45:00','Perdos tondo','Pengacara','Sidang'),(83,'rivkiyadi','081344884367','2021-08-05 10:33:00','palu','advokat','sidang'),(84,'hasnawati','085241352380','2021-08-05 10:51:00','palu','advokat','sidang'),(85,'muhammad aidil','081245106657','2021-08-18 09:52:00','Jl. Sisingamangaraja No. 12','advokat','sidang'),(86,'Alif Pra M.','081527826779','2021-08-18 09:56:00','Jl. Merpati','advokat','sidang'),(87,'Febrianto','082188455501','2021-08-25 10:58:00','Perdos tondo','Pengacara','sidang'),(88,'M. Fajrin','082124017456','2021-08-18 10:48:00','palu','advokat','sidang'),(89,'Benilemba','','2021-09-07 09:58:00','Morowali Utara','PNS','sidang'),(90,'Benilemba','','2021-08-18 10:14:00','Morowali Utara','PNS','sidang'),(91,'Syahrudin,S.H','085241199222','2021-08-25 11:12:00','Jl.Yosudarso No 1 D','Advokat','sidang'),(92,'Agung Susanto','085241044140','2021-08-05 09:08:00','Lasoani','Advokat','sidang'),(93,'hardiana','082188023433','2021-08-18 10:20:00','palu','PNS','sidang'),(94,'Rahmat Agung Prayuda ','081345815549','2021-09-07 11:16:00','donggala','PNS','ambil salinan putusan'),(95,'royal langgeroni','082344115404','2021-08-25 10:23:00','poso','advokat','sidang'),(96,'Alif Pra M.','081527826779','2021-09-01 09:25:00','Jl. Merpati','advokat','sidang'),(97,'hardiana','082188023433','2021-09-01 10:04:00','palu','PNS','sidang'),(98,'Syahrudin,S.H','085241199222','2021-09-01 10:14:00','Jl.Yosudarso No 1 D','Advokat','sidang'),(99,'Eske Yuniel','081243639455','2021-09-07 10:31:00','Jl. Trans Sulawesi Poso','PNS','sidang'),(100,'Eske Yuniel','081243639455','2021-08-07 10:36:00','poso','PNS','sidang'),(101,'hardiana','082188023433','2021-09-01 10:39:00','palu','PNS','sidang'),(102,'Benilemba','','2021-09-07 10:40:00','Morowali Utara','PNS','sidang'),(103,'Abdul Rajab,SH','081341114666','2021-09-08 09:31:00','Jl.Dayodara','Advokat','sidang pk 43'),(104,'Hizbudin D Wahab','0811453534','2021-09-08 10:12:00','Mamboro','Advokat','Sidangp pk 43'),(105,'Muh Fikri, SH,Mh','085190942747','2021-09-08 10:16:00','Tanamodindi','Advokat','Sidang 43'),(106,'Ivan Dendi Salmon, SH','081244683384','2021-09-08 10:28:00','Besusu','Advokat','Sidang pk 44'),(107,'Sardi Achsan','082208229289','2021-09-08 10:31:00','Lasoani','Advokat','Sidang pk 44'),(108,'Supardi A Mokoapat','081286270902','2021-09-08 10:34:00','Lasoani','PNS','Sidang pk 43'),(109,'Erwin','085241255043','2021-09-08 11:20:00','Palu','PNS','Sidang pk 44'),(110,'Agung Susanto','085241044140','2021-09-08 11:48:00','Lasoani','Advokat','Sidang pk 29'),(111,'Supardi','081286270902','2021-09-08 10:30:00','Surawele blok gladiol no 18','PNS','sidang pk 43, 37'),(112,'Sofyan Joesoef','082187958759','2021-09-09 09:42:00','Gunung loli no. 3','Pengacara','Sidang'),(113,'Sri wulan hadjar','','2021-09-09 10:15:00','KH. Abdul salim','Wiraswasta','Sidang'),(114,'Abdul rahman','08534241453','2021-09-09 10:18:00','Jl. Moh hatta no. 28','Wiraswasta','Sidang'),(115,'Eske Yuniel','081243639455','2021-09-14 09:02:00','Jl. Trans Sulawesi Poso','PNS','Sidang'),(116,'Yusup musa kolo','081242325912','2021-09-14 10:43:00','Desa kelei','Petani','Sidang'),(117,'Alce pantorore','082237706224','2021-09-14 10:45:00','Desa kelei','Petani','Sidang'),(118,'Ridla lateka','','2021-09-14 10:46:00','Setia budi, kelei','Guru','Sidang'),(119,'Bakti lateka','082347530412','2021-09-14 10:49:00','Kelei','Pensiunan','Sidang'),(120,'Efraim rosolemba leagasia','082293095324','2021-09-14 10:50:00','Desa kelei','Pelajar','Sidang'),(121,'Fransri laempasa','081242233937','2021-09-14 10:52:00','Balele','Petani','Sidang'),(122,'Fence frans robin wendur','081284814597','2021-09-14 10:53:00','Desa kelei','Wiraswasta','Sidang'),(123,'Mirda ntou','082347451235','2021-09-15 08:59:00','Desa biga','Wiraswasta','Sidang'),(124,'Asmat w. Tangahu','082241493112','2021-09-15 09:01:00','Desa biga','Kepala desa','Sidang'),(125,'Abd. Ajis asraka ','085256684064','2021-09-15 09:02:00','Desa biga','Honorer','Sidang'),(126,'Wisetyo sasongko','081376370628','2021-09-15 09:51:00','Lembontoru','Swasta','Sidang eksekusi'),(127,'Almida','085241060432','2021-09-15 10:01:00','Desa lee','Kepala desa','Sidang eksekusi'),(128,'Almidaa','085241060432','2021-09-15 10:03:00','Desa lee','Kepala desa','Sidang eksekusi'),(129,'Patmos sala','','2021-09-15 10:06:00','Desa lee','Tani','Sidang eksekusi'),(130,'Jornius lapanda','','2021-09-15 10:07:00','Desa lee','','Sidang eksekusi'),(131,'Maxigalemba balebu','','2021-09-15 10:08:00','Desa lee','Pns','Eksekusi'),(132,'Trisno putrawan','082361851569','2021-09-15 10:12:00','Desa lee','Sekdes','Eksekusi'),(133,'Wisnu uruwo','085395458359','2021-09-15 10:14:00','Desa lee','','Eksekusi'),(134,'Yansen kundimang','082372262004','2021-09-15 10:27:00','Palu','Advokat','Eksekusi'),(135,'Sardi achsan','','2021-09-15 10:29:00','Garuda','Advokat','Sidang'),(136,'Yohanes Budiman','081342639844','2021-09-16 09:59:00','Palu','Advokat','Sidang pk 19'),(137,'Moh Firda','082290325799','2021-09-16 10:15:00','Tatura','Advokat','Sidang'),(138,'Ishak Adam','08115212392','2021-09-16 10:16:00','Tojo una una','Advokat','Sidang'),(139,'Fita Yulianti','0853982993639','2021-09-16 10:18:00','Malonda','PNS','Sidang'),(140,'Nurmila','081354362442','2021-09-16 10:24:00','Otista','PNS','Sidang'),(141,'Alfrin magdalena','081283490749','2021-09-16 10:28:00','Karanjalembah','PNS','Sidang'),(142,'Abdul rahman','08534241453','2021-09-16 10:29:00','Jl. Moh hatta no. 28','Wiraswasta','Sidang'),(143,'Rahmuddin hammadong','081341062885','2021-09-16 10:30:00','Baolan','Advokat','Sidang'),(144,'Rudi Hadiswarno','082187938789','2021-09-16 10:41:00','Bpn toli2','PNS','Sidang'),(145,'Sofyan Joesoef','082187958759','2021-09-16 10:43:00','Gunung loli no. 3','Pengacara','Sidang'),(146,'Muh Rasyidi, SH,MH','081341100081','2021-09-16 10:44:00','Tondo','Advokat','Sidang'),(147,'Ivan Dendi Salmon, SH','081244683384','2021-09-20 10:10:00','Palu','Advokat','Sidang'),(148,'Ivan Dendi Salmon, SH','081244683384','2021-09-20 10:10:00','Palu','Advokat','Sidang'),(149,'Ivan Dendi Salmon, SH','081244683384','2021-09-20 10:10:00','Palu','Advokat','Sidang'),(150,'Hasnawati','085242952380','2021-09-20 10:16:00','Palu','Advokat','Sidang'),(151,'Lutfin','082296698945','2021-09-20 10:19:00','Palu','Advokat','Sidang'),(152,'Hasnawati malude','085242957386','2021-09-22 10:16:00','BTN. Taman Ria estate','Karyawan swasta','Sidang'),(153,'Alfrin magdalena','081283490749','2021-09-23 10:29:00','Karanjalembah','PNS','sidang'),(154,'Ishak Adam','08115212392','2021-09-23 10:32:00','Tojo una una','Advokat','sidang'),(155,'Moh Firda','082290325799','2021-09-23 10:33:00','Tatura','Advokat','sidang'),(156,'Rudi Hadiswarno','082187938789','2021-09-23 10:37:00','Bpn toli2','PNS','sidang'),(157,'Yohanes Budiman','081342639844','2021-09-23 10:43:00','Palu','Advokat','sidang'),(158,'Suharman','085259163241','2021-09-23 10:48:00','pppppppp','Pensiunan','ambil salinan putusan'),(159,'arie muhammad haikal','08118331187','2021-09-23 10:54:00','jakarta selatan','legal audit ojk','konsultasi'),(160,'Rahmuddin hammadong','081341062885','2021-09-23 11:14:00','Baolan','Advokat','sidang'),(161,'ardi m said','085395124263','2021-09-23 11:17:00','desa lingadaan','petani','sidang (saksi)'),(162,'Agung Susanto','085241044140','2021-09-23 11:27:00','Lasoani','Advokat','sidang'),(163,'Rahmuddin hammadong','081341062885','2021-09-08 17:01:00','Baolan','Advokat','Sidang Pemeriksaan Persiapan'),(164,'Rahmuddin hammadong','081341062885','2021-09-08 17:03:00','Baolan','Advokat','Sidang Pemeriksaan Persiapan'),(165,'Rahmuddin hammadong','081341062885','2021-09-08 17:03:00','Baolan','Advokat','Sidang Pemeriksaan Persiapan'),(166,'Rahmuddin hammadong','081341062885','2021-09-15 17:04:00','Baolan','Advokat','Sidang Pemeriksaan Persiapan'),(167,'Hasnawati malude','085242957386','2021-09-28 10:18:00','BTN. Taman Ria estate','Karyawan swasta','sidang'),(168,'Ivan Dendi Salmon, SH','081244683384','2021-09-28 10:23:00','Besusu','Advokat','sidang'),(169,'muh.Fikri','082190942747','2021-09-28 10:27:00','jl.veteran no 119 e','Advokat','sidang'),(170,'ABD GAFAR SALAM, SH','085228494358','2021-09-28 10:45:00','PALU','Advokat','sidang'),(171,'Mirda ntou','082347451235','2021-09-29 08:31:00','desa biga','karyawan honorer','sidang'),(172,'Yonatan Tandi BUA','081253892830','2021-09-29 09:49:00','Jl anoa','Advokat','sidang'),(173,'Asmat w. Tangahu','082241493112','2021-09-29 10:39:00','Desa biga','Kepala desa','sidang'),(174,'royal langgeroni','082344115404','2021-09-29 10:48:00','jl. p. batam Poso Kota','advokat','sidang'),(175,'hasrun','082393018423','2021-09-29 10:53:00','Morowali','PNS','sidang'),(176,'sardi achsan','082208229289','2021-09-29 10:59:00','Palu','Advokat','sidang'),(177,'Syamsulbidjal faud','081242220668','2021-09-30 09:22:00','Luwuk','-','Sidang'),(178,'I gede chakradeva Adhiprabowo','082299786111','2021-09-30 09:52:00','Jl. Tekukur ','Advokat','Sidang'),(179,'Moh Hasan','081290498399','2021-10-04 10:51:00','Tojo una','Advokat','Sidang'),(180,'Erik Cahyono','085256039322','2021-10-04 11:01:00','Jln. Kenari perumnas tinggede','Pengacara','Ambil Putusan'),(181,'Erik Cahyono','085256039322','2021-10-04 11:17:00','Jln. Kenari perumnas tinggede','Pengacara','Sidang'),(182,'Hery','081390545943','2021-10-05 20:41:00','Jakarta','pNS','mencoba Aplikasi'),(183,'agus','+6285210009982','2021-10-05 20:42:00','Sentiong','Hakim','Cek aplikasi'),(184,'Mirda ntou','082347451235','2021-10-06 08:50:00','desa biga','karyawan honorer','sidang'),(185,'sudibyo christian','082132228264','2021-10-06 10:22:00','surabaya','Advokat','sidang'),(186,'navy','082112014086','2021-10-06 10:25:00','Manado','PLN','sidang'),(187,'rifkiyadi, SH','081344884367','2021-10-07 10:42:00','sigi','Advokat','Pengajuan Banding'),(188,'Moh Rafiq, SH','082217479651','2021-10-07 10:46:00','Donggala','Advokat','sidang'),(189,'Moh Firda','082290325799','2021-10-07 10:47:00','Tatura','Advokat','sidang'),(190,'I gede chakradeva Adhiprabowo','082299786111','2021-10-07 10:48:00','Jl. Tekukur ','Advokat','sidang'),(191,'Agung Susanto','085241044140','2021-10-07 10:52:00','Lasoani','Advokat','sidang'),(192,'Dra.Kartini','081354322416','2021-10-07 11:06:00','jl.lembu','PNS','konsultasi posbakum'),(193,'lutfin','08229668948','2021-10-07 11:16:00','marana','perangkat desa','sidang'),(194,'egar m, s.H','081245808797','2021-10-07 11:22:00','pangeran hidayat','Advokat','sidang'),(195,'Agung Susanto','085241044140','2021-10-07 11:25:00','Lasoani','Advokat','sidang'),(196,'egar m, s.H','081245808797','2021-10-07 11:34:00','pangeran hidayat','Advokat','sidang'),(197,'farid hasbullah karim','085256335551','2021-10-14 09:16:00','jl. tontouan luwuk','PNS','sidang'),(198,'meiske taroreh','','2021-10-14 09:47:00','Jl. setia budi','staf','sidang'),(199,'Mariana','','2021-10-14 10:22:00','labuan','Advokat','sidang'),(200,'M.Taufiq Matutu','0821287224272','2021-10-21 10:20:00','Maluku','swasta','Sidang'),(201,'A SENG','082135728227','2021-10-21 10:45:00','Karangsuci cilacap','Wiraswasta','Sidang'),(202,'Andi Alif Rahman Petatanalangi','082348382878','2021-10-21 10:48:00','Sebuku gang XXIII','Karyawan BUMN','Sidang'),(203,'Agus Setyawan','085398882211','2021-10-21 10:55:00','Perum griya paniki indah','Karyawan BUMN','Sidang'),(204,'navy','082112014086','2021-10-21 10:57:00','Manado','PLN','Sidang'),(205,'sudibyo christian','082132228264','2021-10-21 10:57:00','surabaya','Advokat','Sidang'),(206,'Ishak Adam','08115212392','2021-10-21 10:58:00','Tojo una una','Advokat','Sidang'),(207,'Ir.Sumitro Djanun','0821940492025','2021-10-21 11:00:00','Luwuk','PNS','Sidang'),(208,'Fitriani Toliango,SH','085241024210','2021-10-21 11:02:00','Palupi','Advokat','Sidang'),(209,'Hizbudin D Wahab','08114537574','2021-10-21 11:03:00','Mamboro','Advokat','Sidang'),(210,'Muhamad zakki','082189731908','2021-10-21 14:11:00','Palu','PNS','Sidang'),(211,'Ridwan','081145204664','2021-10-26 09:46:00','Buol Toli toli','PNS','Ambil Salinan Putusan'),(212,'Hasnawati malude','085242957386','2021-10-26 11:12:00','BTN. Taman Ria estate','Karyawan swasta','Sidang'),(213,'Abdul Gafar Salam, SH','085394346045','2021-10-26 11:14:00','Lolub utara','Advokat','Sidang'),(214,'Ivan Dendi Salmon, SH','081244683384','2021-10-26 11:34:00','Besusu','Advokat','Sidang'),(215,'Agung Susanto','085241044140','2021-10-26 11:44:00','Lasoani','Advokat','Sidang'),(216,'Hizbudin D Wahab','08114537574','2021-10-26 12:06:00','Mamboro','Advokat','Sidang'),(217,'Habir','082291037970','2021-10-27 13:25:00','Jln. RE martadinata','Wiraswasta','Sidang'),(218,'Aspah','082252700947','2021-10-27 13:27:00','Jln. re martadinata','Karyawan BUMD','Sidang'),(219,'Aziza YL, SH','082190084746','2021-11-03 10:55:00','BTN Lasoani','PNS','Sidang'),(220,'Moh Yamin','085348461636','2021-11-03 10:58:00','Bungku utara','PNS','Sidang'),(221,'Sagaf mudjahid','081248680847','2021-11-03 10:59:00','Jalur gaza','PNS','Sidang'),(222,'Benilemba','085343502789','2021-11-03 11:05:00','Morowali','PNS','Sidang'),(223,'Royal Langgeroni, SH, MH','082344115404','2021-11-03 11:06:00','Poso','Advokat','Sidang'),(224,'Melkiyanto Lagama','085249933661','2021-11-03 11:08:00','Morowali','Karyawan Honorer','Sidang'),(225,'Hasnawati malude','085242957386','2021-11-03 11:09:00','BTN. Taman Ria estate','Karyawan swasta','Sidang'),(226,'Abdul Gafar Salam, SH','085394346045','2021-11-03 11:09:00','Lolu utara','Advokat','Sidang'),(227,'Supardi','081286270902','2021-11-09 09:49:00','Surawele blok gladiol no 18','PNS','Sidang'),(228,'Tri Samsudin marjuki','085790306303','2021-11-09 09:51:00','Palu','PNS','Sidang'),(229,'Sardi Achsan','082208229289','2021-11-09 10:05:00','Lasoani','Advokat','sidang'),(230,'muh.Fikri','082190942747','2021-11-09 10:25:00','jl.veteran no 119 e','Advokat','Sidang'),(231,'Abdul Gafar Salam, SH','085394346045','2021-11-09 11:09:00','Lolub utara','Advokat','Sidang'),(232,'Hasnawati malude','085242957386','2021-11-09 11:29:00','BTN. Taman Ria estate','Karyawan swasta','Sidang'),(233,'Deny Patta Eppe','082194145208','2021-11-11 08:24:00','Palu','Advokat','Sidang'),(234,'Boedi Prasetyo, SE,MM','081356118875','2021-11-11 10:18:00','Besusu','Polisi','Sidang'),(235,'Suryadin, SH','085240036163','2021-11-11 10:21:00','Kawatuna','Polisi','Sidang'),(236,'Samsul Samoeri,SH,MM','081297500756','2021-11-11 10:23:00','Jakarta','Karyawan swasta','Sidang'),(237,'Dimas Anggris','082349630134','2021-11-11 10:24:00','Luwuk','Mahasiswa','Sidang'),(238,'Yuliatin','081354399986','2021-11-11 10:26:00','Kalukubula','PNS','Sidang'),(239,'Dr.Muslimin','081211332188','2021-11-11 10:31:00','Tanamodindi','Advokat','Sidang'),(240,'Fitriani Toliango,SH','085241024210','2021-11-11 10:31:00','Palupi','Advokat','Sidang'),(241,'Muhamad zakki','082189731908','2021-11-11 10:33:00','Palu','PNS','Sidang'),(242,'Sahrul,SH','081341112741','2021-11-11 10:35:00','Roviga','Advokat','Sidang'),(243,'Hardianah udji Mallawan SE','082188023433','2021-11-11 10:47:00','Besusu','PNS','Sidang'),(244,'Sri wulan hadjar','','2021-11-11 11:15:00','KH. Abdul salim','Wiraswasta','Sidang'),(245,'Mirda ntou','082347451235','2021-11-16 08:49:00','desa biga','karyawan honorer','Sidang'),(246,'Ilyas Labora','-','2021-11-16 08:51:00','Tojo una','Petani','Sidang'),(247,'Asmat w. Tangahu','082241493112','2021-11-16 09:31:00','Desa biga','Kepala desa','Sidang'),(248,'Abdul Rajab,SH','081341114666','2021-11-16 09:54:00','Palu','Advokat','Sidang'),(249,'Sardi Achsan','082208229289','2021-11-16 09:55:00','Lasoani','Advokat','Sidang'),(250,'Indra Djaya Petalolo','-','2021-11-16 10:19:00','Palu','Wiraswasta','Sidang'),(251,'Tri Samsudin marjuki','085790306303','2021-11-16 10:20:00','Palu','PNS','Sidang'),(252,'Arpin E.Ido','082271669602','2021-11-16 10:23:00','Desa Biga','PNS','Sidang'),(253,'mohammad aidil','081244106657','2021-12-09 10:38:00','palu','Advokat','sidang'),(254,'Retno Prandari','081355540194','2021-12-09 09:11:00','sigi','PNS','sidang'),(255,'Ujang Hermansyah','081243662122','2021-12-10 08:52:00','PALU','Advokat','Sidang');

/*Table structure for table `bukutamu_profil_pengunjung` */

DROP TABLE IF EXISTS `bukutamu_profil_pengunjung`;

CREATE TABLE `bukutamu_profil_pengunjung` (
  `no_id` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlp` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `bukutamu_profil_pengunjung` */

insert  into `bukutamu_profil_pengunjung`(`no_id`,`nama`,`tgl_lahir`,`no_tlp`,`jenis_kelamin`,`tanggal`,`alamat`,`pekerjaan`) values ('1104111412920002','Moh. Tri Astomo','1992-12-14','','Laki-Laki','2021-04-20 10:16:00','Kp. Pisangan','Wiraswasta'),('1218172008960002','Aditya Reza Gusnanda','1996-08-20','085156161496','Laki-Laki','2021-03-25 12:49:00','Medan','PNS'),('1271042312610002','Wisetyo sasongko','1961-12-23','081376370628','Laki-Laki','2021-09-15 09:51:00','Lembontoru','Swasta'),('1307051911070002','arie muhammad haikal','1987-11-19','08118331187','Laki-Laki','2021-09-23 10:54:00','jakarta selatan','legal audit ojk'),('15.01949','Syahrudin,S.H','1984-08-04','085241199222','Laki-Laki','2021-03-25 11:27:00','Jl.Yosudarso No 1 D','Advokat'),('1984010320091210','Hery','1984-01-03','081390545943','Laki-Laki','2021-10-05 20:41:00','Jakarta','pNS'),('2171100601799010','A SENG','1979-01-06','082135728227','Laki-Laki','2021-10-21 10:45:00','Karangsuci cilacap','Wiraswasta'),('24217605000387','Sahrul,SH','1976-05-01','081341112741','Laki-Laki','2021-11-11 10:35:00','Roviga','Advokat'),('3174062601643','Samsul Samoeri,SH,MM','1964-01-26','081297500756','Laki-Laki','2021-11-11 10:23:00','Jakarta','Karyawan swasta'),('3273020205780002','Harpen pandapotana','1978-05-02','082369962424','Laki-Laki','2021-04-20 10:22:00','Komp. The mansion','Pengacara'),('3312131308880002','Agus Setyawan','1988-08-13','085398882211','Laki-Laki','2021-10-21 10:55:00','Perum griya paniki indah','Karyawan BUMN'),('3374105806830002','Retno Prandari','0000-00-00','081355540194','Perempuan','2021-12-09 09:11:00','sigi','PNS'),('3502062009950001','Tri Samsudin marjuki','1995-09-20','085790306303','Laki-Laki','2021-11-09 09:51:00','Palu','PNS'),('3578011804680002','sudibyo christian','2021-10-06','082132228264','Laki-Laki','2021-10-06 10:22:00','surabaya','Advokat'),('3578150506910002','Rudi Hadiswarno','1969-01-12','082187938789','Perempuan','2021-09-16 10:41:00','Bpn toli2','PNS'),('3578166506910006','navy','1991-06-25','082112014086','Perempuan','2021-10-06 10:25:00','Manado','PLN'),('3671131008920005','Gerry pamungkas','1992-08-10','081218784000','Laki-Laki','2021-04-20 10:13:00','Jl. Gaga 1','Mahasiswa'),('7171025709860002','Takaendengan, sH','1986-09-17','082291919931','Perempuan','2021-06-15 09:55:00','Poso','Advokat'),('7201040504640002','Syamsulbidjal faud','1965-09-30','081242220668','Laki-Laki','2021-09-30 09:22:00','Luwuk','-'),('7201041210680003','Ir.Sumitro Djanun','1968-10-12','0821940492025','Laki-Laki','2021-10-21 11:00:00','Luwuk','PNS'),('7201041811950002','Rahmat Agung Prayuda','1995-11-18','081343815549','Laki-Laki','2021-04-07 09:56:00','Jln. Pulau karimun jaya',''),('720104181195002','Rahmat Agung Prayuda ','1995-11-18','081345815549','Laki-Laki','2021-09-07 11:16:00','donggala','PNS'),('7201042705710001','farid hasbullah karim','1971-05-27','085256335551','Laki-Laki','2021-10-14 09:16:00','jl. tontouan luwuk','PNS'),('7201044307860005','Sri wulan hadjar','1986-07-03','','Perempuan','2021-09-09 10:15:00','KH. Abdul salim','Wiraswasta'),('720112110877000','I Gusti made suabawa','1977-08-11','085239969419','Laki-Laki','2021-06-23 09:57:00','Banggai','PNS'),('7202013004870001','Nur Akbar B','1987-04-30','081296779696','Laki-Laki','2021-04-06 11:35:00','Btn baliase','Advokat'),('7202041311610001','Bakti lateka','1961-11-13','082347530412','Laki-Laki','2021-09-14 10:49:00','Kelei','Pensiunan'),('7202041802890001','Fence frans robin wendur','1989-02-18','081284814597','Laki-Laki','2021-09-14 10:53:00','Desa kelei','Wiraswasta'),('7202042101020001','Efraim rosolemba leagasia','2002-01-21','082293095324','Laki-Laki','2021-09-14 10:50:00','Desa kelei','Pelajar'),('720205060660000','Sudirman sinolidi','1960-06-06','-','Laki-Laki','2021-07-01 09:12:00','Poso','Petani'),('7202052207830001','Ridla lateka','1959-09-30','','Perempuan','2021-09-14 10:46:00','Setia budi, kelei','Guru'),('7202052210630003','Yusup musa kolo','1963-10-22','081242325912','Laki-Laki','2021-09-14 10:43:00','Desa kelei','Petani'),('7202052211810001','Fransri laempasa','1981-11-22','081242233937','Laki-Laki','2021-09-14 10:52:00','Balele','Petani'),('7202056104950001','Alce pantorore','1995-04-21','082237706224','Perempuan','2021-09-14 10:45:00','Desa kelei','Petani'),('720205700959000','Ridla Lateka','1959-09-30','08525697673','Perempuan','2021-07-01 09:10:00','Poso','PNS'),('720210100668000','Eske Yuniel','1968-06-10','081243639455','Laki-Laki','2021-08-07 10:36:00','poso','PNS'),('7202101006680001','Eske Yuniel','1968-06-10','081243639455','Laki-Laki','2021-09-07 10:31:00','Jl. Trans Sulawesi Poso','PNS'),('720222060890000','Royal Langgeroni, SH, MH','1990-08-06','082344115404','Laki-Laki','2021-06-15 09:53:00','Poso','Advokat'),('7202240909490001','Idris Wetang','2021-03-22','081312095676','Laki-Laki','2021-03-22 10:57:00','Desa Maholo','Petani'),('7203081105800001','Moh Rafiq, SH','1980-05-11','082217479651','Laki-Laki','2021-10-07 10:46:00','Donggala','Advokat'),('7203096308800001','Mariana','1967-08-23','','Perempuan','2021-10-14 10:22:00','labuan','Advokat'),('7203100311770001','lutfin','1977-11-03','08229668948','Laki-Laki','2021-10-07 11:16:00','marana','perangkat desa'),('720310031770001','Lutfin','1977-11-03','082296698945','Laki-Laki','2021-09-20 10:19:00','Palu','Advokat'),('7204070702680001','Rahmuddin hammadong','1968-02-07','081341062885','Laki-Laki','2021-07-01 09:23:00','Baolan','Advokat'),('7204071201690002','Sofyan Joesoef','1969-01-12','082187958759','Laki-Laki','2021-09-09 09:42:00','Gunung loli no. 3','Pengacara'),('720407150987000','Moh Juanda','1987-09-15','081242953967','Laki-Laki','2021-04-21 11:17:00','Toli toli','Advokat'),('7204073105700001','Ridwan','1970-05-31','081145204664','Laki-Laki','2021-10-26 09:46:00','Buol Toli toli','PNS'),('7204085509780002','Hasnawati malude','1978-09-15','085242957386','Perempuan','2021-09-22 10:16:00','BTN. Taman Ria estate','Karyawan swasta'),('7204090611940001','Mohammad Sholeh','1994-11-06','087887414126','Laki-Laki','2021-04-13 11:04:00','Toli Toli','Advokat'),('7204102612610001','ardi m said','1961-12-26','085395124263','Laki-Laki','2021-09-23 11:17:00','desa lingadaan','petani'),('720485509870002','Hasnawati','1978-09-15','085242952380','Perempuan','2021-09-20 10:16:00','Palu','Advokat'),('7205061001710001','Supardi','1971-03-10','081286270902','Laki-Laki','2021-03-24 08:47:00','Surawele blok gladiol no 18','PNS'),('7205061007171000','Supardi A Mokoapat','1971-01-10','081286270902','Laki-Laki','2021-09-08 10:34:00','Lasoani','PNS'),('7206012211940003','Trisno putrawan','1994-12-22','082361851569','Laki-Laki','2021-09-15 10:12:00','Desa lee','Sekdes'),('7206012503900001','Wisnu uruwo','1990-03-25','085395458359','','2021-09-15 10:14:00','Desa lee',''),('7206016308760001','Almida','1976-08-23','085241060432','Perempuan','2021-09-15 10:01:00','Desa lee','Kepala desa'),('720602150173000','Benilemba','1973-01-15','','Laki-Laki','2021-09-07 09:58:00','Morowali Utara','PNS'),('7206021501730002','Benilemba','1973-01-15','085343502789','Laki-Laki','2021-11-03 11:05:00','Morowali','PNS'),('7206021711740001','Anop Sinapa','1974-11-17','082244319365','Laki-Laki','2021-04-29 09:43:00','Lembobaru','PNS'),('7206022003860002','Melkiyanto Lagama','1986-03-20','085249933661','Laki-Laki','2021-11-03 11:08:00','Morowali','Karyawan Honorer'),('720602420893000','Anggreani Landegawa','1993-08-02','082293607093','Perempuan','2021-07-01 09:26:00','Beteleme','PNS'),('7206024208930002','Anggreani  Landegawa','1993-08-02','082293607093','Perempuan','2021-06-23 10:59:00','Beteleme','Karyawan Honorer'),('7206031107720001','Guntur','1972-11-07','082187621577','Laki-Laki','2021-04-21 08:53:00','Tanauge','PNS'),('7206041606660002','Moh Yamin','2021-06-04','085348461636','Laki-Laki','2021-11-03 10:58:00','Bungku utara','PNS'),('7206050204830003','Syahrir','1983-04-02','085341186683','Laki-Laki','2021-03-25 10:25:00','BENTE','PNS'),('7206050510830006','hasrun','1983-01-05','082393018423','Laki-Laki','2021-09-29 10:53:00','Morowali','PNS'),('7206053009810001','Andi Iswan Wahid','1981-09-30','0813417727007','Laki-Laki','2021-07-01 09:20:00','Kolonadale','PNS'),('7206113011880002','Nofertian Tarasendo','1988-11-30','0-','Laki-Laki','2021-07-06 09:27:00','Malino','Advokat'),('7208070211880001','Yansen kundimang','1988-11-02','082372262004','Laki-Laki','2021-09-15 10:27:00','Palu','Advokat'),('7208096711940001','Mirda ntou','1994-11-21','082347451235','Perempuan','2021-09-15 08:59:00','Desa biga','Wiraswasta'),('7209031204820001','Arpin E.Ido','1982-04-12','082271669602','Laki-Laki','2021-11-16 10:23:00','Desa Biga','PNS'),('7209051704690001','Ishak Adam','1969-04-17','08115212392','Laki-Laki','2021-09-16 10:16:00','Tojo una una','Advokat'),('7209052512890003','Moh Firda','1989-12-25','082290325799','Laki-Laki','2021-09-16 10:15:00','Tatura','Advokat'),('720908230288000','Moh Hasan','1988-02-23','081290498399','Laki-Laki','2021-10-04 10:51:00','Tojo una','Advokat'),('7209092601710001','Asmat w. Tangahu','1971-01-26','082241493112','Laki-Laki','2021-09-15 09:01:00','Desa biga','Kepala desa'),('7209092712650001','Ilyas Labora','1965-12-27','-','Laki-Laki','2021-11-16 08:51:00','Tojo una','Petani'),('7209096711940001','Mirda ntou','1994-11-21','082347451235','Perempuan','2021-09-29 08:31:00','desa biga','karyawan honorer'),('7210010406880005','Denu patta eppe','1988-06-04','082194145208','Laki-Laki','2021-04-22 09:12:00','Jl. Karajalemba','Advokat'),('7210010810760001','Yohanes Budiman','1976-10-08','081342639844','Laki-Laki','2021-09-16 09:59:00','Palu','Advokat'),('7210011411880001','Novriyadiansyah','1988-11-14','081245222785','Laki-Laki','2021-06-30 09:21:00','Jl. Lasoso no.12','Advokat'),('7210015010750001','Yuliatin','1975-10-07','081354399986','Perempuan','2021-11-11 10:26:00','Kalukubula','PNS'),('7210085601000001','Jeni Arista','2000-01-16','085394353756','Perempuan','2021-03-25 10:31:00','Pandere','Staf Panrising Dompet Dua'),('7210142401820002','Erik Cahyono','1982-01-24','','Laki-Laki','2021-03-24 10:45:00','Jln. Kenari perumnas tinggede','Pengacara'),('721042207000010','Dimas Anggris','2000-07-22','082349630134','Laki-Laki','2021-11-11 10:24:00','Luwuk','Mahasiswa'),('7271001040688000','Deny Patta Eppe','1988-06-04','082194145208','Laki-Laki','2021-11-11 08:24:00','Palu','Advokat'),('7271010107640020','Aspah','1964-07-01','082252700947','Laki-Laki','2021-10-27 13:27:00','Jln. re martadinata','Karyawan BUMD'),('727101070780001','Sardi Achsan','1983-07-07','082208229289','Laki-Laki','2021-09-08 10:31:00','Lasoani','Advokat'),('7271010707830001','sardi achsan','1983-07-07','082208229289','Laki-Laki','2021-09-29 10:59:00','Palu','Advokat'),('7271010905640001','Habir','1964-05-09','082291037970','Perempuan','2021-10-27 13:25:00','Jln. RE martadinata','Wiraswasta'),('7271011310660002','Muhammad safri yasin','1986-10-13','085145861999','Laki-Laki','2021-04-28 10:12:00','Jalan dayo dara btn lagarutu','Konstruksi'),('7271011705550002','Suharman','1955-05-17','085259163241','Laki-Laki','2021-09-23 10:48:00','pppppppp','Pensiunan'),('7271011811730002','Muh Rasyidi, SH,MH','1973-11-18','081341100081','Laki-Laki','2021-09-16 10:44:00','Tondo','Advokat'),('727101200288000','Febrianto,SH','1988-02-20','082188455501','Laki-Laki','2021-06-15 10:29:00','Jl.perdos','Advokat'),('7271012403950004','I gede chakradeva Adhiprabowo','1995-03-24','082299786111','Laki-Laki','2021-09-30 09:52:00','Jl. Tekukur ','Advokat'),('7271012715820001','hasnawati','1982-04-01','085241352380','Perempuan','2021-08-05 10:51:00','palu','advokat'),('7271012716870001','muhammad aidil','1987-12-11','081245106657','Laki-Laki','2021-08-18 09:52:00','Jl. Sisingamangaraja No. 12','advokat'),('7271012727870001','Alif Pra M.','1987-07-02','081527826779','Laki-Laki','2021-08-18 09:56:00','Jl. Merpati','advokat'),('7271012801730002','Boedi Prasetyo, SE,MM','1973-01-28','081356118875','Laki-Laki','2021-11-11 10:18:00','Besusu','Polisi'),('7271014705670001','meiske taroreh','1967-05-07','','Perempuan','2021-10-14 09:47:00','Jl. setia budi','staf'),('7271015709810003','Aziza YL, SH','1981-09-17','082190084746','Laki-Laki','2021-11-03 10:55:00','BTN Lasoani','PNS'),('7271016012790002','Nurmila','1979-12-20','081354362442','Perempuan','2021-09-16 10:24:00','Otista','PNS'),('7271016810770004','Hardianah udji Mallawan SE','1977-10-28','082188023433','Perempuan','2021-11-11 10:47:00','Besusu','PNS'),('7271021909700005','Muhamad zakki','1970-09-19','082189731908','Laki-Laki','2021-10-21 14:11:00','Palu','PNS'),('7271022512580005','Indra Djaya Petalolo','1958-12-25','-','Laki-Laki','2021-11-16 10:19:00','Palu','Wiraswasta'),('7271024611830003','Ida nurita','1983-11-06','0811462281','Perempuan','2021-06-30 09:34:00','Jl. Anggur no. 45','Advokat'),('7271025810830001','Fita Yulianti','1983-10-18','0853982993639','Perempuan','2021-09-16 10:18:00','Malonda','PNS'),('727103081286000','Abdul Rajab,SH','1986-12-08','081341114666','Laki-Laki','2021-09-08 09:31:00','Jl.Dayodara','Advokat'),('7271030906850002','Ajat','1985-06-06','085241317485','Laki-Laki','2021-04-06 11:53:00','Jl anoa 1','Pegawai honorer'),('7271031106730007','Abdul rahman','1973-06-11','08534241453','Laki-Laki','2021-09-09 10:18:00','Jl. Moh hatta no. 28','Wiraswasta'),('7271031112960001','rifkiyadi, SH','1996-11-12','081344884367','Laki-Laki','2021-10-07 10:42:00','sigi','Advokat'),('7271031402650002','Felis Manurung, SH','2021-03-25','','Perempuan','2021-03-25 09:49:00','','Advokat'),('7271031411840006','Ivan Dendi Salmon, SH','1984-11-14','081244683384','Laki-Laki','2021-09-08 10:28:00','Besusu','Advokat'),('7271031502790001','Dedy Bronson Hutabarat','2021-03-25','082192163035','Perempuan','2021-03-25 09:46:00','BTN PERMAI BLOK - 3','Advokat'),('7271031804910003','mohammad aidil','1991-04-18','081244106657','Laki-Laki','2021-12-09 10:38:00','palu','Advokat'),('727103180685000','Triyanto Wiguna','1985-07-18','082393509920','Laki-Laki','2021-07-06 09:10:00','Jl.Maleo','PNS'),('7271031906870003','Erwin','1987-06-19','085241255043','Laki-Laki','2021-09-08 11:20:00','Palu','PNS'),('7271031910680001','Dr.Muslimin','1968-10-19','081211332188','Laki-Laki','2021-11-11 10:31:00','Tanamodindi','Advokat'),('7271032012610001','Busran laoga','1961-12-20','085240076260','Laki-Laki','2021-03-24 11:04:00','BTN palupi','Pengacara'),('727103211284000','Muh Fikri, SH,Mh','1984-12-21','085190942747','Laki-Laki','2021-09-08 10:16:00','Tanamodindi','Advokat'),('7271032112840002','muh.Fikri','1984-12-12','082190942747','Laki-Laki','2021-09-28 10:27:00','jl.veteran no 119 e','Advokat'),('7271032212880003','Yonatan Tandi BUA','1998-12-22','081253892830','Laki-Laki','2021-05-18 10:58:00','Jl anoa','Advokat'),('7271032709800007','Marno','1980-09-27','08114584577','Laki-Laki','2021-03-19 09:36:00','Petobo','Pengacara'),('7271032803700001','Nasrul Jamaludin, SH','1970-04-28','081247411167','Laki-Laki','2021-04-13 11:01:00','Jl.Panjaitan','Advokat'),('7271032910600002','Abdul Gafar Salam, SH','1960-10-29','085394346045','Laki-Laki','2021-10-26 11:14:00','Lolub utara','Advokat'),('7271034909810007','Anita','1981-09-09','085255811299','Perempuan','2021-05-10 10:13:00','Jl.Ongka Malino','Advokay'),('7271035704910006','Fitriani Toliango,SH','1991-04-17','085241024210','Perempuan','2021-10-21 11:02:00','Palupi','Advokat'),('7271036205760002','Milan kartika','1976-05-22','081242057076','Perempuan','2021-04-06 12:51:00','Btn palupi blok bs3','Pegawai negeri sipil'),('7271036604680002','Alfrin magdalena','1968-04-26','081283490749','Perempuan','2021-09-16 10:28:00','Karanjalembah','PNS'),('7271040101820014','Ujang Hermansyah','1982-01-01','081243662122','Laki-Laki','2021-12-10 08:52:00','PALU','Advokat'),('727104140967000','Hizbudin D Wahab','1967-11-14','0811453534','Laki-Laki','2021-09-08 10:12:00','Mamboro','Advokat'),('7271041409670002','Hizbudin D Wahab','1967-09-14','08114537574','Laki-Laki','2021-10-21 11:03:00','Mamboro','Advokat'),('7271041808870004','egar m, s.H','1987-08-08','081245808797','Laki-Laki','2021-10-07 11:22:00','pangeran hidayat','Advokat'),('7271042310940001','Andi Alif Rahman Petatanalangi','1994-10-23','082348382878','Laki-Laki','2021-10-21 10:48:00','Sebuku gang XXIII','Karyawan BUMN'),('7271042805820001','Agung Susanto','1982-05-28','085241044140','Laki-Laki','2021-08-06 10:26:00','Lasoani','Advokat'),('7271043715820001','rivkiyadi','1985-05-05','081344884367','Laki-Laki','2021-08-05 10:33:00','palu','advokat'),('7271050612750001','Sagaf mudjahid','1975-12-06','081248680847','Laki-Laki','2021-11-03 10:59:00','Jalur gaza','PNS'),('7271080104890002','Muh Sadtli','1989-04-01','','Laki-Laki','2021-03-25 10:27:00','BUNGKU TENGAH','-'),('7371012002880001','Febrianto','1988-02-20','082188455501','Laki-Laki','2021-09-01 10:45:00','Perdos tondo','Pengacara'),('7371092806680012','AZIZ T, SH., MH','1968-06-28','08114220678','Laki-Laki','2021-04-14 08:50:00','Jl. Griya ranggong sakinah blk B No 2','Advokat'),('7371121505700007','Budiman Nainggolan','1970-03-15','08124210848','Laki-Laki','2021-03-24 08:20:00','Komplkes harmonis no 51','Karyawan swasta'),('737113590187000','Lisar Wirailhami, S.H., M.H','1987-01-19','08114448322','Perempuan','2021-04-21 08:28:00','Jl.Gunung Sari','Advokat'),('7502052501930001','Abd. Ajis asraka ','1993-01-25','085256684064','Laki-Laki','2021-09-15 09:02:00','Desa biga','Honorer'),('751021705800002','Suryadin, SH','1980-05-17','085240036163','Laki-Laki','2021-11-11 10:21:00','Kawatuna','Polisi'),('810919051867','Andi Iswan Wahid','1981-09-30','','Laki-Laki','2021-04-29 09:45:00','Morowali','PNS'),('8172022211880003','M.Taufiq Matutu','2021-10-21','0821287224272','Perempuan','2021-10-21 10:20:00','Maluku','swasta'),('860324250080','Selvia','1986-03-12','','Perempuan','2021-03-24 10:34:00','Donggaka banawa','PNS');

/*Table structure for table `hukum_regiskuasa` */

DROP TABLE IF EXISTS `hukum_regiskuasa`;

CREATE TABLE `hukum_regiskuasa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_regiskuasa` varchar(128) NOT NULL,
  `tgl_regiskuasa` date NOT NULL,
  `nomor_suratkuasa` varchar(128) NOT NULL,
  `tgl_suratkuasa` date NOT NULL,
  `nama_pemberikuasa` varchar(128) NOT NULL,
  `nama_penerimakuasa` varchar(128) NOT NULL,
  `nomor_perkara` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `hukum_regiskuasa` */

/*Table structure for table `setup_satker` */

DROP TABLE IF EXISTS `setup_satker`;

CREATE TABLE `setup_satker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_satker` varchar(128) NOT NULL,
  `alamat_satker` text NOT NULL,
  `kota_satker` varchar(128) NOT NULL,
  `no_tlp` varchar(128) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email_satker` varchar(128) NOT NULL,
  `situs` varchar(128) NOT NULL,
  `logo_satker` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `setup_satker` */

insert  into `setup_satker`(`id`,`nama_satker`,`alamat_satker`,`kota_satker`,`no_tlp`,`no_hp`,`email_satker`,`situs`,`logo_satker`) values (1,'Pengadilan Tata Usaha Negara Palu','Jalan Prof. Moh. Yamin, S.H. No.52, Tatura Utara, Kec. Palu Sel., Kota Palu, Sulawesi Tengah 94231','Palu','(0451) 483385','08114444064','ptunpalu@gmail.com','https://ptun-palu.go.id/','icon.png');

/*Table structure for table `survei_hasil_ikm` */

DROP TABLE IF EXISTS `survei_hasil_ikm`;

CREATE TABLE `survei_hasil_ikm` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `tanggal` datetime NOT NULL,
  `fasilitas_informasi` varchar(128) NOT NULL,
  `fasilitas_toilet` varchar(128) NOT NULL,
  `parkir_kendaraan` varchar(128) NOT NULL,
  `kebersihan` varchar(128) NOT NULL,
  `taman` varchar(128) NOT NULL,
  `sarana_ibadah` varchar(128) NOT NULL,
  `ruang_tunggu` varchar(128) NOT NULL,
  `sistem_pembayaran` varchar(128) NOT NULL,
  `pelayanan_pendaftaran` varchar(128) NOT NULL,
  `persiapan_persidangan` varchar(128) NOT NULL,
  `fasilitas_ruang_sidang` varchar(128) NOT NULL,
  `proses_persidangan` varchar(128) NOT NULL,
  `waktu_pemeriksaan` varchar(128) NOT NULL,
  `pemeriksaan_setempat` varchar(128) NOT NULL,
  `profesionalitas_hakim` varchar(128) NOT NULL,
  `pemberian_salinan_putusan` varchar(128) NOT NULL,
  `pelayanan_informasi` varchar(128) NOT NULL,
  `pelayanan_pengaduan` varchar(128) NOT NULL,
  `pelayanan_persuratan` varchar(128) NOT NULL,
  `pengembalian_sisa_biaya_panjar` varchar(128) NOT NULL,
  `permohonan_eksekusi` varchar(128) NOT NULL,
  `sikap_petugas` varchar(128) NOT NULL,
  `kemampuan_pengetahuan_petugas` varchar(128) NOT NULL,
  `penampilan_petugas` varchar(128) NOT NULL,
  `kritik_saran` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `survei_hasil_ikm` */

insert  into `survei_hasil_ikm`(`id`,`nama`,`no_tlp`,`tanggal`,`fasilitas_informasi`,`fasilitas_toilet`,`parkir_kendaraan`,`kebersihan`,`taman`,`sarana_ibadah`,`ruang_tunggu`,`sistem_pembayaran`,`pelayanan_pendaftaran`,`persiapan_persidangan`,`fasilitas_ruang_sidang`,`proses_persidangan`,`waktu_pemeriksaan`,`pemeriksaan_setempat`,`profesionalitas_hakim`,`pemberian_salinan_putusan`,`pelayanan_informasi`,`pelayanan_pengaduan`,`pelayanan_persuratan`,`pengembalian_sisa_biaya_panjar`,`permohonan_eksekusi`,`sikap_petugas`,`kemampuan_pengetahuan_petugas`,`penampilan_petugas`,`kritik_saran`) values (1,'Aditya Reza Gusnanda','085277644596','2021-12-05 03:37:00','Sangat Puas','Cukup Puas','Cukup Puas','Puas','Sangat Puas','Puas','Sangat Puas','Cukup Puas','Cukup Puas','Puas','Sangat Puas','Sangat Puas','Cukup Puas','Puas','Sangat Puas','Puas','Kurang Puas','Cukup Puas','Sangat Puas','Puas','Puas','Kurang Puas','Puas','Kurang Puas','Semoga Terus Berbenah!'),(2,'Asep','085341112345','2021-12-09 17:57:00','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','ok lanjutan'),(3,'SAHRUL','087762152367','2021-12-10 09:30:00','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','Sangat Puas','');

/*Table structure for table `survei_hasil_ipk` */

DROP TABLE IF EXISTS `survei_hasil_ipk`;

CREATE TABLE `survei_hasil_ipk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `instansi` varchar(128) NOT NULL,
  `umur` int(5) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `pendidikan` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `manipulasi_peraturan` int(2) NOT NULL,
  `penyalahgunaan_jabatan` int(2) NOT NULL,
  `menjual_pengaruh` int(2) NOT NULL,
  `transaksi_biaya` int(2) NOT NULL,
  `biaya_tambahan` int(2) NOT NULL,
  `hadiah` int(2) NOT NULL,
  `transparansi_biaya` int(2) NOT NULL,
  `percaloan` int(2) NOT NULL,
  `perbuatan_curang` int(2) NOT NULL,
  `transaksi_rahasia` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `survei_hasil_ipk` */

insert  into `survei_hasil_ipk`(`id`,`nama`,`instansi`,`umur`,`jenis_kelamin`,`pendidikan`,`pekerjaan`,`tanggal`,`manipulasi_peraturan`,`penyalahgunaan_jabatan`,`menjual_pengaruh`,`transaksi_biaya`,`biaya_tambahan`,`hadiah`,`transparansi_biaya`,`percaloan`,`perbuatan_curang`,`transaksi_rahasia`) values (1,'Aditya Reza Gusnanda','Mahkamah Agung RI',26,'Laki-Laki','Diploma 3','PNS',NULL,6,5,4,3,2,1,2,3,4,5),(2,'Joko Susilo','Anonim',19,'Laki-Laki','SMA','Pegawai',NULL,1,1,1,1,6,6,6,6,6,6),(7,'Steve ','Google',21,'Laki-Laki','S3','Project Leader',NULL,6,6,6,6,5,4,5,5,5,4),(8,'ujang','',39,'Laki-Laki','S1','ADVOKT',NULL,6,6,6,6,6,6,6,6,6,6),(9,'SAHRUL','',39,'Laki-Laki','S1','ADVOKAT',NULL,6,6,6,6,6,6,6,6,6,6),(10,'BURHAN','',45,'Laki-Laki','S1','ADVOKAT',NULL,6,6,6,6,6,6,6,6,6,6);

/*Table structure for table `survei_pertanyaan` */

DROP TABLE IF EXISTS `survei_pertanyaan`;

CREATE TABLE `survei_pertanyaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` text NOT NULL,
  `name_attr` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `jenis_survei` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

/*Data for the table `survei_pertanyaan` */

insert  into `survei_pertanyaan`(`id`,`pertanyaan`,`name_attr`,`kategori`,`jenis_survei`) values (1,'Fasilitas Informasi','fasilitas_informasi','Fasilitas Pengadilan','ikm'),(2,'Fasilitas Toilet','fasilitas_toilet','Fasilitas Pengadilan','ikm'),(3,'Parkir Kendaraan','parkir_kendaraan','Fasilitas Pengadilan','ikm'),(4,'Kebersihan','kebersihan','Fasilitas Pengadilan','ikm'),(5,'Taman','taman','Fasilitas Pengadilan','ikm'),(6,'Sarana Ibadah','sarana_ibadah','Fasilitas Pengadilan','ikm'),(7,'Ruang Tunggu','ruang_tunggu','Fasilitas Pengadilan','ikm'),(8,'Sistem Pembayaran','sistem_pembayaran','Prosedur Pendaftaran','ikm'),(9,'Pelayanan Pendaftaran','pelayanan_pendaftaran','Prosedur Pendaftaran','ikm'),(10,'Persiapan Persidangan','persiapan_persidangan','Persidangan','ikm'),(11,'Fasilitas Ruang Sidang','fasilitas_ruang_sidang','Persidangan','ikm'),(12,'Proses Persidangan','proses_persidangan','Persidangan','ikm'),(13,'Waktu Pemeriksaan','waktu_pemeriksaan','Persidangan','ikm'),(14,'Pemeriksaan Setempat','pemeriksaan_setempat','Persidangan','ikm'),(15,'Profesionalitas Hakim','profesionalitas_hakim','Hakim','ikm'),(16,'Pemberian Salinan Putusan','pemberian_salinan_putusan','Salinan Putusan','ikm'),(17,'Pelayanan Informasi','pelayanan_informasi','Informasi','ikm'),(18,'Pelayanan Pengaduan','pelayanan_pengaduan','Pengaduan','ikm'),(19,'Pelayanan Persuratan','pelayanan_persuratan','Persuratan','ikm'),(20,'Pengembalian Sisa Biaya Panjar','pengembalian_sisa_biaya_panjar','Sisa Biaya Panjar','ikm'),(21,'Permohonan Eksekusi','permohonan_eksekusi','Eksekusi','ikm'),(22,'Sikap Petugas','sikap_petugas','Aparatur Pengadilan','ikm'),(23,'Kemampuan Pengetahuan Petugas','kemampuan_pengetahuan_petugas','Aparatur Pengadilan','ikm'),(24,'Penampilan Petugas','penampilan_petugas','Informasi','ikm'),(25,'Pelayanan oleh petugas sesuai prosedur dan ketentuan dan tidak dipersulit','manipulasi_peraturan','Manipulasi Peraturan','ipk'),(26,'Petugas dalam memberikan layanan pengadilan dilakukan secara cepat dan sederhana tanpa ada penawaran dari petugas untuk meminta imbalan tertentu','penyalahgunaan_jabatan','Penyalahgunaan Jabatan','ipk'),(27,'Tidak pernah dihubungi oleh seseorang (karyawan pengadilan) yang menjanjikan akan membantu dalam pengurusan surat/berkas perkara dengan meminta sesuatu','menjual_pengaruh','Menjual Pengaruh','ipk'),(28,'Informasi tentang tarif/biaya baik melalui website ataupun petugas layanan mudah diakses/diperoleh','transaksi_biaya','Transaksi Biaya','ipk'),(29,'Pembayaran biaya perkara sesuai tarif resmi tanpa ada biaya tambahan diluar ketentuan','biaya_tambahan','Biaya Tambahan','ipk'),(30,'Petugas dengan tegas menolak setiap pemberian tanda terima kasih atas layanan yang diterima','hadiah','Hadiah','ipk'),(31,'Menerima bukti transaksi keuangan/pembayaran yang sah setelah proses pembayaran dilakukan','transparansi_biaya','Transparansi Biaya','ipk'),(32,'Tidak pernah mengetahui ada praktek percaloan dalam pengurusan layanan di pengadilan','percaloan','Percaloan','ipk'),(33,'Tidak pernah melihat dan/atau mendengar masih terjadi praktek KKN di pengadilan','perbuatan_curang','Perbuatan Curang','ipk'),(34,'Tidak pernah mengurus perkara melalui Hakim/Panitera/Staff pengadilan diluar persidangan atau luar prosedur','transaksi_rahasia','Transaksi Rahasia','ipk');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `mobile_phone` text NOT NULL,
  `jabatan_id` int(10) NOT NULL,
  `role_id` int(10) NOT NULL,
  `is_active` int(10) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id`,`email`,`name`,`username`,`password`,`image`,`nip`,`mobile_phone`,`jabatan_id`,`role_id`,`is_active`,`date_created`) values (0,'it.ptun.palu@gmail.com','arie','spoof','$2y$10$7BYbL4nDL.XknOjRhJY40.5M0Xk5J0aHT2/Blpy5hvW885c0iXn.y','Screenshot_(2).png','123456','123456',11,2,1,1638933989),(1,'adityarzg.work@gmail.com','Muhammad Rafli','cssjsx','$2y$10$.ZcjM1FFy3sx5gGmjYgopew6Hv2UrnqbRMcgWdgYVvbKsVmFXDQhi','undraw_profile_2.svg','199608202020121001','085156161496',11,2,1,1637173083),(2,'adityarzg@gmail.com','Aditya Reza Gusnanda','adityarzg','$2y$10$SOg5dS.P4yzvSQfnt/lgvut1.HS7D5uKqq4dN1gytpZ91yu778Ldq','child-1837375_12801.png','199608202019031002','085277644596',11,1,1,1637172055);

/*Table structure for table `user_access_menu` */

DROP TABLE IF EXISTS `user_access_menu`;

CREATE TABLE `user_access_menu` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `role_id` int(10) NOT NULL,
  `menu_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_access_menu` */

insert  into `user_access_menu`(`id`,`role_id`,`menu_id`) values (1,1,1),(2,1,2),(3,2,2),(4,1,3),(5,1,4),(6,1,5),(7,3,2),(8,3,3),(9,2,3),(10,2,4),(11,2,5),(12,4,4),(13,4,5);

/*Table structure for table `user_jabatan` */

DROP TABLE IF EXISTS `user_jabatan`;

CREATE TABLE `user_jabatan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_jabatan` */

insert  into `user_jabatan`(`id`,`jabatan`) values (1,'Ketua'),(2,'Wakil Ketua'),(3,'Panitera'),(4,'Sekretaris'),(5,'Panitera Muda Perkara'),(6,'Panitera Muda Hukum'),(7,'Kasubag. Umum dan Keuangan'),(8,'Kasubag. Kepegawaian dan Ortala'),(9,'Kasubag. Perencanaan TI dan Pelaporan'),(10,'Panitera Pengganti'),(11,'Pegawai');

/*Table structure for table `user_menu` */

DROP TABLE IF EXISTS `user_menu`;

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_menu` */

insert  into `user_menu`(`id`,`menu`,`icon`) values (1,'Admin','icon-dashboard'),(2,'User','icon-user'),(3,'Hukum','icon-legal'),(4,'Buku Tamu Digital','icon-book'),(5,'Survei','icon-rss');

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_role` */

insert  into `user_role`(`id`,`role`) values (1,'Administrator'),(2,'User'),(3,'Operator_hukum'),(4,'Operator_sikm');

/*Table structure for table `user_sub_menu` */

DROP TABLE IF EXISTS `user_sub_menu`;

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` text NOT NULL,
  `is_active` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_sub_menu` */

insert  into `user_sub_menu`(`id`,`menu_id`,`title`,`url`,`is_active`) values (1,'1','Dashboard','admin','1'),(2,'2','Profil Saya','user','1'),(3,'3','Register Surat Kuasa','hukum','1'),(7,'1','Role','admin/role','1'),(8,'1','Manajemen Menu','admin/menu','1'),(9,'1','Manajemen Submenu','admin/submenu','1'),(10,'1','Icon Font Awesome','admin/icon','1'),(11,'1','Pengaturan Satuan Kerja','admin/setupSatker','1'),(12,'2','Ubah Kata Sandi','user/changePass','1'),(13,'1','Manajemen User','admin/user','1'),(14,'4','Data Profil Pengunjung','bukutamu/profil_pengunjung','1'),(15,'4','Daftar Kunjungan','bukutamu/daftar_kunjungan','1'),(16,'5','Survei IKM','survei/ikm','1'),(17,'5','Survei IPK','survei/ipk','1'),(18,'5','Manajemen Pertanyaan','survei/pertanyaan','1');

/*Table structure for table `user_token` */

DROP TABLE IF EXISTS `user_token`;

CREATE TABLE `user_token` (
  `email` varchar(128) NOT NULL,
  `token` text NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_token` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
