CREATE TABLE IF NOT EXISTS `result` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(50) NOT NULL,
`regno` varchar(50) NOT NULL,
`subject1` int(10) NOT NULL,
`subject2` int(10) NOT NULL,
`subject3` int(10) NOT NULL,
`cgpa` float(3,1) NOT NULL,
`trn_date` datetime NOT NULL,
PRIMARY KEY (`id`)
);