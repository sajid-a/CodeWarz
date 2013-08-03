<?php

include_once"config.php";

mysql_query("
CREATE TABLE IF NOT EXISTS `code` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `level` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
)");

mysql_query("
INSERT INTO `code` (`name`, `email`, `phone`, `level`, `username`, `password`) VALUES
('Sajid', 'a@a.com', '8655156033', 1, 'lol', 'lol123');
");

?>