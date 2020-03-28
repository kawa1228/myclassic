-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'products'
-- 作品
-- ---

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `name` MEDIUMTEXT NULL DEFAULT NULL,
  `name_origin` MEDIUMTEXT NULL DEFAULT NULL,
  `nick_name` MEDIUMTEXT NULL DEFAULT NULL,
  `catalogue` MEDIUMTEXT NULL DEFAULT NULL COMMENT '主題目録',
  `recorded_year` INTEGER NULL DEFAULT NULL COMMENT '収録時期',
  `description` MEDIUMTEXT NULL DEFAULT NULL,
  `period_id` INTEGER NULL DEFAULT NULL COMMENT '時代id',
  `composer_id` INTEGER NULL DEFAULT NULL COMMENT '作曲家id',
  `form_id` INTEGER NULL DEFAULT NULL COMMENT '楽式id',
  `genre_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT '作品';

-- ---
-- Table 'periods'
-- 時代
-- ---

DROP TABLE IF EXISTS `periods`;

CREATE TABLE `periods` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `name` MEDIUMTEXT NULL DEFAULT NULL,
  `begin_min` INTEGER NULL DEFAULT NULL,
  `begin_max` INTEGER NULL DEFAULT NULL,
  `end_min` INTEGER NULL DEFAULT NULL,
  `end_max` INTEGER NULL DEFAULT NULL,
  `description` MEDIUMTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT '時代';

-- ---
-- Table 'composers'
-- 作曲家
-- ---

DROP TABLE IF EXISTS `composers`;

CREATE TABLE `composers` (
  `id` INTEGER NULL DEFAULT NULL,
  `name` MEDIUMTEXT NULL DEFAULT NULL COMMENT '作曲家名',
  `name_jp` MEDIUMTEXT NULL DEFAULT NULL COMMENT '作曲家名_日本語',
  `name_origin` MEDIUMTEXT NULL DEFAULT NULL COMMENT '作曲家名_現地語',
  `birth_year` INTEGER NULL DEFAULT NULL,
  `death_year` INTEGER NULL DEFAULT NULL,
  `icon_url` MEDIUMTEXT NULL DEFAULT NULL,
  `home_city` MEDIUMTEXT NULL DEFAULT NULL COMMENT '活躍した都市',
  `description` MEDIUMTEXT NULL DEFAULT NULL,
  `country_id` INTEGER NULL DEFAULT NULL,
  `period_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT '作曲家';

-- ---
-- Table 'forms'
-- 楽式
-- ---

DROP TABLE IF EXISTS `forms`;

CREATE TABLE `forms` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `name` MEDIUMTEXT NULL DEFAULT NULL,
  `description` MEDIUMTEXT NULL DEFAULT NULL,
  `name_origin` MEDIUMTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT '楽式';

-- ---
-- Table 'genres'
-- ジャンル
-- ---

DROP TABLE IF EXISTS `genres`;

CREATE TABLE `genres` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `name` MEDIUMTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT 'ジャンル';

-- ---
-- Table 'countries'
-- 国
-- ---

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `iso_code` MEDIUMTEXT NULL DEFAULT NULL,
  `name` MEDIUMTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT '国';

-- ---
-- Foreign Keys
-- ---

