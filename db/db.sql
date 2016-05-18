CREATE TABLE IF NOT EXISTS `gallery` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(1000),
  `description` VARCHAR(1000),
  `image_url` VARCHAR(1000),
  `outer_id` VARCHAR(1000)
);

CREATE TABLE IF NOT EXISTS `image` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `gallery_id` INT,
  `outer_id` VARCHAR(1000),
  `image_url` VARCHAR (5000),
  `description` VARCHAR (1000),
  `create_date` INT
);

CREATE TABLE IF NOT EXISTS `user` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `outer_id` VARCHAR(1000),
  `name` VARCHAR(1000)
);

CREATE TABLE IF NOT EXISTS `user_favorite_image` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `user_id` INT,
  `image_id` INT,
  `create_date` INT
);

CREATE TABLE IF NOT EXISTS `user_view_image` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `user_id` INT,
  `image_id` INT,
  `create_date` INT
);
