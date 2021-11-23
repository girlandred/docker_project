CREATE TABLE `recipe` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `recipe_title` varchar(200) DEFAULT NULL,
  `recipe_ingredients` text DEFAULT NULL,
  `recipe_instructions` text DEFAULT NULL,
  `image` VARCHAR(300) NOT NULL,
  `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;