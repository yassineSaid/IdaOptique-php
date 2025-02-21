SET CHARACTER SET "utf8";

CREATE DATABASE IF NOT EXISTS %db_name% DEFAULT CHARACTER SET "utf8";

CREATE TABLE IF NOT EXISTS %db_name%.mirrormx_customer_chat_user (
    `id` BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `name` CHAR( 32 ) NOT NULL ,
    `mail` CHAR( 64 ) NOT NULL ,
    `password` CHAR( 255 ) NOT NULL ,
    `image` CHAR( 255 ) NULL ,
    `info` TEXT NULL,
    `roles` CHAR( 128 ) NULL ,
    `last_activity` TIMESTAMP NOT NULL DEFAULT 0
) DEFAULT CHARACTER SET "utf8";

CREATE TABLE IF NOT EXISTS %db_name%.mirrormx_customer_chat_message (
    `id` BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `from_id` BIGINT NOT NULL ,
    `to_id` BIGINT NOT NULL ,
    `body` TEXT NOT NULL ,
    `datetime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `talk_id` BIGINT NOT NULL,
    `is_new` CHAR(1) NOT NULL DEFAULT "y",
    `from_user_info` TEXT NOT NULL,
    `to_user_info` TEXT NOT NULL
) DEFAULT CHARACTER SET "utf8";

CREATE TABLE IF NOT EXISTS %db_name%.mirrormx_customer_chat_data (
    `id` BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `type` VARCHAR(255) NOT NULL ,
    `key` VARCHAR(255) NOT NULL ,
    `value` TEXT ,
    KEY `type` (`type`) ,
    KEY `key` (`key`)
) DEFAULT CHARACTER SET "utf8";