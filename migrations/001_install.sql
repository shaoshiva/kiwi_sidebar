CREATE TABLE IF NOT EXISTS `kiwi_sidebar` (
  `side_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `side_created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `side_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `side_title` varchar(255) NOT NULL,
  PRIMARY KEY (`side_id`),
  KEY `side_created_at` (`side_created_at`),
  KEY `side_updated_at` (`side_updated_at`)
) DEFAULT CHARSET=utf8 ;

CREATE TABLE IF NOT EXISTS `kiwi_sidebar_bloc` (
  `sibl_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sibl_title` varchar(100) NOT NULL,
  `sibl_side_id` int(11) unsigned NOT NULL,
  `sibl_created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sibl_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sibl_id`),
  KEY `sibl_created_at` (`sibl_created_at`),
  KEY `sibl_updated_at` (`sibl_updated_at`),
  KEY `sibl_side_id` (`sibl_side_id`)
) DEFAULT CHARSET=utf8 ;
