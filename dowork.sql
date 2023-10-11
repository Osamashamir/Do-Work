/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.28-MariaDB : Database - dowork
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dowork` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `dowork`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `ProfileDetails` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`Username`,`Email`,`Age`,`password`,`ProfileDetails`) values 
(7,'Ali','ali@gmail.com',20,'$2y$10$Jn7Ga9EKlHQWniIJYz0J8uQbXovijz/lCCPtrEqxapGM.dX8e5fWm','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content'),
(8,'usman','usman',31,'$2y$10$yb11FTZMXM2D3m/.jEZd2eihwZhmrwpnqin3p9Hxpu96WBsRI/Aby','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content'),
(9,'Kamran','kamran@gmail.com',24,'1111','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content'),
(10,'waseem','waseem@gmail.com',33,'1122','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content'),
(11,'osama','osama@gmail.com',25,'1122','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content'),
(12,'shamir','shamir@gmail.com',22,'1122','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content'),
(13,'Jameel','jameel@gmail.com',21,'1122','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content'),
(14,'Baber','baber@gmail.com',21,'1122','Web Engineer\r\nFast Uni\r\nBScs computer Science From FAST University.\r\n'),
(15,'sunny','sunny@gmail.com',23,'1122','web developer\r\nMS from FAST University'),
(16,'osama','testing2@gmail.com',23,'password','Frontend developer'),
(17,'Umer','umer@gmail.com',23,'1111','Required\r\nSenior React Developer\r\n2-3 Yr Experience\r\n'),
(18,'Esther','esther@gmail.com',23,'1122','frontent developer'),
(19,'taber','taber@gmail.com',23,'123456','web developer');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
