CREATE TABLE `users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `admin` BOOL NOT NULL,
    `username` VARCHAR(256) NOT NULL,
    `password` VARCHAR(256) NOT NULL, 
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`admin`, `username`, `password`) VALUES
(1, 'admin','$2y$10$zqjy7x1t3EGei1dAiM.Mke4/3uFXVMFzqwmQ/u47m8d0KqHJPY8bW');