DROP TABLE IF EXISTS `#__psw`;
 
CREATE TABLE `#__wykladowca` (
  `id` int(11) NOT NULL auto_increment,
  `immie` varchar(40) NOT NULL,
  `nazwisko` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
);
