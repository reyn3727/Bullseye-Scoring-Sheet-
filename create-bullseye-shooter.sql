CREATE TABLE `bullseye_shooter` (
  `shooter_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(20) DEFAULT NULL,
  `phone` char(12) DEFAULT NULL,
  `e_mail` char(50) DEFAULT NULL,
  `fee` decimal(5,2) DEFAULT NULL,
  `paid_type` char(1) DEFAULT NULL,
  `paid_date` date DEFAULT NULL,
  PRIMARY KEY (`shooter_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 
