
CREATE TABLE IF NOT EXISTS `stats` (
	`id` int(32) NOT NULL AUTO_INCREMENT,
	`ip` varchar(64) NOT NULL,
	`time` varchar(32) NOT NULL,
	`date` varchar(32) NOT NULL,
	`name` varchar(64) NOT NULL,
	`stre` varchar(64) NOT NULL,
	`spe` varchar(64) NOT NULL,
	`def` varchar(64) NOT NULL,
	`inte` varchar(64) NOT NULL,
	`rad` varchar(64) NOT NULL,	
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
