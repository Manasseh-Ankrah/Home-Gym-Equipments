<?php

$host = "localhost";
$username  = "root";
$passwd = "";
$dbname = "home_gym_equipment";

$conn = mysqli_connect($host, $username, $passwd, $dbname);


if (!$conn) {
    print("Connection Failed ");
}


// new

// CREATE TABLE `users` ( `id` int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,`firstname` varchar(50) NOT NULL,`lastname` varchar(50) NOT NULL, `user_name` varchar(55) NOT NULL, `email` varchar(255) NOT NULL, `phonenumber` int(20) NOT NULL, `password` varchar(12) NOT NULL, `display_name` varchar(55) NOT NULL );
// INSERT INTO `users` (`id`,`firstname`,`lastname`, `user_name`,`email`,`phonenumber`,`password`, `display_name`) VALUES (1,'Manasseh','Ankrah','Man90','man@gmail.com',0253665, 'admin', 'admin');

// CREATE TABLE `users` ( `id` int(8) NOT NULL AUTO_INCREMENT,`firstname` varchar(50) NOT NULL,`lastname` varchar(50) NOT NULL, `user_name` varchar(55) NOT NULL, `email` varchar(255) NOT NULL, `phonenumber` int(20) NOT NULL, `password` varchar(12) NOT NULL, `display_name` varchar(55) NOT NULL );
// INSERT INTO `users` (`id`, `user_name`, `password`, `display_name`) VALUES (1, 'admin', 'admin', 'Admin')