ALTER TABLE `products` ADD FOREIGN KEY (composer_id) REFERENCES `composers` (`id`);
ALTER TABLE `products` ADD FOREIGN KEY (form_id) REFERENCES `forms` (`id`);
ALTER TABLE `products` ADD FOREIGN KEY (genre_id) REFERENCES `genres` (`id`);
ALTER TABLE `composers` ADD FOREIGN KEY (country_id) REFERENCES `countries` (`id`);
ALTER TABLE `composers` ADD FOREIGN KEY (period_id) REFERENCES `periods` (`id`);

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `products` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `periods` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `composers` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `forms` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `genres` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `countries` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `products` (`id`,`name`,`name_origin`,`nick_name`,`catalogue`,`recorded_year`,`description`,`period_id`,`composer_id`,`form_id`,`genre_id`) VALUES
-- ('','','','','','','','','','','');
-- INSERT INTO `periods` (`id`,`name`,`begin_min`,`begin_max`,`end_min`,`end_max`,`description`) VALUES
-- ('','','','','','','');
-- INSERT INTO `composers` (`id`,`name`,`name_jp`,`name_origin`,`birth_year`,`death_year`,`icon_url`,`home_city`,`description`,`country_id`,`period_id`) VALUES
-- ('','','','','','','','','','','');
-- INSERT INTO `forms` (`id`,`name`,`description`,`name_origin`) VALUES
-- ('','','','');
-- INSERT INTO `genres` (`id`,`name`) VALUES
-- ('','');
-- INSERT INTO `countries` (`id`,`iso_code`,`name`) VALUES
-- ('','','');-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'products'
-- 作品
-- ---

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `name` MEDIUMTEXT NULL DEFAULT NULL,
  `name_origin` MEDIUMTEXT NULL DEFAULT NULL,
  `nick_name` MEDIUMTEXT NULL DEFAULT NULL,
  `catalogue` MEDIUMTEXT NULL DEFAULT NULL COMMENT '主題目録',
  `recorded_year` INTEGER NULL DEFAULT NULL COMMENT '収録時期',
  `description` MEDIUMTEXT NULL DEFAULT NULL,
  `period_id` INTEGER NULL DEFAULT NULL COMMENT '時代id',
  `composer_id` INTEGER NULL DEFAULT NULL COMMENT '作曲家id',
  `form_id` INTEGER NULL DEFAULT NULL COMMENT '楽式id',
  `genre_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT '作品';

-- ---
-- Table 'periods'
-- 時代
-- ---

DROP TABLE IF EXISTS `periods`;

CREATE TABLE `periods` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `name` MEDIUMTEXT NULL DEFAULT NULL,
  `begin_min` INTEGER NULL DEFAULT NULL,
  `begin_max` INTEGER NULL DEFAULT NULL,
  `end_min` INTEGER NULL DEFAULT NULL,
  `end_max` INTEGER NULL DEFAULT NULL,
  `description` MEDIUMTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT '時代';

-- ---
-- Table 'composers'
-- 作曲家
-- ---

DROP TABLE IF EXISTS `composers`;

CREATE TABLE `composers` (
  `id` INTEGER NULL DEFAULT NULL,
  `name` MEDIUMTEXT NULL DEFAULT NULL COMMENT '作曲家名',
  `name_jp` MEDIUMTEXT NULL DEFAULT NULL COMMENT '作曲家名_日本語',
  `name_origin` MEDIUMTEXT NULL DEFAULT NULL COMMENT '作曲家名_現地語',
  `birth_year` INTEGER NULL DEFAULT NULL,
  `death_year` INTEGER NULL DEFAULT NULL,
  `icon_url` MEDIUMTEXT NULL DEFAULT NULL,
  `home_city` MEDIUMTEXT NULL DEFAULT NULL COMMENT '活躍した都市',
  `description` MEDIUMTEXT NULL DEFAULT NULL,
  `country_id` INTEGER NULL DEFAULT NULL,
  `period_id` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT '作曲家';

-- ---
-- Table 'forms'
-- 楽式
-- ---

DROP TABLE IF EXISTS `forms`;

CREATE TABLE `forms` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `name` MEDIUMTEXT NULL DEFAULT NULL,
  `description` MEDIUMTEXT NULL DEFAULT NULL,
  `name_origin` MEDIUMTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT '楽式';

-- ---
-- Table 'genres'
-- ジャンル
-- ---

DROP TABLE IF EXISTS `genres`;

CREATE TABLE `genres` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `name` MEDIUMTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT 'ジャンル';

-- ---
-- Table 'countries'
-- 国
-- ---

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `iso_code` MEDIUMTEXT NULL DEFAULT NULL,
  `name` MEDIUMTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT '国';

-- ---
-- Foreign Keys
-- ---

ALTER TABLE `products` ADD FOREIGN KEY (composer_id) REFERENCES `composers` (`id`);
ALTER TABLE `products` ADD FOREIGN KEY (form_id) REFERENCES `forms` (`id`);
ALTER TABLE `products` ADD FOREIGN KEY (genre_id) REFERENCES `genres` (`id`);
ALTER TABLE `composers` ADD FOREIGN KEY (country_id) REFERENCES `countries` (`id`);
ALTER TABLE `composers` ADD FOREIGN KEY (period_id) REFERENCES `periods` (`id`);

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `products` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `periods` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `composers` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `forms` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `genres` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `countries` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `products` (`id`,`name`,`name_origin`,`nick_name`,`catalogue`,`recorded_year`,`description`,`period_id`,`composer_id`,`form_id`,`genre_id`) VALUES
-- ('','','','','','','','','','','');
-- INSERT INTO `periods` (`id`,`name`,`begin_min`,`begin_max`,`end_min`,`end_max`,`description`) VALUES
-- ('','','','','','','');
-- INSERT INTO `composers` (`id`,`name`,`name_jp`,`name_origin`,`birth_year`,`death_year`,`icon_url`,`home_city`,`description`,`country_id`,`period_id`) VALUES
-- ('','','','','','','','','','','');
-- INSERT INTO `forms` (`id`,`name`,`description`,`name_origin`) VALUES
-- ('','','','');
-- INSERT INTO `genres` (`id`,`name`) VALUES
-- ('','');
-- INSERT INTO `countries` (`id`,`iso_code`,`name`) VALUES
-- ('','','');
