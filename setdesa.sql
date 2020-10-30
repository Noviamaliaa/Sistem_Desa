/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.21-MariaDB : Database - setdesa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`setdesa` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `setdesa`;

/*Table structure for table `det_keluarga` */

DROP TABLE IF EXISTS `det_keluarga`;

CREATE TABLE `det_keluarga` (
  `id_keluarga` varchar(20) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  KEY `id_warga` (`no_ktp`,`id_keluarga`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `det_keluarga` */

/*Table structure for table `keluarga` */

DROP TABLE IF EXISTS `keluarga`;

CREATE TABLE `keluarga` (
  `id_keluarga` varchar(20) NOT NULL,
  `kepala_keluarga` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `dusun` varchar(30) NOT NULL,
  `rt` varchar(2) DEFAULT NULL,
  `rw` varchar(2) DEFAULT NULL,
  `ekonomi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_keluarga`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `keluarga` */

/*Table structure for table `mutasi_warga` */

DROP TABLE IF EXISTS `mutasi_warga`;

CREATE TABLE `mutasi_warga` (
  `id_mutasi` mediumint(9) NOT NULL AUTO_INCREMENT,
  `id_warga` varchar(20) NOT NULL,
  `jenis_mutasi` varchar(15) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_mutasi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `mutasi_warga` */

/*Table structure for table `surat` */

DROP TABLE IF EXISTS `surat`;

CREATE TABLE `surat` (
  `id_surat` int(8) NOT NULL AUTO_INCREMENT,
  `jenis_surat` varchar(4) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `isi_surat` text,
  `tanda_tangan` varchar(50) NOT NULL,
  `id_warga` varchar(20) NOT NULL,
  `nama_warga` varchar(50) NOT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `surat` */

insert  into `surat`(`id_surat`,`jenis_surat`,`no_surat`,`nama_surat`,`tanggal`,`isi_surat`,`tanda_tangan`,`id_warga`,`nama_warga`) values (1,'SL','474.1/1/437.105.08/2017','Surat Kelahiran','2017-12-04','{\"nama_bayi\":\"ghg\",\"hari\":\"ufg\",\"tanggal\":\"2017-12-04\",\"di\":\"Duduksampeyan - Gresik\",\"j_kel\":\"Laki - laki\",\"nama_ibu\":\"df\",\"nama_ayah\":\"df\",\"alamat\":\"fdgd\"}','{\"pejabat\":\"Kaji,S.Pbu\",\"nip\":\"0009.009.34343\"}','','ghg');

/*Table structure for table `tb_domisili` */

DROP TABLE IF EXISTS `tb_domisili`;

CREATE TABLE `tb_domisili` (
  `no_suratdomisili` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `no_ktp` varchar(15) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `perihal_surat` varchar(30) NOT NULL,
  PRIMARY KEY (`no_suratdomisili`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_domisili` */

insert  into `tb_domisili`(`no_suratdomisili`,`nama`,`ttl`,`jenis_kelamin`,`pekerjaan`,`no_ktp`,`pendidikan`,`agama`,`alamat`,`perihal_surat`) values ('1','hani','','Laki-Laki','jhj','12312','-','-','gh','gjhg');

/*Table structure for table `tb_izinusaha` */

DROP TABLE IF EXISTS `tb_izinusaha`;

CREATE TABLE `tb_izinusaha` (
  `no_suratush` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jenis_usaha` varchar(30) NOT NULL,
  PRIMARY KEY (`no_suratush`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_izinusaha` */

insert  into `tb_izinusaha`(`no_suratush`,`nama`,`ttl`,`jenis_kelamin`,`no_ktp`,`pekerjaan`,`alamat`,`jenis_usaha`) values ('1','irma','','Laki-Laki','3544545','b','b','berdagang');

/*Table structure for table `tb_kelahiran` */

DROP TABLE IF EXISTS `tb_kelahiran`;

CREATE TABLE `tb_kelahiran` (
  `no_suratkel` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `anak_ke` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `agama_ibu` varchar(30) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `agama_ayah` varchar(30) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  PRIMARY KEY (`no_suratkel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_kelahiran` */

insert  into `tb_kelahiran`(`no_suratkel`,`nama`,`anak_ke`,`jenis_kelamin`,`tempat_lahir`,`tanggal_lahir`,`nama_ibu`,`agama_ibu`,`pekerjaan_ibu`,`nama_ayah`,`agama_ayah`,`pekerjaan_ayah`,`alamat`) values ('1','irma','2','Laki-Laki','bandung','2001-10-09','euis','','irt','sae','','pns','gbi'),('g','<br /><b>Notice</b>:  Undefine','<br /><b>Notice</b>:  Undefine','Laki-Laki','<br /><b>Notice</b>:  Undefine','','<br /><b>Notice</b>:  Undefine','','<br /><b>Notice</b>:  Undefine','<br /><b>Notice</b>:  Undefine','','<br /><b>Notice</b>:  Undefine','<br /><b>Notice</b>:  Undefine');

/*Table structure for table `tb_skkb` */

DROP TABLE IF EXISTS `tb_skkb`;

CREATE TABLE `tb_skkb` (
  `no_suratskkb` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_nik` varchar(15) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `perihal_surat` varchar(30) NOT NULL,
  PRIMARY KEY (`no_suratskkb`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_skkb` */

insert  into `tb_skkb`(`no_suratskkb`,`nama`,`tempat_lahir`,`ttl`,`jenis_kelamin`,`no_nik`,`pendidikan`,`agama`,`alamat`,`perihal_surat`) values ('1','jati','plbng','','Laki-Laki','13231','-','-','gbi','masuk SMA');

/*Table structure for table `tb_sktm` */

DROP TABLE IF EXISTS `tb_sktm`;

CREATE TABLE `tb_sktm` (
  `no_suratsktm` varchar(30) NOT NULL,
  `nama_ortu` varchar(30) NOT NULL,
  `ttl_ortu` varchar(30) NOT NULL,
  `jk_ortu` varchar(30) NOT NULL,
  `pekerjaan_ortu` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `nama_anak` varchar(30) NOT NULL,
  `ttl_anak` varchar(30) NOT NULL,
  `jk_anak` varchar(30) NOT NULL,
  `pekerjaan_anak` varchar(30) NOT NULL,
  `perihal_surat` varchar(30) NOT NULL,
  PRIMARY KEY (`no_suratsktm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_sktm` */

insert  into `tb_sktm`(`no_suratsktm`,`nama_ortu`,`ttl_ortu`,`jk_ortu`,`pekerjaan_ortu`,`alamat`,`nama_anak`,`ttl_anak`,`jk_anak`,`pekerjaan_anak`,`perihal_surat`) values ('1','jati','2007-10-09','Laki-Laki','bertani','bandung','kirana','2017-10-07','Laki-Laki','pelajar','beasiswa');

/*Table structure for table `tb_suratkm` */

DROP TABLE IF EXISTS `tb_suratkm`;

CREATE TABLE `tb_suratkm` (
  `no_suratkm` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `binti_bin` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `warga_negara` varchar(39) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `penyebab_kematian` varchar(30) NOT NULL,
  `tanggal_kematian` varchar(30) NOT NULL,
  PRIMARY KEY (`no_suratkm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_suratkm` */

insert  into `tb_suratkm`(`no_suratkm`,`nama`,`binti_bin`,`ttl`,`warga_negara`,`jenis_kelamin`,`agama`,`alamat`,`pekerjaan`,`penyebab_kematian`,`tanggal_kematian`) values ('1','sinta','ahmad','1998-10-09','indonesia','Perempuan','Islam','bandoeng','pns','','2009-10-09'),('2','tyutyu','tuytu','2018-12-31','h','Laki-Laki','Islam','fs','dsfsfds','','2019-11-30');

/*Table structure for table `warga` */

DROP TABLE IF EXISTS `warga`;

CREATE TABLE `warga` (
  `no_ktp` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `t_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `j_kel` enum('L','W') NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `w_negara` varchar(20) NOT NULL,
  `pendidikan` varchar(10) DEFAULT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `s_nikah` varchar(20) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`no_ktp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `warga` */

/* Trigger structure for table `keluarga` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `hapus_detail_klg` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `hapus_detail_klg` AFTER DELETE ON `keluarga` FOR EACH ROW begin
delete  from det_keluarga where det_keluarga.id_keluarga = old.id_keluarga;
end */$$


DELIMITER ;

/*Table structure for table `v_detail_warga` */

DROP TABLE IF EXISTS `v_detail_warga`;

/*!50001 DROP VIEW IF EXISTS `v_detail_warga` */;
/*!50001 DROP TABLE IF EXISTS `v_detail_warga` */;

/*!50001 CREATE TABLE  `v_detail_warga`(
 `id_keluarga` varchar(20) ,
 `no_ktp` varchar(20) ,
 `nama` varchar(50) ,
 `agama` varchar(20) ,
 `t_lahir` varchar(20) ,
 `tgl_lahir` varchar(10) ,
 `j_kel` varchar(11) ,
 `gol_darah` varchar(2) ,
 `w_negara` varchar(20) ,
 `pendidikan` varchar(10) ,
 `pekerjaan` varchar(30) ,
 `s_nikah` varchar(20) ,
 `alamat` text ,
 `rt` varchar(2) ,
 `rw` varchar(2) ,
 `dusun` varchar(30) 
)*/;

/*Table structure for table `v_mutasi_warga` */

DROP TABLE IF EXISTS `v_mutasi_warga`;

/*!50001 DROP VIEW IF EXISTS `v_mutasi_warga` */;
/*!50001 DROP TABLE IF EXISTS `v_mutasi_warga` */;

/*!50001 CREATE TABLE  `v_mutasi_warga`(
 `id_warga` varchar(20) ,
 `j_kel` enum('L','W') ,
 `jenis_mutasi` varchar(15) ,
 `periode` varchar(7) ,
 `keterangan` text 
)*/;

/*View structure for view v_detail_warga */

/*!50001 DROP TABLE IF EXISTS `v_detail_warga` */;
/*!50001 DROP VIEW IF EXISTS `v_detail_warga` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_detail_warga` AS select `a`.`id_keluarga` AS `id_keluarga`,`c`.`no_ktp` AS `no_ktp`,`c`.`nama` AS `nama`,`c`.`agama` AS `agama`,`c`.`t_lahir` AS `t_lahir`,date_format(`c`.`tgl_lahir`,'%d-%m-%Y') AS `tgl_lahir`,if((`c`.`j_kel` = 'L'),'Laki - laki','Wanita') AS `j_kel`,`c`.`gol_darah` AS `gol_darah`,`c`.`w_negara` AS `w_negara`,`c`.`pendidikan` AS `pendidikan`,`c`.`pekerjaan` AS `pekerjaan`,`c`.`s_nikah` AS `s_nikah`,`a`.`alamat` AS `alamat`,`a`.`rt` AS `rt`,`a`.`rw` AS `rw`,`a`.`dusun` AS `dusun` from ((`keluarga` `a` join `det_keluarga` `b`) join `warga` `c`) where ((`a`.`id_keluarga` = `b`.`id_keluarga`) and (`b`.`no_ktp` = `c`.`no_ktp`) and (`c`.`status` = '1')) */;

/*View structure for view v_mutasi_warga */

/*!50001 DROP TABLE IF EXISTS `v_mutasi_warga` */;
/*!50001 DROP VIEW IF EXISTS `v_mutasi_warga` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_mutasi_warga` AS select `mutasi_warga`.`id_warga` AS `id_warga`,`warga`.`j_kel` AS `j_kel`,`mutasi_warga`.`jenis_mutasi` AS `jenis_mutasi`,date_format(`mutasi_warga`.`tanggal`,'%m-%Y') AS `periode`,`mutasi_warga`.`keterangan` AS `keterangan` from (`mutasi_warga` join `warga` on((`warga`.`no_ktp` = `mutasi_warga`.`id_warga`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
