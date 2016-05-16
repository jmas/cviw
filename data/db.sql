CREATE TABLE IF NOT EXISTS `gallery` (
  `id` INT PRIMARY KEY AUTO_INCREMENT
);

ALTER IGNORE TABLE `gallery`
ADD `name` VARCHAR(1000);

ALTER IGNORE TABLE `gallery`
ADD `description` VARCHAR(1000);

ALTER IGNORE TABLE `gallery`
ADD `image_url` VARCHAR(1000);

CREATE TABLE IF NOT EXISTS `image` (
  `id` INT PRIMARY KEY AUTO_INCREMENT
);

ALTER IGNORE TABLE `image`
ADD `gallery_id` INT;

ALTER IGNORE TABLE `image`
ADD `fb_id` INT;

ALTER IGNORE TABLE `image`
ADD `image_url` VARCHAR (1000);

ALTER IGNORE TABLE `image`
ADD `description` VARCHAR (1000);

ALTER IGNORE TABLE `image`
ADD `create_date` INT;
