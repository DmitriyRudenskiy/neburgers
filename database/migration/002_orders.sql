CREATE TABLE `loftschool`.`orders` ( `id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `name` VARCHAR NOT NULL , `phone` VARCHAR NOT NULL , `street` VARCHAR NOT NULL , `home` VARCHAR NOT NULL , `part` VARCHAR NOT NULL , `appt` VARCHAR NOT NULL , `floor` VARCHAR NOT NULL , `comment` TEXT NOT NULL , `payment` VARCHAR NOT NULL , `callback` VARCHAR NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;