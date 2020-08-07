CREATE DATABASE IF NOT EXISTS `test` ;

CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `fio` varchar(32) NOT NULL
) ENGINE=InnoDB;


