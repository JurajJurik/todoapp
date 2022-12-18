-- Adminer 4.8.1 MySQL 5.7.24 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `items` (`id`, `text`, `created_at`) VALUES
(1,	'Check emails!\r\n',	'2022-06-14 19:25:09'),
(2,	'Go to post office and send a letter to your friend!',	'2022-06-14 19:25:42'),
(3,	'Buy flowers for your wife!',	'2022-06-14 19:26:19');

-- 2022-06-14 19:40:08
