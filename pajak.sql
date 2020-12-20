/*
SQLyog Ultimate v12.5.1 (32 bit)
MySQL - 10.1.38-MariaDB : Database - pajak
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tb_pajak` */

DROP TABLE IF EXISTS `tb_pajak`;

CREATE TABLE `tb_pajak` (
  `pemilik` varchar(50) NOT NULL,
  `ktp` int(20) NOT NULL,
  `stnk` int(20) NOT NULL,
  `bpkb` int(50) NOT NULL,
  `scktp` blob,
  `scstnk` blob,
  `scbpkb` blob,
  PRIMARY KEY (`pemilik`,`ktp`,`stnk`,`bpkb`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_pajak` */

insert  into `tb_pajak`(`pemilik`,`ktp`,`stnk`,`bpkb`,`scktp`,`scstnk`,`scbpkb`) values 
('ADASDAS',12313123,2147483647,2147483647,'cekingx.my.id_admin_pengumuman_edit_13 (2).png','cekingx.my.id_admin_pengumuman_edit_13 (2).png','cekingx.my.id_admin_pengumuman_edit_13 (2).png'),
('ADASDAS',2147483647,2147483647,2147483647,'markus-spiske-445253-unsplash.jpg','markus-spiske-445253-unsplash.jpg','markus-spiske-445253-unsplash.jpg'),
('deva',231234,234,1234,'0fdde3cf31d6a4fd68a96a3bad1688fa.jpg','0fdde3cf31d6a4fd68a96a3bad1688fa.jpg','0fdde3cf31d6a4fd68a96a3bad1688fa.jpg'),
('deva',6765676,456765456,876567,'341274.jpg','341275.jpg','0fdde3cf31d6a4fd68a96a3bad1688fa.jpg'),
('fghsjnb',45676543,456543,7654567,'341273.jpg','341272.jpg','341276.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
