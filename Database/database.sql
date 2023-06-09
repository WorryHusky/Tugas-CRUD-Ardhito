/* Create Database and Table */
create database crud_db;
 
use crud_db;
 
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `user` varchar(100),
  `password` varchar(100),
  `img` varchar(100),
  PRIMARY KEY  (`id`)
);