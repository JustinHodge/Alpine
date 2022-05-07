SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `alpinedb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `alpinedb`;

CREATE TABLE `alpine_users` (
    `user_id` int(255) NOT NULL AUTO_INCREMENT,
    `user_firstname` varchar(255) NOT NULL,
    `user_lastname` varchar(255) NOT NULL,
    `user_email` varchar(255) NOT NULL,
    `user_access_level` tinyint(4) NOT NULL,
    PRIMARY KEY (`user_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `alpine_users` (`user_firstname`, `user_lastname`, `user_email`, `user_access_level`)
    VALUES ('Alpine', 'Admin', 'alpine_admin@localhost.com', 127);

COMMIT;
