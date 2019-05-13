
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE foods(
  food_id int(10) NOT NULL AUTO_INCREMENT,
  food_name varchar(30),
  price float,
  QtyOnHand int(50),
  image blob
)

INSERT INTO `foods`(`food_Id`, `food_name`, `price`, `QtyOnHand`, `image`) VALUES (null,'general tao',6,50,'img/tao.jpg');
INSERT INTO `foods`(`food_Id`, `food_name`, `price`, `QtyOnHand`, `image`) VALUES (null,'pate chinois',6,50,'img/chinois.jpg');
INSERT INTO `foods`(`food_Id`, `food_name`, `price`, `QtyOnHand`, `image`) VALUES (null,'macaroni',6,50,'img/macaroni.jpg');
INSERT INTO `foods`(`food_Id`, `food_name`, `price`, `QtyOnHand`, `image`) VALUES (null,'hamburger',6,50,'img/hamburger.jpg');
INSERT INTO `foods`(`food_Id`, `food_name`, `price`, `QtyOnHand`, `image`) VALUES (null,'spaghetti',6,50,'img/spaghetti.jpg');
INSERT INTO `foods`(`food_Id`, `food_name`, `price`, `QtyOnHand`, `image`) VALUES (null,'lasagne',6,50,'img/lasagne.jpg');
INSERT INTO `foods`(`food_Id`, `food_name`, `price`, `QtyOnHand`, `image`) VALUES (null,'penne',6,50,'img/penne.jpg');
INSERT INTO `foods`(`food_Id`, `food_name`, `price`, `QtyOnHand`, `image`) VALUES (null,'pizza',6,50,'img/pizza.jpg');
INSERT INTO `foods`(`food_Id`, `food_name`, `price`, `QtyOnHand`, `image`) VALUES (null,'padThai',6,50,'img/padThai.jpg');