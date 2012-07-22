DROP TABLE IF EXISTS `#__psw`;
 
CREATE TABLE `#__psw` (
  `id` int(11) NOT NULL auto_increment,
  `psw` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
);
 
INSERT INTO `#__psw` (`psw`) VALUES ('psw 1'), ('psw 2'), ('psw 3');
