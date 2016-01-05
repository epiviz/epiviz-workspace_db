DROP DATABASE IF EXISTS `epiviz`;
CREATE DATABASE `epiviz`
  DEFAULT CHARSET = utf8;

USE `epiviz`;
DROP TABLE IF EXISTS `workspaces_v2`;
CREATE TABLE `workspaces_v2` (
  `id` varchar(32) NOT NULL,
  `id_v1` varchar(32) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT 'Unnamed',
  `content` longtext,
  `version` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `workspaces_v2_to_users_idx` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
