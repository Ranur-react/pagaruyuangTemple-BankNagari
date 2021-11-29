/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.11-MariaDB : Database - db_banknagari
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_banknagari` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_banknagari`;

/*Data for the table `tb_config` */

insert  into `tb_config`(`options`,`value`,`no`,`key`) values ('denc_key','WmZq4t7w!z%C*F-J',2,NULL),('cctv_in','192.168.137.61',3,'02'),('cctv_in','192.168.137.62',4,'01'),('board','192.168.137.102',5,'01'),('board','192.168.137.101',6,'02'),('cctv_out','192.168.137.63',7,'02'),('cctv_out','192.168.137.64',8,'01'),('tablet','192.168.1.251',9,'01'),('tablet','192.168.1.250',10,'02'),('apikey5','BIM%B4nd4r4111111==',11,NULL),('board','192.168.137.103',12,'03'),('board','192.168.137.104',13,'04'),('apikey4','BN MDAwNg==',14,NULL),('apikey','MDAwNg==',15,NULL),('power','false',16,NULL);

/*Data for the table `tb_daftar_gate` */

insert  into `tb_daftar_gate`(`id`,`nama_gate`,`lokasi`,`biaya`) values ('01','ENTRY PARKIR MOBIL','ENTRY',0),('02','ENTRY PARKIR MOTOR','ENTRY',0),('03','EXIT PARKIR MOBIL','EXIT',NULL),('04','EXIT PARKIR MOTOR','EXIT',NULL),('05','TOUR ENTRY A','LOKET',NULL),('06','TOUR EXIT B','LOKET',NULL);

/*Data for the table `tb_level_kendaraan` */

insert  into `tb_level_kendaraan`(`id_level`,`nama`,`harga`,`tanggal_ubah`,`admin`,`id_gate`) values ('roda2','Kendaraan Roda 2',3000,'2021-05-08','admin','02'),('roda4','Kendaraan Roda 4',5000,'2021-05-08','admin','01'),('roda6','Kendaraan Roda 6 Lebih',7000,'2021-05-08','admin','01');

/*Data for the table `tb_level_tiket` */

insert  into `tb_level_tiket`(`id_level`,`nama_level`,`tarif_level`) values ('0001','Dewasa',NULL),('0002','Anak-Anak',NULL),('0003','Touris Asing ',NULL);

/*Data for the table `user` */

insert  into `user`(`id_user`,`kode_user`,`email`,`password`,`level_user`,`status_user`,`created_at`) values (1,0,'admin@admin.com','202cb962ac59075b964b07152d234b70','1','0','2020-03-17 05:49:32'),(2,2,'Kasir','202cb962ac59075b964b07152d234b70','2','0','2021-05-04 18:10:53'),(3,1,'pimpinan','202cb962ac59075b964b07152d234b70','3','0','2021-05-04 18:10:59'),(4,0,'admin','202cb962ac59075b964b07152d234b70','1','0','2021-05-04 15:25:47');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
